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

        .parallax_img {
            height: 100vh;
            background-image: url('https://www.xoer.cc/wp-content/uploads/2019/04/9UdCbD165107_938641.jpg');
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
                <img src="https://s2.best-wallpaper.net/wallpaper/1920x1080/1206/Iron-Man_1920x1080.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://s2.best-wallpaper.net/wallpaper/1920x1080/1205/The-Avengers-2012-Iron-Man_1920x1080.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.10wallpaper.com/wallpaper/1920x1080/1811/Iron_Man_2018_American_Superhero_Movie_1920x1080.jpg"
                    class="d-block w-100" alt="...">
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
                    <img src="https://imgs.gvm.com.tw/upload/gallery/20190524/61108_01.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 w-100">
                <div class="card">
                    <img src="https://i1.wp.com/popbee.com/image/2019/05/avengers-captain-america-and-sharon-carter-love-story-living-together-delected-scene-1.jpg?quality=95&"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 w-100">
                <div class="card">
                    <img src="https://img.ltn.com.tw/Upload/ent/page/800/2017/07/16/php3j2qbi.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
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

            <h1 class="text-center mb-3">我是標題</h1>
            <div class="row no-gutters">
                <div class="col-lg-6 ">
                    <img src="https://www.gamewikia.com/uploads/2018/05/08/cover.1280.720.1.1-a5df404f5897e242661031c1cb3b2274.jpg"
                        alt="" width="100%">
                </div>
                <div class="col-lg-6 d-flex mb-5 mb-lg-0 bgc_lightgray align-items-center bgc_lightgray">
                    <span class="">
                        文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1文字1
                    </span>
                </div>
                <div class="col-lg-6  order-lg-1">
                    <img src="https://news.agentm.tw/wp-content/uploads/5cd06692021b4c5411542146-750-458-%E6%8B%B7%E8%B2%9D.jpg"
                        alt="" width="100%">
                </div>
                <div class="col-lg-6 d-flex align-items-center bgc_lightgray">
                    <span class="">
                        文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2文字2
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
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

</body>

</html>
