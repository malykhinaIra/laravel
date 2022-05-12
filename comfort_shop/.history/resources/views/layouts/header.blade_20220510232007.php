<header class="header">
    </div>
    <div class="nav-1">
        <div class="nav-toggle">
            <div class="container">
                <a href="/Info" width="10%" onclick>
                    <img src="../img/Group 65.svg" class="menu">
                </a>
                <div class="logo"><a href="index.html">COMFORT</a></div>
                <div class="row">
                    <div class="col">
                        <a href="#" style="margin-right: 2.5%;"><img src="../img/Group 56.svg"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="../img/Group 55.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="border-1">
            <input type="text" size="19" placeholder="Пошук меблів">
            <a href="#" class="search-1"><img src="../img/image 22 (1).svg"></a>
        </div>
    </div>

    <section class="nav">
        <a href="/Lend" class="logo">COMFORT</a>
        <a href="/Info">Про нас</a>
        <a href="#">Доставка</a>
        <a href="#">Підтримка</a>
        <a href="/Catalog">Каталог</a>
        <div class="border">
            <input type="text" size="19" placeholder="Пошук меблів" style="margin-bottom: 6px;">
            <a href="#" class="search"><img src="../img/image 22 (1).svg"></a>
        </div>
        <div class="shops">
            <a href="#" style="margin-right: 5px;"><img src="../img/image 57.svg"></a>
            <a href="#">Магазини</a>
        </div>
        <div class="icons">
            <a href="#"><img src="../img/Group 55.svg"></a>
            <a href="#"><img src="../img/Group 56.svg"></a>
            <a href="#"><img src="../img/user.svg"></a>
        </div>
    </section>
</header>


<div class="forYield">
    @yield('content')
</div>

<footer id="bottom">
    <section class="form">
        @if($errors->any())
        <div class="alert alert-danger">
            <p>
                Неправильно введений email. Спробуйте ще раз! </p>
        </div>
        @else
        <p>Підпишіться, аби першими дізнаватися про головні новини та масштабні знижки</p>
        @endif
        <div class="subscribe">
            <form method="post" action="/check" style="width:800px; margin: 0; display: flex; align-items: center;">
                @csrf
                <div style="display: flex; align-items: center;">
                    <img src="../img/Shape.svg" class="message">
                    <input style="width:500px; outline: none; border: none; font-size: 25px;" type="text" name="mail" placeholder="Введіть e-mail">
                </div>
                <button type="submit" style="background: none; border: 0; padding:0;"><img src="../img/Group 61.svg" class="sub-btn"></button>
            </form>
        </div>

    </section>
    <hr>
    <section class="footer-1">
        <a href="#">Доставка</a>
        <a href="/Info">Про нас</a>
        <a href="/Catalog">Товари</a>
        <a href="#">Контакти</a>
        <a href="#">Магазини</a>
        <a href="#">Пропозиції</a>
        <a href="#">Проекти</a>
    </section>
    <br>
</footer>
</body>

</html>