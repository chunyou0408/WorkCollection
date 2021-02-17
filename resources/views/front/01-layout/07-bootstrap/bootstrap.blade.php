<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .card-text {
            text-align: justify;
        }

        .parallax_img {
            height: 100vh;
            background-image: url('/img/01-layout/07-bootstrap/parallax.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            opacity: 0.7;
        }

        /* .position_top_left-center {
            top: calc(50% - 20px);
            left: calc(50% - 100px);
        } */

        .coler_white {
            color: white;
        }

        .bgc_lightgray {
            background-color: lightgray;
        }


        footer {
            height: 100px;
        }
    </style>
</head>


<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!--  輪播  -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/01-layout/07-bootstrap/banner01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/01-layout/07-bootstrap/banner02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/01-layout/07-bootstrap/banner03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- 卡片 -->
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0 w-100">
                <div class="card">
                    <img src="/img/01-layout/07-bootstrap/card01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">蜘蛛人</h3>
                        <p class="card-text">蜘蛛人是漫威漫畫的超級英雄，本名為彼得·班傑明·帕克（Peter Benjamin Parker），漫威旗下最受歡迎的超級英雄。</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal01">
                            詳細點擊
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal01" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">蜘蛛人</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/img/01-layout/07-bootstrap/card01.jpg" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 w-100">
                <div class="card">
                    <img src="/img/01-layout/07-bootstrap/card02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">美國隊長</h3>
                        <p class="card-text">美國隊長（英語：Captain America），本名為史蒂芬·羅傑斯（Steven Rogers），是出現在漫威漫畫中的虛構超級英雄。</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal02">
                            詳細點擊
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal02" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">美國隊長</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/img/01-layout/07-bootstrap/card02.jpg" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 w-100">
                <div class="card">
                    <img src="/img/01-layout/07-bootstrap/card03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">浩克</h3>
                        <p class="card-text">浩克（英語：The Hulk），本名布魯斯·班納（Bruce Banner），在意外受自己製造出的伽瑪炸彈（Gamma
                            Bomb）放射線污染後變成了名為浩克的憤怒怪物。</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal03">
                            詳細點擊
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal03" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">浩克</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/img/01-layout/07-bootstrap/card03.jpg" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  parallax  -->
    <div class="parallax_img d-flex w-100">
        <samp class="h1 coler_white font-weight-bold bgc_lightgray m-auto">復仇者聯盟</samp>
    </div>
    <!-- 圖文方塊 -->
    <section class="py-5">
        <div class="container">

            <h1 class="text-center mb-3">索爾與洛基</h1>
            <div class="row no-gutters">
                <div class="col-lg-6 ">
                    <img src="/img/01-layout/07-bootstrap/Thor.jpg" alt="" width="100%">
                </div>
                <div class="col-lg-6 d-flex mb-5 mb-lg-0 bgc_lightgray align-items-center bgc_lightgray">
                    <span class="text-justify">
                        雷神索爾（英語：Thor）是漫威漫畫旗下的一位超級英雄角色，最先出現於《神秘之旅》第83期（1962年8月）。雷神索爾的原形為北歐神話中的索爾，是「戰神」奧丁之子。
                    </span>
                </div>
                <div class="col-lg-6  order-lg-1">
                    <img src="/img/01-layout/07-bootstrap/Loki.jpg" alt="" width="100%">
                </div>
                <div class="col-lg-6 d-flex align-items-center bgc_lightgray">
                    <span class="text-justify">
                        洛基（英語：Loki），美國《漫威漫畫》（舊譯驚奇漫畫）創造的虛擬漫畫角色，是雷神索爾的領養兄弟，也是一個超級反派。喜愛魔法又愛引起事端的洛基因此被稱為「謊言與惡作劇之神」。
                    </span>
                </div>
            </div>
    </section>
    </div>
    <!-- dooter -->
    <footer class="bgc_lightgray d-flex w-100">
        <span class="h1 mb-0 m-auto">footer</span>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

</body>

</html>
