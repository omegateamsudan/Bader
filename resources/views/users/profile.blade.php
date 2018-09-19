@extends('metronic')
@section('title', 'Profile')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('home')}}">Main Page</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('profiles.edit', Auth::user()->id)}}">Profile</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET -->
                <div class="portlet light ">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Profile</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Personal Info </a>
                            </li>
                            <li class="">
                                <a href="#tab_1_2" data-toggle="tab" aria-expanded="false"> Change Password </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <!--BEGIN TABS-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <form action="#" method="POST">
                                    @csrf {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}"> </div>

                                    </div>
                                    <div class="margin-top-10">
                                        <button type="submit" class="btn green">Save Changes </button>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane" id="tab_1_2">

                                <div class="form-group">
                                    <form action="#" method="POST">
                                        @csrf {{ method_field('PUT') }}
                                        <label>New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control" placeholder="New Password">
                                        </div>
                                        <label>Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green"> Change Password </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
                <!-- END PORTLET -->
            </div>
        </div>
    </div>


@endsection

