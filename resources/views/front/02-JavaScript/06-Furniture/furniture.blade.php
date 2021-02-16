<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>上益家具存貨系統</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            display: flex;
        }

        nav {
            width: 350px;
            min-height: 100vh;
            background-color: lightslategrey;
            /* display: flex;
            flex-direction: column; */
        }

        .btn {
            margin: 150px auto;
            width: 200px;
            padding: 20px;

            background-color: lightgray;
            text-align: center;

            transition: 0.3s;

            font-size: 40px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: lavenderblush;
        }

        .btn.active {
            background-color: sandybrown;
            color: white;
            font-weight: 800;
        }

        main {
            width: calc(100% - 350px);
            min-height: 100vh;
            background-color: lightsteelblue;

            display: flex;
            flex-wrap: wrap;
        }

        .card {
            width: 300px;
            /* height: 400px; */
            /* background-color: mediumseagreen; */

            margin: 20px;

        }

        .card_nav {
            width: 100%;
            /* height: 20%; */
            text-align: center;
            line-height: 80px;
            background-color: mintcream;
        }

        .card_nav h1 {
            margin: 0;
        }

        .card_content {
            display: flex;
            width: 100%;
            /* height: 60%; */
            /* background-color: oldlace; */
        }

        .card_content img {
            width: 100%;
            height: 100%;
        }

        .card_footer {
            width: 100%;
            /* height: 20%; */
            background-color: mintcream;
            font-size: 20px;

            position: relative;
        }

        .card_footer div:nth-child(2) {
            margin: 0;
            padding: 20px;
            text-align: center;

        }

        .card_footer span {
            font-size: 12px;
        }

        .discountBox {
            width: 100%;
            height: 30px;
            background-color: red;
            position: absolute;
            top: -30px;
            left: 0;
            opacity: 0.7;

            display: none;
        }

        .discountBox.active {
            display: block;
        }

        .discountBox p {
            margin: 0;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
    </nav>
    <main id="container">
    </main>

    <script>
        // 資料網址
        // https://run.mocky.io/v3/a1bd9f89-926c-46ac-930a-1d1cae8dd7e5


        var container = document.querySelector('#container')
        var btns = document.querySelectorAll('.btn')

        //初始值-台中
        filter(null, null)


        function filter(location, obj) {
            if (obj != null) {
                clearAllactive()
                obj.classList.add('active')
            }

            fetch('https://run.mocky.io/v3/a1bd9f89-926c-46ac-930a-1d1cae8dd7e5')
                .then(function (response) {
                    return response.json();
                })
                .then(function (Furniture) {
                    container.innerHTML = ``

                    var product = Furniture.records.product
                    //先讀取地點(只讀取第一筆)
                    var city = Furniture.records.product[0].states.stock.location
                    city.forEach((element, index) => {
                        btns[index].innerHTML = city[index].locationName
                    });
                    //log看有沒有抓到按鈕上的文字
                    //var ShowString = document.querySelector(".btn").innerText;
                    // console.log(ShowString);

                    //console.log(product);



                    product.forEach(element => {
                        var productName = element.productName
                        var img = element.imageURL
                        var onsale = element.states.sale.onsale
                        var price = element.states.sale.price
                        var location_1 = element.states.stock.location[0].locationName
                        var location_2 = element.states.stock.location[1].locationName
                        var location_3 = element.states.stock.location[2].locationName
                        var amount_1 = element.states.stock.location[0].amount
                        var amount_2 = element.states.stock.location[1].amount
                        var amount_3 = element.states.stock.location[2].amount
                        if (onsale != 1) {                       //當有特價就進入
                            var active = "active"
                            price = price * onsale
                            onsale = onsale * 10
                            price = "<span style='font-size: 20px; color: red;'>" + price + "</span>"
                            if (onsale % 1 !== 0) {
                                onsale = onsale * 10
                            }
                        }
                        //當字串沒有傳值,預設第一個地點(台中)
                        if ((location == null || location_1 == location) /*&& amount_1 > 0*/) {
                            if (amount_1 == 0) {
                                amount_1 = "暫無存貨"
                                var active = ""
                                price = ""
                            } else if (amount_1 <= 3) {
                                amount_1 = "存貨:<span>最後</span>" + amount_1 + "<span>個</span>"

                                price = " 售價:" + price

                            } else {
                                amount_1 = "存貨:" + amount_1
                                price = " 售價:" + price
                            }

                            container.innerHTML += `
                            <div class="card">
                                <div class="card_nav">
                                    <h1>${productName}</h1>
                                </div>
                                <div class="card_content"><img
                                        src="${img}"
                                        alt=""></div>
                                <div class="card_footer">
                                    <div class="discountBox ${active}">
                                        <p>${onsale}折優惠中</p>
                                    </div>
                                    <div>${amount_1}${price}</div>
                                </div>
                            </div>
                            `
                        }

                        else if (location_2 == location /*&& amount_2 > 0*/) {
                            if (amount_2 == 0) {
                                amount_2 = "暫無存貨"
                                var active = ""
                                price = ""
                            } else if (amount_2 <= 3) {
                                amount_2 = "存貨:<span>最後</span>" + amount_2 + "<span>個</span>"
                                price = " 售價:" + price
                            } else {
                                amount_2 = "存貨:" + amount_2
                                price = " 售價:" + price
                            }

                            container.innerHTML += `
                            <div class="card">
                                <div class="card_nav">
                                    <h1>${productName}</h1>
                                </div>
                                <div class="card_content"><img
                                        src="${img}"
                                        alt=""></div>
                                <div class="card_footer">
                                    <div class="discountBox ${active}">
                                        <p>${onsale}折優惠中</p>
                                    </div>
                                    <div>${amount_2}${price}</div>
                                </div>
                            </div>
                            `
                        }

                        else if (location_3 == location /* && amount_3 > 0*/) {
                            if (amount_3 == 0) {
                                amount_3 = "暫無存貨"
                                var active = ""
                                price = ""
                            } else if (amount_3 <= 3) {
                                amount_3 = "存貨:<span>最後</span>" + amount_3 + "<span>個</span>"
                                price = " 售價:" + price
                            } else {
                                amount_3 = "存貨:" + amount_3
                                price = " 售價:" + price
                            }


                            container.innerHTML += `
                            <div class="card">
                                <div class="card_nav">
                                    <h1>${productName}</h1>
                                </div>
                                <div class="card_content"><img
                                        src="${img}"
                                        alt=""></div>
                                <div class="card_footer">
                                    <div class="discountBox ${active}">
                                        <p>${onsale}折優惠中</p>
                                    </div>
                                    <div>${amount_3}${price}</div>
                                </div>
                            </div>
                            `
                        }
                    });
                });
        }

        function clearAllactive() {
            btns.forEach(element => {
                if (element.classList.contains('active')) {
                    element.classList.remove('active')
                }
            });
        }


        btns.forEach(btn => {
            btn.onclick = function () {
                var ShowString = btn.innerText;
                filter(ShowString, this)
            }
        });



    </script>
</body>

</html>
