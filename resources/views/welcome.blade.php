@extends('temp')

@section('content')
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
                    <img alt="First slide" src="img/slide1.png" height="450" width="1000">
                </div>
                <div class="item active">
                    <img alt="Third slide" src="img/slide2.png" height="450" width="1000">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What's host? -->
<br>
<br>
<img src="img/crown.png" height="40" width="100" alt="symbol" class="center-block">
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2 class="riesling">What's Hot</h2>
        </div>
        <div class="col-md-9">
            <ul class="nav navbar-nav pull-right" id="category">
                <li class="active">
                    <a href="#">Show All</a>
                </li>
                <li>
                    <a href="#">Chicken</a>
                </li>
                <li class="active">
                    <a href="#">Hamburger</a>
                </li>
                <li>
                    <a href="#">Sea Foods</a>
                </li>
                <li class="active">
                    <a href="#">Cocktails</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<br>
<!-- Product -->
<div class="container">
    <p class="line-dashed"></p>
    <div class="row">
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product12.jpg" class="img-thumbnail" height="200" width="300" alt="1"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product13.jpg" class="img-thumbnail" height="200" width="300" alt="2"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product14.jpg" class="img-thumbnail" height="200" width="300" alt="3"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product15.jpg" class="img-thumbnail" height="200" width="300" alt="3"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
    </div>
    <br><br>
    <p class="line-dashed"></p>
    <div class="row">
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product15.jpg" class="img-thumbnail" height="200" width="300" alt="4"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product16.jpg" class="img-thumbnail" height="200" width="300" alt="5"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product11.png" class="img-thumbnail" height="200" width="300" alt="6"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product9.jpg" class="img-thumbnail" height="200" width="300" alt="9"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
    </div>
    <br><br>
    <p class="line-dashed"></p>
    <div class="row">
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product9.jpg" class="img-thumbnail" height="200" width="300" alt="9"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product10.jpg" class="img-thumbnail" height="200" width="300" alt="10"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product11.png" class="img-thumbnail" height="200" width="300" alt="11"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="products">
                <a href="#"><img src="img/product9.jpg" class="img-thumbnail" height="200" width="300" alt="9"></a>
                <a href="#" class="name-product">Vegetables Main Dish</a>
                <p class="price">$49.00</p>
                <div class="rate">
                    <ul class="list-unstyled list-inline">
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="1"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="2"></li>
                        <li><img src="{{ asset('img/active_rating.png') }}" height="25" width="26" alt="3"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="4"></li>
                        <li><img src="{{ asset('img/disable_rating.png') }}" height="25" width="26" alt="5"></li>
                    </ul>
                </div>
                <a type="button" class="btn btn-danger purchase"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Order Now</a>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<p class="line-dashed"></p>
<br><br><br>
@stop