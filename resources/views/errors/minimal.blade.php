<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*html, body {*/
            /*    background-color: #fff;*/
            /*    color: #636b6f;*/
            /*    font-family: 'Nunito', sans-serif;*/
            /*    font-weight: 100;*/
            /*    height: 100vh;*/
            /*    margin: 0;*/
            /*}*/

            /*.full-height {*/
            /*    height: 100vh;*/
            /*}*/

            /*.flex-center {*/
            /*    align-items: center;*/
            /*    display: flex;*/
            /*    justify-content: center;*/
            /*}*/

            /*.position-ref {*/
            /*    position: relative;*/
            /*}*/

            /*.code {*/
            /*    border-right: 2px solid;*/
            /*    font-size: 26px;*/
            /*    padding: 0 15px 0 15px;*/
            /*    text-align: center;*/
            /*}*/

            /*.message {*/
            /*    font-size: 18px;*/
            /*    text-align: center;*/
            /*}*/

            *{
                margin:0px;
                padding: 0px;
            }

            body{
                /* height: 100%;
                width: 100%; */
                {{--background-image: url({{asset('public/fixed/images/robot.png') }});--}}
                background-image: url('/fixed/images/robot.png');
                background-color: #7BCBCC;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: 90% 90%;
                background-size: contain;
            }
            .message{
                font-family: 'Montserrat', sans-serif;
                margin-top: 5vh;
                margin-left: 5vw;

            }
            .message h1{
                font-size: 6.5vw;
                margin-bottom: 1vh;
            }
            .message h2{
                margin-left: 1vw;
                font-size: 3.5vw;
                margin-bottom: 1vh;
                font-weight: lighter;
            }
            .message h3{
                margin-left: 2vw;
                font-size: 2.5vw;
                margin-bottom: 2vh;
                font-weight: lighter;

            }
        </style>
    </head>
    <body>
{{--        <div class="flex-center position-ref full-height">--}}
{{--            <div class="code">--}}
{{--                @yield('code')--}}
{{--            </div>--}}

{{--            <div class="message" style="padding: 10px;">--}}
{{--                @yield('message')--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="message">
            <h1>Opps</h1>
            <h2>Aconteceu um erro.</h2>
            <h3>@yield('code') -  @yield('message')</h3>
        </div>
    </body>
</html>
