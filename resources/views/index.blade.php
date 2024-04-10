<x-layout>
    <!-- <br>
     <div class="relative w-full overflow-hidden bg-white rounded shadow-xl shadow-slate-200 glide-06">
    <!-- Slides -->
    {{-- <div class="overflow-hidden" data-glide-el="track">
        <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
            <li><img src="https://firebasestorage.googleapis.com/v0/b/abhc-63252.appspot.com/o/filemanager%2Fgj6o16124213527255.jpg?alt=media&token=fb2c418e-0745-4745-9d86-401d2482713b" class="w-50 max-w-60 max-h-50 m-auto" /></li>
            <li><img src="https://Tailwindmix.b-cdn.net/image-01.jpg" class="w-90  max-w-50 max-h-50 m-auto" /></li>
            <li><img src="https://Tailwindmix.b-cdn.net/image-02.jpg" class="w-90  max-w-50 max-h-50 m-auto" /></li>
            <li><img src="https://Tailwindmix.b-cdn.net/image-03.jpg" class="w-90  max-w-50 max-h-50 m-auto" /></li>
            <li><img src="https://Tailwindmix.b-cdn.net/image-04.jpg" class="w-90  max-w-50 max-h-50 m-auto" /></li>
        </ul>
    </div>
    <!-- Controls -->
    <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2 " data-glide-el="controls">
        <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <title>prev slide</title>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>
        </button>
        <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <title>next slide</title>
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </button>
    </div>
    <!-- Indicators -->
    <div class="absolute bottom-0 flex items-center justify-center w-full gap-2" data-glide-el="controls[nav]">
        <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        <button class="p-4 group" data-glide-dir="=3" aria-label="goto slide 4"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
    var glide06 = new Glide('.glide-06', {
        type: 'slider',
        focusAt: 'center',
        perView: 1,
        autoplay: 2000,
        animationDuration: 700,
        gap: 0,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },

    });
` 
    glide06.mount();
</script> --}}

    <div class="bg-gray-100">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-20 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                {{--
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.squarespace-cdn.com/content/v1/56b7c8c5356fb0bab22a64d0/1534195659045-XGYU9AMNAQPP4KL929JC/Salon-3.png?format=1500w" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.squarespace-cdn.com/content/v1/56b7c8c5356fb0bab22a64d0/1534195658980-2J5D0WGXSBH4JBHY7URL/Salon-2.png?format=1500w" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.squarespace-cdn.com/content/v1/56b7c8c5356fb0bab22a64d0/1534195663878-KOTPHR3CMTCHUL65ZOPS/Salon-5.png?format=1500w" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
        
        <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.squarespace-cdn.com/content/v1/56b7c8c5356fb0bab22a64d0/1534194619988-N0ET2RRLA9708YMHTLEG/Salon-15.png?format=1500w" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
      </a> --}}
                <!-- More products... -->

                @foreach ($books as $book)
                    <div
                        class=" ease-in-out duration-300 overflow-hidden bg-slate-100 hover:bg-white hover:scale-105 rounded-lg shadow-lg">
                        <div class="">
                            <img src=" {{ $_SERVER['APP_URL'] . '/uploads/' . $book->Cover }} " alt=""
                                class="h-96 w-full group-hover:opacity-75 object-fill">
                        </div>
                        <div class="px-6 py-4">
                            @if ($book->Year)
                                <span class="">Year: {{ $book->Year }}</span>
                            @else
                                <span class="">Year: N/A</span>
                            @endif
                            <h3 class="">{{ $book->Title }}</h3>
                            <a></a>
                            <div class="flex flex-row-reverse">
                                <a
                                  href="{{ $_SERVER['APP_URL'] . '/uploads/' . $book->File }}"  class="bg-primary text-white font-bold px-3 py-2 leading-none flex items-center rounded-xl">Read</a>
                            </div>
                            
                        </div>
                      {{--  <div >
                            <div x-data="{ open: false }">
                              <!-- Open modal button -->
                              <button x-on:click="open = true" class="px-4 py-2 bg-indigo-500 text-white rounded-md"> See ore </button>
                              <!-- Modal Overlay -->
                              <div x-show="open" class="fixed inset-0 px-2 z-10 overflow-hidden flex items-center justify-center w-full h-auto">
                                <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <!-- Modal Content -->
                                <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="bg-white rounded-md shadow-xl overflow-hidden max-w-md w-full sm:w-96 md:w-1/2 lg:w-2/3 xl:w-1/3 z-50">
                                  <!-- Modal Header -->
                                  <div class="bg-indigo-500 text-white px-4 py-2 flex justify-between">
                                    <h2 class="text-lg font-semibold">Modal Title</h2>
                                  </div>
                                  <!-- Modal Body -->
                                  <div class="p-4">
                                    <p>{{ $book->Description  }}</p>
                                  </div>
                                  <!-- Modal Footer -->
                                  <div class="border-t px-4 py-2 flex justify-end">
                                    <button x-on:click="open = false" class="px-3 py-1 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Close </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                    </div>

                    {{-- <div class="flex-shrink-0 relative ease-in-out duration-300 overflow-hidden bg-slate-100 hover:bg-white hover:scale-105 rounded-lg shadow-sm sm:items-center">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative  flex items-center justify-center">
            <img  src=" {{ $_SERVER['APP_URL'] . '/uploads/' . $book->Cover }} "  alt="" class="h-full w-full group-hover:opacity-75">
        </div>
        <div class="relative text-amber-950 px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">{{ $book->Year }}</span>
            <div class="flex justify-between">
              <h3 class="mt-4 text-sm text-gray-700">{{ $book->Title }}</h3>
                <span class="block bg-primary rounded-full text-white text-xs font-bold px-3 py-2 leading-none flex items-center">Read</span>
            </div>
        </div>
      </div> --}}
      
                @endforeach
            </div>
        </div>
    </div>

    

    <x-footer/>
</x-layout>

  <!-- Include Alpine.js -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
