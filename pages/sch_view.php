<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Board</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="/myschedule/css/reset.css">
  <link rel="stylesheet" href="/myschedule/css/style.css">
  <link rel="stylesheet" href="/myschedule/css/media.css">
</head>
<body>
  <!-- all contents are wrapped inside wrap class -->
  <div class="wrap">
    <!-- header -->


    <?php
      include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/header.php";
    ?>
    <!-- <header>
      <div class="center headerWrap">
        <span></span>
        비어있는 span(비어있는 스팬을 주는 이유는 h1을 중앙으로 밀어주기 위함!)에 flex end 값을 주면 span, h1m mIcon 세 요소가 차례대로 + 같은 넓이로 정렬된다.
        <h1>Schedule Dashboard</h1>
        <div class="mIcon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header> -->
    <!-- 헤더는 잘라서 인클루드>헤더.php로 옮기고 인클루드로 연결 -->


    <?php
      include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
      $sql="select * from schedule_progress";

      $sch_result=mysqli_query($dbConn, $sql);
      $sch_row=mysqli_fetch_array($sch_result);

      $sch_db=$sch_row['sch_db'];
      $sch_api=$sch_row['sch_api'];
      $sch_ren=$sch_row['sch_ren'];
      $sch_pla=$sch_row['sch_pla'];
    ?>


    <!-- container -->
    <div class="center gridWrap">
      <!-- <form action="/myschedule/php/update_rate.php" method="get" name="updateRate"> -->
        <div class="inputContainer">


      <!-- 진행상황 그래프 (상단 그리드) 인클루드 연결 -->
        <?php
          include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/latest_date.php";
          include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/grid_up.php";
          

        ?>
        
          <div class="item boardBox">
            
<!-- @@@@@@@@@@@@@view_all.php@@@@@@@@@@@ 로 옮김 -->
            <?php
            $include_path=$_GET['key'];
            include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/$include_path.php";
            ?>

          </div>
          <!-- item을 하나 더 추가! -->

          <div class="item btns">
            <!-- <button type="submit">진행률 수정</button> -->
            <a href="/myschedule/pages/input_form.php" class="schInput" >진행 상황 작성</a>
            <!-- <button type="button">진행 상황 확인</button> -->
          </div>

          

        </div>
        <!-- end of container -->

      <!-- </form> -->

    </div>
    <!-- end of center -->




    <!-- footer -->
    <?php
      include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/footer.php";
    ?>
    <!-- <footer>
      <p>Designed by MyDesign : mydesign@no-site.com</p>
    </footer> -->

  </div>
  <!-- end of wrap -->




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src="/myschedule/js/piechart.js"></script>
  <script src="/myschedule/js/custom.js"></script>
  <script src="/myschedule/js/total_avg.js"></script>
 
  <script>
   $(".boardList").hide();
   $(".boardList").slice(0, 5).show();

   $(".loadMore button").click(function(){
    $(".boardList:hidden").slice(0, 5).show();
   });
  </script>
</body>
</html>