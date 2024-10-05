@extends('layouts.app')
@section('content')
    <div class="bg-white  rounded-lg shadow-md flex  items-center justify-center  p-14">
        <div class="flex items- mb-4 justify-center space-x-10 container mt-28">
            <div class="w-full md:w-1/3 pr-6 border-r leading-10">
                <img src="{{ asset('images/logo.png') }}" alt="Somaplus" class="w-24 mb-6">
                <div class="flex space-x-6 items-center">
                    <div class="w-14 h-14 rounded-full border flex items-center justify-center text-3xl font-bold mb-2">C
                    </div>
                    <h2 class="text-2xl text-indigo-900 font-semibold">Chrispus Mutwiri</h2>
                    
                </div>
                <h3 class="text-2xl font-bold mb-2 text-indigo-800">Somaplus Demo</h3>
                <p class="text-gray-600 mb-2">
                    <svg class="inline-block w-4 text-green-600 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z">
                        </path>
                    </svg>
                    30 min
                </p>
                <p class="text-gray-600 text-xl">
                    <svg class="inline-block w-4 h-4 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm12.553 1.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                        </path>
                    </svg>
                    Web conferencing / physical meeting details provided upon confirmation.
                </p>

                <h2 class="text-xl font-bold mb-4">To be held on {{ request('selected_datetime') }}
                </h2>

                @if ($errors->any())

                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
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
                    <div id="toast-bottom-left"
                        class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-green-400 divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow bottom-5 left-5 dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800"
                        role="alert">
                        <div class="text-sm font-normal">{{ session('success') }}</div>
                    </div>
                @endif
            </div>
            <div class="w-2/3 ">
                <form action="{{ route('bookDemo') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Name *</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-3 py-2 border rounded-md @error('name') border-red-500 @enderror"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email *</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-3 py-2 border rounded-md @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="Phone" class="block text-gray-700 font-bold mb-2">Phone Number *</label>
                        <input type="number" id="phone" name="phone" required
                            class="w-full px-3 py-2 border rounded-md @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="selected_datetime" class="block text-gray-700 font-bold mb-2">Date-Time *</label>
                        <input disabled id="selected_datetime" value="{{ request('selected_datetime') }}"
                            name="selected_datetime" required class="w-full px-3 py-2 border rounded-md bg-gray-100">
                        <input type="hidden" name="selected_datetime" value="{{ request('selected_datetime') }}">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Please share anything that will
                            help prepare for our meeting.</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-3 py-2 border rounded-md @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-sm text-gray-600 mb-4">
                        By proceeding, you confirm that you have read and agree to Calendly's Terms of Use and Privacy
                        Notice.
                    </p>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Schedule
                        Event</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
