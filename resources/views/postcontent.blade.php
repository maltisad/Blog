
<h1>{{$p->title}}</h1>

<p>{{$p->content}}</p>
<p>{{$p->Category->category_name}}</p>
<p>{{$p->Category->category_id}}</p>
<p>{{$p->created_at->diffForHumans()}}</p>

<br><br><br>
<p>Show me what you think here! </p>
<form action="/read/comment" method="post">
<input type="hidden" name="id" value="{{$p->id}}">
<input type="text" name="username" placeholder="Write your name"><br><br>
<input type="text" name="content" placeholder="Write your comment here"><br><br>

{{csrf_field() }}
<button type="submit">Submit</button>
</form>

@foreach($comments as $comment)
@if($p->id==$comment->post_id)
<p>Username:{{$comment->username}}</p>
<p>Comment:{{$comment->content}}</p>
<hr>
@endif
@endforeach
