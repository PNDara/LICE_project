<div class="bg-black h-24 text-yellow-100">

        <div class="grid grid-cols-2">
            <a href="/" class="flex items-center px-24">
                <img src="https://firebasestorage.googleapis.com/v0/b/abhc-63252.appspot.com/o/filemanager%2Fdae6n1651481918290logo%5B1%5D.png?alt=media&token=9c752acb-db5e-4242-9e5b-ba8d98271fb9"
                    class="h-16" alt="ABHC Logo" />
            </a>
            <div class="px-8 py-8 flex flex-row-reverse hover:text-yellow-200">
            
                @if (Auth::check())
                    <div class="flex justify-between space-x-16 ">
                        <form class=" md:block" method="POST" action="{{ route('logout') }}">
                            <i class="fa-solid fa-power-off md:hidden w-12 h-12"></i>
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                    @else
                        <div class="flex justify-between space-x-16 ">
                            <a href="/register" class="text-sm  text-white ">Register</a>
                            <a href="/login" class=" text-sm text-white">Login</a>
                        </div>
                @endif
            </div>
            
        </div>
    </div>
    <div class="bg-white flex justify-center">
        <div class="max-w-screen-xl px-4 py-6 mx-auto">
            <div class="flex items-center ">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="/" class="text-gray-900 hover:no-underline " aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/course" class="text-gray-900 hover:underline no-underline ">Course</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:underline no-underline ">Books</a>
                    </li>
                    <li>
                        <a href="/about" class="text-gray-900 hover:underline no-underline ">About</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    
</nav>
