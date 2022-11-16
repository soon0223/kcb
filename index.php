<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>한국화합물은행</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/common_res.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main_res.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/common.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function(){
            AOS.init();
        });
    </script>
</head>
<body class="main kcb">
    <? include_once('head.html'); ?>
    <div id="main_contents">
        <section class="main_visual_sec">
            <h2 class="blind">메인 비주얼</h2>
            <div class="main_visual_wrap">
                <input type="radio" name="mv_radio" id="mv_radio1" checked>
                <input type="radio" name="mv_radio" id="mv_radio2">
                <input type="radio" name="mv_radio" id="mv_radio3">
                <ul class="main_visual">
                    <li class="mv_slide v1">
                        <div class="v_img"><span class="blind">비주얼 이미지</span></div>
                        <div class="v_txt wrap">
                            <p class="v_txt1">
                                <span class="blind">
                                    건강한 삶과 의료혁신을 위한 신약바이오기술 개발
                                </span>
                            </p>
                            <p class="v_txt2">
                                <span class="blind">
                                    소재 및 신약 개발을 위한 데이터 기반 화학 연구 플랫폼 기술 개발 및<br>
                                    공공서비스 등 화학산업 기반 구축에 기여
                                </span>
                            </p>
                            <p class="v_txt3"><a href="http://dear-bliss.co.kr/kcb/kcb_company.php">더보기</a></p>
                        </div>
                    </li>
                    <li class="mv_slide v2">
                        <div class="v_img"><span class="blind">비주얼 이미지</span></div>
                        <div class="v_txt wrap">
                            <p class="v_txt1">
                                <span class="blind">
                                    4차 산업혁명 선도를 위한 첨단 화학소재 개발
                                </span>
                            </p>
                            <p class="v_txt2">
                                <span class="blind">
                                    IoT 디바이스용 스마트 화학소재, 차세대 에너지소재 등<br>
                                    첨단 화학소재 원천기술 개발을 통해 새로운 수요 창출에 기여
                                </span>
                            </p>
                            <p class="v_txt3"><a href="http://dear-bliss.co.kr/kcb/kcb_company.php">더보기</a></p>
                        </div>
                    </li>
                    <li class="mv_slide v3">
                        <div class="v_img"><span class="blind">비주얼 이미지</span></div>
                        <div class="v_txt wrap">
                            <p class="v_txt1">
                                <span class="blind">
                                    깨끗한 대기와 기후변화대응을 위한 친환경 화학기술 개발
                                </span>
                            </p>
                            <p class="v_txt2">
                                <span class="blind">
                                    친환경 화학공정 기술 개발을 통해 저탄소사회 구현, 수소경제 활성화,<br>
                                    미세먼지 저감 및 기초화학원료 수급 등 국가 사회 문제 해결에 기여
                                </span>
                            </p>
                            <p class="v_txt3"><a href="http://dear-bliss.co.kr/kcb/kcb_company.php">더보기</a></p>
                        </div>
                    </li>
                </ul><!--비주얼 슬라이드 끝-->
                <div class="main_visual_controls">
                    <label for="mv_radio1" class="mv_label1">1</label>
                    <label for="mv_radio2" class="mv_label2">2</label>
                    <label for="mv_radio3" class="mv_label3">3</label>
                </div>
                <div class="main_visual_pagination">
                    <label for="mv_radio1" class="mv_label1"><span class="blind">1</span></label>
                    <label for="mv_radio2" class="mv_label2"><span class="blind">2</span></label>
                    <label for="mv_radio3" class="mv_label3"><span class="blind">3</span></label>
                </div>
            </div>
        </section> <!--main_visual_sec 종료-->
        <section class="main_newsroom_sec">
            <div class="main_newsroom wrap">
                <h1 class="center">News Room</h1>
                <div class="swiper-container main_pressroom_wrap wrap2 clearfix" data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-sine">
                    <h2>Press Room</h2>
                    <div class="swiper-wrapper pressroom clearfix">
                        <dl class="swiper-slide slide press press1 ">
                            <dt>게시글 대표 이미지</dt>
                            <dd class="pr_file"><a href="#"><img src="images/press_img1.jpg" alt="게시글 대표 이미지"></a></dd>
                            <dt>게시글 제목</dt>
                            <dd class="pr_subject"><a href="#"><strong>흩어진 연구 정보 한곳에…'바이오 데이터 스테이션' 내년 문 연다.</strong></a></dd>
                            <dt>게시글 내용</dt>
                            <dd class="pr_content">KOBIC, 내년 초 구축 본격화…하반기 일수 서비스 오픈<br>
                                수집관리 표준지침 초안 마련·등록 표준화 작업 진행 중<br>
                                <br>바이오 분야 정보를 망라해 수집·관리하는 데이터 댐 '국가 바이오 데이터 스테이션'이
                                내년 초부터 구축된다. 내년 하반기부터는 일부 서비스를 이용할 수 있을 전망이다.
                            </dd>
                            <dd class="pr_more"><a href="#">더보기</a></dd>
                        </dl>
                        <dl class="swiper-slide slide press press2">
                            <dt>게시글 대표 이미지</dt>
                            <dd class="pr_file"><a href="#"><img src="images/press_img2.jpg" alt="게시글 대표 이미지"></a></dd>
                            <dt>게시글 제목</dt>
                            <dd class="pr_subject"><a href="#"><strong>데이터 기반 화학연구 플랫폼' 개발 추진'</strong></a></dd>
                            <dt>게시글 내용</dt>
                            <dd class="pr_content">화학연구원, 소재·신약 등 화학 분야 전반 데이터 제공<br>
                                화합물은행 보유 데이터 연계…2022년 통합서비스 시작<br>
                                <br>국내 연구진이 화학 분야 연구자와 기업 등을 폭넓게 지원할 수 있는 '데이터 기반
                                화학연구 플랫폼' 개발을 추진하고 있다. 개발이 완료되면 소재와 신약, 화학제품 등 …
                            </dd>
                            <dd class="pr_more"><a href="#">더보기</a></dd>
                        </dl>
                        <dl class="swiper-slide slide press press3 ">
                            <dt>게시글 대표 이미지</dt>
                            <dd class="pr_file"><img src="images/press_img3.jpg" alt="게시글 대표 이미지">
                            </dd>
                            <dt>게시글 제목</dt>
                            <dd class="pr_subject"><a href="#"><strong>[사이언스칼럼]신약개발의 출발점 '공유 플랫폼'</strong></a></dd>
                            <dt>게시글 내용</dt>
                            <dd class="pr_content">4차 산업혁명의 키워드 중 하나는 개인 취향이다. 모두 똑같은 게 아니라 나에게 꼭 맞는
                                서비스를 원한다는 말이다. 하지만 맞춤형 서비스에는 막대한 자원이 든다. <br>
                                <br>그래서 이미 생산된 제품을 다수가 공유하는 '공유경제 시장'이 급성장하고 있다.
                                정보 공유에서 출발해 물질을 공유하고, 데이터와 서비스가 융합해 순환되는 공유 …
                            </dd>
                            <dd class="pr_more"><a href="#">더보기</a></dd>
                        </dl>
                        <!-- Add Pagination -->
                    </div>
                    <div class="swiper-pagination pr-pagination"></div>
                </div>
            </div>
            <div class="main_info_wrap">
                <div class="main_info wrap2 clearfix ">
                    <div class="main_notice_wrap">
                        <h2>Notice</h2>
                        <div class="main_notice">
                            <div class="notice clearfix">
                                <div class="nt_slide">
                                    <div class="nt_subject"><a href="#">독창적 화합물 라이브러리 합성연구 과제 공모</a></div>
                                    <div class="nt_time">2021-10-20</div>
                                    <div class="nt_content">한국화학연구원 한국화합물은행에서는 신약개발연구 및 BT연구에 활용할 수 있는 독창적 신약소재 화합물 라이브러리 합성연구를 수행할 연구팀을 공모를 시행합니다.</div>
                                </div>
                                <div class="nt_slide">
                                    <div class="nt_subject"><a href="#">한국분자세포생물학회 홍보부스 운영 안내</a></div>
                                    <div class="nt_time">2021-10-20</div>
                                    <div class="nt_content">한국화합물은행에서는 2021년  한국분자세포생물학회에서 홍보부스를 운영합니다. 화합물 기탁(연구성과)과 활용 및 데이터에 대해 안내드리오니 많은 관심을 부탁드립니다.</div>
                                </div>
                                <div class="nt_slide">
                                    <div class="nt_subject"><a href="#">화합물 반출 및 정보제공 일시 중단 안내</a></div>
                                    <div class="nt_time">2021-07-26</div>
                                    <div class="nt_content">2021년 하계 휴가기간으로 아래 기간동안에는 화합물 및 데이터 활용에 대한 계약 체결, 화합물 반출 및 정보제공이 일시 중단되오니 업무에 참고하시기 바랍니다.</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="info_more far fa-plus-square"><div class="blind">공지사항 더보기</div></a>
                    </div>
                    <div class="main_faq_wrap">
                        <h2>FAQ</h2>
                        <ul class="faq">
                            <li><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_faq&wr_id=10"> ．화합물 연구성과물 기탁제도는 무엇인가요? </a></li>
                            <li><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_faq&wr_id=9"> ．화합물 연구성과물은 어디에 어떻게 기탁하나요? </a></li>
                            <li><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_faq&wr_id=8"> ．어떤 화합물을 얼마나 기탁하여야 합니까? </a></li>
                            <li><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_faq&wr_id=7"> ．기탁된 화합물은 어떻게 활용 되나요? </a></li>
                            <li><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_faq&wr_id=6"> ．화합물을 기탁하면 기탁자에게 어떤 혜택이 있나요? </a></li>
                        </ul>
                        <a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_faq" class="info_more far fa-plus-square"><div class="blind">FAQ 더보기</div></a>
                    </div>
                </div>
                
            </div>
        </section><!--main_newsroom_sec 종료-->
        <section class="main_rnd_sec">
            <div class="main_rnd_wrap wrap2">
                <h1 class="center wh">R & D</h1>
                <div class="main_rnd clearfix">
                    <dl class="rnd1" data-aos="flip-left" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
                        <dt class="rnd_img">
                            <span class="blind">연구동향 1</span>
                            <a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_rnd&wr_id=15"><span class="material-icons-outlined">add</span><span class="blind">더보기</span> </a>
                        </dt>
                        <dd class="rnd_subject">2020년 미국 FDA 승인 의약품 리스트 허가 신약  '53건'</dd>
                        <dd class="rnd_content ">미국 FDA 내 약물 평가 연구 센터(CDER)는 2020년 COVID-19로 인한 어려운 상황임에도 불구하고 
                            53개 (합성의약품 40개, 생물학적제제 13개)의 신약을 승인했다. </dd>
                        <dd class="rnd_more"><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_rnd&wr_id=15"><img src="images/more_btn1.png" alt="more 이미지"></a></dd>
                    </dl>
                    <dl class="rnd2" data-aos="flip-left" data-aos-duration="1000" data-aos-easing="ease-out-cubic" >
                        <dt class="rnd_img">
                            <span class="blind">연구동향 2</span>
                            <a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_rnd&wr_id=14"><span class="material-icons-outlined">add</span><span class="blind">더보기</span> </a>
                        </dt>
                        <dd class="rnd_subject">코로나바이러스 치료제 후보물질 레고켐바이오에 기술이전(CEVI사업단)</dd>
                        <dd class="rnd_content ">8개 정부출연연구기관이 참여하는 CEVI(신종바이러스) 융합연구단(단장 김범태)이 
                            치료제와 백신 후보물질, 진단키트를 개발하고 기술을 이전했다.</dd>
                        <dd class="rnd_more"><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_rnd&wr_id=14"><img src="images/more_btn1.png" alt="more 이미지"></a></dd>
                    </dl>
                    <dl class="rnd3"  data-aos="flip-left" data-aos-duration="1000" data-aos-easing="ease-out-cubic" >
                        <dt class="rnd_img">
                            <span class="blind">연구동향 3</span>
                            <a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_rnd&wr_id=13"><span class="material-icons-outlined">add</span><span class="blind">더보기</span> </a>
                        </dt>
                        <dd class="rnd_subject">COVID-19 치료용 약제 및 백신 최근 개발동향 (ACS Central Science, 2020, March 9)
                        </dd>
                        <dd class="rnd_content">Research and Development on Therapeutic Agents and 
                            Vaccines for COVID-19 and Related Human Coronavirus Diseases</dd>
                        <dd class="rnd_more"><a href="http://dear-bliss.co.kr/g5/bbs/board.php?bo_table=kcb_rnd&wr_id=13"><img src="images/more_btn1.png" alt="more 이미지"></a></dd>
                    </dl>
                </div>
            </div>
        </section> <!--main_rnd_sec종료-->
        <section class="main_business_sec">
            <div class="main_business_wrap wrap2">
                <h1 class="center">BUSINESS</h1>
                <div class="main_business clearfix">
                    <div class="business1 clearfix"  data-aos="fade-up" data-aos-duration="500" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                        <h2>화합물 라이브러리</h2>
                        <ul class="library clearfix bold">
                            <li>
                                <h3>대표</h3>
                                <div><span class="bl2">6,600</span>종</div>
                            </li>
                            <li>
                                <h3>임상화합물</h3>
                                <div><span class="bl2">3,100</span>종</div>
                            </li>
                            <li>
                                <h3>천연물</h3>
                                <div><span class="bl2">1,500</span>종</div>
                            </li>
                            <li>
                                <h3>Kinase</h3>
                                <div><span class="bl2">2,800</span>종</div>
                            </li>
                            <li>
                                <h3>Fragment</h3>
                                <div><span class="bl2">1,600</span>종</div>
                            </li>
                            <li>
                                <h3>GPCR</h3>
                                <div><span class="bl2">8,800</span>종</div>
                            </li>
                            <li>
                                <h3>PPI</h3>
                                <div><span class="bl2">17,000</span>종</div>
                            </li>
                            <li class="bd0">
                                <h3>PharmaCore<br>Collection</h3>
                                <div><span class="bl2">요청개수</span></div>
                            </li>
                        </ul>
                        <div><span>ㆍ기본 제공량 : 5 μL (DMSO 용액, 평균농도 5 mM)</span></div>
                    </div>
                    <div class="business2" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                        <h2>화합물 활용 현황</h2>
                        <ul>
                            <li>ㆍ매년 국내 산·학·연 150-200건 과제 지원</li>
                            <li>(누적 지원 과제수 : > 1050여개 과제)</li><br>
                            <li>ㆍ매년 20-40만종 화합물 제공</li>
                            <li>(누적 제공 화합물개수 : > 930만종)</li>
                        </ul>
                        <h2>화합물 활용 지원의 경제적 가치평가 (2020년)</h2>
                        <ul>
                            <li>ㆍ47.9만개 x 4만원 = 191.6억원 수입대체효과</li>
                            <li>(Chemdiv 2018년 최저 구매가격 $36/개)</li>
                        </ul>
                    </div>
                    <div class="business3 clearfix" data-aos="fade-up" data-aos-duration="1300" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                        <h2>화합물 보유 통계(2020년 기준)</h2>
                        <ul class="stats clearfix">
                            <li>
                                <h3>지원과제 건수</h3>
                                <div>전체<br><span class="bl2 bold">223</span></div>
                                <div>신규<br><span class="bold">105</span></div>
                            </li>
                            <li>
                                <h3>화합물 반출 횟수</h3>
                                <div>전체<br><span class="bl2 bold">414</span></div>
                                <div>신규<br><span class="bold">254</span></div>
                            </li>
                            <li>
                                <h3>반출화합물 개수</h3>
                                <div>전체<br><span class="bl2 bold">479,332</span></div>
                                <div>신규<br><span class="bold">423,120</span></div>
                            </li>
                        </ul>
                        <p class="sta_more"><a href="#">더보기</a></p>
                    </div>
            </div>
        </section>
    </div>
    <? include_once('foot.html'); ?>   
</body>
</html>