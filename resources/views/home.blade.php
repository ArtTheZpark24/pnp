<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Home</title>
</head>
<body class="bg-cyan-300">
<header >
    <nav class="bg-cyan-300 fixed top-0 left-0 right-0 shadow-lg  flex justify-between items-center">
<div>
<a href="/"><img src="{{ asset('img/pnplogo.png') }}" class="h-24" alt="logo"></a>

</div>

<ul class="flex gap-8 mr-4 font-semibold space-x-4">
    <li class="mt-3 hover:opacity-75 duration-75 border-b-2 border-red-600 "><a href="/">Home</a></li>
    <li class="mt-3 hover:opacity-75 duration-75" ><a href="/about">About</a></li>
    <li class="bg-sky-700 p-3 rounded-md text-white cursor-auto hover:opacity-75 duration-75"><a href="">Login</a></li>
</ul>
    </nav>
 </header>
 <div class="flex flex-col items-center md:flex-row container mx-auto justify-between ">
    <div class="w-1/2 mt-[200px]">
<h2 class="text-4xl font-semibold">Police Personnel</h2>
<h2 class="text-4xl font-semibold">Record Management System</h2>
<p class="mt-4">Pangasinan Police Provincial Office Dagupan City Police Station</p>
</div>
<div class="w-1/2">
<img src="{{ asset('img/pnplogo.png') }}" class="mt-24" alt="logo">
</div>
 </div>

<div class="h-14 p-5 w-full bg-white mt-[295px] items-center">
<p class="font-semibold">Copyright 2024 MEDI. All right reserved.</p>
</div>
</body>
</html>