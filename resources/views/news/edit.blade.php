<h1>Edit news</h1>
<form action="" method="post">
	{{ csrf_field() }}
	<p><input type="text" name="title" value="{{$item->title}}"></p>
	<p><textarea name="body">{{$item->body}}</textarea></p>
	<p><input type="submit" name="" value="Save Edit"></p>
</form>