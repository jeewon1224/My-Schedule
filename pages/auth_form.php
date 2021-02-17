<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authorization</title>
  <link rel="stylesheet" href="/myschedule/css/reset.css">

  <style>
    .authWrap{width:100%; height:100vh; background: #f8f8f8; display:flex; justify-content:center; align-items:center;}

    .authForm input{width:200px; height:35px; border:1px solid #008c8c; outline:0; padding:5px; display:block; float:left; margin-right:5px;}

    .authForm button{width:100px; height:35px; border:1px solid #008c8c; background:#008c8c; color:#fff; text-align:center; display:block; float:left;}

  </style>
</head>


<body>
  <div class="authWrap">
    <form action="/myschedule/php/auth.php" name="authForm" class="authForm">
      <input type="password" placeholder="인증코드를 입력해 주세요." name="authCode">
      <button type="submit">저장하기</button>
    </form>
  </div>
</body>
</html>