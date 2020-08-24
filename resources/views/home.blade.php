@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lg:flex">
    <div class="lg:w-1/6">
        @include('_side_bar_links')
    </div>
    <div class="lg:flex-1 lg:mx-10 lg:justify-between " style="max-width: 700px">
        @include('_publish_tweet_panel')
        <div class="border border-gray-300 rounded-lg">
            @foreach($tweets as $tweet)
                @include('_tweet')
            @endforeach
        </div>
    </div>
    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
        @include('_friend_list')
    </div>
    </div>
</div>
@endsection

