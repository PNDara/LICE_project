<x-layout>
<br>
    <div class="relative w-full overflow-hidden bg-white rounded shadow-xl shadow-slate-200 glide-06">
        <!-- Slides -->
        <div class="overflow-hidden" data-glide-el="track">
            <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                <li><img src="https://Tailwindmix.b-cdn.net/image-05.jpg" class="w-90 max-w-50 max-h-50 m-auto" /></li>
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
    
        glide06.mount();
    </script> <br>
    
    <div class="h-56 grid grid-cols-4 gap-2 content-start ...">
        <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="https://1.bp.blogspot.com/-PpJnrW_Q2yY/VngEhVSMdMI/AAAAAAAAC4E/x2WRGuQRVN0/s400/12390954_633811513425282_8997186920872637348_n.jpg" class="w-50 h-80" alt="Movie"/></figure>
            <div class="card-body">
              <h2 class="card-title">Math</h2>
              <p>Click the button to watch</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary">See More</button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="https://keoserey.files.wordpress.com/2011/06/untitled2.png?w=106" class="w-50 h-80" alt="Movie"/></figure>
            <div class="card-body">
              <h2 class="card-title">Maths Grade 12</h2>
              <p>Click the button to</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary">See</button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="https://www.elibraryofcambodia.org/wp-content/uploads/2017/03/yk-1914-english-grade-4-small.png" class="w-50 h-80" alt="Movie"/></figure>
            <div class="card-body">
              <h2 class="card-title">English Grade 4</h2>
              <p>Click the button to see Detail</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary">Read</button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="https://www.learnkhmer.online/img/readings/book-grade-4.jpg" class="w-50 h-80" alt="Movie"/></figure>
            <div class="card-body">
              <h2 class="card-title">សៀវភៅ ភាសាខ្មែរ ថ្នាក់ទី​ ៤</h2>
              <p>ចុចទីនេះសម្រាប់អាន</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary">អាន</button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="https://www.learnkhmer.online/img/readings/book-grade-1.jpg" class="w-50 h-80" alt="Movie"/></figure>
            <div class="card-body">
              <h2 class="card-title">Hair Color Course</h2>
              <p>Click the button to Read Detail</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary">READ</button>
              </div>
            </div>
          </div>
      </div>

</x-layout>