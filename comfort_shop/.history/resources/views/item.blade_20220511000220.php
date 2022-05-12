@extends('layouts.header')
@section('title')
{{$item->get_description()}}
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="../css/info.css">
</head>
<body>
<hr style='margin-top: -5px;'>
<div class='container' style='display: flex; align-items: center; margin: auto; margin-top: 20px;'>
<img src='{{$item->get_image()}}' style='margin-left: 25%;'>
<div style='margin-left: 40px; margin-top: 22%;'>
<p>{{$item->get_description()}}</p>
<p>{{$item->get_price()}}</p>
<a href='#' style='line-height: 100px; color: black; padding:10px 20px; border: 1px solid black;'>Купити</a>
</div>
</div>
<br><br><br>
@endsection
