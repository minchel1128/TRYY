<?php   
include "../db.php"; 
?>
<!DOCTYPE html>
<html lang="kr">
<!-- Start Head -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>회원가입</title>

	<link href="../assets/css/style.min.css" rel="stylesheet">
	<link href="../assets/css/modules.css" rel="stylesheet">

	<link href="../assets/css/sw_main.css" rel="stylesheet">
	<link href="../assets/css/sw_responsive.css" rel="stylesheet">

	<!-- Canonical URL usage -->
	<link rel="canonical" href="https://aperitif.io/">

	<!-- Facebook Open Graph -->
	<meta property="og:url"                content="https://aperitif.io/" />
	<meta property="og:title"              content="Aperitif | The web template generator" />
	<meta property="og:description"        content="Aperitif is a rapid web template generation tool." />
	<meta property="og:image"              content="https://aperitif.io/img/aperitif-facebook.png" />
	<meta property="og:image:width"        content="1200" />
	<meta property="og:image:height"       content="630" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Aperitif">
	<meta name="twitter:creator" content="@Aperitif">
	<meta name="twitter:title" content="Aperitif - The web template generator">
	<meta name="twitter:description" content="Aperitif is a rapid web template generation tool.">
	<meta name="twitter:image" content="https://aperitif.io/img/aperitif-card.png">

	<!-- Google Structured Data -->
	<script type="application/ld+json">
	{
	"@context" : "http://schema.org",
	"@type" : "SoftwareApplication",
	"name" : "TRYY",
	"image" : "https://aperitif.io/img/aperitif-logo.svg",
	"url" : "https://aperitif.io/",
	"author" : {
	  "@type" : "Person",
	  "name" : "Octavector"
	},
	"datePublished" : "2017-MM-DD",
	"applicationCategory" : "HTML"
	}
	</script>
</head>
<!-- End Head -->

<body class="default">

<!--
START MODULE AREA 1: header1
-->
<header class="MOD_HEADER1">
  <div data-layout="_r">
    <div data-layout="al16 de10" class="MOD_HEADER1_Title">
      <h1 class="MOD_HEADER1_TextLogo">TRYY</h1>
      <p class="MOD_HEADER1_Slogan">식물을 키우는 사람들의 생각을 모아놓은곳</p>
    </div>
    
	 <div data-layout="al16 de6" class="MOD_HEADER1_Details">						
		<form method="post" action="/member/login_check.php">
			<table align="center" border="0" cellspacing="0" width="400">
				<tr>
					<td width="300" colspan="1"> 
						<input type="email" name="userid" placeholder="이메일"></input>
					</td>
					<td rowspan="3" colspan="1" align="center" width="130" > 
						<button type="submit" class="btn" > 로그인 </button>
					</td>
					<td rowspan="3" colspan="1" align="center" width="130"> 
						<a href="/member/signup.php" class="btn">회원가입</a>
					</td>
				</tr>
				<tr>
					<td width="300" colspan="1"> 
						<input type="password" name="userpw" placeholder="비밀번호"></input>
					</td>
				</tr>
			</table>
		</form>
	</div>
	
  </div>
</header>
<!--
END MODULE AREA 1: Header 1
-->

<!--
START MODULE AREA 2: Menu 1
-->
<section class="MOD_MENU" data-theme="_bgp">
  <div data-layout="_r" class="nopadding">
    <nav class="MOD_MENU_Nav">
      <p class="MOD_MENU_Title">Menu</p>
      <svg class="MOD_MENU_Button" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
        <rect width="30" height="6"/>
        <rect y="24" width="30" height="6"/>
        <rect y="12" width="30" height="6"/>
      </svg>
      <ul class="AP_Menu_List">
        <li>
          <a href="./plants_recommend.html" data-theme="_bgp">식물 추천</a>
        </li>
        <li>
          <a href="#" data-theme="_bgp">식물 검색</a>
        </li>
        <li>
          <a href="#" data-theme="_bgp">식물 정보</a>
        </li>
        <li>
          <a href="#" data-theme="_bgp">게시판</a>
        </li>
        <li>
          <a href="#" data-theme="_bgp">고객센터</a>
          <ul>
            <li>
              <a href="#" data-theme="_bgpd">문의하기</a>
            </li>
            <li>
              <a href="#" data-theme="_bgpd">1:1 문의 내역</a>
            </li>
            <li>
              <a href="#" data-theme="_bgpd">개발팀 위치</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</section>
<p></p>
<div class="member_wrap">
				<h2 class="tit_member">회원가입</h2>
				<p class="subtxt_member">TRYY의 회원이 되시면 보다 다양한 서비스를 제공 받으실 수 있습니다.</p>	
				<p class="ico_infotxt">회원가입을 위해서는 <span>이메일 인증</span>이 필요합니다.<br>아래 정보를 입력한 후 가입하기 버튼을 클릭하면 인증 메일이 발송됩니다. <br>본인 이메일로 접속하여 인증한 후 로그인하면 TRYY 회원 가입이 완료됩니다. </p>

				<!-- member_box2 -->
				<div class="ico_startxt"><span class="ico_star">필수 입력 사항</span></div>
				<form method="post" action="/member/signup_check.php">
				<fieldset>
					<legend class="hide">회원가입</legend>
					<div class="member_box2">
						<div class="input_wrap type2" style="height:190px;">
							<div>
								<label for="regID">아이디<i class="ico_star"></i></label>
								<input type="text" name="regid" id="regID" placeholder="이메일 형식(주로 이용하는 이메일 사용을 권합니다.)" autocomplete="off/" class="text">
							</div>	
							<div>
								<label for="regNick">닉네임<i class="ico_star"></i></label>
								<input type="text" name="regname" id="regNick" placeholder="한글 10자 이내, 영문 20자 이내" autocomplete="off/" class="text">
							</div>
							<div>
								<label for="regPasswd">비밀번호<i class="ico_star"></i></label>
								<input type="password" name="regpw" id="regPasswd" placeholder="영문자/숫자/특수문자(!@#$%^&amp;*_-) 혼용 8자이상 16자 이하" autocomplete="off/">
							</div>
							<div>
								<label for="regChkPasswd">비밀번호 확인<i class="ico_star"></i></label>
								<input type="password" name="regpw2" id="regChkPasswd" placeholder="영문자/숫자/특수문자(!@#$%^&amp;*_-) 혼용 8자이상 16자 이하" autocomplete="off/">
							</div>
							<div style="height:17px;">
								<p class="txt_notice2" id="tdError" style="display:none; top:0px; bottom:0px;"></p>
							</div>
						</div>
					</div>
					<p></p>
					<div class="btn_center">
						<button type="submit" id="regProcessBtn" class="btn_blue lg btn">회원가입</button>
					</div>
				</fieldset>
				</form>
</div>
</body>
</html>