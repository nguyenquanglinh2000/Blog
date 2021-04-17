
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.links')
    
</head>

<body>
    @include('layout.header')
    <div class="container">
    
    <h2 style="font-size: 60px;">{{$article->title}}</h2>
        <br/>
        <div class="content-article">
            {!!$article->content!!}
        </div>
    </div>
    @include('layout.article.comment')
    @include('layout.footer')

    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

</body>
</html>