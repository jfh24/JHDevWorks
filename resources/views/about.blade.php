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
                max-width: 100%;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .title {
                font-size: 64px;
                width: inherit;
                text-align: center;
            }
            .container{
              padding: 25px;
              text-align: center;
            }
            .pan-right{
              margin-left: 30%;
            }

            .home_link {
                color: #636b6f;
                padding: 0 25px;
                font-size: 10px;
                font-weight: 600;
                margin-top: 12px;
                float: left;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
          @media screen and (max-width: 600px) {
              div.main_image{
                display: none;
              }
          }
          .services{
            text-align: left;
            color: #636b6f;
            padding: 0 25px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2rem;
            text-decoration: none;
            width: inherit;
            width: 90%;
            box-shadow: 1px 1px 10px 0px #000000;
          }
          div.services ul a img{
            max-width: 100px;
            max-height: 100px;
            margin-right: 25%;

          }
              .main_image{
                display: inline;
                max-width: 300px;
                max-height: 300px;
              }
        </style>
    </head>
    <body>
      <a class="home_link" href="{{ url('/') }}">
        JH DevWorks
      </a><br>
      <div class="container">
        <p class="title">Hello, I'm Joshua Helt!<img class="main_image"src="{{asset('images/joshua.png')}}" alt="Joshua F. Helt[img]"></p>
        <p> My focus is on developing innovative software solutions to solve real world business issues. <br>I excel in quick learning and application of new concepts and pride myself on understanding the structure of Technologies.</p>
        <br>

      </div>
  </body>
</html>
