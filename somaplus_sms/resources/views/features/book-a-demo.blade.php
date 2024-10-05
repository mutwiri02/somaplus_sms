@extends ('layouts.app')

@section('content')
    <!-- resources/views/book-demo.blade.php -->
    <div class=" min-h-7/8 flex flex-col items-center justify-center w-full px-4 py-16 md:py-24">
        <div class="p-20 border bg-gradient-to-bl from-purple-400 via-purple-700 to-indigo-900  ">
            <h1 class="text-4xl text-white font-bold mb-4">Book a demo</h1>
            <div class=" max-w-md:flex-col max-w-md:flex flex items-center">
                <img src="{{ asset('images/booking.gif') }}" alt="Owl" class="w-64 h-64 mr-4">
                <p class="text-2xl font-bold text-white w-2/3 ml-23">
                    Get ready for an immersive experience during your demo with Somaplus.
                </p>
            </div>
            <div class=" flex justify-end mr-24 w-full">
                <a href="{{ route('select-date-time') }}"
                    class="bg-white text-indigo-800  py-6 text-xl font-bold rounded-md mt-4 px-10 inline-block">
                    Select date & time
                </a>
            </div>
        </div>
    </div>
@endsection
