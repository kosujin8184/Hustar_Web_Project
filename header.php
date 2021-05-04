<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">

<!--반응형 (기기 해상도별)-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0, maximum-scale=1.0, user-scalable=yes">


<title>WORLD BEER</title>


<script src="./js/jquery-1.12.4.min.js"></script>
<script src="./js/jquery-ui.min.js"></script>

<script src="./js/swiper.min.js"></script>
<link rel="stylesheet" href="./js/swiper.min.css">


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!--스크롤시 fixed-->
<script src="./js/autofix.js"></script>

<!--full page-->
<script src="./js/fullpage.min.js"></script>
<link rel="stylesheet" href="./js/fullpage.min.css">


<link rel="stylesheet" href="./css/style.css">


<!--반응형 (모바일)-->
<link rel="stylesheet" media="screen and (max-width:480px)" href="./css/480.css">
<!--반응형 (태블릿 세로)-->
<link rel="stylesheet" media="screen and (min-width:481px) and (max-width: 720px)" href="./css/720.css">
<!--반응형 (태블릿 가로)-->
<link rel="stylesheet" media="screen and (min-width:721px) and (max-width: 1024px)" href="./css/1024.css">
<!--반응형 (PC)-->
<link rel="stylesheet" media="screen and (min-width:1025px)" href="./css/pc.css">


</head>



<body>
<!--콘텐츠 시작-->


<div class="header">
  <!--로고, 메뉴-->
  <div class="header-box">
    <!--로고-->

    <h1><a href="./index.html" alt=""><img src="./img/logo_beer.png"></a></h1>


    <!--상단메뉴 Top Navigator-->
    <div class="tnb">
      <ul>
        <li><a href="./member/login.html">로그인</a></li>
        <li><a href="./member/join.html">회원가입</a></li>
        <!--
				<li><a href="#none">로그아웃</a></li>
				<li><a href="#none">정보수정</a></li>
				-->
      </ul>
    </div>


    <!--메인메뉴 General Navigator-->
    <div class="gnb">
      <ul>
        <li><a href="./about/intro.html">회사소개</a></li>
        <li><a href="./bbs/notice_list.html">고객센터</a></li>
        <li><a href="./booking/list.html">예약하기</a></li>
        <li><a href="./booking/mypage.html">예약확인</a></li>
      </ul>
    </div>


  </div>
</div>




<!--autofixed 클래스 추가 시작, 스크롤시 메뉴고정되게-->
<script>
	$(document).ready(function() {
		$(".header").autofix_anything(); });
</script>