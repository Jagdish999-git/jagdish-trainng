@extends('layouts.app')
@section('content')
<style>
  body{
    background: -webkit-linear-gradient(left,  black,white,skyblue);
}

    .emp-profile{
        padding: 5%;
        margin-top: 7%;
        margin-bottom: 5%;
        border-radius: 1rem;
        background: #fff;
    }
    .container {
    /* Add shadows to create the "card" effect */
    transition: 0.3s;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 50%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid black;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: Black;
    }
</style>
<div class="container emp-profile">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
       @php
        $adminData = Auth::user();
        @endphp
 @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            
                            @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(session()->get('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success: </strong>{{session()->get('message')}}
                        </div>
                        @endif
                <div class="row">
                    <div class="col-md-2">
                    <form action="{{url('profile.profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-img">
                        <input type="hidden" name="image" id="emp_avatar" value="{{asset('images/'.$adminData->image)}}">
                        @if(Auth::user()->image)
                            <img src="{{  asset('images/'.$adminData->image) }}"  heoght="20px" width="30px"  alt=""/>
                            @else
                           <p> No profile</p>
                           @endif
                            <div class="file btn btn-lg btn-primary">
                                  @if(isset($adminData) && !empty($adminData->image))
                                    <a class="link-success" href="{{asset('/images/'.$adminData->image)}}">View</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="profile-head">
                                    <h3 style="color:black;">
                                    {{Auth::user()->name}}
                                    </h3>
                                     <h6>
                                         {{Auth::user()->city}}
                                    </h6>
                                    <h6>
                                         {{Auth::user()->designation}}
                                    </h6>
                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                 
                                <li class="nav-item">
                                    <button type="button" class="nav-link " data-toggle="modal" data-target="#exampleModal">
                                        Edit profile
                                    </button>
                                </li>
                                 <li class="nav-item">
                                    <button type="button" style="color:skyblue;" class="nav-link " data-toggle="modal" data-target="#myModalHorizontal">
                                       Password change
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="profile-work">
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, Laravel</a><br/>
                        </div>
                    </div>
                    <div class="col-md-4">
                    
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                         <input type="hidden" name="hidden_id" id="hidden_id" />
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>User Name:-</label>
                                            </div>
                                            <div class="col-md-7">
                                                  <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Email:-</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Contact:-</label>
                                            </div>
                                            <div class="col-md-7">
                                                  <p>{{Auth::user()->phone}}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-5">
                                                <label>City:-</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>{{Auth::user()->city}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Profession:-</label>
                                            </div>
                                            <div class="col-md-7">
                                            <p>{{Auth::user()->designation}}</p>
                                            </div>
                                        </div>
                                         
                                         </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('profileupdate') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                      <label>Profile pic</label>
                      <input type="hidden" name="image" value="{{ $adminData->image }}" />
                      <input type="file" name="image" value="{{ $adminData->image }}"/>
                        @if($adminData->image)
                            <img id="original" src="{{ asset('images/'.$adminData->image) }}" height="70" width="70">
                        @endif
                    </div>
                    <div class="form-group">
                      <label>User name</label>
                      <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}"  placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" name="phone" class="form-control" value="{{Auth::user()->phone}}"  placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label>city</label>
                        <input type="text" name="city" class="form-control" value="{{Auth::user()->city}}"  placeholder="Enter city">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{Auth::user()->designation}}"  placeholder="Enter designation">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header" style="background: -webkit-linear-gradient(left,  black,white,skyblue)">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-android-close"></span></button>
            <h4 class="modal-title" id="myModalLabel" style="color: black;">Change password</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>            <!-- Modal Body -->
        <div class="modal-body">
            <form action="{{ route('changePassword') }}" method="POST">
                        @csrf
                        <div class="card-body">
                       
                         
                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="current-password" type="password" class="form-control @error('current-password') is-invalid @enderror" id="current-password"
                                    placeholder="Old Password" required>
                                   @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span> 
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new-password" type="password" class="form-control @error('new-password') is-invalid @enderror" id="new-password"
                                    placeholder="New Password" required>
                                  @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new-password_confirmation" type="password" class="form-control" id="new-password_confirmation"
                                    placeholder="Confirm New Password" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit"class="btn btn-success">Save password</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
 

    <div class="container">
       

        @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>

            </div>
        @endif
    </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
