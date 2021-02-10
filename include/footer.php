<footer>
    <p>Designed by MyDesign : mydesign@no-site.com</p>
</footer>




<!-- <script>
  const rateNum=document.querySelectorAll('.rateNum');

  for(let i=0; i<rateNum.length; i++){
    console.log(rateNum[i]);
  }
</script> -->


<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelector('#title');
  const rateNum = document.querySelectorAll('.rateNum');
  
  
  if(pathname.includes('input_form')){ //path 네임에 input_form가 있으면
    changeTit.innerHTML="Schedule Input";
    
    for(let i=0; i<rateNum.length; i++){
       rateNum[i].readOnly = true;
  } 
  };
</script>
