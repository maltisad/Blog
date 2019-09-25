

@if($posts->category_id==$categories->category_id)
<p>{{$posts->title }}</p>
<p>{{$posts->content }}</p>
@endif
