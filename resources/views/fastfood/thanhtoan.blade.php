@extends('layouts.master')

@section('title')
    FastFood: {{ ucwords($p->Pname) }}
@stop

@section('head.css')
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .header {
            display: none;
        }

        #dathang {
            color: #FFFFFF;
            padding: 10px 20px 10px 20px;
            background: #75ae32;
            font-weight: bold;
            font-size: 2.0em;
            border-radius: 7px;
            margin-top: 10px;
            text-decoration: none;
        }

        #menu_thanhtoan {
            margin-left: 0px;
            margin-right: 0px;
            height: 40px;
            background: #ed1c24;
        }

        #menu_thanhtoan ul {
            list-style-type: none;
            height: 40px;
        }

        #menu_thanhtoan ul li {
            float: left;
            height: 40px;
            line-height: 40px;
            width: 340px;
        }

        #menu_thanhtoan ul li p {
            font-size: 1.3em;
            color: #ffffff;
            padding-left: 10px;
        }
    </style>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#change").click(function () {
                <?php
                    if(Session::has('tuan')){
                        Session::forget('tuan');
                    }
                    else{
                    Session::put('tuan', $p->Pname);
                    }
                ?>
            });
            $("#list").change(function () {
                value = parseInt($("#list").val());
                alert(value);
            });

            /*$('#submit').click(function(){
             $.ajax({
             route: 'fastfood.store',
             type: 'POST',
             data: {
             product_id: $('#product-id').val(),
             product_color: $('#product-color').text(),
             name: $('#name').val(),
             email: $('#email').val(),
             address: $('#address').val(),
             phone: $('#phone').val()

             },
             success: function(store){
             alert(Đặt hàng thành công)
             }
             });
             */
        });
    </script>

@stop

@section('FF')
    <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 60px;">Fast<span style="color:#FAD501">Food</span></a>
@stop

