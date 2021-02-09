<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schedule Dashboard</title>


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
    <header>
      <div class="center headerWrap">
        <span></span>
        <!-- 비어있는 span(비어있는 스팬을 주는 이유는 h1을 중앙으로 밀어주기 위함!)에 flex end 값을 주면 span, h1m mIcon 세 요소가 차례대로 + 같은 넓이로 정렬된다. -->
        <h1>Schedule Dashboard</h1>
        <div class="mIcon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

    <!-- container -->
    <div class="center">
      <div class="container">
        <div class="item">
          <section class="graph-circle">
            <div class="circle-graph-container">
              <div class="circle-graph easyPieChart" data-percent="60">
                <p>60%</p>
                <!-- <canvas width="269" height="269" style="width: 150px; height: 150px;"></canvas> -->
              </div>
            </div>
            <p class="totalTit">Total Process Rates</p>
          </section>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-database"></i>
          </div>
          <div class="pfContents">
            <h3>Database Project</h3>
            <p>Progress Rate : <b class="rateNum">90</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
        <div class="pfImg">
            <i class="fa fa-thermometer"></i>
          </div>
          <div class="pfContents">
            <h3>API Project</h3>
            <p>Progress Rate : <b class="rateNum">70</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
        <div class="pfImg">
            <i class="fa fa-clone"></i>
          </div>
          <div class="pfContents">
            <h3>Renewal Project</h3>
            <p>Progress Rate : <b class="rateNum">30</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
        <div class="pfImg">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="pfContents">
            <h3>Web Planning Project</h3>
            <p>Progress Rate : <b class="rateNum">10</b>% || Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar"></div>
      </div>
    </div>
  </div>
  <!-- end of wrap -->




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src="/myschedule/js/piechart.js"></script>
  <script src="/myschedule/js/custom.js"></script>

</body>
</html>