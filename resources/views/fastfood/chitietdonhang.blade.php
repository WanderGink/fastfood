@extends('layouts.master')

@section('title')
    Đơn hàng: Thông tin đơn hàng
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

        #bang li {
            float: left;
            background: #dadada;
            line-height: 40px;
            padding-left: 5px;
            width: 132px;
        }

    </style>

    <script src="{{ asset('js/jquery.js') }}"></script>
@stop

@section('FF')
    <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 60px;">Fast<span style="color:#FAD501">Food</span></a>
@stop

@section('search')
    <li style="padding-left: 35px"><input type="text" class="form-search" placeholder="Search for here..."
                                          style="margin-right: 0px; margin-top: 3px;"></li>
    <li><img src="{{ asset('img/search.png') }}" style="margin-top: 3px;"></li>
@stop

@section('body.content')
    <div class="container">
        {{--main--}}
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    {{--thong tin chi tiet don hang--}}
                    @if($d->Uid == (\Auth::user()->id))
                        <div>
                            <h2 class="riesling">Thông tin đơn hàng</h2>
                            <hr/>
                            <br><br>

                            <div>
                                <label style="font-size: 1.0em;">Đơn hàng: </label>
                                <span style="padding-left: 12px; font-size: 1.0em">{{ $d->Did }}</span>
                            </div>
                            <div>
                                <label style="font-size: 1.0em;">Ngày mua: </label>
                                <span style="padding-left: 10px; font-size: 1.0em">{{ $d->created_at }}</span>
                            </div>
                            <div>
                                <label style="font-size: 1.0em;">Trạng thái: </label>
                                <span style="padding-left: 10px; font-size: 1.0em">{{ $d->status }}</span>
                            </div>
                            <br>
                            <br>
                            {{--thong tin san pham--}}
                            <div style="padding-right: 5px;">
                                <h3 class="riesling">Thông tin sản phẩm</h3>
                                <hr/>
                                <ul id="bang" style="list-style-type: none;">
                                    <li style="width: 300px; font-weight: bold;">Sản phẩm</li>
                                    <li style="font-weight: bold;">Đơn giá</li>
                                    <li style="font-weight: bold;">Số lượng</li>
                                    <li style="font-weight: bold; text-align: center;">Thành tiền</li>
                                </ul>
                                <ul id="bang" style="list-style-type: none;">
                                    <li style="width: 299px; background: #fff; border-right: 1px solid #dadada;border-left: 1px solid #dadada;font-weight: bold; border-bottom: 20px solid #dadada;">
                                        <a href="{{ route('fastfood.show', $d->Pname) }}"
                                           title="">{{ ucwords($d->Pname) }}</a></li>
                                    <li style="background: #fff; border-right: 1px solid #dadada; border-bottom: 20px solid #dadada;">
                                        ${{ $d->Pcost }}</li>
                                    <li style="background: #fff; border-right: 1px solid #dadada; border-bottom: 20px solid #dadada;">{{ $d->amount }}</li>
                                    <li style="background: #fff; border-right: 1px solid #dadada; border-bottom: 20px solid #dadada; text-align: center;">
                                        ${{ $d->total }}</li>
                                </ul>
                            </div>
                            <br>
                            <br>
                            {{--tom tat--}}
                            <div>
                                <br><br><br><br><br/><br/><br/>

                                <h3 class="riesling">Tóm tắt</h3>
                                <hr/>

                                <div>
                                    <label>Hình thức thanh toán: </label>
                                    <span style="padding-left: 62px;">Thanh toán tiền mặt (miễn phí)</span>
                                </div>
                                <div>
                                    <label>Hình thức giao hàng: </label>
                                    <span style="padding-left: 70px;">Giao hàng tận nơi (miễn phí)</span>
                                </div>
                                <div>
                                    <label>Tổng tiền: </label>
                                    <span style="padding-left: 140px; font-weight: bold;">${{ $d->total }}</span>
                                </div>
                                <div>
                                    <label>Ghi chú KH: </label>
                                    <span style="padding-left: 140px; font-weight: bold;"></span>
                                </div>
                            </div>
                            {{--thong tin khach hang--}}
                            <div style="padding-right: 5px;">
                                <br>

                                <h3 class="riesling">Thông tin khách hàng</h3>
                                <hr/>

                                <div style=" background: #da7550; color: #fff; padding: 10px 15px 10px; font-weight: bold;">
                                    Thông tin liên lạc
                                </div>
                                <div style="margin-top: 20px">
                                    <label>Email: </label>
                                    <span style="padding-left: 100px;">{{ \Auth::user()->email }}</span>
                                </div>
                                <br>

                                <div style=" background: #da7550; color: #fff; padding: 10px 15px 10px; font-weight: bold;">
                                    Thông tin giao hàng
                                </div>
                                <div style="margin-top: 20px;">
                                    <label>Họ tên: </label>
                                    <span style="padding-left: 92px;">{{ \Auth::user()->name }}</span>
                                </div>
                                <div style="margin-top: 10px;">
                                    <label>Số điện thoại: </label>
                                    <span style="padding-left: 50px;">{{ \Auth::user()->phone }}</span>
                                </div>
                                <div style="margin-top: 10px;">
                                    <label>Địa chỉ: </label>
                                    <span style="padding-left: 90px;">{{ \Auth::user()->address }}</span>
                                </div>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/banner_left_food.jpg') }}" height="254" width="236" alt=""><br><br>
                <img src="{{ asset('img/poster.jpg') }}" height="305" width="236" alt="">
            </div>
        </div>
    </div>
@stop