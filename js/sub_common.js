$(function(){
    var hdTrg = $("#kcb_hd");
    var hdOffset = hdTrg.offset().top + hdTrg.height();
    var lnbTrg = $(".sub_lnb_sec");
    var lnbOffset = lnbTrg.offset().top - hdOffset;

    $(window).resize(function(){
        var hdTrg = $("#kcb_hd");
        var hdOffset = hdTrg.offset().top + hdTrg.height();
        var lnbTrg = $(".sub_lnb_sec");
        var lnbOffset = lnbTrg.offset().top - hdOffset;
        if($("body").hasClass("pc")){
            $(".lnb_depth2").show();
        } else {
            $(".lnb_depth2").hide();
        }
    });

    //문서를 스크롤할 때(타겟, 이벤트) 
    $(window).scroll(function(){ //창이 스크롤 될 때 마다 
        sctop = $(document).scrollTop();
        hdFixed();
        lnbFixed();
    });

    // 헤더 고정
    function hdFixed(){
        //hdOffset만큼 스크롤되면(스크롤양을 검사-조건문)
        if(sctop > hdOffset) {
            //헤더를 고정한다(타겟,클래스를 적용)
            hdTrg.addClass("fixed");
        } else {
            hdTrg.removeClass("fixed"); 
        }
    }
    
    // lnb 고정
    function lnbFixed(){
        if(sctop > lnbOffset) {
            lnbTrg.addClass("fixed");
        } else {
            lnbTrg.removeClass("fixed");
        }
    }

    //lnb구현
    //1. lnb 콘텐츠 세팅(페이지별 메인메뉴와 현재 내용)
    //body에 class 세팅해야 사용 가능 <body class="sub1-5">이런 식으로
    //서브메뉴 모두 마크업해야 함.
    var page = $("body").attr("class").split(" ")[0];
    var depth1Num = page.slice(3,4) - 1; //index는 0부터 시작하므로 -1
    var depth2Num = page.slice(5,6) - 1;
    // console.log(page);
    // console.log(depth1Num, depth2Num);
    $(".lnb_sub_wrap ul").eq(depth1Num).show();
    $(".lnb_sub_wrap ul").eq(depth1Num).find("li").eq(depth2Num).find("a").addClass("active");
    $(".lnb_main_menu").prepend($(".lnb_main_wrap .lnb_depth2>li").eq(depth1Num).text());
    $(".lnb_sub_menu").prepend($(".lnb_sub_wrap ul:eq("+depth1Num+") > li").eq(depth2Num).text());
    
 
    //2. 메뉴 클릭하면 펼치기
    var lnb_btn = $(".lnb_btn");
    var lnb_list = $(".lnb_depth2");
    lnb_btn.click(function(){
        $(this).next().toggle();
        $(this).parent().siblings().find(lnb_list).hide();
        return false;
    });
    //3. lnb영역 이외의 곳을 클릭하면 lnb 접기
    $(document).click(function(e){
        if(!$("body").hasClass("pc")){
            if(!$(e.target).hasClass("lnb_btn")) {
                lnb_list.hide();
            }
        }
    });
});