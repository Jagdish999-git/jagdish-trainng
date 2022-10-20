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
                            <img src="{{  asset('images/'.$adminData->image) }}"  heoght="20px" width="20px"  alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="image"/>
                                  @if(isset($adminData) && !empty($adminData->image))
                                    <a class="link-success" href="{{asset('/images/'.$adminData->image)}}">View</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
               
                    <div class="col-md-4">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                         <input type="hidden" name="hidden_id" id="hidden_id" />
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>User Name</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <input type="text" class="form-control"  placeholder="Enter user name" style="  border-color: black; border-width: 0 0 2px; outline: 0; " id ="name" name="name" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="email" class="form-control"   placeholder="Enter youe email" style="  border-color: black; border-width: 0 0 2px; outline: 0; " id ="email" value="{{Auth::user()->email}}" name="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Contact</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="tel" class="form-control"  placeholder="Enter phone no" style="  border-color: black; border-width: 0 0 2px; outline: 0; " min="10" max="10"  id ="phone" value="{{Auth::user()->phone}}" name="phone">
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-5">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control"   placeholder="Enter your city"  style="  border-color: black; border-width: 0 0 2px; outline: 0; "  id ="city" value="{{Auth::user()->city}}" name="city">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <input type="text" class="form-control"  placeholder="Enter profession" style="  border-color: black; border-width: 0 0 2px; outline: 0; " id ="designation" value="{{Auth::user()->designation}}" name="designation">
                                            </div>
                                        </div>
                                         <button class="btn btn-primary" type="submit">Update Profile</button>
                                         </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        
@endsection
