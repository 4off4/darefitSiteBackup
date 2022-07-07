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
        
        <div id="sub_content" class="sub_bg sub2">
            <div class="sub_inner">
                <!-- 서브공통타이틀 -->
                <div class="sub_top">
                    <div class="sub_title">
                        <h3 class="nm" data-splitting="words">Dr. da Re-Fit</h3>
                        <h4 class="ns" data-splitting="words">의료진 소개</h4>
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
                    <p><br><br></p>
                    <p>DA RE-FIT CLINIC MEDICAL TEAM</p>
                    <h2><strong>균형잡힌 아름다운과 기본을 지키는</strong><br></h2>
                    <h3>da Re-Fit 최고의 전문의를 소개합니다.</h3>
                    <span><br>전문성과 진정성으로 밸런스 있는 아름다움과 고객의 안전을 최우선으로 생각합니다.</span>
                </div>
                <!-- // 컨텐츠타이틀 -->


                <!-- 컨텐츠1 : img -->
                <div class="sr_col2 greeting">
                    <div class="left wid80"><img src="{{$template}}/img/sub2_dr1.png"></div>
                    <div class="right"><img src="{{$template}}/img/sub2_dr2.png"></div>
                </div>
            </div>
{{$footer}}
    </div>
    <!-- // 전체 감싸기 -->
</body>
</html>