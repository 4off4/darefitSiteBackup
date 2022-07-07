{{$head}}
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
        font-size: 14px;
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
<div id="all_product">
    <a href="http://링크/" target="_blank" title="다리핏클리닉채널톡">
        <p>채널톡</p>
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
            <i class="left_line"></i>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#;"><img src="{{$template}}/img/main_title1.png" class="main_title pc-style" alt="main_title" />
                        <img src="{{$template}}/img/m_main1.jpg" class="mobile-style" alt="main_title" /></a>
                    <div class="swiper_text">■{{$template}}/img/main_visual1.jpg</div>
                </div>
                <div class="swiper-slide">
                    <a href="#;"><img src="{{$template}}/img/main_title2.png" class="main_title pc-style" alt="main_title2" /><img src="{{$template}}/img/m_main2.jpg" class="mobile-style" alt="main_title" /></a>
                    <div class="swiper_text">■{{$template}}/img/main_visual2.jpg</div>
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
                    <a href="{{$template}}/reservation/sub2.php?top=8&sub=2"><img src="{{$template}}/img/sns_icon1.png" alt=""></a>
                </div>
                <div class="sns_box sns2">
                    <a href="{{$template}}/about/sub5.php?top=1&sub=5"><img src="{{$template}}/img/sns_icon2.png" alt=""></a>
                </div>
                <div class="sns_box sns3">
                    <a href="{{$template}}/about/hospital/sub1_1.php?top=1&sub=1"><img src="{{$template}}/img/sns_icon3.png" alt=""></a>
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
                        <h3>body clinic</h3>
                        <h4 class="white">건강한 다이어트<br />바디라인 솔루션</h4>
                    </div>
                    <p>건강한 다이어트를 위한<br />힙라인 보정</p>
                </div>
                <div class="clinic clinic_box2">
                    <div class="title">
                        <h3>face clinic</h3>
                        <h4 class="white">V라인을 부탁해!<br />리프팅케어</h4>
                    </div>
                    <p class="white">탱탱한 얼굴을 위한<br />동안케어 프로그램</p>
                </div>
                <div class="clinic clinic_box3">
                    <div class="title">
                        <h3>eyes clinic</h3>
                        <h4>또렷한 눈매로<br />인상을바꾸자!</h4>
                    </div>
                    <p>눈매성형 시술로<br />흐릿한 인상을 또렷하게!</p>
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
                        <h3>skin clinic</h3>
                        <h4>피부트러블 안녕<br />페이스 클리닉</h4>
                    </div>
                    <p>동안의 완성은<br />동안피부</p>
                </div>
                <div class="clinic clinic_box5">
                    <div class="title">
                        <h3>skincare clinic</h3>
                        <h4>홍조, 여드름피부 개선 프로그램<br />촉촉한 피부의 완성 스킨케어</h4>
                    </div>
                    <p>쉿! 명품피부의 비밀, 웹스리퍼블릭</p>
                </div>
                <div class="rolling">
                    <ul class="item bxslider">
                        <li>
                            <div class="img-area">
                                <img src="{{$template}}/img/rolling-item_1.png" alt="rolling-item1" />
                            </div>
                            <div class="title">
                                <h3>균형잡힌 아름다운과<br />기본을 지키는 치료</h3>
                            </div>
                            <div class="desc">
                                <p>과한시술, 고액의 시술을 권하지 않습니다.<br />본인에게 맞는 균형있고 자연스러운 시술을 약속합니다.
                                    <br/>균형잡힌 아름다운 기본을 지키는 치료</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-area">
                                <img src="{{$template}}/img/rolling-item_2.png" alt="rolling-item1" />
                            </div>
                            <div class="title">
                                <h3>균형잡힌 아름다운과<br />기본을 지키는 치료</h3>
                            </div>
                            <div class="desc">
                                <p>과한시술, 고액의 시술을 권하지 않습니다.<br />본인에게 맞는 균형있고 자연스러운 시술을 약속합니다.
                                    <br/>균형잡힌 아름다운 기본을 지키는 치료</p>
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
                <a href="{{$template}}/menu2/sub1/sub1_1.php?top=2&sub=1"><img src="{{$template}}/img/section2_1txt.png" class="pc-style" alt="section2_txt" /></a>
                <a href="{{$template}}/menu2/sub1/sub1_1.php?top=2&sub=1"><img src="{{$template}}/img/m_section2_txt.png" class="mobile-style" alt="section2_txt" /></a>
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
                        <a href="{{$template}}/about/sub3.php?top=1&sub=3"><img src="{{$template}}/img/section4_thumb1.png" alt="1"></a>


                    </li>
                    <li>
                        <a href="{{$template}}/about/sub3.php?top=1&sub=3"><img src="{{$template}}/img/section4_thumb2.png" alt="2"> </a>


                    </li>
                    <li>
                        <a href="{{$template}}/about/sub3.php?top=1&sub=3"><img src="{{$template}}/img/section4_thumb3.png" alt="3"> </a>


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
                    <a href="{{$template}}/community/sub3.php?top=9&sub=3" class="btn2 btn-wh-o btn-frame">미디어 더 보러가기</a>
                </div>
            </div>
        </div>






        <!-- // 유튜브 영상 섹션-->






        <!-- 섹션2-3 -->
        <div id="section2-3" class="section">
            <div class="inner">




                <ul class="pic_item">
                    <li>
                        <a href="{{$template}}/about/doctor/sub2_1.php?top=1&sub=2">
                            <img src="{{$template}}/img/section_promo1.png" alt="1">
                            <div class="text_box">
                                <h4 class="item_title">의료진 소개</h4>
                                <p class="sub_text">고객님들의 편의를 항상 최우선으로 생각하는 병원의 서비스를 소개합니다.</p>
                                <p class="more">MORE</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{$template}}/community/sub2.php?top=9&sub=2">
                            <img src="{{$template}}/img/section_promo3.png" alt="2">
                            <div class="text_box">
                                <h4 class="item_title">치료후기</h4>
                                <p class="sub_text">고객님들의 편의를 항상 최우선으로 생각하는 병원의 서비스를 소개합니다.</p>
                                <p class="more">MORE</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{$template}}/community/sub4.php?top=9&sub=4">
                            <img src="{{$template}}/img/section_promo2.png" alt="3">
                            <div class="text_box">
                                <h4 class="item_title">프로모션</h4>
                                <p class="sub_text">고객님들의 편의를 항상 최우선으로 생각하는 병원의 서비스를 소개합니다.</p>
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
                        <p><span class="bold_text">HOURS</span> <span class="nomal_text">월-목 AM 10:00~ PM 7:00</span></br>
                            <span class="bold_text"></span> <span class="nomal_text">금 AM 10:00~ PM 9:00</span></br>
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
                            <a href="/">카카오톡 플러스친구</a>


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