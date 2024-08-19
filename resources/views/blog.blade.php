@extends('layout.main')
@section('content')
<section class="py-24 md:py-40 bg-gray-50" x-data="{ showContent: false }">
    <div class="container mx-auto px-4">
        <h2 class="mb-24 font-heading text-4xl md:text-5xl font-bold text-center">Recent happenings and updates</h2>
        <div class="flex flex-wrap -m-6">
            @foreach ($blogs as $blog)
              <div class="w-full md:w-1/3 p-6">
                <div class="relative h-full bg-white overflow-hidden rounded-3xl">
                    <div class="group relative overflow-hidden" style="height: 308px">
                        <img class="absolute w-full h-full object-cover transform group-hover:scale-105 transition duration-200" src="{{asset('storage/'. $blog->image)}}" alt="">
                    </div>
                    <div class="pt-10 px-10 pb-12">
                        <a href="{{route('blog.show',$blog)}}" class="hover:underline">
                            <h3 class="mb-4 font-heading text-xl font-medium leading-tight">{{$blog->title}}</h3>
                        </a>
                        <p class="text-gray-500 font-medium">{{$blog->header}}</p>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>
@endsection