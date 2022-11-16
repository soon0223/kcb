$(function(){
    $("#skip a").eq(2).remove();
    $("#kcb_hd").removeClass("bg_change")

    var hdTrg = $("#kcb_hd");
    var hdOffset = hdTrg.offset().top + hdTrg.height();

    $(window).resize(function(){
        var hdTrg = $("#kcb_hd");
        var hdOffset = hdTrg.offset().top + hdTrg.height();
    });


    //문서를 스크롤할 때(타겟, 이벤트) 
    $(window).scroll(function(){ //창이 스크롤 될 때 마다 
        sctop = $(document).scrollTop();
        hdFixed();
    });

    function hdFixed(){
        //hdOffset만큼 스크롤되면(스크롤양을 검사-조건문)
        if(sctop > hdOffset) {
            //헤더를 고정한다(타겟,클래스를 적용)
            hdTrg.addClass("fixed bg_change");
        } else {
            hdTrg.removeClass("fixed bg_change"); 
        }
    }

    //Press Room 3개 설명 영역
    var prSwiper = new Swiper('.main_pressroom_wrap', {
        parallax: true,
        mousewheel: true,
        speed: 1000,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.pr-pagination',
            type: 'fraction',
        },
        breakpoints: {
            360: {
                pagination: {
                    el: '.pr-pagination',
                    type: 'bullets',
                    clickable: true,
                },
            }
        }
    });


    //메인 공지사항 글자수 자르기
    var n_txt = [];
    for(var i = 0; i < 3; i++){
        n_txt[i] = $(".notice > div").eq(i).find(".nt_content").text().slice(0,52) + "...";
        $(".notice > div").eq(i).find(".nt_content").text(n_txt[i]);
    }

    //rnd_subject 글자수 자르기
    var n_txt = [];
    for(var i = 0; i < 3; i++){
        n_txt[i] = $(".rnd3").eq(i).find(".rnd_subject").text().slice(0,55) + " ...";
        $(".rnd3").eq(i).find(".rnd_subject").text(n_txt[i]);
    }


    //공지사항 slick
    $(".notice").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false,
		variableWidth:true,
		responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    infinite: true,
                }
            },
        ]
    });
});