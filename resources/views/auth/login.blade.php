@extends('layouts.master')

@section('title')
    Login
@stop

@section('head.css')
    <style type="text/css">
        .header{
            display: none;
        }
        #id1, #id2, #id3, #id4, #id5, #id0, #id6, #id7{
            display: none;
        }
    </style>
@stop

@section('FF')
    <a class="navbar-brand" href="{{ url('/') }}">Fast<span style="color:#FAD501">Food</span></a>
@stop

@section('body.content')
<!-- Form -->
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="riesling" style="font-size: 2em">LOGIN OR CREATE AN ACCOUNT</p>
                    </div>
                </div>
                <br>
                <div class="line-dashed"></div>
                <br><br>


                <div class="row">
                    
                    <!-- If you are a customer -->
                    <div class="col-md-7">
                        <div class="customer">
                            <p class="riesling" style="font-size: 2em">LOGIN</p>
                            <br>
                            <div class="line-dashed"></div>
                            <br>
                            
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="ribon">Email</div>
                                </div>
                                <div class="col-sm-9"><input type="email" class="form-control" name="email" value="{{ old('email') }}"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="ribon">Password</div>
                                </div>
                                <div class="col-sm-9"><input type="password" class="form-control" name="password"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5"></div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-2" style="margin-left: 0px;">
                                    <button type="submit" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </div>
                                <div class="col-sm-3" style="margin-left: 10px;">
                                    <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>

                    <!-- If you are a guest -->
                    <div class="col-md-5" >
                        <div class="guest">
                            <p class="riesling" style="font-size: 2em">NEW CUSTOMERS</p>
                            <br>
                            <div class="line-dashed"></div>
                            <br><br>
                            <p class="lead">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.
                            </p>
                            <br><br><br>
                            <a href="{{ url('/auth/register') }}" type="button" class="btn btn-success">CREATE AN ACCOUNT</a>
                        </div>
                    </div>

                </div>
</div>
<br><br><br><br><br>

@stop
