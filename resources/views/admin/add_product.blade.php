@extends('admin.index')

@section('content')
    {{--Product Editor Form--}}
    <div class="content-wrapper">
        <section class="content-header">
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <a class="close" data-dismiss="modal">×</a>

                            <h3>Create Product</h3>
                        </div>
                            <div class="box-body">
                                {!! Form::open( [
                                    'route' => ['admin.createProduct'],
                                    'method' => 'POST',
                                    'class' => 'form-horizontal'
                                ]); !!}

                                {{--Product Name--}}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            {!! Form::label('Pame', 'Product Name', ['class' =>
                                            'control-label'])
                                            !!}
                                        </div>
                                        <div class="col-sm-6">
                                            {!! Form::text('Pname', '', [ 'Pid'=>'Pname', 'class' =>
                                            'form-control',
                                            'size'
                                            =>
                                            '32',
                                            'maxlength' => '128', 'required' => 'true']) !!}
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::label('Category', 'Category ', ['class' => 'control-label']) !!}
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::text('Category', '', ['class'=>'form-control', 'required' => 'true']) !!}
                                        </div>
                                    </div>
                                </div>
                                {{--Category--}}
                                <div class="form-group">

                                </div>

                                {{--Cost--}}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            {!! Form::label('Pcost', 'Cost', ['class' => 'control-label']) !!}
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::text('Pcost', '', ['class'=>'form-control', 'type' => 'number', 'required' => 'true']) !!}
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::label('Ptotal', 'Quantity', ['class' => 'control-label']) !!}
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::text('Ptotal', '', ['class'=>'form-control', 'type' => 'number', 'required' => 'true']) !!}
                                        </div>
                                        <div class="col-sm-4"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            {!! Form::label('Plink', 'Link ', ['class' => 'control-label']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            {!! Form::text('Plink', '', ['class'=>'form-control', 'required' => 'true']) !!}
                                        </div>
                                        <div class="col-sm-4"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            {!! Form::label('Pdes', 'Description ', ['class' => 'control-label']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            {!! Form::text('Pdes', '', ['class'=>'form-control', 'required' => 'true']) !!}
                                        </div>
                                        <div class="col-sm-4"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-6">
                                            {!! Form::submit('Add', ['class' => 'btn btn-primary'])!!}
                                        </div>
                                        <div class="col-sm-4"></div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                                {{--<div class="modal-footer">--}}
                                {{--<input class="btn btn-success" type="submit" value="Update" id="submit">--}}
                                {{--<a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>--}}
                                {{--</div>--}}
                            </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@stop