<x-layout>
        <div class="bg-gray-100">
            <p class="text-center font-bold text-4xl text-yellow-500 hover:text-yellow-950 py-4">Course</p>
            <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-3">
                @foreach($courses as $course)
                    <div class="bg-gray-100 shadow-xl flex rounded-lg border-4 border-gray-300">
                        <div class="flex object-fill">
                            <img class="rounded-t-lg h-24 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src=" {{ $_SERVER['APP_URL'] . '/uploads/' . $course->Cover }} " alt="">
                        </div>
                        <div>
                            <div class="grid grid-rows-2 justify-between p-4">
                                <h3 class="mb-2 text-2xl font-bold tracking-tight text-yellow-700">
                                    {{ $course->Title }}
                                </h3>
                                <p class="mb-3 font-normal text-gray-700 text-wrap">
                                    {{ $course->Description }}
                                </p>
                                <div class="flex flex-row space-x-2">
                                    <span><i class="fa-solid fa-calendar-days "></i></span>
                                    <div class=""> {{ $course->Date }} </div>
                                </div>
                                <div class="flex flex-row space-x-2">
                                    <span><i class="fa-regular fa-clock"></i></span>
                                    <div> {{ $course->Duration }} hrs</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4"></div>
    <x-footer/>
</x-layout>