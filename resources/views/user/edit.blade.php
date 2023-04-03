@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit User <span>{{ $user->name }}</span></h1>
</div>

<form action="{{ url('user/'.$user->id) }}" method="POST" class="w-50">
	@method('PUT')
	@csrf
	<div class="mb-3">
	  <label class="form-label">Nama User</label>
	  <input type="text" class="form-control" name="name" value="{{ $user->name }}">
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
