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
    $(this).toggleClass("on");

    if($(this).hasClass("on")){
      $(".depth-1").slideDown('fast');  
    }else{
      $(".depth-1").slideUp('fast');  
    }
  });


  // hidden input show and hide
  $(".updateConBtn").click(function(){
    $(this).toggleClass("on");

    if($(this).hasClass("on")){
      $(this).text("수정 취소");

      $(".hiddenTit, .hiddenCon, .subBtn").show();
      $(".detailTit h2, .boCon em").hide();
      
    }else{
      $(this).text("진행 상황 수정");

      $(".hiddenTit, .hiddenCon, .subBtn").hide();
      $(".detailTit h2, .boCon em").show();

    }
  });
});