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
                            <h1>Add Role</h1>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        {{$errors}}
                                        <form method="POST" action="{{route('role.store')}}" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group-inner">
                                                <div class="row">

                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><p>Role name</p>
                                                        <input type="text" name="role" class="form-control" placeholder="enter role name.." />
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

                                                               <input type="submit" value="Add role">                                                            </div>
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

