@extends('layout.links')
<div class="container">
    <div class="row" >
        <h2 style="font-weight: bold;">Cảm nhận của bạn về bài viết</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ol class="comment-list" style="list-style-type: none;">
                
                    <li id="">
                        <article id="" class="comment-body">
                            <footer class="comment-meta">
                                @foreach ($comments as $comment)
                                    @foreach ($user as $users)
                                        @if($comment->id_user == $users->id)
                                            <div class="comment-author">
                                            <img src="/img/author/quanglinh.jpg" alt="">
                                            <b>
                                                {{$users->name}}
                                            </b>
                                        </div>
                                        @endif
                                    @endforeach
                                        <div class="time-comments">
                                            <p>
                                                {{$comment->created_at}}
                                            </p>
                                        </div>
                            </footer>
                                    <div class="comments-content">
                                        <p>
                                            {{$comment->content}}
                                        </p>
                                    </div>
                                @endforeach
                                
                        </article>
                    </li>
                
            </ol>
        </div>
        
        <div class="col-md-12">
            <div class="widget-area no-padding blank">
                <form action="{{ route('comments.store')}}" class="form-inline" method="GET">
                    {{-- {{@csrf_field()}}
                    {{ method_field('GET') }} --}}
                    @csrf
                    <textarea name="content" id="content-comment" cols="100" rows="5" placeholder="Hãy viết bình luận của bạn tại đây"></textarea>
                    @if (Auth::check()) 
                        <input type="text" name='id_user' value="{{Auth::user()->id}}" hidden>
                    @endif
                    
                    <input type="text" name='id_article' value="1" hidden>
                    <div class="login-account" >
                        <p>Click vào biếu tượng để đăng nhập</p>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-square fa-2x"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="{{ route('register') }}"><i class="fas fa-user-plus fa-2x"></i></a></li>
                        </ul>

                    </div>
                    <div class="submit-comments">
                        <input type="submit" value="Bình luận" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px"></div>
</div>