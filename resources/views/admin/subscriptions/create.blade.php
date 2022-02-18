@extends('layouts.layout')
@section('content')
    <div class="row">
        @include('partials.alerts')
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>All Form Element</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <form method="POST" action="{{ route('subscription.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Title In English</p>
                                                    <input type="text" class="form-control" name="title_en" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Title In Spanish</p>
                                                    <input type="text" class="form-control" name="title_sp" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Credit</p>
                                                    <input type="number" class="form-control" name="credits" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Monthly Price</p>
                                                    <input type="number" class="form-control" name="monthly_price" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Yearly Price</p>
                                                    <input type="number" class="form-control" name="yearly_price" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tinymce-area mg-b-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                                                        <div class="tinymce-single responsive-mg-b-30">
                                                            <div class="alert-title">
                                                                <p>Description In English</p>
                                                            </div>
                                                            <textarea id="summernote1" name="description_en">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tinymce-area mg-b-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                                                        <div class="tinymce-single responsive-mg-b-30">
                                                            <div class="alert-title" >
                                                                <p>Decription In Spanish</p>
                                                            </div>
                                                            <textarea id="summernote2" name="description_sp">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

                                            <button class="btn btn-sm btn-primary login-submit-cs"
                                                type="submit">Submit</button>
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
@endsection
