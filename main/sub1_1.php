{{$head}}
<body>
    <!--메뉴포커스스크립트--> 
    <script language="javascript" type="text/javascript"> 
        window.onload = function(){ gnbController ("웹스리소개", "병원소개", "인사말"); } 
    </script> 
    <!--메뉴포커스스크립트-->

    <!-- 전체 감싸기 -->
    <div id="wrapper">
        <!-- 헤더 -->
        {{$header}}
        <!-- // 헤더 -->
        
        <div id="sub_content" class="sub_bg sub1">
            <div class="sub_inner">
                <!-- 서브공통타이틀 -->
                <div class="sub_top">
                    <div class="sub_title">
                        <h3 class="nm" data-splitting="words">ALL ABOUT BODY FIT</h3>
                        <h4 class="ns" data-splitting="words">다리핏 클리닉</h4>
                    </div>
                </div>
                <!-- // 서브공통타이틀 -->
            </div>
        </div>


        <!-- 병원소개서브탭 -->
        {{$sub1_1_tab}}
        <!-- 병원소개서브탭 -->


        <!-- 서브컨테이너 시작 -->
        <div id="sub_container">
            <div class="sub_inner">
                <!-- 컨텐츠타이틀 -->
                <div class="sub_tit"></div>
                <!-- // 컨텐츠타이틀 -->

                <!-- 컨텐츠1 : Darefit Clinit -->
                <div class="sr_col2 greeting">
                    <div class="left wid80"><img src="{{$template}}/img/sub1_img1.png"></div>
                    <div class="right">
                        <h1>da Re-Fit Clinic<br class="displaybrnone"><br/></h1>
                        <p>
                            우리를 불편하게 하는 부분까지 케어 받고 싶어하는 니즈는 <br>
                            날이 갈수록 점차 커지고 있고 한계가 있던 부분의 진단이 가능해지고<br>
                            치료 기술이 발전함에 따라 의료영역의 스펙트럼은 점차 넓어지고 있습니다.<br>
                            단순히 질병이 없는 상태가 아닌, 보다 능동적인 형태의 건강을 추구하시는 분들께서<br>
                            필요로하는 모든 서비스를 저희 다리핏은 의료의 수준까지 높이고자 합니다.
                            의료와 치료라는 단론에 담긴 의미가 보다 풍성해질 수 있도록<br>
                            최선을 다하는 다리핏이 되겠습니다.<br><br>
                            <img src="{{$template}}/img/sub_img_sign.png">   
                        </p>
                    </div>
                </div>
                <!-- 컨텐츠2 : BRAND IDENTITY -->
                <div class="sr_col2 greeting">
                    <div class="right">
                        <span>다리핏 클리닉 아이덴티티</span>
                        <h1>BRAND IDENTITY<br class="displaybrnone"><br/></h1>
                        <p>
                            다리핏 클리닉의 영문식 표현인 da Re-Fit은 <br>
                            적합함, 알맞음, 어울림, 건강함, 탄탄함 등을 나타내는 <br>
                            어감마저 '핏'한 'fit'이라는 단어에 <br>
                            from, for, by, with를 의미하는 전치사 'da'와 <br>
                            back, again을 뜻하는 접두사 're'를 더해<br>
'핏'한 상태를 추구하는 모든분들의 바램을 따라 <br>
                            필요한 것은 모두 '다'리핏하고자 하는 저희의 의지를 담았습니다.<br>
                           
                            <br><br>  
                            <img src="{{$template}}/img/sub1_img3.png">   
                        </p>
                    </div>
                    <div class="left wid80"><img src="{{$template}}/img/sub1_img2.png" id="img_position"></div>
                </div>


<div>
<p><br> </p>
<p><br> </p>
<p><br> </p>
<p><br> </p>
<p><br> </p>
<p><br> </p>
<p><br> </p>
<p><br> </p></div>
<section class="pdb80">
                    <!-- 컨텐츠내용 -->
                    <div class="sr_col2 cancerdf">
                        <div class="center"><p><img src="{{$template}}/img/sub1_1_4_img1.png"></p>
                        <div class="center"><p><img src="{{$template}}/img/sub1_1_4_img2.png"></p>
                        <div class="center"><p><img src="{{$template}}/img/sub1_1_4_img3.png"></p>
                        <div class="center"><p><img src="{{$template}}/img/sub1_1_4_img4.png"></p>
</div>
                       
</section>

<p></p>

                <!-- 컨텐츠3 : img -->
                <div class="sr_col2 greeting2">
                    <div class="left wid80"><img src="{{$template}}/img/sub1_bottom_menu1.png"></div>
                    <div class="right"><img src="{{$template}}/img/sub1_bottom_menu2.png"></div>
                </div>
                <div class="sr_col2">
                    <div class="left wid80"><img src="{{$template}}/img/sub1_bottom_menu3.png"></div>
                    <div class="right"><img src="{{$template}}/img/sub1_bottom_menu4.png"></div>
                </div>
            </div>
{{$footer}}
    </div>
    <!-- // 전체 감싸기 -->
</body>
</html>