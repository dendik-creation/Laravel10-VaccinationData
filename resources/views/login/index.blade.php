@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Please Login to Access Data</h1>
</div>
    
<form action="/login" method="POST" class="w-50">
	@csrf
	<div class="mb-3">
	  <label class="form-label">Username</label>
	  <input type="text" class="form-control" name="name">
	</div>
	<div class="mb-3">
	  <label class="form-label">Password</label>
	  <input type="password" class="form-control" name="password">
	</div>
	<button type="submit" class="btn btn-primary w-100 mt-3">
        <span data-feather="log-in"></span>
        Login</button>
  </form>
@endsection