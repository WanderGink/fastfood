@extends('layouts.master')

@section('title')
    @if($category == 'Soup' or $category == 'Pizza' or $category == 'Salad' or $category == 'Mon-khai-vi' or $category == 'Com' or $category == 'My-Y')
        @if($category == 'Soup' or $category == 'Pizza' or $category == 'Salad')
            {{ $category }}
        @endif
        @if($category == 'Mon-khai-vi')
            Món khai vị
        @endif
        @if($category == 'Com')
            Cơm
        @endif
        @if($category == 'My-Y')
            Mỳ Ý
        @endif
    @else
        Home
    @endif
@stop

@section('head.css')
    <style type="text/css">
        .header {
            display: none;
        }

    </style>

    <script src="{{ asset('js/jquery.js') }}"></script>
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
    <!-- Slider -->
    <div class="slider">
        <div class="box-slider">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img alt="First slide" src="{{ asset('img/slide1.png') }}" height="450" width="1000">
                    </div>
                    <div class="item active">
                        <img alt="Third slide" src="{{ asset('img/slide2.png') }}" height="450" width="1000">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What's host? -->
    <br>
    <br>
    <img src="{{ asset('img/crown.png') }}" height="40" width="100" alt="symbol" class="center-block">
    <br>
    <div class="containers">
        <div class="row">
            <ul id="category">
                <li>
                    <a href="{{ route('fastfood.method', [ $category, 'gia-tot-nhat']) }}" style="{{ $giatotnhat }}"
                       id="best">Giá tốt nhất</a>
                </li>
                <li>
                    <a href="{{ route('fastfood.method', [ $category, 'ban-chay-nhat']) }}" style="{{ $banchaynhat }}"
                       id="hot">Bán chạy</a>
                </li>
                <li>
                    <a href="{{ route('fastfood.method', [ $category, 'moi-nhat']) }}" style="{{ $moinhat }}" id="new">Mới
                        nhất</a>
                </li>
            </ul>
            <li style="float: left; text-align: center; font-size: 30px; padding-left: 13px; list-style-type: none;"
                class="riesling">
                Có {{ $count }} sản phẩm
            </li>

        </div>
    </div>
    <br>
    <!-- Product -->
    <div class="containers">
        <p class="line-dashed"></p>

        <div class="row">
            @foreach($product as $p)
                <div class="col-md-4">
                    <div class="products">
                        <a href="{{ route('fastfood.show', $p->Pname) }}"><img src="{{ $p->Plink }}"
                                                                               class="img-thumbnail" height="200"
                                                                               width="300" alt="1"></a>
                        <a href="{{ route('fastfood.show', $p->Pname) }}" class="name-product">{{ $p->Pname }}</a><br>

                        <div style="float: left; width: 100px; "><p class="price">$ {{ $p->Pcost }}</p></div>
                        <div style="float: right;"><p style="font-weight: bold; font-size: 1.3em;">{{ $p->Pnow }}
                                Orders</p></div>
                        <br><br>
                        <a type="button" href="{{ route('fastfood.show', $p->Pname) }}" class="btn btn-danger purchase"
                           style="width: 120px; padding-left: 3px; padding-right: 3px; border-radius: 5px;"><i
                                    class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br>

    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {!! $product->render() !!}
        </div>
    </div>
    <br>
    <div class="container">
        <p class="line-dashed"></p></div>
    <br><br><br>
@stop                    