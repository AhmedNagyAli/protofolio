@php
        use function App\Helpers\get_setting;
        $default_user_name = get_setting('default_header_name');
        $customers_number = get_setting('customers_number');
        $solved_problems_number = get_setting('solved_problems_number');

    @endphp

<section class="pt-6 pb-20 bg-gray-50 overflow-hidden" x-data="{ mobileNavOpen: false }">
  <div class="container mx-auto px-4">
    <div class="mb-8 p-8 bg-white rounded-3xl">
      <div class="flex flex-wrap lg:items-center -m-8">
        <div class="w-full md:w-1/2 p-8">
          <div class="md:max-w-lg mx-auto">
            <span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Best caption here</span>
            <h1 class="font-heading mb-4 text-5xl text-gray-900 font-black tracking-tight">
              <span>Build better products</span>
              <span class="text-transparent bg-clip-text bg-gradient-orange">faster</span>
              <span>than ever.</span>
            </h1>
            <p class="mb-6 text-xl font-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis venenatis volutpat velit.</p>
            <div class="flex flex-wrap -m-2">
              <div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#">Get Started</a></div>
              <div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-gray-900 font-bold bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:ring-gray-200 rounded-full" href="#">Watch Video</a></div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 p-8">
          <div class="max-w-max mx-auto md:mr-0 bg-white overflow-hidden rounded-3xl">
            <img class="mx-auto" src="{{url('storage/header/head1.jpeg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- 
