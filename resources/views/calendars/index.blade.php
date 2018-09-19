@extends('metronic')
@section('title', 'Calendars')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('home')}}">Main Page</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('calendars.index')}}">Calendar</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> Calendar </h3>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered calendar">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Calendar</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div id="calendar" class="has-toolbar fc fc-ltr fc-unthemed">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
