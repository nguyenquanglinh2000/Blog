
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
        <h2>{{$article->title}}</h2>
        <div class="content-article">
            {!!$article->content!!}
        </div>

    </div>
    @include('layout.article.comment')
    @include('layout.footer')
</body>
</html>