
<style>

    /* Add a dark background color with a little bit see-through */
    .navbar {
        background-color: #122b40;
        border: 0;
        font-family: 'Oswald', sans-serif;
        font-size: 19px !important;
        opacity:1.0;
    }

    .navbar-brand{
        color: black !important;
        text-decoration: none;
        text-transform: full-size-kana;
        padding-right: 0;
        letter-spacing: 2px;
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
        background-color: #555 !important;
    }

    /* Dropdown links */
    .dropdown-menu li a {
        color: #000 !important;
    }

    /* On hover, the dropdown links will turn red */
    .dropdown-menu li a:hover {
        background-color: red !important;
    }


    /* General sizing */
    ul.dropdown-lr {
        width: 400px;

    }

    /* mobile fix */
    @media (max-width: 768px) {
        .dropdown-lr h3 {
            color: #eee;
        }
        .dropdown-lr label {
            color: #eee;
        }
    }

</style>
<script>
    $(document).ready(function() {

        $("#q").autocomplete({
            source: function(request, response) {
                $.ajax({

                    dataType: "json",
                    data: {
                        q : request.q
                    },
                    success: function(data) {
                        response(data);

                    }
                });
            },
            min_length: 3,

        });
    });
</script>



<nav class="navbar navbar-default navbar-custom navbar-fixed-top" style="position: relative">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><b>TechNews.com</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         {{--   <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                        <div class="col-lg-12">
                            <div class="text-center"><h3><b>Register</b></h3></div>
                            @if(session('register_success'))
                                <div class="alert alert-success">
                                    {{ session('register_success') }}
                                </div>
                            @endif

                            <form name="myform" role="form" action="registration" method="post">

                                {{ csrf_field() }}
                                <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="hidden" name="role" value="1">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="name" type="name" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}"  required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"  required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}"  required autofocus>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <button type="submit" class="btn btn-block btn-info">Register</button>
                                <br>
                                <br>
                            </form>

                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                        <div class="col-lg-12">
                            <div class="text-center"><h3><b>Login</b></h3></div>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-warning">
                                    {{ session('error') }}
                                </div>
                            @endif


                            <form  id="loginform"role="form" action="{{url('/login')}}" method="post">

                                {{ csrf_field() }}
                                <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}"  required autofocus>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <button type="submit" name="log"class="btn btn-block btn-success">Login</button>
                                <a href="#"><h5>Forgot Your Password ?</h5></a>
                            </form>
                        </div>
                    </ul>
                </li>
            </ul>
--}}
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('programming') }}">Programming</a>
                </li>

                <li>
                    <a href="{{ url('/contact') }}">Hacking</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Mobile</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Photography</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Marketing</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Tech Facts</a>
                </li>
                <li>
                    {{--<input class="typeahead form-control" style="margin:0px auto;width:300px;" type="text">--}}

                    <form action="{{route('search')}}" method="post" class="navbar-form navbar-left" role="search" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-group input-group">
                            <input data-class="typeahead form-control" type="text" style="margin:0px auto;width:300px;"  class="typeahead form-control" name="q" placeholder="Search..">
                        </div>
                    </form>
                </li>
                {{--<li>
                    <a href="{{ url('/registration') }}"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</a>
                </li>--}}
                <li>
                    <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Become a Newswriter ?</a>
                   {{-- <a href="{{ route('logindemo') }}">Login</a>--}}
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->

</nav>

