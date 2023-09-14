<!DOCTYPE html>
<html lang="ko-KR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="막막한 상황, 모두의장례가 함께 합니다. 장례식장, 장지(납골당) 추천부터 상조 서비스, 장례 상담, 임종 접수까지. 장례의 모든것, 모두의장례">
    <meta name="keywords" content="장례, 장례식, 가족장, 무빈소장례, 장례지도사, 장례식장, 장례 비용, 모두의장례, 모두의장례장례연구소, 상조, 상조 회사, 상조회, 상조가입, 상조추천, 후불제상조, 장례상조, 상조서비스, 장례식 절차, 장례 절차, 임종, 고인, 빈소, 임종">
    <meta name="author" content="모두의장례">
    <meta property="og:locale" content="ko_KR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="장례의 모든 것, 모두의장례">
    <meta property="og:title" content="장례의 모든 것, 모두의장례">
    <meta property="og:description" content="막막한 상황, 모두의장례가 함께 합니다. 장례식장, 장지(납골당) 추천부터 상조 서비스, 장례 상담, 임종 접수까지. 장례의 모든것, 모두의장례">
    <meta property="og:image" content="img/default_img.jpg"> 
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" >
      <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" /> 
    <!--Font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/variable/pretendardvariable.css" /> 
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!--JS-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/basic.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script> 
    <!--Datepicker-->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>  
     <script>
        $(function(){
          var includes1 = $('[data-include1="header"]');
          var includes2 = $('[data-include2="lease_info"]');
           jQuery.each(includes1, function(){
             $(this).load('include/header.html');
          });
          jQuery.each(includes2, function(){
            $(this).load('include/lease_info.html');
          });
          
        });
     </script> 
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <title>모두의 장례</title>
</head>
<body> 
<div class="page_fixed">  
<button class="btn btn-dark btn-sm rounded-circle" id="dark-button">
    <span class="material-symbols-outlined">dark_mode</span>
</button>
<button class="btn btn-primary btn-sm rounded-circle" id="light-button">
    <span class="material-symbols-outlined">
        light_mode
    </span>
</button>
</div>
<!--wrap s-->
 <div id="wrap">
