@extends('layouts.layout')
@section('content')


<!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                @include('partials.alerts')
                                <div class="main-sparkline13-hd">
                                    <h1>Category <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    {{-- <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div> --}}
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>SR NO</th>
                                                <th>Role Name</th>
                                                <th>Assigned on</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;?>
                                             @foreach($roles as $role)
                                             <tr>
                                              <td>{{$i++}}</td>
                                              <td>{{$role->name}}</td>
                                              <td>{{$role->guard_name}}</td>
                                              <td>
                                                 <a href="{{route('role.delete',$role->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="label bg-red-active"><i class="fa fa-trash  fa-1x" style="color: #000"></i> </a>
                                                 {{-- <a href="{{route('category.show',$row->id)}}"><span class="label "><i class="fa fa-eye  fa-1x" style="color: #000"></i>&ensp;</span></a> --}}
                                              </td>
                                             </tr>

                                            @endforeach
                                           </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->



@endsection
