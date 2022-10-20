@extends('layouts.app')
@section('content')
<style>
  body{
    background: -webkit-linear-gradient(left,  black,white,skyblue);
}
</style>
<div class="modal" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="fname">First Name<span class="text-danger">*</span></label>
              <input type="text" name="fname" class="form-control" placeholder="First Name" required >
              @error('fname')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-lg">
              <label for="lname">Last Name<span class="text-danger">*</span></label>
              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
              @error('lname')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
          </div>
          <div class="my-2">
            <label for="email">E-mail<span class="text-danger">*</span></label>
            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            @error('email')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="my-2">
            <label for="phone">Phone<span class="text-danger">*</span></label>
            <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
            @error('phone')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="my-2">
            <label for="post">City<span class="text-danger">*</span></label>
            <input type="text" name="city" class="form-control" placeholder="city" required>
            @error('city')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="my-2">
            <label for="post">Designation<span class="text-danger">*</span></label>
            <input type="text" name="designation" class="form-control" placeholder="designation" required>
            @error('designation')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="my-2">
            <label for="image">Select Image<span class="text-danger">*</span></label>
            <input type="file" name="image" accept="image/*" class="form-control" required>
            @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Add User</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="fname">First Name<span class="text-danger">*</span></label>
              <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="lname">Last Name<span class="text-danger">*</span></label>
              <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
            </div>
          </div>
          <div class="my-2">
            <label for="email">E-mail<span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="my-2">
            <label for="phone">Phone<span class="text-danger">*</span></label>
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
          </div>
          <div class="my-2">
            <label for="post">City<span class="text-danger">*</span></label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City" required>
          </div>
          <div class="my-2">
            <label for="post">Designation<span class="text-danger">*</span></label>
            <input type="text" name="designation" id="designation" class="form-control" placeholder="Enter designation" required>
          </div>
          
          <div class="my-2">
            <label for="image">Select image<span class="text-danger">*</span></label>
            <input type="file" name="image" accept="image/*" class="form-control">
          </div>
             <div class="mt-2" id="image">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit employee modal end --}}

<body class="bg-light">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-gray d-flex justify-content-between align-items-center">
                
          <h3 class="text-dark">Manage User</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Add New User</button>
          </div>
          <div class="card-body" id="show_all_employees">
            <h1 class="text-center text-secondary my-5">Loading...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <script>
  $(document).ready(function() {
    if ($("#add_employee_form").length > 0) {
            $("#add_employee_form").validate({
                rules: {
                    fname: {
                        required: true,
                        maxlength: 20,
                    },
                    lname:{
                        required: true,
                        maxlength: 20,
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 50
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    city: {
                        required: true,
                        maxlength: 40
                    },
                    image: {
                        required: true,
                        accept: "jpg|jpeg|png|ico|bmp"
                    },
                   
                },
                messages: {
                    fname: {
                        required: "First name is required",
                        maxlength: "First name cannot be more than 20 characters"
                    },
                    lname: {
                        required: "Last name is required",
                        maxlength: "Last name cannot be more than 20 characters"
                    },
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    phone: {
                        required: "Phone number is required",
                        minlength: "Phone number must be of 10 digits"
                    },
                    city: {
                        required: "City is required",
                        maxlength: "City cannot be more than 40 characters"
                    },
                    image: {
                        required: "Image is required",
                        extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)."
                    },
                },
                submitHandler: function(form) {
                form.submit();
            }
            })
          } 
        });
    </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {
      // add new employee ajax request
      $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
          url:"{{route('store')}}",
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'User Added Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#add_employee_btn").text('Add User');
            $("#add_employee_form")[0].reset();
            $("#addEmployeeModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url:"{{route('edit')}}",
          method: "get",
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#fname").val(response.fname);
            $("#lname").val(response.lname);
            $("#email").val(response.email);
            $("#phone").val(response.phone);
            $("#city").val(response.city);
            $("#designation").val(response.designation);
            $("#image").html(
              `<img src="storage/images/${response.image}" width="100" class="img-fluid img-thumbnail">`);
            $("#emp_id").val(response.id);
            $("#emp_avatar").val(response.image);
          }
        });
      });
     
      // update employee ajax request
      $("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url:"{{route('update')}}",
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'User Updated Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Update User');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete')}}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });
      fetchAllEmployees();
      function fetchAllEmployees() {
        $.ajax({
          url: '{{ route('fetchAll') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_employees").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>
@endsection
