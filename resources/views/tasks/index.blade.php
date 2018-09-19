@extends('metronic')
@section('title', 'Tasks')
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
            <a href="{{route('tasks.index')}}">Tasks</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> Tasks </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase"> Tasks Table</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_task">
                            <i class="fa fa-plus">Add Task</i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="tasks-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>Subject</th>
                        <th>Organization</th>
                        <th>Status</th>
                        <th>Status Description</th>
                        <th>Next Step</th>
                        <th>Value</th>
                        <th>Comment</th>
                        <th>Publisher</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->subject}}</td>
                        <td>{{$task->organization}}</td>
                        <td>
                            @if($task->status == 0)
                            <span class="label label-sm label-danger"> Stop </span>
                            @endif
                            @if($task->status == 1)
                            <span class="label label-sm label-warning"> In Progresss </span>
                            @endif
                            @if($task->status == 2)
                            <span class="label label-sm label-success"> Done </span>
                            @endif
                        </td>
                        <td>{{$task->status_description}}</td>
                        <td>{{$task->next_step}}</td>
                        <td>{{$task->value}}</td>
                        <td>{{$task->comment}}</td>
                        <td></td>
                        <td>
                            <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('tasks.show', $task->id)}}" class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-share"> Show </i>
                                </a>
                                <a href="{{route('tasks.edit', $task->id)}}" class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> Edit </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
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

<!-- BEGIN add_task MODEL -->
<div class="modal fade in" id="add_task">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Task</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Organization</label>
                        <input type="text" name="organization" class="form-control" placeholder="Organization" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="0">Stop</option>
                            <option value="1">In Progress</option>
                            <option value="2">Done</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status Description</label>
                        <input type="text" name="status_description" class="form-control" placeholder="Status Description"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Next Step</label>
                        <input type="text" name="next_step" class="form-control" placeholder="Next Step" required>
                    </div>
                    <div class="form-group">
                        <label>Value</label>
                        <input type="number" name="value" class="form-control" placeholder="0" required>
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea type="text" name="comment" class="form-control" placeholder="Comment" required>
                        </textarea>
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
<!-- BEGIN add_task MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#tasks-table').DataTable({
            dom: 'Bfrtip',
            buttons: [{
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
