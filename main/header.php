<div id="header">
    <!-- 모바일메뉴 버튼 -->
    <button id="gnbTrigger">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
    </button>
    <!-- // 모바일메뉴 버튼 -->


    <!-- gnb wrap -->
    <div id="gnb_wrap">
        <h1 id="logo">
            <a href="{{$template}}"><img src="{{$template}}/img/logo.png" class="pc" alt="Logo" /><img src="{{$template}}/img/logom.png" class="mobile" alt="Logo" /></a>
        </h1>
        <a class="gnb_top" href="#;"><i class="xi-profile-o"></i> LOGIN</a>
        <div class="mobile-scroll">
            <div class="mobile-scroll-y">
                <ul id="gnb">
                    <li class="dep1">
                        <a href="{{$template}}/about/hospital/sub1_1.php?top=1&sub=1" target="_self" >da Re-Fit</a>
                        <ul class="submnu">
                            <li><a href="{{$template}}/about/hospital/sub1_1.php?top=1&sub=1" target="_self"><span>병원소개</span></a></li>
                            <li><a href="{{$template}}/about/doctor/sub2_1.php?top=1&sub=2" target="_self"><span>의료진소개</span></a></li>
                            <li><a href="{{$template}}/about/sub5.php?top=1&sub=5" target="_self"><span>오시는길</span></a></li>
                        </ul>
                    </li>
                    <li class="dep1">
                        <a href="{{$template}}/daReTool/tools1.php" target="_self" >da Re-Tool</a>
                        <ul class="submnu">
                            <li><a href="{{$template}}/daReTool/tools1.php" target="_self"><span>다리핏 장비</span></a></li>
                            <li><a href="{{$template}}/daReTool/tools2.php" target="_self"><span>다리핏 시술</span></a></li>
                        </ul>
                    </li>
                    <li class="dep1">
                        <a href="{{$template}}/menu2/sub1.php" target="_self" >Body MBTI</a>
                        <ul class="submnu">
                            <li><a href="{{$template}}/menu2/sub1.php" target="_self"><span>Body MBTI</span></a></li>
                        </ul>
                    </li>
                    <li class="dep1">
                        <a href="{{$template}}/menu5/sub1.php" target="_self" >Tailored Fit</a>
                        <!--<ul class="submnu">
                            <li><a href="{{$template}}/menu4/sub1.php?top=4&sub=1" target="_self"><span>서브메뉴1</span></a></li>
                            <li><a href="{{$template}}/menu4/sub2.php?top=4&sub=2" target="_self"><span>서브메뉴2</span></a></li>
                        </ul>-->
                    </li>
                    <li class="dep1">
                        <a href="{{$template}}/menu6/sub0.php" target="_self" >Custom Fit</a>
                        <ul class="submnu">
                            <li><a href="{{$template}}/menu6/custom_1.php" target="_self"><span>시그니처 핏</span></a></li>
                            <li><a href="{{$template}}/menu6/custom_3.php" target="_self"><span>리포 핏</span></a></li>
                            <li><a href="{{$template}}/menu6/custom_2.php" target="_self"><span>쉐이프 핏</span></a></li>
                           <li><a href="{{$template}}/menu6/custom_5.php" target="_self"><span>스파 핏</span></a></li>
                           <li><a href="{{$template}}/menu6/custom_4.php" target="_self"><span>써큐 핏</span></a></li>
                        </ul>
                    </li>
                    <li class="dep1">
                        <a href="{{$template}}/community/sub1.php?top=9&sub=1" target="_self" >Community</a>
                        <ul class="submnu">
                            <li><a href="{{$template}}/community/sub2.php?top=9&sub=2" target="_self"><span>전후사진</span></a></li>
                            <li><a href="{{$template}}/community/sub3.php?top=9&sub=3" target="_self"><span>언론보도</span></a></li>
                            <li><a href="{{$template}}/community/sub4.php?top=9&sub=4" target="_self"><span>프로모션</span></a></li>
                            <li><a href="{{$template}}/community/sub1.php?top=9&sub=1" target="_self"><span>공지사항</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>


        <!-- // gnb -->
        <ul class="sns_link">
        {{if $use_member == 'Y'}}
            {{if $member_id}}
                <li><a href="{{$template}}/member/edit.php"><img src="{{$template}}/img/main_top_login.png" class="pc" alt="Logo" /><img src="{{$template}}/img/main_top_login.png" class="mobile" alt="Logo" /></a></li>
                <!--<li><a href="{{$template}}/member/login.php?com_member_basic=logout"><i class="xi-lock"></i></a></li>-->
            {{else}}
                <li><a href="{{$template}}/member/edit.php"><i class="xi-user-o"></i></a></li>
                <!--<li><a href="{{$template}}/member/join.php"><i class="xi-unlock"></i></a></li>-->
                <!--<li><a href="{{$template}}/member/login.php"><i class="xi-pen-o"></i></a></li>-->
            {{/if}}
        {{/if}}
        </ul>
    </div> 
    <!-- // gnb wrap -->
</div>