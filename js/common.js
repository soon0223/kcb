$(function(){
    //해상도별
    var screenW = $(window).width();
    var screenH = $(window).height();
    if(screenW < 751) {
        $("body").removeClass("tb pc");
        $("body").addClass("mo");
    } else if(screenW > 751 && screenW < 1263 ){
        $("body").removeClass("mo pc");
        $("body").addClass("tb");
    } else {
        $("body").removeClass("mo tb");
        $("body").addClass("pc");
    }
    $(window).resize(function(){
        screenW = $(window).width();
        screenH = $(window).height();
        if(screenW < 751) {
            $("body").removeClass("tb pc");
            $("body").addClass("mo");
        } else if(screenW > 751 && screenW < 1263 ){
            $("body").removeClass("mo pc");
            $("body").addClass("tb");
        } else {
            $("body").removeClass("mo tb");
            $("body").addClass("pc");
        }
    });

    //PC gnb 구현

    $("#kcb_hd").on({
        "mouseenter focusin" : function(){
            $(this).addClass("active"); 
        },
        "mouseleave focusout" : function(){
            $(this).removeClass("active"); 
            $("#kcb_gnb").removeClass("active"); 
        }
    });
    $("#kcb_gnb").on("mouseenter focusin", function(){
        $(this).addClass("active");
    });

    //모바일 gnb구현
    $("#kcb_m_gnb .depth1>a").click(function(){
        // 선택한 메뉴 활성화
        $(this).parent().siblings().removeClass("on");
        $(this).parent().toggleClass("on");
        //alert("메인메뉴 클릭!");

        $(this).next().slideToggle(200);
        //다른 서브메뉴 숨기기
        $(this).parent().siblings().find(".depth2").slideUp(200);
        return false;
    });

    // 사이드 메뉴바 활성 리셋
    $(".m_chk_label").click(function(){
        $(".depth1").removeClass("on");
        $(".depth2").slideUp("200");
        if(!$("body").hasClass("hidden")) {
            $("body").addClass("hidden");
        } else {
            $("body").removeClass("hidden");
        }
    });

});
