
@extends('layout')

@section('content')
<h1>Welcom from viewe</h1> 
<a href="/news/add">+ Add</a>

<table class="table">
	<tr>
		<th>id</th>
		<th>title</th>
		<th>--</th>
	</tr>
@foreach($news as $item)
	<tr>
		<td>{{$item->id}}</td>
		<td>{{$item->title}}</td>
		<td>
		<a href="/news/edit/{{$item->id}}" class="btn btn-info">Edit</a>
		<a href="/news/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
		</td>
	</tr>
@endforeach	 

</table>

@endsection
 
 