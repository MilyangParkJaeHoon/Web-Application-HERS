<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hanyang Erica Rental Site</title>
    <!-- <link rel="stylesheet" href="../Front_end/futsal_reserve_page/futsal_reserv.css"> -->
    <!-- <link rel="stylesheet" href="../Front_end/main/main.css"> -->
    <link rel="stylesheet" href="../futsal_reserve_page/reservation_lists.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script type="text/javascript"src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function(){
      $("#menuicon").click(function () {
        $("#menubar").animate({left: 0}, 300 );
        $("#xicon").animate({left: 0}, 300 );
        $("#menuicon").fadeOut(300);
      });

      $("#xicon").click(function () {
        $("#menubar").animate({left: "-25%"}, 300 );
        $("#xicon").animate({left: "-25%"}, 300 );
        $("#menuicon").fadeIn(300);
      });

    });
  </script>
  </head>
  <body>
    <header>
    <h1><a href="../main/main.html">HERS</a></h1>
    <hr/>
  </header>

  <a id="menuicon"><svg class="menusvg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 125" x="0px" y="0px"><title>54 all</title><path d="M74.46,49H25.54a1,1,0,0,0,0,2H74.46a1,1,0,0,0,0-2Z"/><path d="M74.46,28.73H25.54a1,1,0,0,0,0,2H74.46a1,1,0,0,0,0-2Z"/><path d="M74.46,69.27H25.54a1,1,0,1,0,0,2H74.46a1,1,0,1,0,0-2Z"/>
  </svg></a>

  <a id="xicon"><svg class="menusvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 125" version="1.1" x="0px" y="0px"><title>Bold Cross</title><desc>Created with Sketch.</desc><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill="#000000"><path d="M48,48 L48,18.8873016 C48,17.7827321 48.8954305,16.8873016 50,16.8873016 C51.1045695,16.8873016 52,17.7827321 52,18.8873016 L52,48 L81.1126984,48 C82.2172679,48 83.1126984,48.8954305 83.1126984,50 C83.1126984,51.1045695 82.2172679,52 81.1126984,52 L52,52 L52,81.1126984 C52,82.2172679 51.1045695,83.1126984 50,83.1126984 C48.8954305,83.1126984 48,82.2172679 48,81.1126984 L48,52 L18.8873016,52 C17.7827321,52 16.8873016,51.1045695 16.8873016,50 C16.8873016,48.8954305 17.7827321,48 18.8873016,48 L48,48 L48,48 Z" transform="translate(50.000000, 50.000000) rotate(45.000000) translate(-50.000000, -50.000000) "/></g></g>
  </svg></a>

  <nav id="menubar">
    <dl>
      <dt id="title">HERS</dt>

      <dt>MAIN</dt><hr color="black">
      <dd>
        <ul class="menus">
          <li><a href="main.html">Home</a></li>
          <li><a href="../about/about.html">About Us</a></li>
        </ul>
      </dd>

      <dt>USER</dt><hr color="black">
      <dd>
        <ul class="menus">
          <li><a href="#">Login</a></li>
          <li><a href="#">Logout</a></li>
          <li><a href="../mypage/mypage.html">My Page</a></li>
        </ul>
      </dd>

      <dt>RENTAL</dt><hr color="black">
      <dd>
        <ul class="menus">
          <li><a href="../futsal-comfirmation/futconfirm.html">Futsal Confirmation</a></li>
          <li><a href="../futsal/futmain2.php">Futsal Field Rental</a></li>
        </ul>
      </dd>
    </dl>

  </nav>

  <div class="user">
    <p>Signed In as (USER)</p>
  </div>
    <!-- db에서 유저 아이디 써서 예약 내역 불러옴 -->
    