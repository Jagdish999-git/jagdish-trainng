<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\usersModel;
use PDF;

class userController extends Controller
{
    public function index(){
        return view('userdata.home');
    }
    
    public function fetchAll() {
        $emps = usersModel::all();
        $output = '';
        if ($emps->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
            <tr>
                <th>ID</th>
                <th>Logo</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>City</th>
                <th>Phone no</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>';
            foreach ($emps as $emp) {
                $output .= '<tr>
                <td>' . $emp->id . '</td>
                <td><img src="storage/images/' . $emp->image . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $emp->fname . ' ' . $emp->lname . '</td>
                <td>' . $emp->email . '</td>
                <td>' . $emp->city . '</td>
                <td>' . $emp->phone . '</td>
                <td>' . $emp->designation . '</td>
                <td>
                <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
            </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        }else {
             echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }   

// handle insert a new employee ajax request
    public function store(Request $request) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);
        $empData = ['fname' => ucfirst($request->fname), 'lname' => ucfirst($request->lname), 'email' => lcfirst($request->email), 'phone' => $request->phone, 'city' => ucfirst($request->city), 'designation' => ucfirst($request->designation),'image' => $fileName];
        usersModel::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }
// handle edit an employee ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $emp = usersModel::find($id);
        return response()->json($emp);
    }

// handle update an employee ajax request
    public function update(Request $request) {
        $fileName = '';
        $emp = usersModel::find($request->emp_id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->image) {
                Storage::delete('public/images/' . $emp->image);
            }
        } else {
            $fileName = $request->emp_avatar;
        }
        $empData = ['fname' => ucfirst($request->fname), 'lname' => ucfirst($request->lname), 'email' => lcfirst($request->email), 'phone' => $request->phone, 'city' => ucfirst($request->city),'designation' => ucfirst($request->designation), 'image' => $fileName];
        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }
// handle delete an usersModel ajax request
    public function delete(Request $request) {
        $id = $request->id;
        $emp = usersModel::find($id);
        if (Storage::delete('public/images/' . $emp->image)) {
            usersModel::destroy($id);
        }
    }
}
