@if (Session::has('success'))
<div class="alert bg-success text-white">
	{{ Session::get('success') }}
</div>
@endif

@if (Session::has('failed'))
<div class="alert bg-danger text-white">
	{{ Session::get('failed') }}
</div>
@endif

@if ($errors->any())
<div class="alert text-white bg-danger">
    @php
        $count = 1;
    @endphp
    <h5>Failed List :</h5>
    @foreach ($errors->all() as $item)
        {{ $count++ }}.&nbsp;<span>{{ $item }}</span> <br>
    @endforeach
</div>
@endif
