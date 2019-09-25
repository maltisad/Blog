<form method="post" action="/admin/updatepost">
	@csrf
	<input type="hidden" name="id" value="{{$post->id}}">
<p>Titulli</p>
<p><input type="text" style="width:100%" name="title" value="{{$post->title}}"></p>
<p>Texti</p>
<p><textarea type="text" style="width:100%" rows="10" name="content">{{$post->content}}</textarea>
	<br>
<input type="submit"  name="Submit">





</form>