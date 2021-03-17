<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- 更改網頁標籤圖示 --}}
    <link rel="icon" href="/img/iconninja-sprites.png" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('css/01-index.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>作品集</title>



    <style>
        .next_btn {
            margin: 30px 30px;
            border: 1px solid black;
            background-color: whitesmoke;
            padding: 5px 20px;
        }
    </style>

    {{-- CSS --}}
    @yield('css')
</head>

<body>


    <nav>
        <div class="navbar">
            <div class="left-side">
                <h2 class="logo">
                    <a href="http://chunyouhsu.herokuapp.com/">許淳祐的作品集</a>
                </h2>
            </div>
            <div class="right-side">
                <div class="list">
                    <ul>
                        <li><a href="/01-layout">切版相關</a></li>
                        <li><a href="/02-JavaScript">JavaScript相關</a></li>
                        <li><a href="/03-work">實務切版</a></li>
                        <li><a href="https://yenpasture.herokuapp.com/" target="_blank">專題作品(後端)</a></li>
                    </ul>
                </div>
            </div>
            <div class="HamburgerMenu"></div>
        </div>
    </nav>

    <main>
        <!-- 放內文 -->
        <div id="app"></div>
        @yield('main')
    </main>

    <ul class="share-link-item">
        <li>
            <div class="icon-fb icon"></div>
        </li>
        <li>
            <div class="icon-tw icon"></div>
        </li>
        <li>
            <div class="icon-plurk icon"></div>
        </li>
        <li>
            <div class="icon-line icon"></div>
        </li>
    </ul>
    <footer>
    </footer>


    <script>
        let HamburgerMenu=document.querySelector('.HamburgerMenu');
        let list=document.querySelector('.right-side');
        let list_ul=document.querySelector('.right-side>.list>ul');

        HamburgerMenu.addEventListener('click',function(){
            console.log(list_ul.clientHeight);
            if (list.style.height == ''){
                list.style.height=list_ul.clientHeight+'px';
                list.style.transition = '0.5s';

            }else{
                list.style.height= '';
            }
        })

        window.addEventListener('resize',function(){
            if(window.innerWidth < 740){
                list.style.height= '';
            }else{
                list.style.transition = '';
            }
        })
    </script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- JS --}}
    @yield('js')



</body>

</html>
