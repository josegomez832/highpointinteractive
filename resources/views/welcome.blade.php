<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HighPoint Interactive | Greater Houston Digital Agency</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/bootstrap-grid.css" />

        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171081579-1"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-171081579-1');
            </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="img/highpointlogo.png" />
                <div class="title m-b-md">
                    <span class="teal">High</span>Point Interactive 
                </div>
                <h3>Digital Marketing Services</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Reach out for a consultation</h3>
                        </div>
                        <div class="col-md-7 offset-2">
                                <form method="POST" action="/posts">
                                    {{ csrf_field() }} <? //Must have for all forms ?>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Publish</button>
                                    </div>
                                        <!--this can be repeated for any and all forms (validation)-->
                                        <?php //include ('layouts.errors') ?>
                                    </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
