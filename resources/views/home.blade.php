<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="flex">
     {{-- Sidebar - Start --}}
     <div x-data="{open: false}" 
          x-bind:class="open ? 'w-64' : 'w-21'"
          class="bg-gray-200 shadow-md h-screen p-5 pt-5 relative">

          {{-- Sidebar Button - Start --}}
          <svg x-on:click="open = ! open"
               xmlns="http://www.w3.org/2000/svg" 
               fill="none" 
               viewBox="0 0 24 24" 
               stroke-width="1.5" 
               stroke="currentColor"
               x-bind:class="open ? '' : 'rotate-180'" 
               class="w-6 h-6 bg-white text-blue-800 text-3xl rounded-full 
                         absolute -right-3 top-9 border border-blue-800 cursor-pointer">

               <path stroke-linecap="round" 
               stroke-linejoin="round" 
               d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          {{-- Sidebar Button - End --}}

          {{-- Logo Start --}}
          <div class="inline-flex items-center">
               <img 
               src="../img/cc.svg"
               x-bind:class="open ? 'h-14 w-14' : 'h-6 w-6'" 
               alt="">
          <span 
               x-bind:class="open ? 'font-bold text-2xl text-center text-blue-800 p-4' : 'hidden'">
               Command Center
          </span>
          </div>
          {{-- Logo End --}}

             
     </div>
     {{-- Sidebar - End --}}

     {{-- Main Content Start --}}
     <div class=" p-5 pt-5">
          Main Content
     </div>
     {{-- Main Content End --}}
</div>
     

</body>

</html>