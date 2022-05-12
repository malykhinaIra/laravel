@extends('layouts.header')
@section('title')
{{$item["image"]}}
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="../css/info.css">
</head>
<body>
<hr style='margin-top: -2px;'>
<br>
<div class='container' style='display: flex; align-items: center; margin: auto; margin-top: 20px;'>
<img src='{{$item->get_image()}}' style='margin-left: 25%;'>
<div style='margin-left: 40px; margin-top: 22%;'>
<p>{{$item["description"]}}</p>
<p>{{$item["price"]}}</p>
<a href='#' style='line-height: 100px; color: black; padding:10px 20px; border: 1px solid black;'>Купити</a>
</div>
</div>
<br><br><br>
@endsection
