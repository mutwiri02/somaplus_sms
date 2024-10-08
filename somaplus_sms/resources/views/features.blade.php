@extends('layouts.app')

@section('content')
    <div class="bg-purple-300 min-h-7/8 flex flex-col items-center justify-center w-full px-4 py-16 md:py-24">
        <div
            class="flex leading-10 mt-6  text-center font-sans py-10 text-white flex-col items-center justify-center max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold wow fadeInUp" data-wow-delay="0.4s">
                Orchestrate a Seamless Academic Journey
            </h2>
            <p class="text-lg md:text-2xl mt-3 font-medium leading-relaxed wow fadeInUp" data-wow-delay="0.5s">
                Manage all of your processes efficiently, regardless of the
                <span class="mt-3 block">size of your educational institution.</span>
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mt-8">
                <button class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800 transition duration-300">
                    Start Your Free Trial
                </button>
                <button
                    class="border border-blue-900 text-blue-900 px-6 py-2 rounded-md hover:bg-blue-100 transition duration-300">
                    Book a Demo
                </button>

            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16 md:py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($features as $feature)
                <div
                    class="bg-white rounded-lg p-6 shadow-sm flex flex-col items-start justify-center border-2 transition duration-300 hover:shadow-lg">
                    <p
                        class="text-2xl bg-indigo-800 p-5 rounded-full h-16 w-16 flex items-center justify-center text-white mb-7">
                        {{ $feature['icon'] }}</p>
                    <h3 class="text-xl md:text-2xl font-bold text-gray-600 mb-6">{{ $feature['title'] }}</h3>
                    <p class="text-gray-600 text-base md:text-lg mb-7">{{ $feature['description'] }}</p>
                    <a href="#" class="text-indigo-600 hover:underline transition duration-300">Read more <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mx-auto px-4 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-3xl md:text-5xl mb-8 font-bold uppercase leading-tight">
                    Do you want to read <br class="hidden md:block" />our Product Documentation:
                </h1>
                <button
                    class="w-full md:w-auto text-white font-bold bg-purple-500 p-4 rounded-xl hover:bg-purple-600 transition duration-300">
                    Download Our Proposal
                </button>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('path_to_your_image.jpg') }}" alt="Product Documentation"
                    class="w-full h-auto rounded-lg shadow-lg" />
            </div>
        </div>
    </div>

    <div class="flex items-center mb-16 text-gray-700 justify-center flex-col font-medium text-center px-4">
        <h1 class="text-xl md:text-2xl font-extrabold mb-4">
            Find out if our system works for your school
        </h1>
        <p class="underline">
            <a href="/contact" class="flex items-center justify-center hover:text-purple-600 transition duration-300">
                Talk to one of our experts <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </p>
    </div>
@endsection
