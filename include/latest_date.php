<?php
// database project 최근 날짜 
$db_data_sql="select * from sch_txt where sch_txt_cate='dbProject' order by sch_txt_num desc limit 1";
$db_date_result=mysqli_query($dbConn, $db_data_sql);
$db_date_row=mysqli_fetch_array($db_date_result);
$db_date=$db_date_row['sch_txt_reg'];

 // api project 최근 날짜 
 $api_data_sql="select * from sch_txt where sch_txt_cate='apiProject' order by sch_txt_num desc limit 1";
 $api_date_result=mysqli_query($dbConn, $api_data_sql);
 $api_date_row=mysqli_fetch_array($api_date_result);
 $api_date=$api_date_row['sch_txt_reg'];

 // renewal project 최근 날짜 
 $ren_data_sql="select * from sch_txt where sch_txt_cate='renealProject' order by sch_txt_num desc limit 1";
 $ren_date_result=mysqli_query($dbConn, $ren_data_sql);
 $ren_date_row=mysqli_fetch_array($ren_date_result);
 $ren_date=$ren_date_row['sch_txt_reg'];

 // web planning project 최근 날짜 
 $web_data_sql="select * from sch_txt where sch_txt_cate='webProject' order by sch_txt_num desc limit 1";
 $web_date_result=mysqli_query($dbConn, $web_data_sql);
 $web_date_row=mysqli_fetch_array($web_date_result);
 $web_date=$web_date_row['sch_txt_reg'];


?>