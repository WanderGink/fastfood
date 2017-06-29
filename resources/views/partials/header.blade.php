<header >
    <!-- Topbar  -->
    <div class="topbar">
                <div class="container">
                    <div class="pull-left">
                        <ul class="list-unstyled list-inline" style="font-size: 0.9em; color:#ffffff">
                            <li><img src="{{ asset('img/gmail.png') }}" class="img-circle" alt="">&nbsp;&nbsp;fastfood@gmail.com</li>
                            <li><img src="{{ asset('img/phone.png') }}" height="32" class="img-circle" width="32" alt="">&nbsp;&nbsp;01659690599</li>
                        </ul>
                    </div>
                    <div id="menu-right">
                        <ul class="nav navbar-nav navbar-right">
                                @if(\Auth::guest())
                                <li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
                                <li><a href="{{ url('/auth/register') }}"><i class="fa fa-user"></i>&nbsp;&nbsp;Register</a></li>
                                @else

                                <li><a href="{{ route('fastfood.edit') }}">My Account</a></li>
                                <li><a href="{{ route('fastfood.donhang') }}">My Cart</a></li>
                                <li><a href="{{ route('fastfood.edit') }}">{{ \Auth::user()->name }}</a></li>
                                <li><a href="#" style="padding-left: 0px; padding-right: 0px;">|</a></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </div>
                    
                </div>
    </div>
    <!-- Header  -->
    <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="logo">Fast<span style="color:#F42D2D !important">Food</span></p>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-search" placeholder="Search..." style="margin-right: 0px">
                                            <div class="input-group-addon">
                                                <i class="fa fa-search" style="color:#F42D2D"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </div>

    <!-- Menu bar -->
    <div class="menu">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            @yield('FF')
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <form action="{{ route('fastfood.search') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                            <li id="id0" style="padding-left: 5px;"><a href="{{ route('fastfood.index', 'Mon-khai-vi') }}">Desserts</a></li>
                            <li id="id1" style="padding-left: 5px;"><a href="{{ route('fastfood.index', 'Salad') }}">Salad</a></li>
                            <li id="id2" style="padding-left: 5px;"><a href="{{ route('fastfood.index', 'Pizza') }}">Pizza</a></li>
                            <li id="id3" style="padding-left: 5px;"><a href="{{ route('fastfood.index', 'Soup') }}">Soup</a></li>
                            <li id="id4" style="padding-left: 5px;"><a href="{{ route('fastfood.index', 'Com') }}">Cơm</a></li>
                            <li id="id5" style="padding-left: 5px;"><a href="{{ route('fastfood.index', 'My-Y') }}">Mỳ Ý</a></li>
                            
                            <li id="id6"><input type="text" name="search" class="form-search" placeholder="Search for here..." style="margin-right: 0px; margin-top: 3px;"></li>
                            <li id="id7"><img src="{{ asset('img/search.png') }}" style="margin-top: 3px;"></li>
                            {{--@yield('search')--}}
                        </ul>
                        </form>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
</header>