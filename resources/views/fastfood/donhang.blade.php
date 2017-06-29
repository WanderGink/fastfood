@extends('layouts.master')

@section('title')
    Đơn hàng
@stop

@section('head.css')
    <style type="text/css">
        * {
            margin: 0 0 0 0;
            padding: 0 0 0 0;
        }

        .header {
            display: none;
        }

    </style>

    <script src="{{ asset('js/jquery.js') }}"></script>
@stop

@section('FF')
    <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 60px;">Fast<span style="color:#FAD501">Food</span></a>
@stop


@section('body.content')
    <div style="padding-bottom: 3px;">
        {{--main--}}
        @if($count<4)
            <div class="boxs" style=" margin: 0 170px 50px 170px; height: 340px;">
                @else
                    <div style="margin-left: 170px; margin-right: 170px; margin-top: 0px;">
                        @endif
                        {{--Dơn hang--}}
                        <div>
                            <h2 class="riesling">Đơn hàng</h2>
                            <hr/>

                            <div style="padding-left: 3px;">
                                <ul style="list-style-type: none; height: 40px;color: #fff">
                                    <li style="float: left; background: #da8410; height: 40px; width: 60px; line-height: 40px; font-weight: bold; padding-left: 7px;">
                                        ID
                                    </li>
                                    <li style="float: left; background: #da8410; height: 40px; width: 80px; line-height: 40px; font-weight: bold; padding-left: 7px;">
                                        Trạng thái
                                    </li>
                                    <li style="float: left; background: #da8410; height: 40px; width: 200px; line-height: 40px; font-weight: bold; padding-left: 7px;">
                                        Sản phẩm
                                    </li>
                                    <li style="float: left; background: #da8410; height: 40px; width: 90px; line-height: 40px; font-weight: bold; padding-left: 7px;">
                                        Ngày
                                    </li>
                                    <li style="float: left; background: #da8410; height: 40px; width: 170px; line-height: 40px; font-weight: bold; padding-left: 7px; text-align: center">
                                        Tổng cộng
                                    </li>
                                    <li style="float: left; background: #da8410; height: 40px; width: 80px; line-height: 40px; font-weight: bold; padding-left: 7px; text-align: center"></li>
                                </ul>
                            </div>
                            @foreach($donhang as $d)
                                <div style="padding-left: 3px;">
                                    <ul style="list-style-type: none; height: 50px;">
                                        <li style="float: left; height: 50px; width: 60px; padding-left: 7px; border-right: 1px dotted #dadada;">
                                            <a href="{{ route('fastfood.chitietdonhang', $d->Did) }}">{{ $d->Did }}</a>
                                        </li>
                                        <li style="float: left; height: 50px; width: 80px; padding-left: 7px; border-right: 1px dotted #dadada;">{{ $d->status }}</li>
                                        <li style="float: left; height: 50px; width: 290px; padding-left: 7px; border-right: 1px dotted #dadada;">{{ ucwords($d->Pname) }}</li>
                                        <li style="float: left; height: 50px; width: 90px; padding-left: 7px; border-right: 1px dotted #dadada;">
                                            <a href="{{ route('fastfood.chitietdonhang', $d->Did) }}">{{ $d->created_at }}</a>
                                        </li>
                                        <li style="float: left;  height: 50px; width: 100px; padding-left: 7px; border-right: 1px dotted #dadada; text-align: center">
                                            ${{ $d->total }}</li>

                                        @if($d->status == 'Shipping')
                                            <li style="float: left;  height: 50px; width: 60px; padding-left: 0px; border-right: 1px dotted #dadada; text-align: center">
                                                {!! Form::open([
                                                'route' => ['fastfood.destroy', $d->Did],
                                                'method' => 'DELETE',
                                                'class' => ''
                                                ])
                                                !!}
                                                <button class="btn btn-danger"
                                                        style="width: 40px; border-radius: 4px; height: 40px; padding-left: 1px; padding-right: 1px;">
                                                    Hủy
                                                </button>
                                                {!! Form::close() !!}
                                            </li>
                                        @else
                                            <li style="float: left;  height: 50px; width: 100px; padding-left: 0px; border-right: 1px dotted #dadada; text-align: center"></li>
                                        @endif


                                    </ul>
                                </div>
                            @endforeach
                            <div style="padding-left: 3px;">
                                <ul style="list-style-type: none; height: 20px;">
                                    <li style="float: left; background: #dadada; height: 20px; width: 60px; line-height: 40px; font-weight: bold; padding-left: 7px;"></li>
                                    <li style="float: left; background: #dadada; height: 20px; width: 100px; line-height: 40px; font-weight: bold; padding-left: 7px;"></li>
                                    <li style="float: left; background: #dadada; height: 20px; width: 320px; line-height: 40px; font-weight: bold; padding-left: 7px;"></li>
                                    <li style="float: left; background: #dadada; height: 20px; width: 100px; line-height: 40px; font-weight: bold; padding-left: 7px;"></li>
                                    <li style="float: left; background: #dadada; height: 20px; width: 100px; line-height: 40px; font-weight: bold; padding-left: 7px;"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
@stop