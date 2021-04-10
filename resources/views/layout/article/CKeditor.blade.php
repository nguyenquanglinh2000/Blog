
<textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<h1><a href="{{ route('create')}}">Tạo bài viết</a></h1>