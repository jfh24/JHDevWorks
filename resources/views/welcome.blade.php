<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JH DevWorks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .button{
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
              }
              .button:active{
                transform: translateY(6px);
              }

            .button:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 1s;
              }

              .button:hover  {
                padding-right: 15px;
              }

              .button:hover:after {
                opacity: 1;
                right: 0;
              }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    JH De<a style="text-decoration: none; cursor: text; color: #636b6f;" href="{{ route('login') }}">v</a>Works
                </div>
                <h4 class="button"><a style="border-radius: 6px; box-shadow: 6px 6px 12px .1px #636b6f;padding:2px; font-size: 14px; text-decoration: none; color: #636b6f;" href="{{ route('about') }}">Enter</a></h4>
                <div class="links">

                </div>
            </div>
        </div>
    </body>
</html>
