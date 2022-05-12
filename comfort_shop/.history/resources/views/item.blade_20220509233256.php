@extends('layouts.header')
@section('content')
<head>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Manrope:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body style='background-color: #F5EFEA;'>
<div class='container' style='display: flex; align-items: center; margin: auto; margin-top: 20px;'>
<img src='{{$item->image}}' style='margin-left: 25%;'>
<div style='margin-left: 40px; margin-top: 22%;'>
<p>{{$item->description}}</p>
<p>{{$item->price}}</p>
<a href='#' style='line-height: 100px; color: black; padding:10px 20px; border: 1px solid black;'>Купити</a>
</div>
</div>
<br><br><br>
@endsection
