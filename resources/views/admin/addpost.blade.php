
<form action="/register" method="post">
<input type="text" name="title" placeholder="title">
<input type="text" name="content" placeholder="content">

{{csrf_field() }}
<button type="submit">Submit</button>
</form>



@foreach($posts as $post)
<ul>
		<li>{{$post->title}}</li>
		<li> {{$post->content}}</li>
		<a href="/admin/editpost/{{$post->id}}">Edit</a>
		<a href="/admin/deletepost/{{$post->id}}">Delete</a>
		<br>
		</ul>


	@endforeach



