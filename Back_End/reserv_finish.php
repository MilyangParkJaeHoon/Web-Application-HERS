<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hanyang Erica Rental Site</title>
    <link rel="stylesheet" href="../Front_end/futsal_reserve_page/futsal_reserv.css">
    <link rel="stylesheet" href="../Front_end/main/main.css">
    <link rel="stylesheet" href="../Front_end/futsal_reserv_confirmation.css?ver=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    try{
      $name = "web_project";
      $time = explode(" ",$_POST["time"]);
      $id = "jaehoon";
      $borrowdate = $_POST["selected_date"];
      $start_time = $time.":00";
      $end_time = $time.".:00";
      $place = $_POST["place"];
      $purpose = $_POST["purpose"];
      $notice = $_POST["notice"];
      $home = $_POST["home"];
      $away = $_POST["away"];
      $population = $_POST["population"];
      $groupname = $_POST["groupname"];
      // $query = "insert into futsal_manage (user_id, borrowdate, start_time, end_time, place, purpose, notice,home, away, people, groupname)
      // values ("$id","$borrowdate","$start_time","$end_time","$place", "$purpose", "$notice","$home","$away",$population, "$groupname")";
      $db = new PDO("mysql:dbname=$name", "root","root");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $rows = $db->query($query);
      $flag = true;
    ?>
      <script src="success.js" type = "text/javascript"></script>
    <?php
    }
    catch(PDOException $ex){
    ?>
      <script src="fail.js" type = "text/javascript"></script>
    <?php
      $flag = false;
    }
    ?>
  </head>
  <body>

    <header id="home">
      <h1><a href="#home">HERS</a></h1>
    </header>
    <nav>
      <ul>
        <li><a href="../Front_End/main/main.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <?php
    if($flag){?>
      <!-- 성공한 예약 내역 출력해주세요 -->
    <?php
    }
    else{?>
      <!-- 예약이 이미 차있다고 출력해주고
      예약 다시 진행하게 해주세요 -->
    <?php
    }
    ?>
  </body>
</html>
