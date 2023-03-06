<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Command Center</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    
<style>
            [x-cloak] {
            display: none;
        }
</style>
  
    


<div x-data class="flex">

    <aside>
        <x-sidenav/>
    </aside>
    
    <main class="flex-1 mx-auto h-screen">
        
                
           @yield('content')  
                 
        
        
    </main>
</div>



    @livewireScripts
</body>
</html>