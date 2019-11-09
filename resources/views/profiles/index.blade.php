@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
        <img src="/storage/{{ $user->profile->image }}" class="rounded-circle w-100">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            @can ('update', $user->profile)
            <a href="/p/create">Add new Post</a>
            @endcan
        </div>
        @can ('update', $user->profile)
        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        @endcan
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
