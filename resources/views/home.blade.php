@extends('layout.app')
@section('main')
  <main class="flex flex-col gap-10 container px-16 pt-5 pb-20">
    <section class="flex flex-col gap-3">
      <a href="#" class="flex items-center w-fit font-semibold text-xl">
        <h1>Trending on Freem</h1>
        <i class="bx bx-chevron-right text-2xl"></i>
      </a>
      <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[36rem]">
          <!-- Item 1 -->
          <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/trending/01.jpg') }}"
              class="absolute object-fill w-full h-full top-0 left-0" alt="...">
          </a>
          <!-- Item 2 -->
          <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/trending/02.jpg') }}"
              class="absolute object-fill w-full h-full top-0 left-0" alt="...">
          </a>
          <!-- Item 3 -->
          <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/trending/03.jpg') }}"
              class="absolute object-fill w-full h-full top-0 left-0" alt="...">
          </a>
          <!-- Item 4 -->
          <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/trending/04.jpg') }}"
              class="absolute object-fill w-full h-full top-0 left-0" alt="...">
          </a>
          <!-- Item 5 -->
          <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/trending/05.jpg') }}"
              class="absolute object-fill w-full h-full top-0 left-0" alt="...">
          </a>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </section>
    <section class="flex flex-col gap-3" id="movies">
      <a href="#" class="flex items-center w-fit font-semibold text-xl">
        <h1>Latest Movies</h1>
        <i class="bx bx-chevron-right text-2xl"></i>
      </a>
      <div class="grid grid-cols-4 gap-4">
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-gray-900 border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/top-10/01.jpg') }}" alt="" />
          </a>
          <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              Harry Potter and the Philosopher's Stone
            </h5>
            <p class="mb-3 font-normal text-gray-200">
              Category: Fantasy, Adventure, Family
            </p>
            <a href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-0">
              Details <i class="bx bx-chevron-right text-xl"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="border-y py-10" id="contact">
      <div class="mx-auto w-full">
        <h1 class="text-4xl font-medium">Contact us</h1>
        <p class="mt-3">Email us at help@domain.com or message us here:</p>

        <form class="mt-10">
          <input type="hidden" />
          <div class="grid gap-6 sm:grid-cols-2">
            <div class="relative z-0">
              <input type="text" name="name"
                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-white focus:border-yellow-400 focus:outline-none focus:ring-0"
                placeholder=" " />
              <label
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-yellow-400">Your
                name</label>
            </div>
            <div class="relative z-0">
              <input type="text" name="email"
                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-white focus:border-yellow-400 focus:outline-none focus:ring-0"
                placeholder=" " />
              <label
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-yellow-400">Your
                email</label>
            </div>
            <div class="relative z-0 col-span-2">
              <textarea name="message" rows="5"
                class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-white focus:border-yellow-400 focus:outline-none focus:ring-0"
                placeholder=" "></textarea>
              <label
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-yellow-400">Your
                message</label>
            </div>
          </div>
          <button type="submit"
            class="mt-5 rounded-md bg-gray-500 hover:bg-gray-600 px-10 py-2 text-white">Send Message</button>
        </form>
      </div>
    </section>
  </main>
@endsection
