@extends('layouts.header')
@section('content')
<head>
    <title>{{$item->description}}</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
</head>
<body style='background-color: #F5EFEA;'>
<div class='container' style='display: flex; align-items: center; margin: auto; margin-top: 20px;'>
<img src='{{$item->image}}' style='margin-left: 30%;'>
<div style='margin-left: 40px; margin-top: 22%;'>
<p>{{$item->description}}</p>
<p>{{$item->price}}</p>
<a href='#' style='line-height: 100px; color: black; padding:10px 20px; border: 1px solid black;'>Купити</a>
</div>
</div>
<br><br><br>
@endsection
