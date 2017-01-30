@extends('news-portal.commonlayouts.masterlayout')
@section('substitute_content')
    <div class="container">
        <h1><b><i>Register</i></b></h1>

        <br>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form name="myform" role="form" action="registration" method="post">

            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="hidden" name="role" value="1">
                <label for="Name"><i>Name</i></label>

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" style="max-width:300px" >

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="Email"><i>Email</i></label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" style="max-width:300px">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pwd"><i>Password</i></label>

                <input id="password" type="password" class="form-control" name="password" style="max-width:300px" >

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>



            <br>
            <br>
        </form>
    </div>
@stop