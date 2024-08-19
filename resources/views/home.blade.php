<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Protofolio</title>
</head>
<body>
    @include('components.navbar')
    @include('components.header')
    <section class="pt-8 pb-2 bg-blueGray-50">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
            <div class="p-8 bg-white text-center shadow rounded">
              <svg class="w-12 h-12 mx-auto mb-2 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <p class="mb-2 text-xs md:text-base text-blueGray-400">Projects</p>
              <span class="text-3xl lg:text-4xl font-bold font-heading">{{$projects->count()}}</span>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
            <div class="p-8 bg-white text-center shadow rounded">
              <svg class="w-12 h-12 mx-auto mb-2 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
              </svg>
              <p class="mb-2 text-xs md:text-base text-blueGray-400">Happy Customers</p>
              <span class="text-3xl lg:text-4xl font-bold font-heading">{{$customers_number}}</span>
            </div>
          </div>
          
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
            <div class="p-8 bg-white text-center shadow rounded">
              <svg class="w-12 h-12 mx-auto mb-2 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
              </svg>
              <p class="mb-2 text-xs md:text-base text-blueGray-400">Solved Problems</p>
              <span class="text-3xl lg:text-4xl font-bold font-heading">{{$solved_problems_number}}</span>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
            <div class="p-8 bg-white text-center shadow rounded">
              <svg class="w-12 h-12 mx-auto mb-2 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <p class="mb-2 text-xs md:text-base text-blueGray-400">Blogs</p>
              <span class="text-3xl lg:text-4xl font-bold font-heading">{{$blogs->count()}}</span>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  
    <div class="">

      <section class="py-12 md:py-24 bg-coolGray-50" x-data="{ showContent: false }">
        <div class="container mx-auto px-4">
          <div class="inline-flex w-full mx-auto items-start justify-center text-center mb-20">
            <h1 class="font-heading text-3xl xs:text-5xl sm:text-7xl md:text-8xl lg:text-10xl tracking-tighter pt-4">Our Projects</h1>
            <span class="block -mb-4 sm:mr-12 lg:mr-8 text-right text-2xl text-coolGray-600">{{$projects->count()}}</span>
          </div>
          <div class="flex flex-wrap -mx-4 -mb-20">
              @foreach ($projects as $project)
              <div class="w-full lg:w-1/2 px-4 mb-20">
                  <a class="group block" href="#">
                    <div class="relative mb-6 rounded-4xl overflow-hidden">
                      <div class="absolute left-0 top-0 h-full w-full group-hover:bg-opacity-10 group-hover:bg-black transition duration-200"></div>
                      <img class="block w-full h-full" src="{{asset('storage/'. $project->image)}}" alt="">
                    </div>
                    <div>
                      <div class="mb-2">
                        <span class="text-sm font-medium text-coolGray-600">Part-time</span>
                        <span class="inline-block mx-4">
                          <svg width="3" height="3" viewbox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.896 1.772C0.896 1.632 0.924 1.50133 0.98 1.38C1.036 1.25867 1.11067 1.15133 1.204 1.058C1.30667 0.955333 1.41867 0.876 1.54 0.82C1.67067 0.764 1.806 0.736 1.946 0.736C2.086 0.736 2.21667 0.764 2.338 0.82C2.46867 0.876 2.58067 0.955333 2.674 1.058C2.77667 1.15133 2.856 1.25867 2.912 1.38C2.968 1.50133 2.996 1.632 2.996 1.772C2.996 2.052 2.89333 2.29933 2.688 2.514C2.48267 2.72867 2.23533 2.836 1.946 2.836C1.65667 2.836 1.40933 2.72867 1.204 2.514C0.998667 2.29933 0.896 2.052 0.896 1.772Z" fill="#646464"></path>
                          </svg>
                        </span>
                        <span class="font-medium text-sm text-coolGray-600">Remote</span>
                      </div>
                      <h3 class="text-4xl tracking-tight mb-6">{{$project->name}}</h3>
                      <p class="max-w-xl text-coolGray-600">{{$project->description}}</p>
                    </div>
                  </a>
                </div>
              @endforeach

          </div>
          <div class="mt-20 text-center">
            <a x-on:click.prevent="showContent = true" :class="{'hidden': showContent}" class="group inline-flex py-4 px-6 md:px-30 font-medium text-black hover:text-white items-center justify-center border-1.5 border-black rounded-full hover:bg-black transition duration-200" href="#">
              <span class="mr-2">View all (21)</span>
              <span class="group-hover:rotate-45 transform transition duration-100">
                <svg width="10" height="11" viewbox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 1.5L1 9.5" stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M9 8.83571V1.5H1.66429" stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </section>
    </div>

    <section class="md:pb-24 lg:pb-96">
      <div class="relative pt-20 pb-28 md:pb-80 bg-gray-50">
        <img class="hidden lg:block lg:absolute top-0 left-0 mt-32" src="zeus-assets/icons/dots/green-dot-left-bars.svg" alt="">
        <img class="h-16 ml-auto lg:hidden" src="zeus-assets/icons/dots/red-dot-right-shield.svg" alt="">
        <img class="hidden lg:block lg:absolute top-0 right-0 mt-64" src="zeus-assets/icons/dots/red-dot-right-shield.svg" alt="">
        <div class="relative container px-4 mb-10 lg:mb-20 mx-auto">
          <div class="max-w-3xl mx-auto text-center">
            <span class="text-teal-500 font-semibold">What we can do for you</span>
            <h2 class="mt-8 mb-6 lg:mb-10 text-4xl font-semibold font-heading">We can build you own website or desktop app and mobe app to improve our business</h2>
            <p class="text-xl text-gray-500">If you have ever wondered how to develop your brand, this is the place for you. Take a big step forward in growing your business with this great tool.</p>
          </div>
        </div>
        <div class="lg:absolute inset-x-0 max-w-4xl mx-auto px-4">
          <img class="lg:absolute top-0 left-0 mx-auto rounded-lg object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
        </div>
      </div>
    </section>
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
                <div class="flex justify-center mt-18">
                    <a  href="{{route('blogs')}}" class="inline-flex justify-center items-center text-center h-18 py-8 px-10 font-semibold text-white hover:text-white focus:text-white bg-blue-500 hover:bg-blue-600 focus:bg-blue-600 rounded-full focus:ring-4 focus:ring-blue-200 transition duration-200">View all news</a>
                </div>
            </div>
        </section>

            <section class="pt-12 md:pt-24 pb-14" style="background: linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
              <div class="container mx-auto px-4">
                <h1 class="text-center text-neutral-800 text-5xl sm:text-6xl md:text-7xl font-semibold mb-8 font-heading">Have something to say?</h1>
                <p class="text-center text-neutral-500 text-xl font-medium mb-16"> Just enter your email and i will say hi</p>
                <form method="POST" class="mb-16 md:mb-36 max-w-2xl mx-auto" action="{{route('contact')}}">
                  @csrf
                  <div class="flex flex-wrap -m-2">
                    <div class="w-full sm:flex-1 p-2">
                      <input class="w-full px-8 py-5 outline-none rounded-lg border border-neutral-100 placeholder-neutral-600 font-medium focus:ring-4 focus:ring-neutral-100 transition duration-200" type="text" placeholder="Your Email">
                    </div>
                    <div class="w-full sm:w-auto p-2">
                      <button class="flex justify-center items-center text-center h-full w-full p-5 font-semibold tracking-tight text-lg text-white bg-neutral-900 hover:bg-neutral-800 focus:bg-neutral-800 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200" type="submit">Join now</button>
                    </div>
                  </div>
                </form>
                <p class="text-center text-neutral-600 text-sm font-medium tracking-tight">........</p>
              </div>
            </section>
          

    @include('components.footer')
</body>
</html>
