<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.master')

<div class="body-page">
    <div class="top-content">
        <div class="title-top-content">
            <h1><a href="">Blog của tôi</a></h1>
            <h3>Đơn giản chỉ là một cái blog cùi bắp</h3>
        </div>
    </div>
</div>

<div class="container"> 

    <section>
        
        @foreach( $articles as $article)
            <div class="title">
               <h1> <a href="" style="font-size:45px">{{ $article->title}}</a></h1>
            </div>
            <div class="content" >
                <p style="font-family:Open Sans;font-size:25px">
                    {!! $article->content!!}
                </p>
    
            <a href="" class="button_open" style="text-decoration:none;">Tiếp tục đọc</a>
            </div>
            <div style="border-bottom: 3px solid rgba(0,0,0,0.1); padding-top:25px;"></div>
            @endforeach
    </section>
        <div class="page">{{$articles->links()}}</div>
</div>
</body>
</html>
