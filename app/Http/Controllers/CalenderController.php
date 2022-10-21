<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Models\event;
use Auth;
class CalenderController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()) {
            $events = event::where('user_id',Auth::user()->id)->whereDate('start_date', '>=', $request->start)->whereDate('end_date', '<=', $request->end)->get(['id', 'title', 'start_date', 'end_date']);
            return response()->json($events);
        }
        
        return view('Calendar');
    }
    

    public function ajax(Request $request) {
        switch ($request->type) {
            case 'add':
                $event = event::create([
                    'title' => $request->title,
                    'start_date' => $request->start,
                    'end_date' => $request->end,
                    'user_id' => Auth::user()->id,
                ]);
                return response()->json($event);
                break;
            case 'update':
                $event = event::find($request->id)->update([
                    'title' => $request->title,
                    'start_date' => $request->start,
                    'end_date' => $request->end,
                    'user_id' => Auth::user()->id,
                ]);
                return response()->json($event);
                break;
            case 'delete':
                $event = event::find($request->id)->delete();
                return response()->json($event);
                break;
           default:
               break;
        }
    }
}