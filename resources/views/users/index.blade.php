@extends('metronic')
@section('title', 'Users')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('home')}}">Main Page</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('users.index')}}">Users</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> Users </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase"> Users Table</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_user">
                            <i class="fa fa-plus">Add User</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="users-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>name</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                        @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('users.edit', $user->id)}}" class="btn dark btn-sm sbold uppercase">
                                    <i class="fa fa-edit"> Edit </i>
                                </a>
                                <button type="submit" class="btn red btn-sm sbold uppercase">
                                    <i class="fa fa-edit">Delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

<!-- BEGIN ADD_user MODEL -->
<div class="modal fade in" id="add_user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control" placeholder="Name" required> </div>

                        <label>Password</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">Add</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_user MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#users-table').DataTable({
            dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                messageTop: 'This print was produced using the Print button for DataTables',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        });
    });

</script>
@endsection
<!-- END SCRIPTS -->
