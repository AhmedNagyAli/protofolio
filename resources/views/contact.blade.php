@extends('layout.main')
@section('content')   
<section class="py-12 md:py-24 bg-neutral-50">
    <div class="container mx-auto px-4">
      <div class="mb-12 md:mb-24 text-center max-w-6xl mx-auto">
        <h2 class="mb-16 font-semibold text-5xl sm:text-6xl md:text-9xl xl:text-9xl sm:max-w-xl md:max-w-4xl xl:max-w-6xl mx-auto font-heading">Send a message or chat with us</h2>
        <p class="font-semibold text-2xl text-neutral-600 tracking-tighter">Your journey to digital excellence starts here.</p>
      </div>
      <div class="flex flex-wrap -m-3">
        <div class="w-full md:w-1/2 p-3">
          <div class="h-full p-10 bg-white rounded-4xl">
            <div class="flex flex-col justify-between h-full">
              <div class="mb-18 w-full">
                <h4 class="mb-2 font-semibold text-neutral-600 tracking-tight font-heading">Phone number</h4>
              </div>
              <div class="w-full">
                <h4 class="text-5xl font-medium tracking-tight font-heading">{{$user->phone}}</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 p-3">
          <div class="h-full p-10 bg-white rounded-4xl">
            <div class="flex flex-col justify-between h-full">
              <div class="mb-18 w-full">
                <h4 class="mb-2 font-semibold text-neutral-600 tracking-tight font-heading">Email</h4>
              </div>
              <div class="w-full">
                <h4 class="text-5xl font-medium tracking-tight font-heading">{{$user->email}}</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="relative w-full md:w-1/3 p-3">
          <img class="w-full object-cover rounded-4xl" style="height: 581px;" src="{{url('storage/header/head1.jpeg')}}" alt="">
        </div>
        <form method="POST" action="{{route('contact')}}" enctype="multipart/form-data">
          @csrf
          <div class="w-full md:flex-1 p-3">
            <div class="h-full p-10 pb-16 bg-white rounded-4xl">
              <h4 class="mb-20 text-5xl font-medium tracking-tight font-heading">Send a message</h4>
              <form class="max-w-2xl mx-auto" action="#">
                <div class="mb-4 border-t border-neutral-100">
                  <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12">
                      <div class="pt-4 md:pb-4 pr-20 border-r border-neutral-100">
                        <p class="text-xl font-medium tracking-tight" name="name" >Name</p>
                      </div>
                    </div>
                    <div class="w-full md:flex-1">
                      <div class="py-4 md:pl-8">
                        <input class="border-2 border-gray-500 p-2 rounded-md block w-full text-xl text-neutral-600 font-medium placeholder-neutral-600 btn-outline-danger" type="text" id="name" name="name" placeholder="name">
                      </div>
                    </div>
                  </div>
                
                </div>
                <div class="flex flex-wrap">
                  <div class="w-full md:w-4/12">
                    <div class="pt-4 md:pb-4 pr-20 border-r border-neutral-100">
                      <p class="text-xl font-medium tracking-tight" >Phone</p>
                    </div>
                  </div>
                  <div class="w-full md:flex-1">
                    <div class="py-4 md:pl-8">
                      <input class="border-2 border-gray-500 p-2 rounded-md block w-full text-xl text-neutral-600 font-medium placeholder-neutral-600 outline-none" type="text" id="phone" name="phone"  placeholder="phone">
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap">
                  <div class="w-full md:w-4/12">
                    <div class="pt-4 md:pb-4 pr-20 border-r border-neutral-100">
                      <p class="text-xl font-medium tracking-tight" id="subject" name="subject" >subject</p>
                    </div>
                  </div>
                  <div class="w-full md:flex-1">
                    <div class="py-4 md:pl-8">
                      <input class="border-2 border-gray-500 p-2 rounded-md block w-full text-xl text-neutral-600 font-medium placeholder-neutral-600 outline-none" type="text" name="subject" placeholder="subject">
                    </div>
                  </div>
                </div>
                <div class="mb-4 border-t border-neutral-100">
                  <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12">
                      <div class="pt-4 md:pb-4 pr-20 border-r border-neutral-100">
                        <p class="text-xl font-medium tracking-tight">Email</p>
                      </div>
                    </div>
                    <div class="w-full md:flex-1">
                      <div class="py-4 md:pl-8">
                        <input class="border-2 border-gray-500 p-2 rounded-md block w-full text-xl text-neutral-600 font-medium placeholder-neutral-600 outline-none" type="text" name="email" placeholder="Email">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-6 border-t border-neutral-100">
                  <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12">
                      <div class="pt-4 md:pb-16 pr-20 border-r border-neutral-100">
                        <p class="text-xl font-medium tracking-tight">Message</p>
                      </div>
                    </div>
                    <div class="w-full md:flex-1">
                      <div class="pt-4 md:pl-8"><textarea class="border-2 border-gray-500 p-2 rounded-md block w-full text-xl text-neutral-600 font-medium placeholder-neutral-600 outline-none" name="message" rows="4" placeholder="Message"></textarea></div>
                    </div>
                  </div>
                </div>
                <div class="mb-4 border-t border-neutral-100">
                  <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12">
                      <div class="pt-4 md:pb-4 pr-20 border-r border-neutral-100">
                        <p class="text-xl font-medium tracking-tight">Upload Image?</p>
                      </div>
                    </div>
                    <div class="w-full md:flex-1">
                      <div class="border border-dashed rounded-lg border-gray-500 relative">
                        <input class="cursor-pointer relative block opacity-0 w-full h-full p-20 z-50" type="file" name="image">
                        <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
                            <h4>
                                Drop files anywhere to upload
                                <br/>or
                            </h4>
                            <p class="">Select Files</p>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap justify-between items-center -m-4">
                  <div class="w-full md:w-auto p-4">
                    <button class="inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-lg text-white bg-neutral-900 hover:bg-neutral-800 focus:bg-neutral-800 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200" type="submit">Send a message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  @endsection
