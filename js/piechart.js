$(function() {
  $('.circle-graph').easyPieChart({
    scaleColor: false,
    lineWidth: 40,
    // lineCap: 'butt',
    barColor: '#00008c',
    trackColor: '#cccccc' ,
    size: 250,
    lineCap: 'round', //Can be butt
    animate: 800
  });
});