@extends ('layouts.app')

@section('content')
    <div class="bg-purple-500 h-3/5 flex flex-col items-center justify-center w-full">
        <h1 class="text-4xl font-bold text-indigo-900 mb-7 text-center">The plans includes all System features</h1>
        <p class="text-lg font-medium text-indigo-900 text-center">Directors' portal, managers'/Admins' portal, Teachers'
            portal, Parents' Portal included on the system</p>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 md:p-24 -mt-16 md:-mt-32 mb-11 container mx-auto" x-data="bookingCalendar()">
        <div class="flex flex-col md:flex-row border-b">
            <!-- Left column -->
            <div class="w-full md:w-2/3 pr-6 border-r leading-10">
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
            </div>

            <!-- Right column -->
            <form action="{{ route('booking-confirmation') }}" method="GET"
                class="w-full md:w-2/3 pl-0 md:pl-6 mb-7 mt-6 md:mt-0">
                @csrf
                <div
                    class="pt-5 border-t border-gray-200 dark:border-gray-800 flex flex-col sm:flex-row sm:space-x-5 rtl:space-x-reverse">
                    <div inline-datepicker datepicker-buttons datepicker-autoselect-today class="mx-auto sm:mx-0"
                        id="datepicker"></div>
                    <div class="w-full sm:w-auto mt-5 sm:mt-0">
                        <h3 class="text-gray-900 dark:text-white text-base font-medium mb-3 text-center" id="selected-date">
                            Wednesday 30 June 2024
                        </h3>
                        <button type="button" data-collapse-toggle="timetable"
                            class="inline-flex items-center w-full py-2 px-5 justify-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Pick a time
                        </button>
                        <label class="sr-only">Pick a time</label>
                        <ul id="timetable" class="grid w-full grid-cols-2 gap-2 mt-5">
                            <!-- Time slots -->
                            <li>
                                <input type="radio" id="10-am" value="10:00 AM" class="hidden peer" name="timetable">
                                <label for="10-am"
                                    class="inline-flex items-center justify-center w-full p-2 text-sm font-medium text-center bg-white border rounded-lg cursor-pointer text-blue-600 border-blue-600 dark:hover:text-white dark:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:border-blue-600 peer-checked:bg-blue-600 hover:text-white peer-checked:text-white hover:bg-blue-500 dark:text-blue-500 dark:bg-gray-900 dark:hover:bg-blue-600 dark:hover:border-blue-600 dark:peer-checked:bg-blue-500">
                                    10:00 AM
                                </label>
                            </li>
                            <!-- Add more time slots here as needed -->
                        </ul>
                    </div>
                </div>
                <input type="hidden" id="selected-datetime" name="selected_datetime">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-4 w-full">Continue</button>
            </form>
        </div>
        <div class="p-6 md:p-11 container mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center md:text-left">Here’s what you can expect:</h2>
            <ul class="space-y-2">
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700">A <strong class="font-bold text-gray-800">Proper live tour</strong> that
                        unveils all our functionalities and powerful features of the platform.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700">Personalized tips on using <strong
                            class="font-bold text-gray-800">Somaplus</strong> tailored to your school’s <strong
                            class="font-bold">specific</strong> needs.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700"><strong class="font-bold text-gray-800">Expert advice</strong> on
                        streamlining your daily operations and processes via Somaplus’s centralized dashboard.</span>
                </li>
            </ul>
            <div class="mt-6 flex flex-col md:flex-row items-center justify-between border-t pt-5">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center md:text-left">A few tips before the
                        demo:</h2>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Make sure to <strong class="font-bold text-gray-800">block out 45
                                    minutes</strong> for the demo to avoid interruptions.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700"><strong class="font-bold text-gray-800">Prepare your
                                    questions</strong> in advance to ensure we cover all your concerns.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Test your <strong class="font-bold text-gray-800">internet
                                    connection</strong> and video/audio setup before the call.</span>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-end mt-7 md:mt-0">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md">Confirm</button>
                </div>
            </div>
        </div>
    </div>











    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateInputs = document.querySelectorAll('input[name="timetable"]');
            const selectedDateTimeInput = document.getElementById('selected-datetime');
            const dateDisplay = document.getElementById('selected-date');
            const datepicker = document.getElementById('datepicker');

            // Update the selected date when the datepicker changes
            datepicker.addEventListener('changeDate', function(e) {
                const selectedDate = e.detail.date.toLocaleDateString('en-US', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                });
                dateDisplay.textContent = selectedDate;
                updateSelectedDateTime();
            });

            dateInputs.forEach(input => {
                input.addEventListener('change', updateSelectedDateTime);
            });

            function updateSelectedDateTime() {
                const selectedDate = dateDisplay.textContent;
                const selectedTime = document.querySelector('input[name="timetable"]:checked')?.value || '';
                selectedDateTimeInput.value = `${selectedDate} ${selectedTime}`.trim();
            }
        });
    </script>
@endsection
