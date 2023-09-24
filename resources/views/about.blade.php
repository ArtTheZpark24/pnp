<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>About</title>
</head>
<body class="bg-cyan-300">
<header >
    <nav class="bg-cyan-300 fixed top-0 left-0 right-0 shadow-lg  flex justify-between items-center">
<div>
<a href="/"><img src="{{ asset('img/pnplogo.png') }}" class="h-24" alt="logo"></a>

</div>

<ul class="flex gap-8 mr-4 font-semibold space-x-4">
    <li class="mt-3 hover:opacity-75 duration-75 "><a href="/">Home</a></li>
    <li class="mt-3 hover:opacity-75 duration-75 border-b-2 border-red-600" ><a href="/about">About</a></li>
    <li class="bg-sky-700 p-3 rounded-md text-white cursor-auto hover:opacity-75 duration-75"><a href="">Login</a></li>
</ul>
    </nav>
 </header>
 <div class="flex flex-col items-center md:flex-row container mx-auto justify-between ">
    <div class="w-1/2 mt-[200px]">
<h2 class="text-4xl font-semibold">About us</h2>

<p class="mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia neque impedit corrupti at magnam accusantium totam, dignissimos omnis repellendus natus facilis dicta quo distinctio? Harum, optio sequi! Iste, quo incidunt.</p>
</div>
<div class="w-1/2">
<img src="{{ asset('img/pnplogo.png') }}" class="  mt-[100px]" alt="logo">
</div>
 </div>
 <div class="flex flex-col  md:flex-row container mt-[150px] ml-11  justify-between">
 
 <div class="w-96 md:w-[550px] bg-blue-400 h-[200px] px-5 shadow-lg rounded-md">
<h1 class="text-4xl font-bold mt-5 ml-5">Mission</h1>
<p class="mt-4 ml-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Necessitatibus quis voluptatibus harum eos recusandae est. 
    </p>
 </div>
<div class="flex flex-col">
<div class="w-96 md:w-[550px]  mt-8 md:mt-1 bg-blue-400 h-[200px]  px-5 shadow-lg rounded-md">
<h1 class="text-4xl font-bold mt-5 ml-5">Vision</h1>
<p class="mt-4 ml-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Necessitatibus quis voluptatibus harum eos recusandae est. 
    </p>
 </div>
 <div class="w-96 md:w-[550px] bg-blue-400 h-[200px]  px-5 shadow-lg rounded-md mt-[100px]">
<h1 class="text-4xl font-bold mt-5 ml-5">Objectives</h1>
<p class="mt-4 ml-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Necessitatibus quis voluptatibus harum eos recusandae est. 
    </p>
 </div>
</div>
</div>

 </div>
 <div class="h-14 p-5 w-full bg-white mt-[295px] items-center">
<p class="font-semibold">Copyright 2024 MEDI. All right reserved.</p>
</div>
</body>
</html>