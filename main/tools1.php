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
        
        <div id="sub_content" class="sub_bg sub3">
            <div class="sub_inner">
                <!-- 서브공통타이틀 -->
                <div class="sub_top">
                    <div class="sub_title">
                        <h3 class="nm" data-splitting="words">da Re-Tool</h3>
                        <h4 class="ns" data-splitting="words"></h4>
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
                <div class="main_text">
                    <p>DA RE-FIT EQUIPMENTS</p>
                    <h2><strong>다리핏 장비</strong></h2>
                    <span><br>다리핏 클리닉에서는 프리미엄 정품 장비 및 소모품 사용으로 높은 시술 퀄리티와 <br>고객의 안전을 최우선으로 생각합니다.</span>
                </div>
                <!-- // 컨텐츠타이틀 -->

               <!-- 컨텐츠2 : 튠 어플리케이션-->
                <div class="sr_col2 greeting">
                    <div class="pic_item">
                        <ul >
                            <li><img src="{{$template}}/img/sub3_eq1.png" alt="1"></li> 
                            <li><img src="{{$template}}/img/sub3_eq2.png" alt="2"></li> 
                            <li><img src="{{$template}}/img/sub3_eq3.png" alt="3"></li>
                        </ul>
                    </div>
                    <div class="pic_item">
                        <ul >
                            <li><img src="{{$template}}/img/sub3_eq4.png" alt="1"></li> 
                            <li><img src="{{$template}}/img/sub3_eq5.png" alt="2"></li> 
                            <li><img src="{{$template}}/img/sub3_eq6.png" alt="3"></li>
                        </ul>
                    </div>
                    <div class="pic_item">
                        <ul >
                            <li><img src="{{$template}}/img/sub3_eq7.png" alt="1"></li> 
                            <li><img src="{{$template}}/img/sub3_eq8.png" alt="2"></li> 
                            <li><img src="{{$template}}/img/sub3_eq9.png" alt="3"></li>
                        </ul>
                    </div>
<div class="pic_item">
                        <ul >
                            <li><img src="{{$template}}/img/sub3_eq10.png" alt="1"></li> 
<li><img src="{{$template}}/img/sub3_eq11.png" alt="2"></li> 
                        </ul>
                    </div>
                </div>
                <!-- 컨텐츠3 : 검사장비 및 기타장비-->
                <div class="sr_col2 greeting">
                    
                </div>
            </div>
{{$footer}}
    </div>
    <!-- // 전체 감싸기 -->
</body>
</html>