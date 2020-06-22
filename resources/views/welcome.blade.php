@extends ('layout')
@section ('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Hello to my pizza store
        </div>
        <p class="msg">{{ session('msg') }}</p>
        <p><a href="/create">Place an order now</a></p>
    </div>
</div>
@endsection