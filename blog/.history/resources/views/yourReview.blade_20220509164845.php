@extends('header')

@section('title') Відгуки @endsection

@section('content')
    <link rel="stylesheet" href="forForm.css">



    <div class="decor">

        <form method="post" action="/yourReview/check" >
            @csrf
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
                <h3>Написати відгук</h3>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="email" name="email" id="email" placeholder="Email">
                <textarea placeholder="Message" name="message" id="message" rows="3"></textarea>
                <input type="submit" value="Відправити">
            </div>
        </form>
    </div>
@endsection