@section('body.content')
    <div style="margin-bottom: 50px;">
        <div style=" margin-top: 0px;  height: 200px; padding-left: 180px; padding-top: 20px;">
            <i class="fa fa-shopping-cart" style="font-size: 3em; color: #ff7a1c">&nbsp;&nbsp;&nbsp;</i>
            <h1 class="riesling" style="display: inline;">Thanh toán</h1>
            <br>
            @if(Session::has('dathang'))
                <div style="padding-bottom: 20px;">
                    <p style="font-size: 2.0em; padding-left: 320px;margin-top: 10px; margin-bottom: 10px;">{{ Session::get('dathang') }}</p>
                    <?php Session::forget('dathang') ?>
                </div>
            @endif
        </div>
        {{--form--}}
        <form action="{{ route('fastfood.store', $p->Pid) }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div style="margin-left: 170px; margin-right: 170px; margin-top: -70px; border: 1px solid #fff;box-shadow: 1px 3px 4px #B9B9B9; background: #ffffff; border-radius: 4px; padding: 15px 15px 15px 15px;">
                <div style="box-shadow: 1px 3px 4px #B9B9B9;background: #fff url("{{ asset('img/linebottom.png') }}") repeat-x scroll left bottom;">
                    <div id="menu_thanhtoan">
                        <ul>
                            <li><p>1. Sản phẩm</p></li>
                            <li><p>2. Địa chỉ giao hàng</p></li>
                            <li style="width: 250px;"><p>3. Thanh toán và vận chuyển</p></li>
                        </ul>
                    </div>

                    <div style="height: 403px; border-bottom: 5px solid #ccc;">
                        <div style="float: left; padding: 10px 10px 10px 10px; border-right: 1px solid #9b9b9b; width: 339px; height: 400px;">
                            <div style="width: 319px; border-bottom: 1px solid #cccccc; height: 150px;">
                                <ul style="height: 150px; list-style-type: none;">
                                    <li style="float: left;"><img src="{{ asset('img/product1.jpg') }}" width="160"
                                                                  height="140"></li>
                                    <li style=" padding-top: 20px; text-align: center; "><p
                                                style="padding-left: 15px; font-weight: bold; font-size: 1.9em;">{{ucwords($p->Pname)}}</p>
                                    </li>
                                </ul>

                            </div>
                            <div>
                                <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px; border-bottom: 1px solid #cccccc;">
                                    <label>Mã sản phẩm: </label>
                                    <span style="float: right;"><strong>{{ $p->Pid }}</strong></span>
                                </div>
                                <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px; border-bottom: 1px solid #cccccc;">
                                    <label>Giá bán: </label>
                                    <span style="float: right; font-weight: bold;">$<strong>{{ $p->Pcost }}</strong></span>
                                </div>
                                <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px; border-bottom: 1px solid #cccccc;">
                                    <label>Có sẵn: </label>
                                    <span style="float: right;"><strong>{{ $p->Ptotal - $p->Pnow }}</strong></span>
                                </div>
                                <div style="height: 49px; line-height: 39px; padding-left: 3px; padding-right: 3px; border-bottom: 1px solid #cccccc;">
                                    <label>Số lượng: </label>
                              <span style="float: right;"><input type="number" value="1" name="soluong" id="soluong"
                                                                 style=" width: 70px; margin-top: 3px;" maxlength="5"
                                                                 max="{{$p->Ptotal - $p->Pnow}}" min="1" required></span>
                                </div>
                                {{--<div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px; border-bottom: 1px solid #cccccc;">
                                    <label>Thành tiền: </label>
                                    <span style="float: right; font-weight: bold; padding-left: 600px;">$<strong>{{ $p->Pcost }}</strong></span>
                                </div>
                                --}}
                            </div>
                        </div>
                        @if(\Auth::check())
                            <div style="float: left; padding: 10px 10px 10px 10px; width: 339px; height: 400px;">
                                <ul style="list-style-type: none; float: left; width: 125px;">
                                    <li style="padding-top: 10px;">Người nhận:</li>
                                    <li style="padding-top: 10px;">Email:</li>
                                    <li style="padding-top: 10px;">Số điện thoại:</li>
                                    <li style="padding-top: 10px;">Địa chỉ:</li>
                                </ul>
                                <ul style="list-style-type: none;">
                                    <li style="padding-top: 10px;font-weight: bold;">{{ \Auth::user()->name }}</li>
                                    <li style="font-weight: bold;padding-top: 10px;">{{ \Auth::user()->email }}</li>
                                    <li style="font-weight: bold;padding-top: 10px;">{{ \Auth::user()->phone }} </li>
                                    <li style="font-weight: bold;padding-top: 10px;">{{ \Auth::user()->address }} </li>
                                </ul>

                                <p style="color: #ff0009;"> Thông tin đã chính xác <a style="padding-left: 110px;"
                                                                                      href="{{ route('fastfood.edit')}}"
                                                                                      id="change">Thay đổi</a></p>
                            </div>
                        @else
                            <div style="float: left; padding: 10px 10px 10px 10px; width: 339px; height: 400px;">
                                {!! Form::label('fullname', 'Người nhận *', ['class' => 'control-label', 'style' =>
                                'padding-left: 5px;float: left;']) !!}
                                {!! Form::text('name', null, [ 'id' => 'fullname','class' => 'form-control', 'style' =>
                                'width: 310px; padding-left: 5px; margin-left: 5px;', 'size' => '32',
                                'maxlength'=>'128', 'require' => 'true', 'required']) !!}
                                <br>

                                {!! Form::label('addredd', 'Địa chỉ * ', ['class' => 'control-label', 'style' =>
                                'padding-left: 5px;']) !!}
                                {!! Form::text('address', null, [ 'id' => 'address','class' => 'form-control', 'style'
                                => 'width: 310px; padding-left: 5px; margin-left: 5px;', 'size' => '32',
                                'maxlength'=>'128', 'require' => 'true', 'required']) !!}
                                <br>
                                {!! Form::label('phone', 'Số điện thoại *', ['class' => 'control-label', 'style' =>
                                'padding-left: 5px;']) !!}
                                {{--{!! Form::text('phone', null, [ 'id' => 'phone','class' => 'form-control', 'style' => 'width: 310px; padding-left: 5px; margin-left: 5px;', 'size' => '32', 'maxlength'=>'11', 'require' => 'true; number', 'type' => 'number', 'required']) !!}
                                --}}
                                <input type="number" class="form-control" name="phone" id="phone"
                                       style="padding-left: 5px;">
                            </div>
                        @endif
                        <div style="float: left; border-left: 1px solid #9b9b9b; padding: 10px 10px 10px 10px; width: 250px; height: 400px;">
                            <p style="font-weight: bold; padding-top: 5px;">Hình thức giao hàng</p>

                            <div style="border-bottom: 1px solid #dadada; margin-right: -50px;"></div>
                            <p style="padding-top: 15px;  width: 300px;"><a id="dathang"
                                                                            style="font-size: 1.0em; padding-right: 70px;">Giao
                                    hàng tận nơi miễn phí</a></p>
                            <br><br>

                            <p style="font-weight: bold; padding-top: 5px;">Hình thức thanh toán</p>

                            <div style="border-bottom: 1px solid #dadada; padding-right: 3px; margin-right: -50px;"></div>
                            <p style="padding-top: 15px; width: 300px;"><a id="dathang" style="font-size: 1.0em;">Thanh
                                    toán bằng tiền mặt miễn phí</a></p>
                            <br><br>

                            <div style="border-bottom: 1px solid #dadada; padding-right: 3px; margin-right: -50px;"></div>
                            <p style="text-align: center; padding-left: 60px; padding-top: 10px; padding-bottom: 10px;">
                                <a href="#">Quy định và chính sách!</a></p>
                            {{--<img src="{{ asset('img/thanhtoanvavanchuyen.png') }}" width="275" height="380">--}}
                            {{--<p style="float: right; padding-top: -20px;"><a type="submit" href="{{ route('fastfood.store', $p->Pid) }}" id="dathang">Đặt hàng <input type="hidden"></a></p>
                            --}}
                            <p style="float: right;">
                                <button type="submit" name="dathang" id="dathang" style="margin-top: -20px;"> <i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Đặt hàng
                                </button>
                        </div>
                    </div>

                </div>

                {{--<div style="height: 350px; border: 1px solid #9b9b9b;  border-top: 0; background: #efefef;" >
                    <div style="height: 200px;">
                    <div style="float: left; width: 500px; height: 200px;  padding-top: 15px; padding-right: 15px; padding-left: 15px;">
                         <div style="width: 470px; background: #fff; padding: 15px 15px 15px 15px;">
                             <p>Ghi chú</p>
                             <textarea name="" id="" cols="60" rows="4"></textarea>
                         </div>
                    </div>
                    <div style="float: left; width: 400px; height: 200px;  padding-top: 15px; padding-right: 15px; padding-left: 15px;">
                        <div style="width: 450px; background: #fff; padding: 15px 15px 15px 15px;">
                            <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px;">
                                      <label>Thành tiền: </label>
                                      <span style="float: right; font-weight: bold; ">$<strong>{{$p->Pcost}}</strong></span>
                            </div>
                            <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px;">
                                      <label>Phí vận chuyển: </label>
                                      <span style="float: right; "><strong>Miễn phí</strong></span>
                            </div>
                            <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px; border-bottom: 1px solid #cccccc;">
                                      <label>Phí dịch vụ: </label>
                                      <span style="float: right; "><strong>Miễn phí</strong></span>
                            </div>
                            <div style="height: 39px; line-height: 39px; padding-left: 3px; padding-right: 3px;">
                                      <label>Tổng số tiền </label>
                                      <span style="float: right; font-weight: bold; font-size: 2.3em; color: #ff0009;">$<strong>{{ $p->Pcost }}</strong></span>
                            </div>

                         </div>
                    </div>
                    </div>
                    <div style="height: 50px; float: right; padding-top: 10px; padding-right: 25px;">
                        <p>Đặt hàng là bạn đã đồng ý với quy định và chính sách của chúng tôi!</p><br>
                        <p style="float: right;"><a type="submit" href="{{ route('fastfood.store', $p->Pid) }}" id="dathang">Đặt hàng <input type="hidden"></a></p>
                    </div>
                    </div>
                </div>
                </form>
                --}}
            </div>
        </form>
    </div>
@stop

