<form action="{{ route('store')}}" method="POST">
    @csrf
    <h1>Tao bai viet</h1>
    <div>
        <label for="title">Tieu de bai viet</label> <br/>
        <input type="text" name='title' required>
        {{-- @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message}}</strong>
            </span>
        @enderror   --}}
    </div>
    <div>
        <label for="content">Noi dung bai viet</label><br/>
        <textarea name="content" id="1" cols="30" rows="10" required></textarea>
    </div>
    <div>
        <input type="submit" id="submit" value="Dang bai">
    </div>
</form>


