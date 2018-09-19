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
                    <div class="col-md-3 col-sm-12">
                        <!-- BEGIN DRAGGABLE EVENTS PORTLET-->
                        <h3 class="event-form-title margin-bottom-20">Draggable Events</h3>
                        <div id="external-events">
                            <form class="inline-form">
                                <input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title">
                                <br>
                                <a href="javascript:;" id="event_add" class="btn green"> Add Event </a>
                            </form>
                            <hr>
                            <div id="event_box" class="margin-bottom-10">

                            </div>
                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline" for="drop-remove"> remove
                                after drop
                                <input type="checkbox" class="group-checkable" id="drop-remove">
                                <span></span>
                            </label>
                            <hr class="visible-xs">
                        </div>
                        <!-- END DRAGGABLE EVENTS PORTLET-->
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div id="calendar" class="has-toolbar fc fc-ltr fc-unthemed">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
