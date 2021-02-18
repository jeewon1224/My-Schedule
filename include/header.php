<?php
  session_start();
  if(isset($_SESSION['usercode'])){
    $usercode=$_SESSION['usercode'];
    // setcookie=('PHPSESSID','tmv0h5ku6np7413b2o2ujv7jao','time() + 5','/');

  }else{
    echo "
      <script>
        location.href='/myschedule/pages/auth_form.php';
      </script>
    ";
  }

?>    
    
    
    
    <header>
      <div class="center headerWrap">
        <a href="/myschedule/php/sign_out.php"><i class="fa fa-sign-out"></i></a>
 
        <h1 id="title">Schedule Dashboard</h1>
        <div class="mIcon">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="hiddenHeader">
          <ul class="depth-1">
            <li><a href="/myschedule/index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="/myschedule/pages/input_form.php"><i class="fa fa-pencil"></i></a></li>
            <li><a href="/myschedule/pages/sch_view.php?key=view_all"><i class="fa fa-search"></i></a></li>
          </ul>

        </div>
        <!-- end of hidden header -->

      </div>
      <!-- end of header wrap -->
    </header>

    
