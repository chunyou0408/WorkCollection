@extends('layouts.template')
@section('css')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    .tab_content h1 {
        margin-top: 0;
        padding-top: 10px;
    }

    .container {
        max-width: 920px;
        height: 100vh;
        background-color: aqua;
        margin: 0 auto;
    }

    .tab_btn_group {
        width: 100%;
        height: 120px;
        background-color: bisque;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .tab_btn {
        font-size: 24px;
        padding: 20px;
        background-color: lightpink;
        transition: 0.5s;
        cursor: pointer;

    }

    .tab_btn.active {
        color: white;
        background-color: lime;
    }



    .tab_content_group {
        width: 100%;
        height: calc(100% - 120px);
        background-color: lightgray;
        position: relative;
    }

    .tab_content {
        transition: 2s;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
    }

    .tab_content.active {
        opacity: 1;
        background-color: lightskyblue;

    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="tab_btn_group">
        <div id="tab_btn_1" class="tab_btn active">分頁1</div>
        <div id="tab_btn_2" class="tab_btn">分頁2</div>
        <div id="tab_btn_3" class="tab_btn">分頁3</div>
        <div id="tab_btn_4" class="tab_btn">分頁4</div>
        <div id="tab_btn_5" class="tab_btn">分頁5</div>
        <div id="tab_btn_6" class="tab_btn">分頁6</div>
    </div>

    <div class="tab_content_group">
        <div id="tab_content_1" class="tab_content active">
            <h1>分頁內容1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio asperiores magnam cum iste
                incidunt ratione laborum esse alias dolorem corrupti cumque quos impedit nemo architecto sit, nisi
                quaerat numquam doloribus.
                Ea qui consectetur perspiciatis nulla aperiam, consequatur ipsa magni rem at facilis cumque amet ab
                vel fugit perferendis obcaecati illo voluptates odit quia ducimus repudiandae doloribus dignissimos
                tenetur! Pariatur, accusamus.
                Fugit, animi. Deleniti voluptates quisquam, nemo quam in asperiores mollitia veniam a sint, quasi
                illum fuga, iste impedit assumenda? Quisquam fugit qui quidem quas deleniti aliquam cumque, ipsa
                tempora quos!
                Necessitatibus eum illo eveniet aliquid. Veritatis voluptatum dicta ipsa provident excepturi
                expedita repellendus reprehenderit aliquid consequuntur omnis accusamus eum ducimus ipsum cumque
                consequatur veniam eveniet laborum fugiat sed, necessitatibus dolorum.
                Eum, quod laboriosam quibusdam optio labore veritatis, necessitatibus libero facilis at quae
                cupiditate. Exercitationem officiis consequatur eveniet eaque, hic, sequi perspiciatis assumenda
                quis voluptatem suscipit porro at accusamus harum itaque.</p>
        </div>
        <div id="tab_content_2" class="tab_content">

            <h1>分頁內容2</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, amet. Eum culpa, dolore
                accusantium sed expedita dolor eaque atque temporibus nulla quae alias doloremque. Rerum, eum iste!
                Fuga, debitis officia.
                Repellat ducimus assumenda quibusdam, tempore officiis molestiae deleniti voluptatem mollitia ab
                obcaecati quas necessitatibus sit nisi nobis, excepturi vero aut? Aliquid odio numquam, sequi illum
                enim possimus inventore? Perferendis, exercitationem.
                Ut praesentium quas maiores, porro illo temporibus dolores at impedit, sit sunt excepturi? Libero
                dolore dicta quam veritatis, quidem explicabo, eveniet consequuntur nam pariatur corrupti veniam
                sequi molestias quas similique!
                Nisi iusto, consequuntur veritatis in fugiat excepturi facere eius, corrupti eveniet voluptates
                placeat dolor tenetur ipsam atque ratione laborum nobis necessitatibus aspernatur? Nobis consequatur
                sunt praesentium ea qui eos expedita.
                Alias nihil expedita error at, hic totam molestiae accusantium ab suscipit aliquid itaque. Enim
                dolores aperiam vero magnam, eos similique inventore ea molestias, sint aliquid libero saepe
                consectetur facilis veritatis.</p>
        </div>
        <div id="tab_content_3" class="tab_content">

            <h1>分頁內容3</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus labore soluta, dicta
                distinctio dolorem obcaecati porro impedit deleniti illum vitae, nisi nulla animi ipsum. Dolores
                molestias tempora quam explicabo.
                Totam, ad! Architecto optio quidem quae impedit, totam a ducimus sunt facilis soluta libero illum
                quaerat. Dignissimos distinctio dolorem itaque dicta aut veniam porro labore laborum, ea aliquam
                pariatur esse!
                Eligendi rem nemo, officia natus deserunt atque architecto, quis molestias sunt voluptatum
                dignissimos rerum earum! Voluptate itaque, cumque voluptates eum est, ipsa repellat quae, dolorem
                omnis corporis sapiente eveniet iure.
                Nisi minima eius voluptate autem iusto. Voluptatum et quidem sapiente animi. Perspiciatis, iusto.
                Obcaecati, nisi omnis nobis delectus quis beatae quo illo dolor, laborum ea molestias sit eveniet,
                vero veritatis?
                Neque laborum delectus facilis illo velit possimus, fugit quasi eius temporibus maxime sequi aliquid
                nesciunt ipsam natus fugiat quas quidem quae aperiam distinctio. Repellat adipisci a nobis
                cupiditate quisquam ad.</p>
        </div>
        <div id="tab_content_4" class="tab_content">

            <h1>分頁內容4</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus labore soluta, dicta
                distinctio dolorem obcaecati porro impedit deleniti illum vitae, nisi nulla animi ipsum. Dolores
                molestias tempora quam explicabo.
                Totam, ad! Architecto optio quidem quae impedit, totam a ducimus sunt facilis soluta libero illum
                quaerat. Dignissimos distinctio dolorem itaque dicta aut veniam porro labore laborum, ea aliquam
                pariatur esse!
                Eligendi rem nemo, officia natus deserunt atque architecto, quis molestias sunt voluptatum
                dignissimos rerum earum! Voluptate itaque, cumque voluptates eum est, ipsa repellat quae, dolorem
                omnis corporis sapiente eveniet iure.
                Nisi minima eius voluptate autem iusto. Voluptatum et quidem sapiente animi. Perspiciatis, iusto.
                Obcaecati, nisi omnis nobis delectus quis beatae quo illo dolor, laborum ea molestias sit eveniet,
                vero veritatis?
                Neque laborum delectus facilis illo velit possimus, fugit quasi eius temporibus maxime sequi aliquid
                nesciunt ipsam natus fugiat quas quidem quae aperiam distinctio. Repellat adipisci a nobis
                cupiditate quisquam ad.</p>
        </div>
        <div id="tab_content_5" class="tab_content">

            <h1>分頁內容5</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus labore soluta, dicta
                distinctio dolorem obcaecati porro impedit deleniti illum vitae, nisi nulla animi ipsum. Dolores
                molestias tempora quam explicabo.
                Totam, ad! Architecto optio quidem quae impedit, totam a ducimus sunt facilis soluta libero illum
                quaerat. Dignissimos distinctio dolorem itaque dicta aut veniam porro labore laborum, ea aliquam
                pariatur esse!
                Eligendi rem nemo, officia natus deserunt atque architecto, quis molestias sunt voluptatum
                dignissimos rerum earum! Voluptate itaque, cumque voluptates eum est, ipsa repellat quae, dolorem
                omnis corporis sapiente eveniet iure.
                Nisi minima eius voluptate autem iusto. Voluptatum et quidem sapiente animi. Perspiciatis, iusto.
                Obcaecati, nisi omnis nobis delectus quis beatae quo illo dolor, laborum ea molestias sit eveniet,
                vero veritatis?
                Neque laborum delectus facilis illo velit possimus, fugit quasi eius temporibus maxime sequi aliquid
                nesciunt ipsam natus fugiat quas quidem quae aperiam distinctio. Repellat adipisci a nobis
                cupiditate quisquam ad.</p>
        </div>
        <div id="tab_content_6" class="tab_content">

            <h1>分頁內容6</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus labore soluta, dicta
                distinctio dolorem obcaecati porro impedit deleniti illum vitae, nisi nulla animi ipsum. Dolores
                molestias tempora quam explicabo.
                Totam, ad! Architecto optio quidem quae impedit, totam a ducimus sunt facilis soluta libero illum
                quaerat. Dignissimos distinctio dolorem itaque dicta aut veniam porro labore laborum, ea aliquam
                pariatur esse!
                Eligendi rem nemo, officia natus deserunt atque architecto, quis molestias sunt voluptatum
                dignissimos rerum earum! Voluptate itaque, cumque voluptates eum est, ipsa repellat quae, dolorem
                omnis corporis sapiente eveniet iure.
                Nisi minima eius voluptate autem iusto. Voluptatum et quidem sapiente animi. Perspiciatis, iusto.
                Obcaecati, nisi omnis nobis delectus quis beatae quo illo dolor, laborum ea molestias sit eveniet,
                vero veritatis?
                Neque laborum delectus facilis illo velit possimus, fugit quasi eius temporibus maxime sequi aliquid
                nesciunt ipsam natus fugiat quas quidem quae aperiam distinctio. Repellat adipisci a nobis
                cupiditate quisquam ad.</p>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var btns = document.querySelectorAll(".tab_btn")
        var contents = document.querySelectorAll(".tab_content")

        for (let index = 0; index < btns.length; index++) {
            const btn = btns[index];
            const content = contents[index];
            btn.onclick = function () {

                console.log(`第${index + 1}個被按到了`);

                clearALLactive()

                btn.classList.add('active')
                content.classList.add('active')
            }
        }

        function clearALLactive() {

            for (let index = 0; index < btns.length; index++) {
                const btn = btns[index];
                const content = contents[index];
                btn.classList.remove('active')
                content.classList.remove('active')
            }
        }

</script>

@endsection
