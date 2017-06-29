@extends('layouts.master')

@section('title')
    Register
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
    <a class="navbar-brand" href="#">Fast<span style="color:#FAD501">Food</span></a>
@stop

@section('body.content')
<!-- Form -->
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="riesling" style="font-size: 2em">CREATE A NEW ACCOUNT</p>
                    </div>
                </div>
                <br>
                <div class="line-dashed"></div>
                <br><br>
                <div class="row">
                    
                    <div class="col-md-4">
                        <img src="{{ asset('img/banner_left_food.jpg') }}" height="254" width="236" alt=""><br><br>
                        <img src="{{ asset('img/poster.jpg') }}" height="305" width="236" alt="">
                    </div>

                    <!-- Register Form Starter -->
                    <div class="col-md-8" id="register_form">
                        <div class="customer">
                            <div id="before"><p class="riesling" style="font-size: 2em" >REGISTER</p></div>
                            <div id="after" style="display: none;"><p class="riesling" style="font-size: 2em" >REGISTER SUCCESSFUL</p></div>
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
                            
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                
                            <div class="row" id="row1">
                                <div class="col-sm-3">
                                    <div class="ribon">Full Name</div>
                                </div>
                                <div class="col-sm-9"><input type="text" class="form-control" name="name" value="{{ old('name') }}"></div>
                            </div>
                            <br>
                            <div class="row" id="row2">
                                <div class="col-sm-3">
                                    <div class="ribon">Email</div>
                                </div>
                                <div class="col-sm-9"><input type="email" class="form-control" name="email" value="{{ old('email') }}"></div>
                            </div>
                            <br>

                            <div class="row" id="row2">
                                <div class="col-sm-3">
                                    <div class="ribon">Address</div>
                                </div>
                                <div class="col-sm-9"><input type="address" class="form-control" name="address" value="{{ old('phuong') }}"></div>
                            </div>
                            <br>

                            <div class="row" id="row2">
                                <div class="col-sm-3">
                                    <div class="ribon">Phone</div>
                                </div>
                                <div class="col-sm-9"><input type="text" class="form-control" name="phone" value="{{ old('phone') }}"></div>
                            </div>
                            <br>

                            <div class="row" id="row3">
                                <div class="col-sm-3">
                                    <div class="ribon">Password</div>
                                </div>
                                <div class="col-sm-9"><input type="password" class="form-control" name="password"></div>
                            </div>
                            <br>
                            <div class="row" id="row4">
                                <div class="col-sm-3">
                                    <div class="ribon">Re-Password</div>
                                </div>
                                <div class="col-sm-9"><input type="password" class="form-control" name="password_confirmation" maxlength="11"></div>
                            </div>
                            <br>
                         
                            <div class="row" id="row6">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
</div>
<br><br><br><br><br>
@stop