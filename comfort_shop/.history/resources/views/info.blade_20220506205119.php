@extends('header')

@section('content')
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Про нас</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Manrope:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&family=Manrope:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Manrope:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    <hr class="hide">
    <main>
        <section class="main-img">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="img/image 38.png" class="picture">
                        <img src="img/image 38 (1).png" class="picture-mobile">
                    </div>
                    <div class="col-6" id="frame">
                        <div style="margin: 0 auto;">
                            <h1>Пpo «COMFORT»</h1>
                            <p>Ми віримо, що комфорт повинен бути доступним кожному. Маєте бажання дізнатися більше?
                                <a href="#info"><div class="button"><img src="img/Group 63 (2).svg"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-features">
            <h1><a name="info"></a>МЕБЛЕВА ПРОМИСЛОВІСТЬ ПОТРЕБУЄ ЗМІН</h1>
            <div class="container">
                <br>
                <div class="row">
                    <div class="col">
                        <img src="img/image 40.png"
                            style="max-width: 100%; display: block;">
                    </div>
                    <div class="col">
                        <div class="feature">
                            <h2>Відповідність ціни та якості</h2>
                            <p>Нашим першим завданням було надати клієнтам можливість купувати стильні, комфортні, та
                                при цьому не надто дорогі меблі.</p>
                            <a href="#"><img src="img/Group 64.svg"> </a>
                        </div>
                    </div>
                </div>
                <div class="row" id="second">
                    <div class="col">
                        <div class="feature-1">
                            <h2>Інноваційний дизайн</h2>
                            <p>Наша студія закріплює свою практику в двох напрямках дизайну: американському модернізмі
                                та сучасному скандинавському стилі.</p>
                            <a href="#"><img src="img/Group 64.svg"> </a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/image 30.png">
                    </div>
                </div>
            </div>
        </section>
        <section class="unique">
            <h1>МИ НЕ ЗВИЧАЙНА МЕБЛЕВА КОМПАНІЯ</h1>
            <img src="img/image 27.png" width="100%">
            <div class="container">
                <p>Бути просто нормальними ніколи не було достатньо. У роздумах над компромісом між якістю, доступністю
                    та зручністю, ми заснували COMFORT з новим підходом до меблів.</p>
                <br>
                <img src="img/image 39.png" width="100%">
                <h2>ЗВ’ЯЖІТЬСЯ З НАМИ</h2>
                <div class="contacts" style="padding: 0px 20%; display: flex; justify-content: space-between; align-items: center;">
                    <a href="#"><img src="img/image 32.svg"></a>
                    <a href="#"><img src="img/image 33.svg"></a>
                    <a href="#"><img src="img/image 34.svg"></a>
                    <a href="#"><img src="img/image 35.svg"></a>
                    <a href="#"><img src="img/image 36.svg"></a>
                    <a href="#"><img src="img/image 37.svg"></a>
                </div>
            </div>
        </section>
    </main>
    <footer id="bottom">
    <section class="form">
    <?php if (!isset($_POST["mail"])) { ?>
                <p>Підпишіться, аби першими дізнаватися про головні новини та масштабні знижки</p>
                <div class="subscribe">
                    <form method="POST" style="width:800px; margin: 0; display: flex; align-items: center;">
                        <div style="display: flex; align-items: center;">
                            <img src="img/Shape.svg" class="message">
                            <input style="width:500px; outline: none; border: none; font-size: 25px;" type="text" name="mail" placeholder="Введіть e-mail">
                        </div>
                        <button type="submit" style="background: none; border: 0; padding:0;"><img src="img//Group 61.svg" class="sub-btn"></button>
                    </form>
                </div>
            <?php } else { ?>
                <p style="padding-top: 130px; color: #F5EFEA">Дякуємо за підписку! Перевірте свою поштову скриньку
                    <?php
                    echo htmlspecialchars($_POST["mail"]);
                    ?>
                    <a style="color: #F5EFEA; border: 0; padding:0;">
                        <p style="font-style: italic; padding: 0px; font-size:25px;">Назад
                    </a>
                <?php } ?>
    </section>
    <hr>
    <section class="footer-1">
        <a href="#">Доставка</a>
        <a href="header.php?page=info">Про нас</a>
        <a href="header.php?page=catalog">Товари</a>
        <a href="#">Контакти</a>
        <a href="#">Магазини</a>
        <a href="#">Пропозиції</a>
        <a href="#">Проекти</a>
    </section>
    <br>
</footer>
</body> 
@endsection
