<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="nav-item start  {{ Route::current()->getName() == 'home' ? 'active open': ''}} ">
                <a href="{{route('home')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>
            <li class="nav-item  {{ Route::current()->getName() == 'users.index' ? 'active open': ''}}">
                <a href="{{route('users.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Users</span>
                </a>
            </li>

            <li class="nav-item  {{ Route::current()->getName() == 'tasks.index' ? 'active open': ''}}">
                <a href="{{route('tasks.index')}}" class="nav-link nav-toggle">
                    <i class="icon-rocket"></i>
                    <span class="title">Tasks</span>
                </a>
            </li>
                <!-- END SIDEBAR MENU -->
                <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
