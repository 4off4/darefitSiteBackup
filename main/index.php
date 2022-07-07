{{$head}}
<!-- Channel Plugin Scripts -->
<script>
  (function() {
    var w = window;
    if (w.ChannelIO) {
      return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
    }
    var ch = function() {
      ch.c(arguments);
    };
    ch.q = [];
    ch.c = function(args) {
      ch.q.push(args);
    };
    w.ChannelIO = ch;
    function l() {
      if (w.ChannelIOInitialized) {
        return;
      }
      w.ChannelIOInitialized = true;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
      s.charset = 'UTF-8';
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
    if (document.readyState === 'complete') {
      l();
    } else if (window.attachEvent) {
      window.attachEvent('onload', l);
    } else {
      window.addEventListener('DOMContentLoaded', l, false);
      window.addEventListener('load', l, false);
    }
  })();
  ChannelIO('boot', {
    "pluginKey": "2361dd99-b5ab-4876-9223-cf527e1d7de2"
  });
</script>
<!-- End Channel Plugin -->
<link rel="stylesheet" href="{{$template}}/inc/css/main.css">
<!-- 메인 스타일시트 -->
<script src="{{$template}}/inc/js/main.js?ver=170901"></script>
<!--
            전체상품보기 버튼 시작 영역입니다.
            웹스리퍼블릭 샘플 템플릿에서는 전체상품이며
            추후에 버튼으로 활용을 하시려면 a 태그 링크값과
            p 태그의 내용을 변경해주시면 됩니다.
         -->
<style>
    /* 전체 상품 보기 버튼 스타일 입니다.
            단순복사 이후에는 꼭 지우셔야 합니다. */
    
    #all_product {
        position: fixed;
        bottom: 50px;
        right: 50px;
        z-index: 10000
    }
    
    #all_product>a {
        display: block;
        width: 50px;
        height: 50px;
        background:#b19071 url({{$template}}/img/wr_plus.png) center top no-repeat;
        color: #fff;
        border-radius: 62px;
        transition: all 0.3s ease
    }
    
    #all_product>a:hover {
        background-image: none;
        background-color: #5126ff;
        width: 200px
    }
    
    #all_product>a:hover p {
        display: block;
        opacity: 1;
        transition-delay: 0.31s
    }
    
    #all_product>a>p {
        opacity: 0;
        font-size: 16px;
        font-weight: 500;
        color: #fff;
        text-align: center;
        line-height: 50px
    }
    
    @media screen and (max-width:480px) {
        #all_product {
            position: fixed;
            bottom: 25px;
            left: 25px
        }
    }
</style>

    </a>
</div>
<!-- 전체상품보기 버튼 끝 -->




<script>
    // 메인페이지 실시간 상담문의
    $(function() {
        $("#mainCounsel > .btn-close").click(function() {
            $("#phone_wrap").fadeOut(400);
            $("#mainCounselMini").fadeIn(400);
        });
        $("#mainCounselMini").click(function() {
            $(this).fadeOut(400);
            $("#phone_wrap").fadeIn(400);
        });
    });
</script>


<!-- 전체 감싸기 -->
<div id="wrapper">


    <!-- 공통 상단 영역 -->


    {{$header}}
    <!-- // 상단메뉴 -->
    <!-- // 공통 상단 영역 -->
    <!-- 메인비주얼 -->
    <div id="mainVisual" class="clearfix move">
        <div class="swiper-container websre_main">
            <h1 class="logo">
                <a href="/"><img src="{{$template}}/img/logo.png" alt="logo"></a>
            </h1>
<!-- // 슬라ㅏ이딩 텍스트
         
 -->

            <i class="left_line"></i>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{$template}}/about/hospital/sub1_1.php">
                    <img src="{{$template}}/img/m_main1.png" class="mobile-style" alt="main_title" /></a>
                    <div class="swiper_text">■{{$template}}/img/main_visual1.png</div>
                </div>
