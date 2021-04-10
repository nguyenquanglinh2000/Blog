
@extends('layout.master')
@section('content')
    <div class="title-page">
        <div class="background-video">
    
    <video autoplay muted loop id="myVideo">
                <source src="video/keyboard3.mp4" type="video/mp4">
            </video>
        </div>
        <div class="title-blog">
            <h1 style="font-size: 100px;">Blog của tôi</h1>
            <h3 style="font-size: 30px;">Đây chỉ là một cái Blog cùi bắp</h3>
        </div>
    </div>


    <div class="container"> 

        <section>
            
            @foreach( $articles as $article)
                <div class="title">
                    <h2> <a href="/article/{{$article->id}}">{{ $article->title}}</a></h2>
                </div>
                <br/>

                <div class="preface" >
                    <h4>
                        {!! $article->preface!!}
                    </h4>
                    <br/>
                    <button type="button" class="btn btn-primary btn-floating" onclick="document.location='/article/{{$article->id}}'">
                        Tiếp tục đọc
                    </button>
                </div>
                <div style="border-bottom: 3px solid rgba(0,0,0,0.1);padding-top:10px"></div>
                @endforeach
        </section>
            <div class="page">{{$articles->links()}}</div>
            <br/>
    </div>
@endsection

