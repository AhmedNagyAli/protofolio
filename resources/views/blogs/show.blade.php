@extends('layout.main')
@section('content')

  <section class="py-20">
    <div class="container px-4 mx-auto">
      <div class="max-w-2xl mx-auto">
        <div class="text-center mb-6">
          <span class="text-base md:text-lg">
            <a class="text-blue-500 hover:underline" href="#">Created At</a>
            <span class="text-blueGray-400">{{$blog->created_at}}</span>
          </span>
          <h2 class="text-4xl md:text-5xl mt-4 font-bold font-heading">{{$blog->title}}</h2>
          <h3 class="text-2xl md:text-3xl mt-4 font-bold font-heading">{{$blog->header}}</h3>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{asset('storage/'. $blog->image)}}" alt="image description">
        </div>
        <p class="mb-6 leading-loose text-blueGray-400 p-5 text-2xl">{{$blog->content}}</p>
      </div>
    </div>
  </section>


@endsection