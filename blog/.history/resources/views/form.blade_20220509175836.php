@if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
<?php
 if (preg_match("/[0-9a-z]+@[a-z]/", $mail)) { ?>
    <p>Дякуємо за підписку! Перевірте свою поштову скриньку </p>
<p> {{ $mail }} </p>
<?php } ?>
