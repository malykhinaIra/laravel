@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<p>Дякуємо за підписку! Перевірте свою поштову скриньку </p>
<p> {{ $mail }} </p>
