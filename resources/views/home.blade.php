@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    <div>
        @include('sidebar_links')
    </div>
    <div class="container">
        @include('publish_tweet_panel')

        <div class="border rounded mt-4" style="border-color: gray;">
            @foreach ($tweets as $tweet)
            @include('tweet')
            @endforeach
        </div>
    </div>
    <div style="background-color: lightblue" class="rounded p-4">
        @include('friends_list')
    </div>
</div>
@endsection
