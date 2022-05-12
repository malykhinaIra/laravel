@extends('layouts.header')
@section('title')
    Comfort
@endsection
@section('content')
<!DOCTYPE html>
<html lang="ua">

<head>
    <link rel="stylesheet" href="css\main.css">
</head>

<body>
    <main class="main">
        <section class="main-img">
            <img src="img/main.png" width="100%">
            <div class="slogan">
                <h1>ВЛАШТУЙ ЗАТИШОК У ВЛАСНІЙ ОСЕЛІ</h1>
                <p>КУПУЙ МЕБЛІ ВИГІДНО РАЗОМ З «COMFORT»</p>
            </div>
            <a href="/catalog" class="btn">Перейти до покупок</a>
        </section>
        <section class="benefits">
            <div class="container">
                <div class="benefits">
                    <p>ПЕРЕВАГИ</p>
                    <h1>ЧОМУ САМЕ МИ?</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="benefit">
                            <img src="img/Icon.svg">
                            <div class="benefit-text">
                                <h2>Екологічність</h2>
                                <p>Ми робимо важливі кроки, щоб зменшити негативний вплив на планету. Для нас це означає
                                    відповідальну торгівлю та виробництво. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="benefit">
                            <img src="img/Icon (1).svg">
                            <div class="benefit-text">
                                <h2>Повернення коштів</h2>
                                <p>Ви можете повернути товар назад у магазин і отримати свої кошти, за умови збереження
                                    чеку.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="benefit">
                                <img src="img/Icon (2).svg" class="icon">
                                <div class="benefit-text">
                                    <h2>Швидка доставка</h2>
                                    <p>Доставимо товар до ваших дверей прямо у день замовлення. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="benefit">
                                <img src="img/Icon (3).svg" class="icon">
                                <div class="benefit-text">
                                    <h2>Підтримуємо нові таланти</h2>
                                    <p>Для наших дизайнерів це означає бути частиною партнерства, яке ґрунтується на
                                        їхніх
                                        інтересах.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="offers">
            <div class="container">
                <br><br>
                <h1>ГАРЯЧІ ПРОПОЗИЦІЇ СПЕЦІАЛЬНО ДЛЯ ВАС</h1>
                <div class="row">
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="#"><img src="img/image 42.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Диван розкладний, кремовий</p>
                                    <p>2800 грн</p>
                                </div>
                                <a href="#"><img src="img/image 21.svg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="#"><img src="img/image 43.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Стілець, білий</p>
                                    <p>900 грн</p>
                                </div>
                                <a href="#"><img src="img/image 21.svg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" id="third">
                        <div class="image">
                            <a href="#"><img src="img/image 44.png"></a>
                        </div>
                        <div class="price">
                            <div>
                                <p>Журнальний столик, дерев’яний</p>
                                <p>800 грн</p>
                            </div>
                            <a href="#"><img src="img/image 21.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="image">
                            <a href="#"><img src="img/image 45.png"></a>
                        </div>
                        <div class="price">
                            <div>
                                <p>Крісло-мішок, жовтогаряче</p>
                                <p>650 грн</p>
                            </div>
                            <a href="#"><img src="img/image 21.svg"></a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <a href="#"><img src="img/image 46.png"></a>
                        </div>
                        <div class="price">
                            <div>
                                <p>Тумбочка, темно-зелена </p>
                                <p>760 грн</p>
                            </div>
                            <a href="#"><img src="img/image 21.svg"></a>
                        </div>
                    </div>
                    <div class="col-4" id="third">
                        <div class="image">
                            <a href="#"><img src="img/image 47.png"></a>
                        </div>
                        <div class="price">
                            <div>
                                <p>Двоспальне ліжко</p>
                                <p>3400 грн</p>
                            </div>
                            <a href="#"><img src="img/image 21.svg"></a>
                        </div>
                    </div>
                </div>
                <a href="#"><img src="img/Group 60.png" class="button"></a>
            </div>
        </section>
        <br><br><br><br>
        <section class="room">
            <p class="shop">ШОПІНГ ПО КІМНАТАХ</p>
            <div class="container">
                <div class="room-shopping">
                    <a href="#">
                        <div class="arrow"><img src="img/image 29.svg"></div>
                    </a>
                    <div class="picture">
                        <a href="#"><img src="img/Group 68.png"></a>
                    </div>
                    <div class="arrow"><a href="#"> <img src="img/image 30.svg"></a></div>
                </div>
                <br>
                <img src="img/Group 3.svg" class="scroll">
            </div>
        </section>
    </main>
    <br>
 
@endsection