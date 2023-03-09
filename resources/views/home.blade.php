<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{open: false}">

  <header class="flex justify-between text-black py-4 px-4">

    <a href="/" class="text-lg font-bold">Command Center</a>

    

    <ul class="flex flex-row items-center align-middle gap-2">
      <li><a href="#" class="bg-purple-400 text-white py-2 px-2 rounded-lg float-right">Account</a></li>
    </ul>

    <button
    
    x-on:click="open = ! open"
    class="md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="1.5" 
            stroke="currentColor" 
            class="w-6 h-6">

          <path stroke-linecap="round" 
                stroke-linejoin="round" 
                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
      </svg>
      
    </button>

  </header>

  <div
  
  x-bind:class="open ? 'fixed w-64 opacity-95' : 'hidden'"
  class="md:block md:fixed md:w-64 h-screen bg-green-400 px-4 py-4">
    sidebar
  </div>

  <div class="border-2 md:ml-64 p-2">
      <div class="bg-red-400 px-4 py-2 items-center">
        <table class="table-auto">
          <thead>
            <tr>
              <th>Song</th>
              <th>Artist</th>
              <th>Year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
              <td>Malcolm Lockyer</td>
              <td>1961</td>
            </tr>
            <tr>
              <td>Witchy Woman</td>
              <td>The Eagles</td>
              <td>1972</td>
            </tr>
            <tr>
              <td>Shining Star</td>
              <td>Earth, Wind, and Fire</td>
              <td>1975</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>


    

</body>

</html>