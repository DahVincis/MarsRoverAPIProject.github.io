<!DOCTYPE HTML>  
<html>
<style>
        body { 
        background-image:url('original123.jpg'); 
        background-size:auto; 
        text-align: justify;
        color: whitesmoke;
        font-family: 'Courier New', Courier, monospace;
        user-select: none; /* supported by Chrome and Opera */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        
        }

        form{
        text-align: center;   
        }

        h2{
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        color: whitesmoke; 
        }
        .submit{
        font-size: x-large;
        background-color: #02035a;
        color: whitesmoke;
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;
        cursor: pointer;
        }
        .submit:hover{
        background-image: url("original.gif");
        cursor: pointer;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        h1{
        text-align: center;
        font-family: 'Courier New', Courier, monospace; 
        }
        img{
        padding-left: 50px;
        padding-top: 10px;
        padding-right: 50px;
        padding-bottom: 10px;
        height: 500px;
        }
        div{
        background: rgb(255, 255, 255, 0.1);
        margin: 50px auto;
        width: 300px;
        padding: 30px, 25x;
        }
        
</style>
<head>
<title>Nasa API Images</title>
</head>
<body>
<div>
<h1>The Mars Curiosity Rover</h1>
<h2> Year Desired </h2>
<form method= "post" action= "Index.php"> 
<input type="checkbox" id="Tsix" name="Tsix" value="2016">
<label for="Tsix"> 2016 </label><br>
<form method= "post" action= "Index.php"> 
<input type="checkbox" id="Tseven" name="Tseven" value="2017">
<label for="Tseven"> 2017 </label><br>
<form method= "post" action= "Index.php"> 
<input type="checkbox" id="Teight" name="Teight" value="2018">
<label for="Teight"> 2018 </label><br>
<input type="checkbox" id="Tnine" name="Tnine" value="2019">
<label for="Tnine"> 2019 </label><br>
<input type="checkbox" id="Ttwenty" name="Ttwenty" value="2020">
<label for="Ttwenty"> 2020 </label><br>

<h2> Camera Desired </h2>
<input type="checkbox" id="mahli" name="mahli" value="mahli" style="margin-left: 11px;">
<label for="mahli"> MAHLI </label><br>
<input type="checkbox" id="FHAZ" name="FHAZ" value="FHAZ" style="margin-left: 3px;">
<label for="FHAZ"> FHAZ </label><br>
<input type="checkbox" id="NAVCAM" name="NAVCAM" value="NAVCAM" style="margin-left: 22px;">
<label for="NAVCAM"> NAVCAM </label><br>
<input type="checkbox" id="CHEMCAM" name="CHEMCAM" value="CHEMCAM" style="margin-left: 31px;">
<label for="CHEMCAM"> CHEMCAM </label><br>
<input type="checkbox" id="RHAZ" name="RHAZ" value="RHAZ"style="margin-left: 3px;">
<label for="RHAZ"> RHAZ </label><br>
<br><input class='submit' type="submit" name="submit" value="Submit" style="margin-left: 26px;padding-left: 40px;padding-right: 40px;margin-right: 9px;margin-top: 20px;padding-bottom: 0px;margin-bottom: 30px;">
</form>
</div>

</body>
</html>

<?php
if(isset($_POST['FHAZ'])){
        $camera = "FHAZ";
                if(isset($_POST['Tsix'])){
                        $date = "2016-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tseven'])){
                        $date = "2017-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Teight'])){
                        $date = "2018-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tnine'])){
                        $date = "2019-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Ttwenty'])){
                        $date = "2020-01-01";
                        include 'JSONPrint.php';
                }
}


if(isset($_POST['mahli'])){
        $camera = "MAHLI";
                if(isset($_POST['Tsix'])){
                        $date = "2016-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tseven'])){
                        $date = "2017-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Teight'])){
                        $date = "2018-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tnine'])){
                        $date = "2019-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Ttwenty'])){
                        $date = "2020-01-01";
                        include 'JSONPrint.php';
                }
}

if(isset($_POST['NAVCAM'])){
        $camera = "NAVCAM";
                if(isset($_POST['Tsix'])){
                        $date = "2016-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tseven'])){
                        $date = "2017-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Teight'])){
                        $date = "2018-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tnine'])){
                        $date = "2019-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Ttwenty'])){
                        $date = "2020-01-01";
                        include 'JSONPrint.php';
                }
}

if(isset($_POST['CHEMCAM'])){
        $camera = "CHEMCAM";
                if(isset($_POST['Tsix'])){
                        $date = "2016-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tseven'])){
                        $date = "2017-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Teight'])){
                        $date = "2018-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tnine'])){
                        $date = "2019-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Ttwenty'])){
                        $date = "2020-01-01";
                        include 'JSONPrint.php';
                }
}

if(isset($_POST['RHAZ'])){
        $camera = "RHAZ";
                if(isset($_POST['Tsix'])){
                        $date = "2016-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tseven'])){
                        $date = "2017-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Teight'])){
                        $date = "2018-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Tnine'])){
                        $date = "2019-01-01";
                        include 'JSONPrint.php';
                }
                if(isset($_POST['Ttwenty'])){
                        $date = "2020-01-01";
                        include 'JSONPrint.php';
                }
}
?>