<div class="swiper-slide">
                    <a href="{{$template}}/menu5/sub1.php;"><img src="{{$template}}/img/main_title2.png" class="main_title pc-style" alt="main_title3" />
                    <img src="{{$template}}/img/m_main2.png" class="mobile-style" alt="main_title" /></a>
                    <div class="swiper_text">■{{$template}}/img/main_visual2.png</div>
                </div>
<div class="swiper-slide">
                    <a href="{{$template}}/menu6/sub0.php;"><img src="{{$template}}/img/main_title3.png" class="main_title pc-style" alt="main_title4" />
                    <img src="{{$template}}/img/m_main3.png" class="mobile-style" alt="main_title" /></a>
                    <div class="swiper_text">■{{$template}}/img/main_visual3.png</div>
                </div>
<div class="swiper-slide">
                    <a href="{{$template}}/about/hospital/sub1_1.php">
                    <img src="{{$template}}/img/m_main1.png" class="mobile-style" alt="main_title" /></a>
                    <div class="swiper_text">■{{$template}}/img/main_visual6.png</div>
                </div>

            </div>

            <!-- Add Pagination -->
            <!--div class="swiper-pagination swiper-pagination-white"></div-->
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white move"><i class="xi-angle-right-thin"></i></div>
            <div class="swiper-button-prev swiper-button-white move"><i class="xi-angle-left-thin"></i></div>
            <!-- sns아이콘 -->
            <div class="sns_icon">
                <div class="sns_box sns1">
                    <a href=https://www.instagram.com/darefit.clinic target="_blank"><img src="{{$template}}/img/sns_icon1.png" alt=""></a>
                </div>
                <div class="sns_box sns2">
                    <a href="{{$template}}/about/sub5.php"><img src="{{$template}}/img/sns_icon2.png" alt=""></a>
                </div>
                <div class="sns_box sns3">
                    <a href="https://darefit.channel.io" target="_blank"><img src="{{$template}}/img/sns_icon3.png" alt=""></a>
                </div>
            </div>
            <!-- // sns아이콘 -->
        </div>
    </div>
    <!-- // 메인비주얼 -->


    <!-- 상단 와이드 배너 -->
    <div id="wideBanner">


        <div class="wideBanner_img"><img src="{{$template}}/img/main_visual_center1.png" alt="1"></div>


    </div>
    <!-- // 상단 와이드 배너 -->


    <!-- 컨테이너 -->
    <div id="container">
        <!-- 섹션1 -->
        <div id="section1">
            <!-- 왼쪽 영역 -->
            <div class="section1_left">
                <div class="clinic clinic_box1">
                    <div class="title">
                        <h3><strong>CUSTOM FIT</strong></h3>
                        <h4 class="white">시그니처 핏<br />Signature Fit</h4>
                    </div>
                    <p>최상의 기술과 장비,최선의 선택!<br />리프팅과 타이트닝 컷팅의 최적의 효과를 줄 다리핏 프리미엄 프로그램</p>

                </div>
                <div class="clinic clinic_box3">
                    <div class="title">
                        <h3><strong>CUSTOM FIT</strong></h3>
                        <h4 class="white">리포 핏<br />Lipo Fit</h4>
                    </div>
                    <p class="white">리포컷 시술의 효과를 <br />가장 극대화 시키는 조합</p>
                </div>
                <div class="clinic clinic_box2">
                    <div class="title">
                        <h3><strong>CUSTOM FIT</strong></h3>
                        <h4>쉐이프 핏<br />Shape Fit</h4>
                    </div>
                    <p>근육부터 차오르는 피부탄력의 근원<br />근육 증가 프로그램</p>
                </div>
                <div class="bg_area">
                    <ul class="clearfix bxslider middle_slider">
                        <li class="middle_bg middle_bg1"></li>
                        <li class="middle_bg middle_bg2"></li>
                    </ul>
                </div>
            </div>
            <!-- // 왼쪽 영역 -->


            <!-- 오른쪽 영역 -->
            <div class="section1_right">
                <div class="clinic clinic_box4">
                    <div class="title">
                        <h3><strong>CUSTOM FIT</strong></h3>
                        <h4>스파 핏<br />Spa Fit</h4>
                    </div>
                    <p>의사에게 받는 치료마사지<br />메디컬 스파 프로그램</p>
                </div>
                <div class="clinic clinic_box5">
                    <div class="title">
                        <h3><strong>CUSTOM FIT</strong></h3>
                        <h4>써큐 핏<br />Circul Fit</h4>
                    </div>
                    <p>모든 벨런스의 시작은 순환으로 부터..<br />다리핏 혈액 순환 프로그램</p>
                </div>
                <div class="rolling">
                    <ul class="item bxslider">
                        <li>
                            <div class="img-area">
                                <img src="{{$template}}/img/rolling-item_1.png" alt="rolling-item1" />
                            </div>
                            <div class="title">
                                <h3>정품&정량의 시술을 준수하는<br />기본에 충실한 시술을 약속합니다.</h3>
                            </div>
                            <div class="desc">
                                <p>과한시술, 고액의 시술을 권하지 않습니다.<br />본인에게 꼭 맞는 균형있고 자연스러운 시술을 약속합니다.
                                   </p>
                            </div>
                        </li>
                        <li>
                            <div class="img-area">
                                <img src="{{$template}}/img/rolling-item_2.png" alt="rolling-item1" />
                            </div>
                            <div class="title">
                                <h3>균형잡힌 밸런스를 위한<br />철저한 사전검사와 충분한 설명</h3>
                            </div>
                            <div class="desc">
                                <p>안전을 최우선으로 균형잡힌 아름다움을 위한<br />철저한 사전검사와 상세한 설명을 제공할 것을 약속합니다. 
                                    </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- // 오른쪽 영역  -->
        </div>
        <!-- // 섹션1 -->


        <!-- 섹션2 -->
        <div id="section2" class="section">
            <div class="inner">
                <a href="{{$template}}/menu2/sub1.php"><img src="{{$template}}/img/section2_1txt.png" class="pc-style" alt="section2_txt" /></a>
                <a href="{{$template}}/menu2/sub1.php"><img src="{{$template}}/img/m_section2_txt.png" class="mobile-style" alt="section2_txt" /></a>
            </div>
        </div>
        <!-- // 섹션2 -->


        <!-- 섹션2-1 -->
        <div id="section2-1" class="section">
            <div class="inner">
                <div class="main_text">
                    <h2>CLINIC EQUIPMENT</h2>
                    <p>다리핏 클리닉에서는 프리미엄 정품 장비 및 소모품 사용으로 높은 시술 퀄리티와</br>고객의 안전을 최우선으로 생각합니다.</p>
                </div>




                <ul class="pic_item">
                    <li>
                        <a href="{{$template}}/daReTool/sub1.php"><img src="{{$template}}/img/section4_thumb1.png" alt="1"></a>


                    </li>
                    <li>
                        <a href="{{$template}}/daReTool/sub1.php"><img src="{{$template}}/img/section4_thumb2.png" alt="2"> </a>


                    </li>
                    <li>
                        <a href="{{$template}}/daReTool/sub1.php"><img src="{{$template}}/img/section4_thumb3.png" alt="3"> </a>


                    </li>
                </ul>
            </div>
        </div>
        <!-- // 섹션2-1 -->






        <!-- 유튜브 영상 섹션-->
        <div id="section2-2" class="section">
            <div class="inner">
                <h1>YOUTUBE MEDIA</h1>
                <iframe class="yt-frame" name="ytFrame" src="https://www.youtube.com/embed/dkFuIgulXmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>




                <div class="btn-area">
                    <!--<a href="{{$template}}/community/sub3.php?top=9&sub=3" class="btn2 btn-wh-o btn-frame">미디어 더 보러가기</a>-->
                </div>
            </div>
        </div>






        <!-- // 유튜브 영상 섹션-->






        <!-- 섹션2-3 -->
        <div id="section2-3" class="section">
            <div class="inner">




                <ul class="pic_item">
                    <li>
                        <a href="{{$template}}/about/doctor/sub2_1.php">
                            <img src="{{$template}}/img/section_promo1.png" alt="1">
                            <div class="text_box">
                                <h4 class="item_title">의료진 소개</h4>
                                <p class="sub_text">풍부한 경험과 노하우를 바탕으로 한 흉부외과 전문의의 진정성 있고 꼼꼼한 진료 약속합니다.</p>
                                <p class="more">MORE</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{$template}}/community/sub2.php">
                            <img src="{{$template}}/img/section_promo3.png" alt="2">
                            <div class="text_box">
                                <h4 class="item_title">전후사진</h4>
                                <p class="sub_text">다리핏 클리닉에서 시술 받으신 고객님들의 만족도 높은 후기를 보실 수 있습니다.</p>
                                <p class="more">MORE</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{$template}}/community/sub4.php">
                            <img src="{{$template}}/img/section_promo2.png" alt="3">
                            <div class="text_box">
                                <h4 class="item_title">프로모션</h4>
                                <p class="sub_text">다리핏 클리닉의 새로운 프로모션을 만나보세요.</p>
                                <p class="more">MORE</p>
                            </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // 섹션2-3 -->








        <!-- 섹션3 -->
        <div id="section3" class="section clearfix">




            <div class="left">
                <div class="info-box">
                    <div class="icon-box">
                        <img src="{{$template}}/img/section3_icon.png" alt="location_icon" />
                    </div>
                    <!--  <div class="title">
                            <h4>서울 강남구 압구정로 162, 베네하임시티 4층</h4>
                            <strong class="tel">02-545-5101</strong>
                        </div> -->




                    <div class="info">
                        <p><span class="bold_text">COMPANY</span> <span class="nomal_text">다리핏 클리닉</span></p>
                        <p><span class="bold_text">TEL</span> <span class="nomal_text">02-545-5101</span></p>
                        <p><span class="bold_text">HOURS</span> <span class="nomal_text">월.화.수.금 AM 10:00~ PM 7:00</span></br>
                            <span class="bold_text"></span> <span class="nomal_text">목 AM 10:00~ PM 9:00</span></br>
                            <span class="bold_text"></span> <span class="nomal_text">토 AM 10:00~ PM 4:00</span></br>
                            <span class="bold_text"></span> <span class="nomal_text">일요일, 공휴일 휴진</span>
                        </p>


                        <p><span class="bold_text">ADDRESS</span> <span class="nomal_text">서울 강남구 압구정로 162, 베네하임시티 4층</span></p>
                    </div>


                    <!--  <div class="info-tel">
                            <p><span>FAX. 0505-</span><span>E-MAIL. darefit@naver.com</span></p>
                            <p>평일 : 10:00 ~ 7:00 / 점심 : 12:00 ~ 13:00</p>
                        </div>
                        <div class="sns-area">
                            <ul>
                                <li>
                                    <a href="http://www.facebook.com" target="_blank">
                                    <i class="xi-facebook"></i>
                                    </a>
                                </li>
