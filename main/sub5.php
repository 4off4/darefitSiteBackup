{{$head}}
<body>

<!--메뉴포커스스크립트--> 
<script language="javascript" type="text/javascript"> 
window.onload = function(){ 
gnbController ("웹스리소개", "찾아오시는길", ""); 
} 
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
                        <h3 class="nm" data-splitting="words">da Re-Fit Clinic</h3>
                        <h4 class="ns" data-splitting="words">오시는길</h4>
                    </div>
                </div></div>
                        <!-- // 서브공통타이틀 -->
<div class="dark-mask"></div>
                    </div>
                </div>
   <!-- 병원소개서브탭 -->
        {{$sub1_1_tab}}
        <!-- 병원소개서브탭 -->
        <!-- 서브컨테이너 시작 -->
        <div id="sub_container">
            <div class="sub_inner">
     <!-- 컨텐츠1 : img -->
                <div class="sr_col2 greeting">
                    <div class="center"><br><br></div>
                    <div class="center"><img src="{{$template}}/img/sub4_img1.png"></div>
                </div>
            </div>
        <!-- 서브컨테이너 시작 -->
        <div id="sub_container">
            <div class="sub_inner">
                <!-- 컨텐츠내용 --><div class="sr_col1" align="center">
<div class="sr_tit2">
<h1><strong>서울 강남구 압구정로 162, 베네하임시티 4층</strong></h1>
<h2><strong>02-545-5101</strong><br><br><br><br>
</h2></div>




                        <div class="sr_box map" align="center">
                            
                   <div class="map">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.2205885840003!2d127.025264815193!3d37.52629707980548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca39196e0201d%3A0x9c6c54f1bce50436!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDslZXqtazsoJXroZwgMTYy!5e0!3m2!1sko!2skr!4v1655690678577!5m2!1sko!2skr" class="sub_map" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                            </p>
                            <!-- 섹션3 -->
                        </div>
                    </div>
                    <!-- // 컨텐츠내용 -->
                </section>
                <section class="pdb80">
                    <!-- 컨텐츠타이틀 및 내용 2단 -->
          <div class="sr_tit2">
                        <h1><p>주차안내</p></h1>
                        <p class="desc nomgb">건물내 무료 지하주차장 <strong>1시간 무료주차 가능</strong>
    </p>
                    </div>
<p><br><br><br></p>
                    <div class="sr_tit2">
                        <h1><p>지하철 이용시</p></h1>
                        <p class="desc nomgb"><strong>3호선 압구정역 </strong> 5번출구에서 직진도보 1분 (현대백화점 맞은편 큰길가 위치)
      </p>
                    </div>
                    <!-- // 컨텐츠타이틀 및 내용 2단 -->
                </section>
                

                 <!-- 컨텐츠타이틀 및 내용 2단 -->
                    <div class="sr_tit2">
                        <h1><p>버스 이용시</p></h1>
                    </div>
                    <!-- // 컨텐츠타이틀 및 내용 2단 -->
                    <!-- 컨텐츠내용 4단 -->
                    <div class="sr_col4 bus">
                        <ul>
                            <li>
                             <span> <strong>간선버스</strong></span><br><span>광림교회/압구정역 하차</span>

                            <div class="num">
                                <ul class="bus4">
                                    <li><span>143</span></li>
                                    <li><span>147</span></li>
                                    <li><span>148</span></li>
                                    <li><span>240</span></li>
                                    <li><span>301</span></li>
                                    <li><span>351</span></li>
                                    <li><span>352</span></li>
                                    <li><span>440</span></li>
                                    <li><span>463</span></li>
                                    <li><span>472</span></li>

                                    
<li></li>
                                </ul>
                            </div>
                            </li>
                            <li>
                            <span> <strong>지선버스</strong></span><br><span>광림교회/압구정역 하차</span>
                            <div class="num">
        <ul class="bus2">
                                    <li><span>3011</span></li>
                                    <li><span>4211</span></li>
                                    <li><span>4318</span></li>
                                    <li><span>4412</span></li>
                                    <li><span>4419</span></li>                                </ul>
                            </div>
                            </li>
                            <li>
                            <br>
<span> <strong>공항버스</strong></span><br><span>압구정역,미성아파트 하차</span>
                            <div class="num">
        <ul class="bus1">
                                    <li><span>6006</span></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            </li>
                        </ul>
                    </div>
                    <!-- // 컨텐츠내용 4단 -->
                              
                <section>
                    <!-- 컨텐츠타이틀 및 내용 2단 -->
                    <!-- // 컨텐츠내용 -->
                </section>
             </div>
        </div>  
        <!-- // 서브컨테이너 끝 -->
  <!-- 푸터 -->
  {{$footer}}
  <!-- // 푸터 -->
 </div>
 <!-- // 전체 감싸기 -->
</body>
</html>