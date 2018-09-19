@extends('metronic')


@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{route('home')}}">Main Page</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>

    </div>
    <!-- title -->
    <h3 class="page-title"> Dashboard
        <small>Statistics &amp; Dashboard</small>
    </h3>
    <!-- Counter -->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1349">1349</span>
                    </div>
                    <div class="desc"> Tasks</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="12,5">12,5</span>
                    </div>
                    <div class="desc"> Users</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="549">549</span>
                    </div>
                    <div class="desc"> Done</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="89">89</span>%
                    </div>
                    <div class="desc"> In Progress</div>
                </div>
            </a>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('vendor/js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/jquery.counterup.min.js') }}" type="text/javascript"></script>

@endsection

