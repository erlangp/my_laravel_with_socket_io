<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socket.io Client Sample</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Socket.io Client Sample
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js"></script>
        -->
        <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            // var socket = io('http://127.0.0.1:6001');
            // socket.emit('event-name', { for: 'everyone' });
            // socket.on('connection', function (socket) {
            //     console.log('a user connected');
            //     socket.on('disconnect', function(){
            //         console.log('user disconnected');
            //     });
            // });
            // socket.on('event-name', function (socket) {
            //     console.log('an event received');
            // });
        </script>
        <script>
            console.log(Echo);
            console.log(io);

            Echo.channel('orders')
                .listen('OrderCreatedEvent', (e) => {
                    console.log('event=', e);
                });
            console.log('Test hello from app.js');
        </script>
    </body>
</html>
