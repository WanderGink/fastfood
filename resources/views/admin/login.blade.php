<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminCP</title>
        <!-- Import materializecss -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css') }}" media="screen, projection">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    </head>
    <body>
        <p class="center">Admin <span class="text-render">Panel</span></p>
        <div class="form z-depth-3">
            <div class="row">
                <form class="col s12" action="{{ route('admin.check') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix" style="color:#F37934"></i>
                            <input id="icon_prefix" type="text" class="validate" id="user" name="user">
                            <label for="icon_prefix">User Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock prefix" style="color:#F37934"></i>
                            <input id="icon_password" type="password" class="validate" id="pass" name="pass">
                            <label for="icon_password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4 offset-s4 ">
                            <button class="btn waves-effect waves-light" id="btn-bg"type="submit" name="action">Login
                            <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- Import jquery and materialize.js -->
        <script type="text/javascript" src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    </body>
</html>