<section x-data="{ mobileNavOpen: false }" class="overflow-hidden">
    <div :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}" class="hidden fixed top-0 left-0 bottom-0 w-5/6 max-w-xs z-50">
      <div x-on:click="mobileNavOpen = !mobileNavOpen" class="fixed inset-0 bg-black opacity-20"></div>
      <nav class="relative p-8 w-full h-full bg-white overflow-y-auto">
        <div class="flex flex-col justify-between h-full">
          <div class="flex items-center justify-between mb-16">
            <a class="pr-4" href="#">
              <img class="h-10" src="{{url('storage/header/head1.jpeg')}}" alt="">
            </a>
            <button x-on:click="mobileNavOpen = !mobileNavOpen">
              <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="#252E4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div class="flex flex-col items-center gap-2"><a class="inline-flex justify-center items-center text-center w-full h-16 p-5 font-semibold tracking-tight text-lg focus:text-neutral-900 bg-transparent hover:bg-transparent focus:bg-transparent border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200" href="#">Login</a><a class="inline-flex justify-center items-center text-center w-full h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-neutral-900 focus:bg-neutral-900 border border-neutral-900 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200" href="#">Sign up free</a></div>
        </div>
      </nav>
    </div>
    
    <div class="flex flex-wrap">
      <div class="w-full md:w-1/2 relative" style="height: 860px;">
        <img class="absolute top-0 left-0 w-full h-full object-cover" src="{{url('storage/header/head1.jpeg')}}" alt="">
        <div class="absolute left-5 sm:left-10 right-5 sm:right-10 bottom-10">
          <h1 class="font-heading mb-8 text-6xl sm:text-9xl xl:text-10xl text-white font-semibold max-w-4xl">
            
            <span>{{$default_user_name}}</span>
            <span class="relative inline-block">
              <span class="relative z-10">Software</span>
              <span class="absolute -bottom-2 left-0 h-1 w-full bg-green-200 rounded-full"></span>
            </span>
            <span>Engineer</span>
          </h1>
          <p class="text-xl font-medium text-white mb-10 tracking-tight">Software engineer with on year of experince</p>
          <a class="inline-flex justify-center items-center text-center h-20 p-5 font-semibold tracking-tight text-2xl text-white bg-neutral-900 hover:bg-neutral-800 focus:bg-neutral-800 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200" href="#">Download CV</a>
        </div>
      </div>
      <div class="w-full md:w-1/2 relative" style="height:860px;">
        <img class="absolute top-0 left-0 w-full h-full object-cover" src="{{url('storage/header/head2.jpeg')}}" alt="">
        <div class="absolute left-5 sm:left-10 right-5 sm:right-10 bottom-10">
          <div class="flex items-end justify-between flex-wrap gap-6">
            <div class="flex items-start flex-wrap gap-6">
              <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="24" fill="white"></circle></svg>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_231_4799)">
                      <path d="M17.9176 11.7658L15.0151 10L17.9176 8.23417C18.2196 8.05332 18.4825 7.81416 18.691 7.53063C18.8995 7.24711 19.0495 6.92489 19.1322 6.58279C19.2149 6.24069 19.2286 5.88554 19.1726 5.53808C19.1166 5.19061 18.9919 4.85778 18.8059 4.559C18.6199 4.26022 18.3762 4.00148 18.0891 3.79786C17.8021 3.59425 17.4773 3.44984 17.1338 3.37306C16.7904 3.29628 16.435 3.28866 16.0886 3.35066C15.7421 3.41266 15.4115 3.54303 15.116 3.73417L12.501 5.40833V2.5C12.501 1.83696 12.2376 1.20107 11.7687 0.732233C11.2999 0.263392 10.664 0 10.001 0C9.33793 0 8.70205 0.263392 8.23321 0.732233C7.76437 1.20107 7.50098 1.83696 7.50098 2.5V5.49L4.88597 3.73417C4.28962 3.37698 3.57683 3.26834 2.90114 3.43164C2.22546 3.59495 1.64096 4.01713 1.27356 4.60725C0.906154 5.19736 0.785255 5.90818 0.936903 6.58658C1.08855 7.26498 1.50061 7.85666 2.08431 8.23417L4.98681 10L2.08431 11.7658C1.50061 12.1433 1.08855 12.735 0.936903 13.4134C0.785255 14.0918 0.906154 14.8026 1.27356 15.3927C1.64096 15.9829 2.22546 16.4051 2.90114 16.5684C3.57683 16.7317 4.28962 16.623 4.88597 16.2658L7.50098 14.5675V17.5C7.50098 18.163 7.76437 18.7989 8.23321 19.2678C8.70205 19.7366 9.33793 20 10.001 20C10.664 20 11.2999 19.7366 11.7687 19.2678C12.2376 18.7989 12.501 18.163 12.501 17.5V14.5167L15.116 16.2667C15.7123 16.6239 16.4251 16.7325 17.1008 16.5692C17.7765 16.4059 18.361 15.9837 18.7284 15.3936C19.0958 14.8035 19.2167 14.0927 19.065 13.4143C18.9134 12.7359 18.5013 12.1433 17.9176 11.7658Z" fill="#19191B"></path>
                    </g>
                    <defs><clippath id="clip0_231_4799"><rect width="20" height="20" fill="white"></rect></clippath></defs>
                  </svg>

                </div>
              </div>
              <h6 class="font-heading text-white text-2xl sm:text-4xl tracking-tight font-semibold w-56 sm:w-auto sm:max-w-xs">Improve your besiness .</h6>
            </div>
            <a class="flex items-center flex-wrap gap-3 group" href="#">
              <svg fill="#000000" width="24" height="27" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                viewBox="-143 145 512 512" xml:space="preserve">
                  <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M169.5,357.6l-2.9,38.3h-39.3
	                v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2
	                c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"/>
                </svg>
              <h6 class="font-heading text-white text-xl font-semibold tracking-tight group-hover:text-opacity-80 transition duration-200">Facebook Profile</h6>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-14 pb-24" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap max-w-7xl mx-auto -m-3">
          <div class="w-full md:w-1/2 p-3">
            <div class="bg-white rounded-4xl p-10 h-full lg:h-60">
              <div class="flex flex-wrap -m-3">
                <div class="w-full lg:w-1/2 p-3">
                  <div class="flex flex-col justify-between gap-6 xl:gap-12">
                    <h6 class="font-heading text-4xl font-semibold max-w-xs tracking-tight">Improve Your Business. build your own software</h6>
                    <a class="inline-flex items-center gap-3 group mr-auto" href="#">
                      
                    </a>
                  </div>
                </div>
                <div class="w-full lg:w-1/2 p-3">
                  <img class="mx-auto object-cover lg:mr-0 h-44" src="mirga-assets/images/hero/circle2.svg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 p-3">
            <div class="bg-white rounded-4xl p-10 h-full lg:h-60">
              <div class="flex flex-wrap -m-3">
                <div class="w-full lg:w-1/2 p-3">
                  <div class="flex flex-col justify-between gap-6 xl:gap-12">
                    <h6 class="font-heading text-4xl font-semibold max-w-xs tracking-tight">Solution that works for you</h6>
                    <a class="inline-flex items-center gap-3 group mr-auto" href="#">
                      
                    </a>
                  </div>
                </div>
                <div class="w-full lg:w-1/2 p-3">
                  <img class="mx-auto object-cover lg:mr-0 h-44" src="mirga-assets/images/hero/diagram.svg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}