@extends('layout')

@section('content')
<h1>Add news</h1>
<form action="" method="post">
	{{ csrf_field() }}
	<p><input type="" name="title" ></p>
	<p><textarea name="body"></textarea></p>
	<p><input type="submit" name=""></p>
</form>

@endsection