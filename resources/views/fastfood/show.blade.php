@extends('layouts.master')

@section('title')
    {{ ucwords($p->Pname) }}
@stop

@section('head.css')
    <script src="{{ asset('js/jquery.js') }}"></script>



    <style type="text/css">
        * {
            margin: 0 0 0 0;
            padding: 0 0 0 0;
        }

        .header {
            display: none;
        }

        .topbody {
            padding-right: 150px;
            padding-left: 150px;
            height: 480px;
            border-top: 1px solid #c2c2c2;
            border-bottom: 1px solid #c2c2c2;
            background: #ffffff;
        }

        #order {
            color: #FFFFFF;
            padding: 10px 20px 10px 20px;
            background: #75ae32;
            font-weight: bold;
            font-size: 1.8em;
            border-radius: 7px;
            margin-top: 10px;
            text-decoration: none;
        }

        #slider {
            width: 490px;
            height: 430px;
            overflow: hidden;
        }

        #slider ul {
            list-style-type: none;
            width: 5000px;
        }

        #slider ul li {
            float: left;
            width: 490px;
            height: 430px;
            background: #ccc;
            text-align: center;
            line-height: 430px;
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

    <div class="container boxs">
        <div style="width: 500px;
			float: left;
			padding: 5px 5px 5px 5px;">
            <div id="slider">
                <ul>
                    <li><img src="{{ asset('img/anh1.jpg') }}" width="490" height="430"></li>
                    <li><img src="{{ asset('img/anh1.jpg') }}" width="490" height="430"></li>
                    <li><img src="{{ asset('img/anh3.jpg') }}" width="490" height="430"></li>
                    <li><img src="{{ asset('img/anh4.jpg') }}" width="490" height="430"></li>
                </ul>
            </div>
        </div>
        <div style="width: 500px;  float: right;">
            <div style="width: 500px; height: 200px; padding-top: 20px; padding-bottom: 10px;">
                <h2 class="riesling">{{ ucwords($p->Pname) }}</h2>

                <p>{{ $p->Pdes }}</p>
            </div>
            <hr/>
            <div>
                <div style="float: left;">
                    <h3 class="riesling">Cost: </h3>

                    <p style="font-size: 2.1em; color: #ff0000; font-weight: bold; padding-top: 0px; margin-top: 0px;">
                        $ {{ $p->Pcost }}</p>
                    @if($p->Ptotal > $p->Pnow)
                        <p style="margin-top: 20px;"><a href="{{ route('fastfood.thanhtoan', $p->Pname) }}" id="order"
                                                        style="margin-top: 20px;"><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Mua
                                ngay</a></p>
                    @else
                        <p style="margin-top: 20px;"><a id="order" style="margin-top: 20px; background: #5d6b7a;"
                                                        readonly="readonly">Hết hàng</a></p>
                    @endif
                    <p style="font-size: 2.1em; margin-top: 20px; "> {{ $p->Pnow }} Orders</p>
                </div>
                <img src="{{ asset('img/giaohang2.jpg') }}" style="float: right;" width="290" height="253">
            </div>
        </div>
    </div>

    <div class="container">
        <br/><br/><br/>

        <p class="line-dashed"></p>

        <div class="row">
            <div class="col-md-9">
                <br/>

                <h3 class="riesling">Thông tin chi tiết</h3>
                <br>

                <div class="boxs">
                    <h4 style="font-size: 1.2em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id
                        expedita
                        aliquam velit, error magni impedit, molestias vitae cum suscipit voluptatem, reprehenderit
                        odio
                        nobis similique laborum facere ad quia corporis commodi.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eaque debitis pariatur
                        distinctio
                        voluptatibus, facilis laborum. Neque, esse repellat a doloribus pariatur est repellendus,
                        repudiandae, fugit consequatur ipsum, vero ab. Lorem ipsum dolor sit amet, consectetur
                        adipisicing
                        elit. Autem earum veritatis libero et hic quisquam ut, dignissimos obcaecati, officiis sequi
                        repudiandae, quia facilis, natus nisi deserunt dolorem possimus consequuntur
                        asperiores?</h4>
                    <br>
                    <img src="{{ asset('/img/anh1.jpg') }}" width="720"><br><br>

                    <p style="font-weight: bold; font-size: 1.1em;"><a href="#">Chúc bạn mua hàng vui vẻ tại FastFood
                            Restaurent
                            Online!</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <br/>

                <h3 class="riesling">Có thể bạn quan tâm</h3>
                @foreach($moinhat as $m)
                    <div>
                        <div class="products">
                            <a href="{{ route('fastfood.show', $m->Pname) }}"><img src="{{ $m->Plink }}"
                                                                                   class="img-thumbnail"
                                                                                   height="200" width="300" alt="1"></a>
                            <a href="{{ route('fastfood.show', $m->Pname) }}"
                               class="name-product">{{ $m->Pname }}</a><br>

                            <div style="float: left; width: 100px; "><p class="price">$ {{ $m->Pcost }}</p>
                            </div>
                            <div style="float: right;">
                                <p style="font-weight: bold; font-size: 1.3em;">{{ $m->Pnow }} Orders</p>
                            </div>
                            <br><br>
                            <a type="button" href="{{ route('fastfood.show', $m->Pname) }}"
                               class="btn btn-danger purchase"
                               style="width: 120px; padding-left: 3px; padding-right: 3px; border-radius: 5px;"><i
                                        class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br/><br/><br/>
    {{--slider and facebook plugin--}}
    <div class="container">
        <p class="line-dashed"></p><br/><br/>
    </div>
    <script src="{{ asset('js/slider.js') }}"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-9 boxs">
                <div class="fb-like"
                     data-share="true"
                     data-width="450"
                     data-show-faces="true">
                </div>

                <div class="fb-comments"
                     data-href="{{ route('fastfood.show', $p->Pname) }}" data-colorscheme="light"
                     data-numposts="5" data-width="720">
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '380852438778964',
                xfbml: true,
                version: 'v2.3'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <br/><br/><br/><br/>
@stop