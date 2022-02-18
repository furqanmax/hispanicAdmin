@extends('layouts.layout')
@section('content')




<!-- Basic Form Start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @include('partials.alerts')
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Update User</h1>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        {{$errors}}
                                        @foreach ($errors as $error)
                                            {{$error}}
                                        @endforeach
                                        @include('partials.alerts')
                                        <form method="POST" action="{{route('administrative.user.update',$user->id)}}" enctype="multipart/form-data">
                                            @csrf
                                         <div class="form-group-inner">
                                                <div class="row">

                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><p>Name</p>
                                                        <input type="text" name="name" class="form-control" value="{{$user->name}}"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">

                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><p>Email</p>
                                                        <input type="text" name="email" class="form-control" value="{{$user->email}}" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group-inner">
                                                <div class="row">



                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><p>Add Role</p>
                                                        <select name="role" id="role">
                                                            @foreach ($roles as $role)

                                                            @if ($role->id==$user->roles->first()->id)
                                                            <option value="{{$role->name}}" selected>{{$role->name}}</option>
                                                            @else
                                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                                            @endif

                                                            @endforeach

                                                          </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><p>Password</p>
                                                        <input type="password" name="password" class="form-control" placeholder="enter user password" />
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="form-group-inner">
                                                <div class="row">

                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><p>Confirm password</p>
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="confirm user password" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left form-bc-ele">

                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic Form End-->
@endsection

