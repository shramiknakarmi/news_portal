@if(Auth::check())
    <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top" style="position: relative">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('welcome')}}"><b><i>Admin Dashboard</i></b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">

                    <li>
                            <a href="{{ route('categories.index') }}"><i><b>Category</b></i></a>
                        </li>
                        <li>
                            <a href="{{ route('subcategories.index') }}"><i><b>Subcategory</b></i></a>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp<b>{{Auth::user()->name}}</b><span class="caret"></span></a>
                        <ul class="dropdown-menu">
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
