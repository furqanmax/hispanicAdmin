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
                                <h1>Manage Roles And Permission <span class="table-project-n">Data</span> Table</h1>
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
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            @foreach ($roles as $role)
                                                <th>{{ $role->name }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->guard_name }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('role.delete', $role->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                                        class="label bg-red-active"><i class="fa fa-trash  fa-1x"
                                                            style="color: #000"></i> </a> --}}
                                                    {{-- <a href="{{route('category.show',$row->id)}}"><span class="label "><i class="fa fa-eye  fa-1x" style="color: #000"></i>&ensp;</span></a> --}}
                                                </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>

                                <?php $j = 1; ?>
                                @foreach ($roles as $role)
                                    <th>{{ $role->name }}</th>
                                    <br />
                                    @foreach ($permissions as $permission)
                                        <input type="checkbox" id="{{ 'permission' . ++$j }}"
                                            onchange="onChange({{ $permission->id }},{{ $role->id }},{{ $j }})"
                                            @if ($role->hasPermissionTo($permission)) checked @endif>
                                        {{ $permission->name }}
                                    @endforeach
                                    <br>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Static Table End -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function onChange(permission, role, id) {
            var idName = "permission" + id;


            var checkBox = document.getElementById(idName);


            if (checkBox.checked) {
                checked(permission, role)
            } else {
                uncheked(permission, role)

            }


            // //using jQuery
            // if ($('#{idName}').is(':checked')) {
            //     checked(permission,role)
            //     alert('cheked'+$id);

            // } else {
            //     uncheked(permission,role)
            //     alert('unchecked'+$id);
            // }
        }


        function checked(permission, role) {
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "{{ url('/admin/assign/permission') }}" + "/" + permission + "/" + role,
                success: function(data) {
                    //console.log(data);
                    if (data == "S") {
                        alert("Permission assigned successfully")
                        location.reload()
                    } else {
                        alert('Oops.something went wrong');
                    }


                },
                error: function() {
                    console.log(data);
                }
            });
        }

        function uncheked(permission, role) {
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "{{ url('/admin/remove/permission') }}" + "/" + permission + "/" + role,
                success: function(data) {
                    alert("Permission revoked successfully")
                    location.reload()

                },
                error: function() {
                    alert('Oops.something went wrong');
                }
            });
        }
    </script>

@endsection
