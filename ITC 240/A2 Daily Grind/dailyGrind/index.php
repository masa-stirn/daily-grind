<?php
$day = date('l');

switch($day){
    case 'Monday':
    $coffee = "Pumpkin spice";
    $bgcolor = "RGBA(245,180,75,0.8)";
    $color = "#F5B44B";
    $img = "pumpkin-spice-coffee.jpg";
    $alt = "yummy pumpkin spice coffee";   
    break;
    
    case 'Tuesday':
    $coffee = "Creamy latte";
    $bgcolor = "RGBA(41,68,110,0.8)";
    $color = "#29446E";
    $img = "creamy-latte.jpg";
    $alt = "yummy creamy latte coffee";   
    break;
       
    case 'Wednesday':
    $coffee = "Minty sip";
    $bgcolor = "RGBA(49,154,122,0.8)";
    $color = "#319A7A";
    $img = "mint-chocolate-cappuchino.jpg";
    $alt = "yummy mint and chocolate coffee";   
    break;
       
    case 'Thursday':
    $coffee = "Espresso mind";
    $bgcolor = "RGBA(110,101,58,0.8)";
    $color = "#6E653A";
    $img = "espresso.jpg";
    $alt = "yummy espresso coffee";   
    break;
        
    case 'Friday':
    $coffee = "Ice latte";
    $bgcolor = "RGBA(99,41,110,0.8)";
    $color = "#63296E";
    $img = "icey-latte.jpg";
    $alt = "yummy ice latte coffee";
    break;
    
    case 'Saturday':
    $coffee = "Drip is hip";
    $bgcolor = "RGBA(69,186,221,0.8)";
    $color = "#45BADD";
    $img = "drip-coffee.jpg";
    $alt = "yummy drip coffee coffee";   
    break;
    
    case 'Sunday':
    $coffee = "ROSE ESPRESSO";
    $bgcolor = "RGBA(191,113,113,0.8)";
    $color = "#BF7171";
    $img = "rose-coffee.jpg";
    $alt = "yummy rose coffee";   
    break;
}

/*
if(Monday)
{//Pumpkin spice, orange
    echo '
        <nav style="color:orange"></nav>
        <p style="color:orange">
        Good morning! We love orange!!
        </p> 
        ';
}elseif(Tuesday){
//Creamy latte, dark blue
        echo '
        <p style="color:red">
        Good afternon! 
        </p>
        ';
}elseif(Wednesday){
//Minty sip, green
        echo '
        <p style="color:blue">
        Good evening! 
        </p>
        ';
}elseif(Thursday){
//Espresso mind, brown
        echo '
        <p style="color:blue">
        Good evening! 
        </p>
        ';
}elseif(Friday){
//Ice latte, viola
        echo '
        <p style="color:blue">
        Good evening! 
        </p>
        ';
}elseif(Saturday){
//Drip is hip, blue
        echo '
        <p style="color:blue">
        Good evening! 
        </p>
        ';
}else{
//Rose espresso, pink
        echo '
        <p style="color:magenta">
        Good night! 
        </p>
        ';
}

echo "$day's coffee is $coffee and the color is $color"
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Coffee</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet">
    <style>
        @font-face {
        font-family: big-john;
        src: url("fonts/big-john.otf") format("opentype");
        }
        *{
            margin:0;
            padding: 0;
        }
        .hero-image{
            position: absolute;
            max-width: 80vw;
            top: 25px;
            left:0;
            right: 0;
            margin: auto;
        }
        nav {
            height: 70px;
            width: 90vw;
            position: absolute;
            top: 40px;
            left:0;
            right: 0;
            margin: auto;
            background-color: RGBA(245,180,75,0.8);
        }
        nav ul {
            display: flex;
            height: inherit;
            justify-content: space-evenly;
            max-width: 70vw;
            margin-left: 30px; 
        }
        nav li {
            list-style: none;
            color: #fff;
            font-family: 'Lato', sans-serif;
            font-size: 15;
            font-weight: 100;
            display: inline-block;
            margin-left: 40px;
            display: flex;
            align-items: center;
        }
        nav li:hover {
            text-decoration: underline;
            cursor: pointer;
        }
        .logo {
            width: 44px;
            color: white;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            left: 30px;
        }
        .icon-box {
            display: flex;
            justify-content: flex-end;
            height: inherit;
            position: absolute;
            right: 20px;
            top: 0;   
        }
        .icons {
            display: flex;
            width: 25px;
            flex-direction: row;
        }
        .weekday {
            font-family: big-john;
            font-size: 1.4em;
            letter-spacing: 1px;
            position: absolute;
            top: 18%;
            left: 14%;
            color: #fff;
        }
        .text-box {
            width: 300px;
            height: 200px;
            background-color: rgba(255,255,255,0.85);
            position: absolute;
            bottom: 5%;
            right: 15%;
        }
        .text-box-title {
            font-family: big-john;
            font-size: 20px;
            text-align: center;
            margin-top: 20px;
            color: RGB(245,180,75);
        }
        .text-box p {
            margin: 15px;
            text-align: center;
            color: #6E653A;
            font-family: "lato", sans-serif;
            font-weight: 300;
        }
        button {
            background-color: RGB(245,180,75);
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px; 
            margin-left: 20px;
            cursor: pointer;
            border-radius: 8px;
            font-family: "lato", sans-serif;
            font-size: 13px;
            width: 120px;
        }
        .btn1{
            background-color: RGB(245,180,75);
            color: #fff,
            border: 1px solid #fff;    
        }
        .btn1:hover{
            background-color: #fff;
            border: none;
            color: RGB(245,180,75);
        }
        .btn2{
            background-color: #fff;
            border: 1px solid RGB(245,180,75);
            color: RGB(245,180,75);
        }
        .btn2:hover{
            background-color: RGB(245,180,75);
            color: #fff;
            border: none;
        }
    </style>
</head>

<body>
  <img class="hero-image" src="images/pumpkin-spice-coffee.jpg" alt="Pumpkin spice coffee.">
   <nav>
       <img class="logo" src="images/coffee-bean-logo-white.png" alt="Our coffee beans logo.">
       <ul>
           <li>COFFEE</li>
           <li>TEA</li>
           <li>MENU</li>
           <li>BLOG</li>
           <li>CONTACT</li>
       </ul>
       <div class="icon-box">
       <img class="icons" src="images/i_search.svg" alt="Search icon">
       <img class="icons" src="images/i_pin.svg" alt="Location icon">
       <img class="icons" src="images/i_profile.svg" alt="Login icon">
       </div>
   </nav>
   <div>
      <h1 class="weekday"><? echo $day; ?>’S SPECIAL</h1>
      <div class="text-box">
          <h1 class="text-box-title">PUMPKIN SPICE</h1>
          <p>Spice up your <? echo $day; ?> with premium cup of pumpkin spice.</p>
          <button class="btn1">TRY</button>
          <button class="btn2">LEARN MORE</button>
      </div>
       
   </div>
</body>
</html>
