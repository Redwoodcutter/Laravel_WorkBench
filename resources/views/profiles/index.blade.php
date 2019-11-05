@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
        <img src="https://avatars3.githubusercontent.com/u/11586702?s=460&v=4" class="rounded-circle" style="height: 200px;">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="/p/create">Add new Post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Post</div>
            <div class="pr-5"><strong>21k</strong> Followers</div>
            <div class="pr-5"><strong>200</strong> Following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div class="">{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url ?? 'N\A' }}</a></div>
      </div>
  </div>
  <div class="row  pt-5">

    @foreach($user->posts as $post)
    <div class="col-4 pb-4">
       <a href="/p/{{ $post->id }}">
          <img src="/storage/{{ $post->image }}" class="w-100">
       </a>
    </div>
    @endforeach
  </div>  
</div>
@endsection
