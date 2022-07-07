<!-- 푸터 -->
<div id="footer">
    <div class="inner">
    <!-- 그리드 감싸기 -->
        <div class="foot_wrap">
         <div class="foot_logo"><a href="https://www.darefit.co.kr"><img src="{{$template}}/img/foot_logo.png" /></a></div>
            <div class="foot_info">
             <div class="address">
              <span>다리핏의원  |  서동주.정병권</span>
                    <span>서울 강남구 압구정로 162, 베네하임시티 4층   |    Tel 02-545-5101    |     darefit@naver.com  |  BUSINESS LICENSE 890-14-01791</span>
                    <span>Copyright 다리핏의원 2022. All Right Reserved.</span>
                </div>
                <h3><a href="#;">이용약관</a>  ·  <a href="#;">개인정보 취급방침</a> </h3>
            </div>
            <div class="foot_customer">
             <h1>02.545.5101</h1>
                <span>
   <!-- 푸터 이미지 부분 바꾸기 -->
                 <a href="https://www.instagram.com/darefit.clinic" target="_blank"><img src="{{$template}}/img/bottom_sns_ins.png" /></i></a>
                 <a href="https://darefit.channel.io" target="_blank"><img src="{{$template}}/img/bottom_sns_chtalk.png" /></i></a>
<a href="https://blog.naver.com/darefitclinic" target="_blank"><img src="{{$template}}/img/bottom_sns_blog.png" /></i></a>
<a href="#"><img src="{{$template}}/img/bottom_sns_youtube.png" /></i></a>
                </span>
            </div>
        </div>
    <!-- // 그리드 감싸기 -->
    </div>
</div>  <!-- // 푸터 -->

<script>
wow = new WOW(
{
boxClass:     'wow',      // default
animateClass: 'animated', // default
offset:       0,          // default
mobile:       false,       // default
live:         true        // default
}
)
wow.init();
</script>
<script>
 AOS.init({
  easing: 'ease-in-out-sine',
  disable : false ,
  duration: 1000,
  once: true
 });
 
 Splitting({
   /* target: String selector, Element, Array of Elements, or NodeList */
   target: "[data-splitting]",
   /* by: String of the plugin name */
   by: "chars",
   /* key: Optional String to prefix the CSS variables */
   key: null
 });
</script>