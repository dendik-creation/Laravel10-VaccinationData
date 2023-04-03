@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">List Data User</h1>
	<a href="user-create" class="shadow-sm p-2 bg-body rounded">
	<span data-feather="user-plus"style="width:36px;height:36px;color:black"></span>
	</a>
</div>
<table class="table table-striped w-50">
	<th>#</th>
	<th>Nama User</th>
	<th colspan="3">Action</th>

	@php
		$count = 1;
	@endphp
	@foreach ($userAll as $item)
	<tr>
		<td>{{ $count++ }}</td>
		<td>{{ $item->name }}</td>
		<td>
			<a href="{{ url('user-edit-'.$item->id) }}" class="btn btn-info text-white text-decoration-none btn btn-sm">
				Edit
			</a>
		</td>
		<td>
			<a href="{{ url('user-'.$item->id.'-change-password') }}" class="btn btn-warning text-dark text-decoration-none btn btn-sm">
				Change Password
			</a>
		</td>
		<td>
			<form action="{{ url('user/'.$item->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger btn btn-sm">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection
