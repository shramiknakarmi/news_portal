{{--<style>
    .login-signup {
        padding: 0 0 25px;
    }

    .btn-success {
        background: #23bab5;
        border-radius:0;
        border: 2px solid #23bab5;
        webkit-transition: all 400ms cubic-bezier(.4,0,.2,1);
        transition: all 400ms cubic-bezier(.4,0,.2,1);
    }

    .btn-success:hover,.btn-success:focus {
        background: rgba(26, 161, 157, 0);
        border: 2px solid #1aa19d;
        webkit-transition: all 400ms cubic-bezier(.4,0,.2,1);
        transition: all 400ms cubic-bezier(.4,0,.2,1);
        color: #23BAB5;
    }

    a {
        color: #23bab5;
    }

    ul {
        list-style-type: none;
    }

    article[role="login"] {
        background: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 10px rgba(0, 0, 0, 0.24);
        webkit-transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
        transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
        padding: 30px 50px;
        margin-bottom: 20px;
    }

    article[role="login"] input[type="submit"] {
        padding: 10px 15px;
        font-size: 16px;
    }

    article[role="login"]:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 1px 15px rgba(0, 0, 0, 0.23);
        webkit-transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
        transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    article[role="login"] h3 {
        font-size: 26px;
        font-weight: 300;
        color: #23bab5;
        margin-bottom: 20px;
    }

    article[role="login"] p {
        font-size: 16px;
        padding: 5px 15px;
    }

    .nav-tab-holder {
        padding: 0 0 0 30px;
        float: right;
    }

    .nav-tab-holder .nav-tabs {
        border: 0;
        float: none;
        display: table;
        table-layout: fixed;
        width: 100%;
    }

    .nav-tab-holder .nav-tabs > li {
        margin-bottom: -3px;
        text-align: center;
        padding: 0;
        display: table-cell;
        float: none;
        padding: 0;
    }

    .nav-tab-holder .nav-tabs > li > a {
        background: #d9d9d9;
        color: #6c6c6c;
        margin: 0;
        font-size: 18px;
        font-weight: 300;
    }

    .nav-tab-holder .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        color: #FFF;
        background-color: #23bab5;
        border: 0;
        border-radius: 0;
    }

    .mobile-pull {
        float: right;
    }

    article[role="manufacturer"] {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 10px rgba(0, 0, 0, 0.24);
        padding: 0 0 40px;
        max-width: 420px;
        margin: -45px auto 0;
    }

    article[role="manufacturer"] header {
        background: #23bab5;
        color: #fff;
        padding: 10px;
        font-size: 18px;
        font-weight: 300;
    }

    article[role="manufacturer"] h1 {
        font-size: 26px;
        font-weight: 300;
        border-bottom: 1px solid #f2f2f2;
        padding: 25px 15px;
    }

    article[role="manufacturer"] ul {
        padding: 0 25px;
    }

    article[role="manufacturer"] ul li {
        font-size: 16px;
        border-bottom: 1px solid #eaeaea;
        padding: 20px 15px;
        color:#404040;
    }

    article[role="manufacturer"] ul li i {
        color: #23bab5;
    }

    .login-signup {
        padding: 0 0 25px;
    }

    @media only screen and (max-width: 767px) {
        .mobile-pull {
            float: none;
        }

        .nav-tab-holder {
            float: none;
            overflow: hidden;
        }

        .nav-tabs > li > a {
            font-size: 13px;
            font-weight: 600;
            padding: 10px 5px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .nav-tabs > li {
            width: 50%;
        }
    }
</style>--}}
@extends('news-portal.commonlayouts.masterlayout')
@section('substitute_content')
{{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <div class="container">
        <div class="login-signup">
            <div class="row">
                <div class="col-sm-6 nav-tab-holder">
                    <ul class="nav nav-tabs row" role="tablist">
                        <li role="presentation" class="active col-sm-6"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Admin</a></li>
                        <li role="presentation" class="col-sm-6"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">User</a></li>
                    </ul>
                </div>

            </div>


            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="row">

                        <div class="col-sm-6 mobile-pull">
                            <article role="login">
                                <h3 class="text-center"><i class="fa fa-lock"></i>USER</h3>
                                <form class="signup" action="index.html" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="UserName">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Please accept the terms and conditions to proceed with your request.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block"  value="SUBMIT">
                                    </div>
                                </form>

                                <footer role="signup" class="text-center">
                                    <ul>
                                        <li>
                                            <a href="#">Terms of Use</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Statement</a>
                                        </li>
                                    </ul>
                                </footer>

                            </article>
                        </div>

                        <div class="col-sm-6">
                            <article role="manufacturer"  class="text-center">
                                <header>
                                    ADMIN
                                </header>
                                <h1>FREE</h1>
                                <ul class="text-left">
                                    <li><i class="fa fa-check"></i>  Unlimited  access</li>
                                    <li><i class="fa fa-check"></i>  Create Project Lists</li>
                                    <li><i class="fa fa-check"></i>  Create Project Lists</li>
                                    <li><i class="fa fa-check"></i>  Share Files</li>
                                    <li><i class="fa fa-check"></i>   Unlimited  access</li>
                                    <li><i class="fa fa-check"></i>  Unlimited  access</li>
                                </ul>
                                <a href="#" class="btn btn-success">SignUp  For Admin</a>
                            </article>
                        </div>

                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of home -->

                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="row">

                        <div class="col-sm-6 mobile-pull">
                            <article role="login">
                                <h3 class="text-center"><i class="fa fa-lock"></i> Create User Account</h3>
                                <form class="signup" action="index.html" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="UserName">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Please accept the terms and conditions to proceed with your request.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block"  value="SUBMIT">
                                    </div>
                                </form>
                                <footer role="signup" class="text-center">
                                    <ul>
                                        <li>
                                            <a href="#">Terms of Use</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Statement</a>
                                        </li>
                                    </ul>
                                </footer>

                            </article>
                        </div>

                        <div class="col-sm-6">
                            <article role="manufacturer"  class="text-center">
                                <header>
                                    USER
                                </header>
                                <h1>FREE</h1>
                                <ul class="text-left">
                                    <li><i class="fa fa-check"></i>  Unlimited Site Access</li>
                                    <li><i class="fa fa-check"></i>   Unlimited Site Access</li>
                                    <li><i class="fa fa-check"></i>  Unlimited Site Access</li>
                                    <li><i class="fa fa-check"></i>  Unlimited Site Access</li>
                                    <li><i class="fa fa-check"></i>   Unlimited Site Access</li>
                                    <li><i class="fa fa-check"></i>   Unlimited Site Access</li>
                                </ul>

                                <a href="#" class="btn btn-success">SignUp  For User</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}


    <div class="registerandlogin">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="well">

            <h3><b>Register to be a Newswriter</b></h3>

            <br>


            @if(session('register_success'))
                <div class="alert alert-success">
                    {{ session('register_success') }}
                </div>
            @endif

            <form name="myform" role="form" action="registration" method="post">
                {{ csrf_field() }}
                <div{{ $errors->has('name') ? ' has-error' : '' }}>
                <div class="input-group ">
                    <input type="hidden" name="role" value="1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="name" type="name" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <div class="alert alert-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                            </div>
                                    </span>
                @endif
                </div>

                <div{{ $errors->has('email') ? ' has-error' : '' }}>
                    <div class="input-group ">

                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>



                <div {{ $errors->has('password') ? ' has-error' : '' }}>
                <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
                </div>
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
        </div>
            <div class="col-md-6">

    <div class="well">
        <h3><b>Login with existing account</b></h3>
         <br>

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
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

            </div>

            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">

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
</div>

        </div>
    </div>
    </div>
@stop


