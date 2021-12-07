<!DOCTYPE html>
<html>
    <style>
        body{
            background-image: url('original123.jpg');
            -webkit-backface-visibility: hidden;
            -webkit-perspective: 1000;
            -webkit-transform: translate3d(0,0,0);
            overflow:hidden;
            user-select: none; 
            -webkit-user-select: none; 
            -khtml-user-select: none; 
            -moz-user-select: none; 
            -ms-user-select: none; 
        }    
        div {
            display:inline-block;
            overflow:hidden;
            font-style: oblique;
            font-family: 'Courier New', Courier, monospace;
            color: white;
            text-align: center;
            font-size: 100px;
        }

        div:first-of-type {
        animation: showup 10s;
        }
        @keyframes showup {
        0% {opacity:0;}
        30% {opacity: 0.25}
        50% {opacity: 0.5;}
        65% {opacity: 1;}
        80% {opacity:1;}
        100% {opacity:1;}
        }
        img:first-of-type{
            animation: showup 10s;
        }
    </style>
<head>
    <meta charset="utf-8"/>
    <title>Welcome</title>
</head>
<body style="margin-top: 110px;margin-left: 8px;">
    <div>
        Welcome To The Mars Rover Experience
    </div>
    <a href="login.php" style="margin-left: 45px;">
  <img src="Astronaut Walk.gif" style="height: 400px;margin-left: 675px;width: 500px;margin-top: 40px;">
    </a>
</body>