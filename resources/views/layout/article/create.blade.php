<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Article</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
    rel="stylesheet"
    />
    {{-- <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script> --}}

</head>
<style>
    h1{text-align: center}
</style>
<body>
    <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <br/>
    <div class="container">
        {{-- <form action="{{ route('store')}}" method="POST">
            @csrf
            <h1>Tạo bài viết</h1>
            <div>
                <label for="title">Tiêu đề bài viết</label> <br/>
                <input type="text" name='title' required>
            </div>
            <div>
                <label for="preface">Mô tả</label><br/>
                <input type="text" name="preface" required>
            </div>
            <div>
                <label for="content">Source code bài viết</label><br/>
                <textarea name="content" id="1" cols="30" rows="10" required></textarea>
            </div>
            
            <div>
                <input type="submit" id="submit" value="Dang bai">
            </div>
        </form> --}}
    
    
    <form action="{{ route('article.store')}}" method="POST">
        @csrf
        <h1>Tạo bài viết</h1>
        <div class="form-outline mb-4">
          <input type="text" id="form4Example1" class="form-control" name='title' required/>
          <label class="form-label" for="form4Example1">Tiêu đề bài viết</label>
        </div>
      
        <div class="form-outline mb-4">
          <input type="text" id="form4Example2" class="form-control" name="preface" required/>
          <label class="form-label" for="form4Example2">Mô tả</label>
        </div>
      
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" rows="4" name="content" required></textarea>
          <label class="form-label" for="form4Example3">Source code bài viết</label>
        </div>
      
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Tạo bài viết</button>
      </form>
    </div>
</body>
</html>



