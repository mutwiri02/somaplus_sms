
@extends ('layouts.app')

@section('content')

<!-- resources/views/book-demo.blade.php -->
<div class="bg-teal-500 rounded-lg p-6 text-white">
    <h1 class="text-3xl font-bold mb-4">Book a demo</h1>
    <div class="flex items-center">
        <img src="" alt="Owl" class="w-24 h-24 mr-4">
        <p class="text-lg">
            Get ready for an immersive experience during your demo with DreamClass.
        </p>
    </div>
    <a href="{{ route('select-date-time') }}" class="bg-emerald-500 text-white px-4 py-2 rounded-md mt-4 inline-block">
        Select date & time
    </a>
</div>

@endsection