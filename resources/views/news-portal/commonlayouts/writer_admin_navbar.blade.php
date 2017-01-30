<style>

    /* Add a dark background color with a little bit see-through */
    .navbar {
        background-color: #122b40;
        border: 0;
        font-family: 'Oswald', sans-serif;
        font-size: 13px !important;
        letter-spacing: 1px;
        opacity:0.9;
    }

    /* Add a gray color to all navbar links */
    .navbar li a, .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }

    /* On hover, the links will turn white */
    .navbar-nav li a:hover {
        color: #fff !important;
    }

    /* The active link */
    .navbar-nav li.active a {
        color: #fff !important;
        background-color:#29292c !important;
    }

    /* Remove border color from the collapsible button */
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    /* Dropdown */
    .open .dropdown-toggle {
        color: #fff ;
        background-color: #1f648b !important;
    }

    /* Dropdown links */
    .dropdown-menu li a {
        color: #000 !important;
    }

    /* On hover, the dropdown links will turn red */
    .dropdown-menu li a:hover {
        background-color: #122b40 !important;
    }

    /* CSS used here will be applied after bootstrap.css */



    .glyphicon-bell {

        font-size:1.5rem;
    }

    .notifications {
        min-width:420px;
    }

    .notifications-wrapper {
        overflow:auto;
        max-height:250px;
    }

    .menu-title {
        color:#0042ff;
        font-size:1.5rem;
        display:inline-block;
    }

    .glyphicon-circle-arrow-right {
        margin-left:10px;
    }


    .notification-heading, .notification-footer  {
        padding:2px 10px;
    }


    .dropdown-menu.divider {
        margin:5px 0;
    }

    .item-title {

        font-size:1.3rem;
        color:#0b0b0b;

    }
    .item-info {

        font-size:1.3rem;
        color:#0b0b0b;

    }
    .notifications a.content {
        text-decoration:none;
        background:#122b40;

    }

    .notification-item {
        padding:10px;
        margin:5px;
        background:#ccc;
        border-radius:4px;
    }




</style>

@if(Auth::check())
    @if(Auth::user()->role ==0)
<nav class="navbar navbar-default navbar-custom navbar-fixed-top" style="position: relative ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('welcome')}}"><b>ADMIN DASHBOARD</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="{{ route('news_list') }}"><b>NEWS</b></a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}"><b>CATEGORY</b></a>
                </li>
                <li>
                    <a href="{{ route('subcategories.index') }}"><b>SUBCATEGORY</b></a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">


                <li>
                    <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <span class="label label-info">11</span>
                    </a>

                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">

                        <div class="notification-heading"><h4 class="menu-title">Notifications</h4>
                            <li class="divider"></li>
                            <div class="notifications-wrapper">
                                <a class="content" href="#">

                                    <div class="notification-item">
                                        <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                        <p class="item-info">Marketing 101, Video Assignment</p>
                                    </div>

                                </a>
                                <a class="content" href="#">
                                    <div class="notification-item">
                                        <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                        <p class="item-info">Marketing 101, Video Assignment</p>
                                    </div>
                                </a>
                                <a class="content" href="#">
                                    <div class="notification-item">
                                        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                        <p class="item-info">Marketing 101, Video Assignment</p>
                                    </div>
                                </a>
                                <a class="content" href="#">
                                    <div class="notification-item">
                                        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                        <p class="item-info">Marketing 101, Video Assignment</p>
                                    </div>

                                </a>
                                <a class="content" href="#">
                                    <div class="notification-item">
                                        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                        <p class="item-info">Marketing 101, Video Assignment</p>
                                    </div>
                                </a>
                                <a class="content" href="#">
                                    <div class="notification-item">
                                        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                        <p class="item-info">Marketing 101, Video Assignment</p>
                                    </div>
                                </a>

                            </div>
                            <li class="divider"></li>
                            <div class="notification-footer"><h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
                            </div>
                        </div>
                    </ul>

                </li>









                <li>
                    <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                        <i class="glyphicon glyphicon-bell"></i>
                        <span class="label label-info">11</span>
                    </a>

                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">

                        <div class="notification-heading"><h4 class="menu-title">Notifications</h4>
                        <li class="divider"></li>
                        <div class="notifications-wrapper">
                            <a class="content" href="#">

                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>

                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>

                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>

                        </div>
                        <li class="divider"></li>
                        <div class="notification-footer"><h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
                        </div>
                            </div>
                    </ul>

                </li>

                <li class="dropdown">
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;<b>{{ Auth::user()->name }}</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">User Management</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-off"></span>&nbsp;<b>Logout</b></a></li>
                    </ul>
                </li>

            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
        @else
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top" style="position: relative">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{url('welcome')}}"><b>DASHBOARD</b></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">



                        <li>
                            x
                        </li>








                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;<b>NEWS</b><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('newsaction.index')}}"><span class="glyphicon glyphicon-file"></span>&nbsp;<b>Posts</b></a></li>
                                <li role="separator" class="divider"></li>

                                <li><a href="{{route('comment_index')}}"><span class="glyphicon glyphicon-comment"></span>&nbsp;<b>Comments</b></a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;<b>{{ Auth::user()->name }} </b><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-off"></span>&nbsp;<b>Logout</b></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        @endif
@endif
