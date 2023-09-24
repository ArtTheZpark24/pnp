<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="bg-cyan-300 overflow-hidden" >
<header >
    <nav class="bg-cyan-300 fixed top-0 left-0 right-0 shadow-lg  flex justify-between items-center border-b-2 border-blue-500">
<div>
<a href="/"><img src="{{ asset('img/pnplogo.png') }}" class="h-24" alt="logo"></a>

</div>
<div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-cyan-300 w-[300px]">
<i class="fa-solid fa-magnifying-glass"></i>
<form action="">
@csrf
<input type="search" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none">
</form>
    </div>
<div>

<i class="fa-regular fa-bell mr-[100px]"></i>
</div>
    </nav>
    
 </header>
 <div>
    <div class="sidebar h-[1000px] mt-[98px] fixed top-0 bottom-0 lg:left-0 p-2 w-[50px] overflow-y-auto overflow-hidden
  bg-cyan-300 border-r-2 border-blue-500 duration-75
    " id="sidebar">
    <div>
    <i class="fa-solid fa-bars cursor-pointer  ml-2" id="btn-bar" ></i>
    </div>
    <div class="text-black text-xl ml-3 " id="profile-container">
        <div class="p-2.5 mt-1 flex items-center ">
     <img src="{{ asset('img/person.webp') }}" id="profile" class="h-11 w-11  rounded-full" alt="logo">
         <h1 class="font-bold text-black text-center  text-[15px] ml-4" id="profile-name">Art Lois</h1>
     

        </div>
        <div class="mt-4 ml-6">
<ul class="m-5">
    <li class="font-semibold text-sm bg-white p-2 text-center rounded-md"><a href="/dashboard"><i class="fa-solid fa-table-columns"></i> Dashboard</a></li>
    <li class="mt-7 text-gray-500 text-sm"><a href=""><i class="fa-solid fa-users"></i> Personnel</a></li>
    <li class="mt-7 text-gray-500 text-sm"><a href=""><i class="fa-solid fa-certificate"></i> Certificates</a></li>
    <li class="mt-7 text-gray-500 text-sm"><a href=""><i class="fa-solid fa-calendar-check"></i> Appointment</a></li>
    <li class="mt-7 text-gray-500 text-sm"><a href=""><i class="fa-solid fa-syringe"></i> Vaccination</a></li>
</ul>
        </div>
    </div>

    
    </div>
  
    <div class="flex flex-col justify-center items-center md:flex-row container mx-auto px-4 w-full min-h-screen gap-5 lg:gap-8 " id="dash-container">



    <div class="h-[100px] md:h-[150px] p-5 md:p-7 border-2 border-sky-500  w-[250px] shadow-xl hover:bg-blue-900 hover:border-none hover:text-white  cursor-pointer duration-75 rounded-md " >
        <h1 class="text-1xl font-bold">Total Personnel</h1>
        <h3 class="mt-3 font-bold text-3xl">856</h3>
    
    </div>
   
    <div class="h-[100px] md:h-[150px] p-5 md:p-7   border-2 border-sky-500 w-[250px] shadow-xl hover:bg-blue-900 hover:text-white hover:border-none cursor-pointer duration-75 rounded-md">
        <h1 class="text-1xl font-bold">Registered Seminars</h1>
        <h3 class="mt-3 font-bold text-3xl">3,342</h3>
    </div>
    <div class="h-[100px] md:h-[150px] p-5 md:p-7  border-2 border-sky-500  w-[250px] shadow-xl hover:bg-blue-900 hover:text-white hover:border-none cursor-pointer duration-75 rounded-md">
        <h1 class="text-1xl font-bold">Complete Seminars</h1>
        <h3 class="mt-3 font-bold text-3xl">77</h3>
    </div>
    
    <div class="h-[100px] md:h-[150px] p-5 md:p-7 border-2 border-sky-500  w-[250px] shadow-xl hover:bg-blue-900 hover:text-white hover:border-none cursor-pointer duration-75 rounded-md">
        <h1 class="text-1xl font-bold">Ressigned Personnel</h1>
        <h3 class="mt-3 font-bold text-3xl">17</h3>
    </div>


</div>
</body>
<script src="{{ asset('js/dash.js') }}"></script>
</html>