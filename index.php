<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>지원자박서영</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/styleguide.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/home_visual.css">
  <link rel="stylesheet" href="./css/section1.css">
  <link rel="stylesheet" href="./css/section2.css">
  <link rel="stylesheet" href="./css/section3.css">
  <script src="https://kit.fontawesome.com/818f505c97.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/swiper.min.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/header.js"></script>
  <script src="./js/home_visual.js"></script>
  <script src="./js/section2.js"></script>
  <script src="./js/section3.js"></script>
</head>

<body>

  <div class="review_event_pop">
    <p>리뷰쓰고 푸짐한 경품 받으세요</p>
    <button class="top_close_btn">
      <span class="material-icons">
        close
      </span>
    </button>
  </div><!-- review_event_pop -->
  <header>
    <div class="header_center">
      <h1 class="main_logo en">
        Vivid
      </h1><!-- main_logo -->
      <div class="gnb_wrap">
        <nav class="gnb">
          <ul class="gnb_1dep">
            <li>
              <a href="#">new</a>
              <?php include "gnb_2dep.php"?>
            </li>
            <li>
              <a href="#">best</a>
              <?php include "gnb_2dep.php"?>
            </li>
            <li>
              <a href="#">women</a>
              <?php include "gnb_2dep.php"?>
            </li>
            <li>
              <a href="#">men</a>
              <?php include "gnb_2dep.php"?>
            </li>
            <li>
              <a href="#">event</a>
            </li>
            <li>
              <a href="#">community</a>
            </li>

          </ul>
        </nav>

        <div class="info_search_wrap">
          <input type="text" placeholder="비비드 주간 베스트">
          <button class="search_btn">
            <span class="material-icons">
              search
            </span>
          </button>

        </div><!-- info_search_wrap -->
        <ul class="user_menu_container">
          <li>
            <a href="#">
              <span class="material-icons">
                perm_identity
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="material-icons-outlined">
                shopping_cart
              </span>
            </a>
          </li>
        </ul>
      </div><!-- gnb_wrap -->
    </div><!-- header_center -->
  </header><!-- header -->
  <?php include "home_visual.php" ?>
  <?php include "section1.php" ?>
  <?php include "section2.php" ?>
  <?php include "section3.php" ?>
  <footer>
    <div class="footer_top">
      <ul class="center">
        <li class="customer">
          <h5 class="footer_title en">
            customer center
          </h5>
          <p class="en number">02-1234-4568</p>
          <p class="en">mon-fri. 09:00-17:00(lunch.12:30-13:00)</p>
          <p class="en">sat.sun.holiday close</p>
        </li><!-- customer -->
        <li class="bank_info">
          <h5 class="footer_title en">bank info</h5>
          <p>코리아은행 1234-5678-910-11</p>
        </li><!-- bank_info -->
        <li class="return">
          <h5 class="footer_title en">returns & exchanges</h5>
          <p>반품주소</p>
          <p>코리아은행 1234-5678-910-11</p>
        </li><!-- return -->
        <li class="about">
          <h5 class="footer_title en">about</h5>
          <a href="#">
            <p>회사소개</p>
          </a>
          <a href="#">
            <p>이용안내</p>
          </a>
          <a href="#">
            <p>이용약관</p>
          </a>
          <a href="#">
            <p>개인정보처리방침</p>
          </a>
        </li><!-- about -->
      </ul>
    </div><!-- footer_top -->
    <ul class="footer_bottom center">
      <li class="company">
        <p>상호. (주)비비드</p>
        <p>대표.홍길동</p>
        <p>이메일.vivid@cocen.co.kr</p>
        <br>
        <p>주소.서울시 금천구 가산디지털1로 168 우림라이온스밸리</p>
        <p>전화.02-1234-5678</p>
        <p>팩스.02-1234-5678</p>
        <br>
        <p>사업자등록번호.123-45-67890 <a href="#">[사업자정보확인]</a> </p>
        <p>통신판매업신고번호. 제2020-서울금천-0123호</p>
        <p>개인정보보호책임자.홍길동</p>
      </li><!-- company -->
      <li class="sns">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
    </ul>

  </footer>
</body>

</html>