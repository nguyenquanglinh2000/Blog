@extends('layout.master')
<div class="container">
    <h1 style="font-weight: bolder; font-size: 60px">Về blog Lập trình cuộc sống</h1>
    <p style="font-size: 25px">Trước hết xin được cảm ơn bạn vì đã xem trang này, mình là Bùi Văn Nguyện, tác giả của blog Lập Trình Cuộc Sống. Mình viết blog này với mục đích chia sẻ những kinh nghiệm mình học được khi làm việc trong ngành lập trình.</p>


    <section>
        
        @foreach( $authors as $author)
            <div class="title">
               <h1> <a href="">{{ $author->title}}</a></h1>
            </div>
            <div style="border-bottom: 2px solid rgba(0,0,0,0.1); margin:20px;"></div>
            <div class="content">
                <p>
                    {{ $author->content}}
                </p>
            </div>
            @php
                $check='';
              if($author->img == NULL){
                $check = 'display: none;';
              }
            @endphp
            <div class="img">
                <img src="{{$author->img}}" alt="" width="100%" height="auto" style="{{$check}}">
            </div>
            <div style=" margin:100px;"></div>
            @endforeach
    </section>


</div>