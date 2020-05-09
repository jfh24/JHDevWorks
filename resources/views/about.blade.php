<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JH DevWorks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script type="text/javascript">


              function scroll_function(){
                mybutton = document.getElementById("back2top");
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                      mybutton.style.display = "block";

                } else {
                      mybutton.style.display = "none";

                }
              };
        </script>

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
            #animated_title{
              animation: FadeIn 1.5s;
            }
          .content{
            animation: FadeIn 3s;
          }
          .container{
              padding: 25px;
              text-align: center;
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
          .main_image{
            animation: FadeIn .5s;
            animation: Enlarge .5s;
            display: inline;
            max-width: 300px;
            max-height: 300px;
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
              position: absolute;
              opacity: 0;
              top: 0;
              right: -10px;
              transition: 1s;
            }

            .button:hover  {
              padding-left: 5px;
            }
            @@keyframes Enlarge {
              from{
                width: 200px;
                height: 200px;
              }
              to{
                width: 300px;
                Height: 300px;
              }
            }
            @keyframes FadeIn {
              from{
                opacity: 0;
              }
              to{
                opacity: 1;
              }
            }
            .button:hover:after {
              opacity: 1;
              left: 0;
            }
            .nav {
              background-image: url(/images/concrete_wall.PNG);
              background-size: auto;
              background-attachment: fixed;
              text-align: center;
              font-weight: 800;
              height: 50px;
              color: #577a82;
              padding: auto;
              padding-left: 5%;
              padding-right: 5%;
              margin-left: -2.5%;
              clip-path: polygon(
                10% 0, /* left top */
                100% 0, /* right top */
                90% 100%, /* right bottom */
                0 100% /* left bottom */
              );
            }
            .col-sm a:hover{
              text-decoration: none;
              color: #577a82;
            }
            .col-sm a:active{
              text-decoration: none;
              color: #577a82;
            }
            .col-sm a:after{
              text-decoration: none;
              color: #577a82;
            }
            .col-sm a:visited{
              text-decoration: none;
              color: #577a82;
            }
            .col-sm a{
              text-decoration: none;
              color: #577a82;
            }
           .back2top{
             display: block;
             z-index: 1000;
             margin-left: 92%;
            }
        </style>
    </head>
    <body onscroll="scroll_function()">
      <a class="button home_link" id="home_link" href="{{ url('/') }}">
        JH DevWorks
      </a><br>

      <div class="container">
        <p class="title" id="animated_title">Hello, I'm Joshua Helt!<img class="main_image"src="{{asset('images/joshua.png')}}" alt="Joshua F. Helt[img]"></p>
        <div class="content">
        <p> My focus is on developing innovative software solutions to solve real world business issues. <br>I excel in quick learning and application of new concepts and pride myself on understanding the structure of Technologies.</p>
        <br>
        <h3>How can I help you today?</h3><br>
        <div class="row">
          <div class="button col-sm nav">
            <a href="{{url('/about#PDC')}}">Project Design <br> Consulting</a>
          </div>
            <div class="button col-sm nav">
           <a href="{{url('/about#WD')}}">Full Stack <br> Web Development</a>
          </div>
            <div class="button col-sm nav">
            <a href="{{url('/about#QA')}}">QA Testing <br> & Bug Fixes</a>
          </div>
          <div class="button col-sm nav">
            <a href="{{url('/about#WMU')}}">Website Maintenance <br> & Upgrades</a>
        </div>
      </div>
      <div id="PDC" class="row">
        <div class="col-sm">
          <img class="main_image"src="{{asset('images/joshua.png')}}" alt="Joshua F. Helt[img]"><br>
          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </div>
        </div>
        <br>
        <div id="WD" class="row">
          <div class="col-sm">
            <img class="main_image"src="{{asset('images/joshua.png')}}" alt="Joshua F. Helt[img]"><br>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
            </div>
          </div>
          <br>
        <div id="QA" class="row">
          <div class="col-sm">
            <img class="main_image"src="{{asset('images/joshua.png')}}" alt="Joshua F. Helt[img]"><br>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          </div>
          </div>
          <br>
        <div id="WMU" class="row">
          <div class="col-sm">
            <img class="main_image"src="{{asset('images/joshua.png')}}" alt="Joshua F. Helt[img]"><br>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          </div>
          </div>
        </div>

    </div>
    <a href="{{route('about')}}" id="back2top" class="button back2top">Back to the Top</a>
  </body>
</html>
