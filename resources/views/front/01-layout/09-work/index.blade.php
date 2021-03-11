<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人網站</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/01-layout/09-work/style.css">
</head>

<body onload="opening()">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <header id="header" class="">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="logo_area">
                            <a href="index.html">許淳祐個人網站</a>
                        </div>
                    </div>

                    <div class="col-8 menu_wrap">
                        <nav id="navigation" class="navbar-right">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="index.html" style="--i:1;">首頁</a></li>
                                <li class="current"><a href="#service_area" style="--i:2;">服務</a></li>
                                <li class=""><a href="#work_area" style="--i:3;">作品集</a></li>
                                <li class=""><a href="#resume_area" style="--i:4;">履歷</a></li>
                                <li><a href="#testimonial_area" style="--i:5;">見證者</a></li>
                                <li><a href="#contact_area" style="--i:6;">聯絡方式</a></li>
                            </ul>
                        </nav>

                        <div class="btnbox"></div>

                    </div>
                </div>
            </div>
        </header>

        <section id="home_banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text">
                        <h1>哈囉~我是許淳祐</h1>
                        <h1 class="animationText">一名前端，後端網頁工程師</h1>
                    </div>
                </div>
        </section>

        <section id="about_me_area">
            <div class="container">
                <div class="row">
                    <div class="col-6 photoimg">
                    </div>
                    <div class="col-6 text">
                        <h1>關於我</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quidem nulla eum tenetur
                            omnis
                            doloribus repudiandae, aspernatur rem dolores vel ex commodi voluptas reprehenderit totam
                            beatae! Officia earum corporis inventore?</p>
                    </div>
                </div>
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


        <section>

            <div class="container">
                <div class="row">

                </div>
            </div>


        </section>
    </div>
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
        }
        //


        let btn = document.querySelector('.btnbox');
        let nav = document.querySelector('.navbar-nav');

        btn.addEventListener('click', function () {
            nav.classList.toggle('active');
            btn.classList.toggle('active');
        });

        window.addEventListener('resize', function () {
            nav.classList.remove('active');
            btn.classList.remove('active');
        });

        //技能條
        let progressBox = document.querySelector('.progressBox');
        window.addEventListener('scroll', scrollProgressBarHandler);
        function scrollProgressBarHandler() {
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
    </script>

</body>

</html>
