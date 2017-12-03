<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <header>
          <h1><a href="#home">HERS</a></h1>
          <hr/>
        </header>
        <nav>
          <ul>
            <li><a href="../Front_End/main/main.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
    </header>

    <meta charset="utf-8">
    <title>Hanyang Erica Rental Site</title>
    
    <link rel="stylesheet" href="reserv_finish.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    try{
      $_SESSION['place'] = $_GET['where'];
      if(!isset($_SESSION['user_id'])){
           echo "<script>alert('로그인이 필요합니다!');location.href='../Front_End/futsal/futmain2.php';</script>";
      }

      else{
          $user_id = $_SESSION['user_id'];
          ?>

          <p><?= $user_id ?></p>
          <p ><a href = 'login_function/logout.php'>Logout</a></p>

          <?php
      }      
      $name = "web_project";
      $time = explode(" ",$_POST["time"]);
      $id = $_SESSION['user_id'];
      $borrowdate = $_POST["selected_date"];
      $modifydate = $_SESSION['m_borrowdate'];
      $m_manage_id = $_SESSION['m_manage_id'];
      $start_time = $time[0].":00:00";
      $end_time = $time[1].":00:00";
      $place = $_POST["place"];
      $purpose = $_POST["purpose"];
      $notice = $_POST["notice"];
      if($notice === "on"){
        $notice = 1;
      }
      else{
        $notice = 0;
      }
      $home = $_POST["home"];
      $away = $_POST["away"];
      $population = $_POST["population"];
      $groupname = $_POST["groupname"];
      $db = new PDO("mysql:dbname=$name", "root","root");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if($_SESSION['modify']==1){
        $query1 = "update futsal_manage set borrowdate='$borrowdate',start_time='$start_time',end_time='$end_time',place='$place',purpose='$purpose',notice='$notice',home='$home',away='$away',people=$population,groupname='$groupname' where manage_ID=$m_manage_id and borrowdate='$modifydate'";
      }
      else{
        $query1 = "insert into futsal_manage(user_id, borrowdate, start_time, end_time, place, purpose, notice,home, away, people, groupname) values('$id','$borrowdate','$start_time','$end_time','$place', '$purpose', '$notice','$home','$away',$population, '$groupname')";
      }
      $check_query = "select count(*) from futsal_manage where borrowdate='$borrowdate' and start_time='$start_time' and place='$place'";              
      try{
        $check = $db->query($check_query);
        foreach($check as $a){
          $count = $a['count(*)'];
        }
        $db->query($query1);        
      }
      catch(PDOException $ex){
        echo "detail : ".$ex->getMessage();
      }
      if($_SESSION['modify']==1){
        if($notice){
          try{
            $query2 = "update purpose_view set place='$place', home='$home', away='$away', borrowdate='$borrowdate',start_time='$start_time',end_time='$end_time' where borrowdate='$modifydate' and manage_ID=$m_manage_id";
            $db->query($query2);
          }
          catch(PDOException $ex){
            echo "detail :".$ex->getMessage();
          }
        }
        else{
          try{
            $query2 = "delete from purpose_view where manage_ID=$m_manage_id and borrowdate='$modifydate'";
            $db->query($query2);
          }
          catch(PDOException $ex){
            echo "detail :".$ex->getMessage();
          }
        }
      }
      else{
        if($count==0){
          if($notice){
            try{
              $query2 = "insert into purpose_view values((select manage_ID from futsal_manage where user_id = '$id' and borrowdate = '$borrowdate' and start_time = '$start_time' and end_time = '$end_time'),'$place','$home','$away','$borrowdate','$start_time','$end_time')";
              $db->query($query2);
            }
            catch(PDOException $ex){
              echo "detail :".$ex->getMessage();
            }
          }
        ?>
        <script src="success.js" type = "text/javascript"></script>
      <?php
        $flag = true;
        }
        else{?>
          <script src="fail.js" type = "text/javascript"></script>
    <?php
        $flag = false;
        }
      }
    }
    catch(PDOException $ex){
      echo "Sorry";
      echo "detail :".$ex->getMessage();
    ?>
      <script src="fail.js" type = "text/javascript"></script>
    <?php
      $flag = false;
    }
    ?>
  </head>
  <body>

    <?php
    ?>
    

    <?php
    if($flag){?>
    
    <?php
    }
    else{?>
      
    <?php
    }
    ?>
  </body>
</html>