/>
                                <li>
                                    <a href=http://www.instagram.com/darefit.clinic target="_blank">
                                    <i class="xi-instagram"></i>
                                    </a>
                                </li>
                                <li class="sns-kakao">
                                    <a href="https://yellowid.kakao.com/" target="_blank"><img src="{{$template}}/img/section3_kakao.png" alt="kakao_icon" /></a>
                                </li>
                                <li>
                                    <span>카카오톡ID<br />다리핏클리닉</span>
                                </li>
                            </ul>
                        </div>
-->

                    <div class="btn_wrap">
                        <div class="btn1">
                            <a href="tel:02-545-5101">전화예약 및 상담</a>

                        </div>
                        <div class="btn2">
<a href="https://darefit.channel.io" target="_blank">채널톡 상담하기</a>


                        </div> 
                    </div>
                </div>

</div>
            <!-- class="btn2 btn-wh-o btn-lg" -->
            <div class="right">
                <div id="main_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.2204081269456!2d127.02526481558766!3d37.52630133418846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca39196e0201d%3A0x9c6c54f1bce50436!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDslZXqtazsoJXroZwgMTYy!5e0!3m2!1sko!2skr!4v1655485691865!5m2!1sko!2skr"
                        width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- // 섹션3 -->
    </div>
    <!-- // 컨테이너 -->
    {{$footer}}
</div>