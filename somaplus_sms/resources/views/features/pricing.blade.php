
@extends('layouts.app')
@section('content')

{{-- //contact-us form directly/comment --}}
{{-- <div class="fixed right-10 bottom-5 rounded-full flex items-center justify-center h-16 w-16 bg-purple-500" >
    <i class="fa-solid fa-message text-2xl text-gray-100"></i>
</div> --}}
{{-- //pricing section --}}
<div class=" bg-purple-300  h-4/5 flex flex-col items-center justify-center w-full">
    <h1 class="text-4xl font-semibold mb-7">The plans includes all System features </h1>
    
    <button class="w-fit p-6 flex items-center justify-center rounded-lg  hover:ease-in-2s font-medium text-white text-xl shadow-xl h-16 bg-purple-400 hover:bg-purple-600 hover:text-gray-200"><a href="/Featutes">Explore Features </a></button>
   
</div>
<div class="-mt-32 relative -top-20">
<div class="  flex items-center flex-col justify-center mb-10 mt-10 ">
    <div class="w-96 h-14 bg-blue-50 rounded-full flex items-center justify-between border-2 border-blue-900">
        <h1 class="w-1/2 h-14 flex font-bold text-xl text-blue-900 items-center justify-center ">Pay Termly</h1>
        <h2 class="w-1/2 h-14 bg-blue-900 flex items-center  text-xl font-bold text-white justify-center rounded-full">Pay Yearly</h2>
    </div>
    <p class="text-2xl mt-7 font-semibold text-blue-950">Choose plan your preference </p> 
</div>
{{-- //////////pricing section and cards --}}
<div class="  flex items-center justify-center mb-16">
    <div class="h-fit p-11 flex justify-between shadow-2xl rounded-lg mr-16 shadow-red-50 flex-col bg-blue-100 border w-1/4 ">
        <div class="flex flex-col pl-11  mb-7 items-start justify-start">
            <h1 class=" font-semibold uppercase  text-green-900 text-2xl mb-4">Standard plan</h1>
            <span class="flex items-center justify-center h-fit p-2 bg-purple-100  text-purple-600 rounded-full text-sm  font-semibold w-fit "> Unlimited Students</span>
        </div>
<div class="flex flex-col  items-center justify-center">
   
    <div class="flex items-center mt-4 justify-center flex-col">
          
          <div class="text-center mb-6">
            <h1 class="font-bold flex mb-5 justify-start w-full text-2xl opacity-50 text-blue-600 line-through">
                Ksh 150
              </h1>
            <span class="text-6xl font-bold mb-2 text-blue-800 ">
                KSH 100
            </span>
            <p class="text-lg font-bold mb text-blue-700">Per student Per Term</p>
          </div>
          <div class="flex items-center  justify-center">
            <ul class="text-lg font-medium leading-10  italic text-green-800">
                <li> <i class="fa-solid fa-check mr-3 text-lg"></i>All <a href="Features" class="hover:underline ">features</a> included</li>
                <li> <i class="fa-solid fa-check mr-3 text-lg"></i>Free 24/7 Support</li>
                <li> <i class="fa-solid fa-check mr-3 text-lg"></i>Free Training</li>
               
                
            </ul>
          </div>
    </div>
    <button class="bg-purple-800  text-1/2 text-white mt-28 font-medium h-14 w-1/2">Get Started</button>

</div>

</div>

{{-- //////////next pricing card --}}
<div class="h-fit p-11 flex justify-between shadow-2xl rounded-lg  shadow-red-50 flex-col bg-blue-100 border w-1/4 ">
    <div class="flex flex-col pl-11  mb-7 items-start justify-start">
        <h1 class=" font-semibold text-green-900 mb-4 text-2xl uppercase">One Off Premium plan</h1>
        <span class="flex items-center justify-center h-fit p-2 bg-purple-100  text-purple-600 rounded-full text-sm  font-semibold w-fit "> Unlimited Students</span>
    </div>
<div class="flex flex-col  items-center justify-center">

<div class="flex mt-4 items-center justify-center flex-col">
      
      <div class="text-center mb-6">
        <h1 class="font-bold flex mb-5 justify-start w-full text-2xl opacity-50 text-blue-600 line-through">
            Ksh 450,000
          </h1>
        <span class="text-6xl font-bold mb-2 text-blue-800 ">
            KSH 350,000
        </span>
        <p class="text-lg font-bold  text-blue-700">One Off</p>
      </div>
      <div class="flex items-center  justify-center">
        <ul class="text-lg font-medium leading-10  italic text-green-800">
            <li> <i class="fa-solid fa-check mr-3 text-lg"></i>All features included</li>
            <li class="text-red-700"> <i class="fa-solid fa-x mr-3 text-sm text-red-700"></i>Free 24/7 Support</li>
            <li class="text-red-700"> <i class="fa-solid fa-x mr-3 text-sm text-red-700"></i>Free Training</li>
           
            
        </ul>
      </div>
</div>

<button class="bg-purple-800  text-1/2 text-white mt-28 font-medium h-14 w-1/2">Get Started</button>

</div>
</div>
</div>
</div></div>
</div>

 @endsection