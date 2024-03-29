<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>

    
    <div class="bg-gray-200 h-48 w-full shadow-xl flex justify-center items-center sm:w-full">
        <div class="flex py-7 px-20">
            <div class="flex justify-center items-center space-x-8 ml-60">
               <a href="https://www.facebook.com/LICESergeComtesseCambodia" class=""> <i class="fa-brands fa-facebook fa-2xl hover:scale-110 bg-white" style="color: #4267B2;"></i></a>
                <a href="" class="hover:scale-110 "><i class="fa-brands fa-instagram fa-2xl" style="color:#E1306C"></i></a>
               <a href=""> <i class="fa-brands fa-telegram fa-2xl hover:scale-110" style="color:#0088CC"></i></a>
                <a href=""><i class="fa-brands fa-tiktok fa-xl hover:scale-110" style="color:#212121"></i></a>
                <a href=""><i class="fa-solid fa-phone-volume fa-xl" style="color:#7f7f7f"></i></a>
            </div>
        </div>
    </div>
   
 <div>
    {{  $slot  }}
 </div>


</body>
</html>