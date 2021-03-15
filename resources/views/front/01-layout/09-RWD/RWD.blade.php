<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/01-layout/09-RWD/style.css">
    <title>練習</title>
</head>

<body>
    <section>
        <header>
            <a href="" class="logo">Heroes</a>
            <div class="toggle"></div>
            <ul class="navigation">
                <li><a href="#" style="--i:1;">Home</a></li>
                <li><a href="#" style="--i:2;">Characters</a></li>
                <li><a href="#" style="--i:3;">Movies</a></li>
                <li><a href="#" style="--i:4;">Games</a></li>
                <li><a href="#" style="--i:5;">More</a></li>
            </ul>
        </header>

        <div class="container">
            <div class="box" style="--i:3;">
                <div class="imgBx">
                    <img src="/img/01-layout/09-RWD/img01.jpg" alt="">
                </div>
            </div>
            <div class="box" style="--i:4;">
                <div class="imgBx">
                    <img src="/img/01-layout/09-RWD/img02.jpg" alt="">
                </div>
            </div>
            <div class="box" style="--i:5;">
                <div class="imgBx">
                    <img src="/img/01-layout/09-RWD/img03.jpg" alt="">
                </div>
            </div>
            <div class="box" style="--i:6;">
                <div class="imgBx">
                    <img src="/img/01-layout/09-RWD/img04.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="footer">
            <ul class="csi">
                <li><a href="" style="--i:9;">Facebook</a></li>
                <li><a href="" style="--i:8;">Twitter</a></li>
                <li><a href="" style="--i:7;">Instagrem</a></li>
            </ul>
            <p class="copyrightText">2021/03/05</p>
        </div>




    </section>

    <script>
        const menuToggle = document.querySelector('.toggle');
        const navigation = document.querySelector('.navigation');
        let imgBxs = document.querySelectorAll('.imgBx')
        imgBxs.forEach(imgBx => {
            imgBx.addEventListener('click', () => {
                imgBx.classList.toggle('active');
            })
        })



        menuToggle.addEventListener('click', menuHandler);


        function menuHandler() {
            menuToggle.classList.toggle('active');//如果沒有就新增,有了就移除
            navigation.classList.toggle('active');
        }


    </script>
</body>

</html>
