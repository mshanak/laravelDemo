@extends('layout')



@section('content')
<h1>All departments</h1> 
<a href="/departments/add">+ Add</a>

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
		<a href="/departments/edit/{{$item->id}}" class="btn btn-info">Edit</a>
		<a href="/departments/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
		</td>
	</tr>
@endforeach	 

</table>
 
 
@endsection