@extends('layouts.master')

@section('title')
    Edit Profile
@stop

@section('head.css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
    <style type="text/css">
        .header {
            display: none;
        }

    </style>
@stop

@section('FF')
    <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 60px;">Fast<span style="color:#FAD501">Food</span></a>
@stop

@section('search')
    <li style="padding-left: 30px"><input type="text" class="form-search" placeholder="Search for here..."
                                          style="margin-right: 0px; margin-top: 3px;"></li>
    <li><img src="{{ asset('img/search.png') }}" style="margin-top: 3px;"></li>
@stop

@section('body.content')
    <div class="mainbox-container">
        <div class="mainbox-body">
            <div class="content-general">
                <h1 style="font-weight: bold;" class="riesling">Thông tin cá nhân</h1><br/>
                <h4 style="font-style: oblique; color:#F37934; font-size: 1.2em">Thông tin có * là bắt buộc nhập, cần
                    phải nhập</h4>

                {{--Check error--}}
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
                {!! Form::model( $user, [
                'route' => [ 'fastfood.update', \Auth::user()->id ],
                'method' => 'PUT',
                'class' => 'form-horizontal'

                ]);

                !!}

                {{--Thong tin tai khoan--}}
                <div class="sub-content">
                    <h3 style="font-weight: bold; padding-top: 15px;" class="riesling">Thông tin tài khoản</h3>
                </div>
                <br/>

                <div class="box-wrapper">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('email', 'Email *', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-sm-9">
                                {!! Form::email('email', null, [ 'id'=>'email', 'class' => 'form-control', 'size' =>
                                '32',
                                'maxlength' => '128', 'required' =>
                                'true',
                                'readonly' => 'readonly' ]) !!}
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('password', 'Password *', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-sm-9">
                                {!! Form::password('password', [ 'id' => 'password','class' => 'form-control', 'require'
                                => 'true' ]) !!}
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('password', 'Re-Password *', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-sm-9">
                                {!! Form::password('password_confirmation', [ 'id' => 'password_confirmation','class' =>
                                'form-control', 'require' => 'true']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <br/>

                <div class="sub-content">
                    <h3 style="font-weight: bold; padding-top: 25px;" class="riesling">Thông tin giao hàng</h3>
                </div>
                <br/>

                <div class="box-wrapper">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('fullname', 'Fullname *', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-sm-9">
                                {!! Form::text('name', null, [ 'id' => 'fullname','class' => 'form-control', 'size' =>
                                '32', 'maxlength'=>'128', 'require' =>
                                'true']) !!}
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('phone', 'Phone *', ['class' => 'control-label'])
                                !!}
                            </div>
                            <div class="col-sm-9">
                                {!! Form::text('phone', null, [ 'id' => 'phone','class' => 'form-control', 'size' =>
                                '32', 'maxlength'=>'11', 'require' =>
                                'true;
                                number', 'type' => 'number']) !!}
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('', 'Address * ', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-sm-9">
                                {!! Form::text('address', null, [ 'id' => 'address','class' => 'form-control', 'size' =>
                                '32',
                                'maxlength'=>'128',
                                'require' => 'true']) !!}
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            {!! Form::submit('UPDATE', [ 'class'=>'btn btn-primary', 'style' => 'padding:10px 40px 10px
                            40px']) !!}
                        </div>
                    </div>
                </div>
                <br/><br/><br/><br/>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop