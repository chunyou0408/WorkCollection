<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人網站</title>

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- aos CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="/css/00-index/style.css">
</head>

<body onload="opening()">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <header id="header" class="">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <div class="logo_area">
                            <a class="topcontrol" href="#">許淳祐個人網站</a>
                        </div>
                    </div>

                    <div class="col-6 col-md-8 menu_wrap">
                        <nav id="navigation" class="navbar-right">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="index.html" style="--i:1;">首頁</a></li>
                                <li class="current"><a href="#skill_area" style="--i:2;">技能</a></li>
                                <li class=""><a href="#work_area" style="--i:3;">作品集</a></li>
                                <li class=""><a href="#resume_area" style="--i:4;">履歷</a></li>
                                <li><a href="#contact_area" style="--i:5;">聯絡方式</a></li>
                            </ul>
                            <img src="/img/00-index/Hamburger_icon.svg.png" alt="" height="100%">
                        </nav>



                    </div>
                </div>
            </div>
        </header>

        <section id="home_banner_area">
            <div class="container">
                <div class="row" style="height: 610px;">
                    <div class="col-md-7 col-sm-12 col-xs-12 text">
                        <div class="slider_content">
                            <h1>哈囉~我是許淳祐</h1>
                            <h1 class="animationText">一名前端，後端網頁工程師</h1>
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-lg-block">
                        <div class="imgbox">
                            <img src="/img/00-index/PLOY-210312.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about_me_area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 photoimg">
                        <img src="/img/00-index/2020-11-06-Pen Tool_210312.png" alt="">
                    </div>
                    <div class="col-12 col-md-7 text">
                        <h1>關於我</h1>
                        <p>修平科技大學資網系畢業，
                            具備前端Html、Css(Scss)、JavaScript與後端Laravel 框架能力，
                            喜歡思考、分析問題、解決問題，並思考有效率的解決方法。
                            勇於學習各項的人事物，努力利用自己所學達成更好的目標，表現出自己最好的一面，保持良好的學習態度。</p>
                    </div>
                </div>
        </section>

        <section id="skill_area">
            <div class="container">
                <div class="row">
                    <div class="title col-12" style="text-align: center;">
                        <h1>技能</h1>
                        <p>我的技能取向<br>
                            依照熟練度的百分比</p>
                    </div>
                </div>

                <div class="row">
                    <div class="progressBox col-12">
                        <!-- col-md-offset-3 col-md-6 -->
                        <div class="progress green">
                            <h3 class="progress-title">HTML</h3>
                            <div class="progress-bar" style="--w:75%; background:#21da9a;">
                                <div class="progress-value">75%</div>
                            </div>
                        </div>
                        <div class="progress pink">
                            <h3 class="progress-title">CSS</h3>
                            <div class="progress-bar" style="--w:65%; background:#ff1170;">
                                <div class="progress-value">65%</div>
                            </div>
                        </div>
                        <div class="progress yellow">
                            <h3 class="progress-title">JavaScript</h3>
                            <div class="progress-bar" style="--w:85%; background:#ffa900;">
                                <div class="progress-value">85%</div>
                            </div>
                        </div>
                        <div class="progress blue">
                            <h3 class="progress-title">Laravel</h3>
                            <div class="progress-bar" style="--w:55%; background:#294bdc;">
                                <div class="progress-value">55%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="work_area">

            <div class="container">
                <div class="row">
                    <div class="title col-12" style="text-align: center;">
                        <h1>作品集</h1>
                        <p>自己的學習過程<br>
                            製作的一個作品集</p>
                    </div>
                </div>
                <!-- 選擇器 -->
                <div class="row text-center">
                    <div class="portfolio_filter">
                        <ul>
                            <li class="active" data-type="all">全部</li>
                            <li data-type="layout">切版相關</li>
                            <li data-type="JavaScript">JavaScript相關</li>
                            <li data-type="work">實作相關</li>
                        </ul>
                    </div>
                </div>
                <!-- 顯示卡片 -->
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card active layout">
                            <div class="card-img">
                                <a href="/01-layout/microsoft">
                                    <img src="/img/00-index/01.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">微軟切版</h5>
                                <p class="card-text">課後練習題目</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card active layout">
                            <div class="card-img">
                                <a href="/01-layout/RWD">
                                    <img src="/img/00-index/02.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">首頁切版</h5>
                                <p class="card-text">點選圖片，會將圖片展開</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card active JavaScript">
                            <div class="card-img">
                                <a href="/02-JavaScript/weatherAPI">
                                    <img src="/img/00-index/03.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">天氣卡片API</h5>
                                <p class="card-text">課後練習題目,利用中央氣象局提供的資訊,顯示到畫面上
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card active JavaScript">
                            <div class="card-img">
                                <a href="/02-JavaScript/furniture">
                                    <img src="/img/00-index/04.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">家具存貨系統-filter</h5>
                                <p class="card-text">課後練習題目,利用伺服器回傳的資料,顯示到畫面上</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card active work">
                            <div class="card-img">
                                <a href="/03-work/02-common_problem">
                                    <img src="/img/00-index/05.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">常見問題</h5>
                                <p class="card-text">到工作室的練習切版</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card active work">
                            <div class="card-img">
                                <a href="/03-work/03-contact_us">
                                    <img src="/img/00-index/06.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">聯絡我們</h5>
                                <p class="card-text">到工作室的練習切版</p>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- 查看更多作品集 -->
                <div class="row" style="margin-top: 30px;">
                    <button onclick="location.href='/01-layout'" class="btn btn-primary offset-4 col-4">查看更多</button>
                </div>
            </div>
        </section>

        <section id="resume_area">
            <div class="container">
                <div class="row">
                    <div class="title col-12" style="text-align: center;">
                        <h1>履歷</h1>
                        <p>我的學習路程<br>
                            工作上的經驗與訓練</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="resume_title"><i class="fas fa-book"></i>學習</h4>
                        <div class="single_resume" data-aos="fade-right">
                            <span class="resume_duration">2020年11月-2021年1月</span>
                            <h3>全端工程師-跨平台程式開發實戰班</h3>
                            <span class="resume-designation">勞動部勞動力發展署</span>
                            <p>
                                從短短的三個月學習了全端的網頁設計，第一個月學習PS、AI，學了很多關於設計類的技能，剩下的時間都是學習網頁前、後端與專案製作，覺得自己對於網頁的前端與後端都有興趣，前端的部分想要學框架（如Vue.js
                                / Angular / React 等），後端想學習的是 Golang / Python，依照之後工作需求來學習技能。
                            </p>
                        </div>
                        <div class="single_resume" data-aos="fade-right">
                            <span class="resume_duration">2009年9月-2013年7月</span>
                            <h3>資訊網路技術系</h3>
                            <span class="resume-designation">修平科技大學</span>
                            <p>
                                就學期間，學校訓練我具備各項程式設計能力有，有C語言、JAVA、android、資料庫等，還有一些網路管理的課程CISCO，也在畢業前成功考取了國際證照CISCO
                                CCNA，這些都是我在在學期間，所得到的寶貴收穫，相信對我未來就業相當有幫助。
                            </p>
                        </div>
                        <div class="single_resume" data-aos="fade-right">
                            <span class="resume_duration">2006年9月-2009年7月</span>
                            <h3>資訊科</h3>
                            <span class="resume-designation">新民高級中學</span>
                            <p>
                                我在小學電腦課第一次接觸到電腦，也開始對電腦感興趣，升上高中後，因此選擇了新民高中資訊科，在此時期，我開始接觸到網路世界，也墊下往後對網路服務的深厚興趣。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="resume_title"><i class="fas fa-briefcase"></i>工作</h4>
                        <div class="single_resume" data-aos="fade-left">
                            <span class="resume_duration">2020年5月-2019年7月</span>
                            <h3>油品業務助理</h3>
                            <span class="resume-designation">合茂人力派遣股份有限公司</span>
                            <p>
                                上班地點在經濟部標準檢驗局(台中分局)，每天外出採驗加油站油品，規劃每天行程與資料統整上傳，讓我學到很多有關於油品的相關知識。
                            </p>
                        </div>
                        <div class="single_resume" data-aos="fade-left">
                            <span class="resume_duration">2016年9月-2019年6月</span>
                            <h3>直播小幫手</h3>
                            <span class="resume-designation">全球藝品拍賣場</span>
                            <p>
                                我因為有各種相關知識所以有位置都可任職，我的工作包含了線上回覆訊息小編，處理客人訂單與售後服務，因為還有程式語言概念讓我自學EXCEL、Google
                                sheet，編寫VBA(VisualBasic)與Google Apps
                                Script(JavaScript)執行巨集，建立公司的電腦系統訂單架構，讓原本都是手寫的商品單據都改成線上管理，執行各項商品計算統整方面都比原本簡易許多，也同時教了公司員工使用我設計的程式，讓每個相關小幫手都有辦法快速的處理各項事務。
                            </p>
                        </div>
                        <div class="single_resume" data-aos="fade-left">
                            <span class="resume_duration">2014年8月-2016年6月</span>
                            <h3>網拍人員</h3>
                            <span class="resume-designation">水晶藝品店</span>
                            <p>
                                學習到了很多水晶藝品類的知識，也練習跟客人溝通各項藝品的差異、辨識與說明，並不是任何礦石開採後都會是保持完美狀態，並且利用在學時所用到的資訊網路與程式概念自行架設網頁，也在FB社團上進行行銷讓客人知道我們這家店。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact_area">
            <div class="container">
                <div class="row">
                    <div class="title col-12">
                        <h1 style="text-align: center;">聯絡方式</h1>
                    </div>
                    <div class="contact">
                        <div class="contact_bg">
                        </div>
                        <div class="contact_text">
                            <p>信箱: app520321@hotmail.com</p>
                            <p>手機: 0981011550</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- 回到最頂端 -->
        <div id="topcontrol" class="topcontrol" title="" style="position: fixed; bottom: 10px; right: 10px; opacity: 1;
            cursor: pointer;">
            <i class="fa fa-angle-up scrolltop"></i></div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
        <script>
            // 讀取畫面
            var myVar;

            function opening() {
                myVar = setTimeout(showPage, 3000);
            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
                document.querySelector('body').style.overflowY = "scroll";
                AOS.init();
            }
            //


            let btn = document.querySelector('#navigation img');
            let nav = document.querySelector('.navbar-nav');

            btn.addEventListener('click', function () {
                nav.classList.toggle('active');
                btn.classList.toggle('active');
                if (btn.classList.contains('active')) {
                    btn.src = "/img/00-index/x.png";
                } else {
                    btn.src = "/img/00-index/Hamburger_icon.svg.png";
                }
            });

            window.addEventListener('resize', function () {
                nav.classList.remove('active');
                btn.classList.remove('active');
                if (btn.classList.contains('active')) {
                    btn.src = "/img/00-index/x.png";
                } else {
                    btn.src = "/img/00-index/Hamburger_icon.svg.png";
                }
            });

            //技能條
            let progressBox = document.querySelector('.progressBox');
            window.addEventListener('scroll', scrollProgressBarHandler);
            function scrollProgressBarHandler() {
                AOS.init();
                //設定螢幕最上邊的卷軸高度
                let windowTop = window.scrollY;
                //設定螢幕最下邊的卷軸高度
                let windowBottom = windowTop + window.innerHeight;

                let progressBoxMiddle = progressBox.offsetTop + parseInt(window.getComputedStyle(progressBox).height) / 2;

                //當圖片中間卷軸高度小於螢幕底下卷軸高度時 且螢幕最上的高度比目前圖片底邊高度還小時顯示
                if (progressBoxMiddle < windowBottom && progressBoxMiddle + parseInt(window.getComputedStyle(progressBox).height) / 2 > windowTop) {
                    progressBox.querySelectorAll('.progress .progress-bar').forEach(bar => {
                        bar.classList.add('active');
                    });
                } else {
                    progressBox.querySelectorAll('.progress .progress-bar').forEach(bar => {
                        bar.classList.remove('active');
                    });
                }
            }
            //

            //作品選擇器
            let portfolios = document.querySelectorAll('.portfolio_filter>ul>li');
            let cards = document.querySelectorAll('#work_area .card');
            let interval = true;
            portfolios.forEach(portfolio => {
                portfolio.addEventListener('click', function () {
                    if (interval) {
                        //半秒內只能執行一次
                        interval = false;
                        setTimeout(function () {
                            interval = true;
                        }, 500)

                        //選擇到的類別
                        //先清除所有類別
                        portfoliosClear();
                        this.classList.add('active')

                        //顯示類別的卡片
                        cards.forEach(card => {
                            console.log(card.parentNode);

                            if (this.dataset.type == 'all') {
                                card.classList.remove('none');
                                card.parentNode.classList.remove('d-none');

                                setTimeout(function () {
                                    card.classList.add('active');
                                }, 100);

                            } else {
                                //清除所有卡片,除了被選擇到的類別卡片
                                cardsClearEx(this.dataset.type);

                                if (card.classList.contains(this.dataset.type)) {
                                    card.classList.remove('none');
                                    card.parentNode.classList.remove('d-none');

                                    setTimeout(function () {
                                        card.classList.add('active');
                                    }, 100);
                                }
                            }
                        })
                    }
                })
            })
            //清除所有類別
            function portfoliosClear() {
                portfolios.forEach(portfolio => {
                    portfolio.classList.remove('active')
                })
            }
            //清除所有卡片,除了被選擇到的類別卡片
            function cardsClearEx(type) {
                cards.forEach(card => {
                    if (!card.classList.contains(type)) {
                        card.classList.remove('active')
                    }
                })
            }


            let work_area = document.querySelector('#work_area');
            work_area.addEventListener('transitionend', function (e) {
                if (e.propertyName == 'opacity') {
                    if (!e.target.classList.contains('active')) {
                        e.target.classList.add('none');
                        e.target.parentNode.classList.add('d-none');
                    }
                    // console.log(e.target.classList);

                }
            });
            //

            //回到最上方
            let topcontrols = document.querySelectorAll('.topcontrol');
            topcontrols.forEach(topcontrol => {
                topcontrol.addEventListener("click", (() => {
                    window.scrollTo(0, 0);
                }));
            });
            //


        </script>

</body>

</html>
