@extends('layouts.header')
@section('content')
<head>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Manrope:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/catalog.css">
</head>
<h2>Дякуємо за підписку! Перевірте свою поштову скриньку </h2>
<p> {{ $mail }} </p>
@endsection
