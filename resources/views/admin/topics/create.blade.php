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
                                    <form method="POST" action="{{route('topic.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Title In English</p>
                                                    <input type="text" class="form-control" name="title_en"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <p>Title In Spanish</p>
                                                    <input type="text" class="form-control"  name="title_sp" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sparkline10-graph">
                                            <div class="input-knob-dial-wrap">
                                                <div class="row">

                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                        <div class="chosen-select-single mg-b-20">
                                                            <p>Select</p>
                                                            <select data-placeholder="Choose a Category..."
                                                                class="chosen-select" tabindex="-1" name="parent_id">
                                                                @foreach(@App\Topic::all() as $row)
                                                                <option value="{{$row->id}}">{{$row->title_en}}</option>
                                                                @endforeach

                                                            </select>
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
