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

<div x-data="{ open: false }">
<header class="bg-indigo-500 bg-blur-50 opacity-95 sticky top-0 z-10 block">

<div class="flex flex-row justify-between py-4 px-4">
  <div class="flex-1 py-2 px-2">

    <h1>Command Center</h1>
  </div>

  <div class="flex">
    <h1 class="py-2 px-2">Argie Cedro</h1>
  </div>

  <div class="flex">
    
    
    
{{-- <button 

x-on:click="open = ! open"
class="rounded py-2 px-2 md:hidden">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
  </svg>
  
</button> --}}
      
    
    
  </div>

</div>

</header>

<div class="flex z-40">
{{-- <aside 
:class="open ? 'block' : 'hidden'"
class="bg-teal-400 h-screen md:block w-64 fixed">
  <div>
    <x-testnav></x-testnav>
  </div>
</aside> --}}

<main class="bg-gray-100  p-4 h-screen w-full mx-auto">

<div class="container">


  
  <x-table></x-table>

 
  <x-buttomnav></x-buttomnav>
  <x-sidenav></x-sidenav>
 

  </div>

</div>

</main>
</div>







</div>




</body>

</html>