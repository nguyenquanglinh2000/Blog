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
                                    @if ($comment->id != null)
                                        @if ($comment->id_article == $article->id)
                                            @foreach ($user as $users)
                                                @if($comment->id_user == $users->id)
                                                    <div class="comment-author">
                                                        <i class="fas fa-user-alt"></i>
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
                                        @endif
                                    @endif
                                @endforeach
                                
                        </article>
                    </li>
                
            </ol>
        </div>
        
        <div class="col-md-6">
            <div class="comment-box">
                <form action="{{ route('comments.store')}}" class="form-inline" method="GET">
                    @csrf
                    <div class="form-outline">
                        <textarea name="content" class="form-control" id="textAreaExample"
                        @if (!Auth::check())
                            {{ 'disabled' }}
                        @endif
                        rows="4" cols="100"></textarea>
                        <label class="form-label" for="textAreaExample">Hãy viết bình luận của bạn tại đây</label>
                    </div>
                    @if (Auth::check()) 
                        <input type="text" name='id_user' value="{{Auth::user()->id}}" hidden>
                    @endif
                    <input type="text" name='id_article' value="{{$article->id}}" hidden>
                    <br/>
                    @if (Auth::check()) 
                        <div style="margin-top:2ch">
                            <button type="submit" class="btn btn-primary" style="float:right">Bình luận</button>
                        </div>
                    @else
                        <p>Bạn cần đăng nhập</p>
                    @endif
                    
                </form>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px"></div>
</div>