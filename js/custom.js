$(function(){

// $(".pfBar").stop().animate({width:'70%'}, 1200);



// 서브 프로젝트 바 애니메이션
for(let i=0; i<$(".subPfBar").length; i++){
  let rateNum = $(".subPfBar").eq(i).find(".rateNum").val();
  $(".subPfBar").eq(i).find(".pfBar").animate({width:rateNum + "%"}, 1200);

}

// console.log($(".subPfBar").eq(0).find(".rateNum").text());




  // header icon control
  $(".mIcon").click(function(){
    $(this).toggleClass("on")

    if($(this).toggleClass("on")){
      $(".depth-1").slideDown('fast');  
    }else{
      $(".depth-1").slideUp('fast');  
    }
  });

});