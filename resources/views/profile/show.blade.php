@extends('components.app')

@section('content')
   <header class="mb-6">
       <div class="relative">
       <img
           src="/images/cover.jpg"
           alt=""
           class="mb-2 rounded relative"
       >
       <img src="{{$user->avatar}}"
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            alt="avatar"
            width="125px"
            style="left:50%">
       </div>
       <div class="flex justify-between items-center mb-2">
           <div>
           <h2 class="font-bold text-xl mb-0">{{$user->name}}</h2>
           <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
       </div>
       <div class="flex items center">
           <a href="" class="rounded-full border border-gray-300 shadow py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
           @include('components._follow_unfollow')
       </div>
       </div>

       <p class="text-xs">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum fugiat id in, laudantium mollitia nesciunt omnis quae quas quasi sunt. Cumque dolorem earum itaque laboriosam molestias obcaecati possimus quae quam sunt voluptatibus! Corporis ducimus earum eum, illo itaque iure maxime modi molestiae numquam, odio pariatur quam quo tempore unde voluptatum?
       </p>

   </header>

    <hr>
    @foreach($user->tweets as $tweet)
        @include('_tweet')
    @endforeach
@endsection
