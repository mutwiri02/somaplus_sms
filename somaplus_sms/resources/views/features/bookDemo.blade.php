@extends("layouts.app")
@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center mb-4">
        <a href="{{ route('select-date-time') }}" class="text-blue-500 mr-4">&larr;</a>
        <img src="{{ asset('path/to/dreamclass-logo.png') }}" alt="DreamClass" class="w-12 h-12 mr-4">
        <h1 class="text-2xl font-bold">SomaPlus</h1>
    </div>
    <div class="flex">
        <div class="w-1/3 pr-4">
            <img src="{{ asset('path/to/lida-image.jpg') }}" alt="Lida Diavolitsi" class="w-16 h-16 rounded-full mb-2">
            <h2 class="text-xl font-semibold">Lida (Lids) Diavolitsi</h2>
            <h3 class="text-lg font-bold">DreamClass Sales Demo</h3>
            <p class="text-gray-600">Web conferencing details provided upon confirmation.</p>
            <p class="text-gray-600">
                {{ request('selected_datetime') }}
            </p>
        </div>
        <div class="w-2/3">
            <h2 class="text-xl font-bold mb-4">Enter Details</h2>
            
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">something wrong here:</span>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
            
            <div id="toast-bottom-left" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-green-400 divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow bottom-5 left-5 dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal">{{session('success')}}</div>
            </div>
            @endif

            <form action="{{ route('bookDemo') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name *</label>
                    <input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded-md @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email *</label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded-md @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="Phone" class="block text-gray-700 font-bold mb-2">Phone Number *</label>
                    <input type="number" id="phone" name="phone" required class="w-full px-3 py-2 border rounded-md @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="selected_datetime" class="block text-gray-700 font-bold mb-2">Date-Time *</label>
                    <input disabled id="selected_datetime" value="{{ request('selected_datetime') }}" name="selected_datetime" required class="w-full px-3 py-2 border rounded-md bg-gray-100">
                    <input type="hidden" name="selected_datetime" value="{{ request('selected_datetime') }}">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Please share anything that will help prepare for our meeting.</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border rounded-md @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    By proceeding, you confirm that you have read and agree to Calendly's Terms of Use and Privacy Notice.
                </p>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Schedule Event</button>
            </form>
        </div>
    </div>
</div>
@endsection