$(function() {


  let pieSize=250;
  let liWidth=$(window).width();
  let clear;
  
  if(liWidth>400){
    pieSize=250;

  }else{
    pieSize=180;
  }

  console.log(pieSize);


  $('.circle-graph').easyPieChart({
    scaleColor: false,
    lineWidth: 40,
    // lineCap: 'butt',
    barColor: '#00008c',
    trackColor: '#cccccc' ,
    size: pieSize,
    lineCap: 'round', //Can be butt
    animate: 1200
  });

  $(window).resize(function(){
    let liWidth=$(window).width();

    if(liWidth>400){
      pieSize=250;
  
    }else{
      pieSize=180;
    }


    clear=setTimeout(function(){

      $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
      $('.circle-graph').easyPieChart({
          scaleColor: false,
          lineWidth: 40,
          lineCap: 'round', //Can be butt
          barColor: '#00008c',
          trackColor: '#cccccc' ,
          size: pieSize,
          animate: 1 //여기서 1로 바꾸지 않으면 윈도우 사이즈 바뀔 때 마다 파이차트가 갱신된다
      });


    },150);
  });
});