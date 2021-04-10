<form action="{{ route('author.store')}}" method="POST">
    @csrf
    <h1>Update Author</h1>
    <div>
        <label for="title">Tieu de gioi thieu</label> <br/>
        <input type="text" name='title' required>
        {{-- @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message}}</strong>
            </span>
        @enderror   --}}
    </div>
    <div>
        <label for="content">Noi dung gioi thieu</label><br/>
        <textarea name="content" id="1" cols="30" rows="10" required></textarea>
    </div>
    <div>
        <input type="submit" id="submit" value="Dang bai">
    </div>
</form>


