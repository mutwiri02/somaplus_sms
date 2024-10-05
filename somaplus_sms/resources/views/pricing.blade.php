@extends('layouts.app')
@section('content')
    <div class="bg-purple-500 min-h-[60vh] flex flex-col items-center justify-center w-full px-4 py-12">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-indigo-900 mb-5 text-center">The plans include all System
            features</h1>
        <p class="text-base md:text-lg font-medium text-indigo-900 text-center">Directors' portal, managers'/Admins' portal,
            Teachers' portal, Parents' Portal included in the system</p>
    </div>

    <div class="container mx-auto -mt-32 md:-mt-32 lg:-mt-56 md:-28 px-4 py-8">
        <div class="flex justify-center mb-8 md:mb-16 mt-8">
            <div class="bg-gray-50 rounded-full p-1 flex py">
                <button id="yearlyBtn" class="px-3 py-2 rounded-full text-xs md:text-sm font-medium">Yearly billing</button>
                <button id="monthlyBtn" class="px-3 py-2 rounded-full text-xs md:text-sm font-medium bg-white shadow">Monthly
                    billing</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Stradard plan  --}}
            <div class="bg-white rounded-lg shadow-md border-gray-300 border p-4 md:p-6 flex flex-col">
                <h2 class="text-lg md:text-xl font-bold mb-2 text-gray-800">Standard</h2>
                <p class="text-sm mb-4 text-gray-600">Up to 100 Students</p>
                <p class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Ksh<span id="standardPrice">100.00</span><span
                        class="text-xs md:text-sm font-normal">/per month</span></p>
                <p class="text-sm mb-4 text-gray-600">Billed Termly per student</p>
                <button
                    class="bg-indigo-800 text-white py-2 px-4 rounded-md mb-4 hover:bg-indigo-700 transition duration-300 text-sm md:text-base">Start
                    for free</button>
                <ul class="space-y-2 text-xs md:text-sm text-gray-600">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>All features included</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Unlimited records</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Priority support</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Optional Add-Ons</li>
                </ul>
            </div>

            {{-- //premium plan --}}
            <div class="bg-white rounded-lg shadow-md border border-purple-500 flex flex-col">
                <h2 class="text-sm md:text-md mb-2 text-center text-white font-semibold bg-purple-700 py-1">Premium</h2>
                <div class="p-4 md:p-6 flex flex-col relative -mt-5">
                    <h2 class="text-lg md:text-xl font-bold mb-2 text-gray-800">Plus</h2>
                    <p class="text-sm mb-4 text-gray-600">unlimited students</p>
                    <p class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Ksh<span id="plusPrice">200.00</span><span
                            class="text-xs md:text-sm font-normal">/per term</span></p>
                    <p class="text-sm mb-4 text-gray-600">Billed per Student Termly / Yearly</p>
                    <button
                        class="bg-indigo-800 text-white py-2 px-4 rounded-md mb-4 hover:bg-indigo-800 transition duration-300 text-sm md:text-base">Start
                        one term free Trial</button>
                    <ul class="space-y-2 text-xs md:text-sm text-gray-600">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>All features included</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>Unlimited alumni records</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>Priority email support</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>Optional Add-Ons</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>Dedicated account manager</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg><span class="flex items-center">Priority support 24/7
                        </li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg><span class="flex items-center">SMS custom domain <span
                                    class="ml-1 px-1 py-0.5 text-xs bg-blue-100 text-purple-800 rounded">NEW</span></span>
                        </li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg><span class="flex items-center">Payments intergration <span
                                    class="ml-1 px-1 py-0.5 text-xs bg-blue-100 text-purple-800 rounded">POPULAR</span></span>
                        </li>

                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg><span class="flex items-center">Custom email support <span
                                    class="ml-1 px-1 py-0.5 text-xs bg-blue-100 text-purple-800 rounded">NEW</span></span>
                        </li>


                    </ul>
                </div>
            </div>
            <!-- Starter Plan -->
            <div class="bg-white rounded-lg shadow-md border-gray-300 border p-4 md:p-6 flex flex-col">
                <h2 class="text-lg md:text-xl font-bold mb-2 text-gray-800">Basic</h2>
                <p class="text-sm mb-4 text-gray-600">Up to 200+ Students</p>
                <p class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Ksh<span id="starterPrice">150.00</span><span
                        class="text-xs md:text-sm font-normal">/per Term</span></p>
                <p class="text-sm mb-4 text-gray-600">Billed Termly per student</p>
                <button
                    class="bg-indigo-800 text-white py-2 px-4 rounded-md mb-4 hover:bg-indigo-700 transition duration-300 text-sm md:text-base">Start
                    One Term Trial</button>
                <ul class="space-y-2 text-xs md:text-sm text-gray-600">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>All features included</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>Unlimited alumni records</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>Standard email support</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>Optional Add-Ons</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>customisation Available </li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-indigo-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg><span class="flex items-center">Payments intergration <span
                                class="ml-1 px-1 py-0.5 text-xs bg-indigo-100 text-blue-800 rounded">NEW</span></span></li>
                </ul>
            </div>

            <!-- Plus Plan -->


            <!-- Standard Plan -->

        </div>
    </div>

    <div class="flex flex-col items-center justify-center p-4 md:p-6">
        <div class="container p-4 md:p-8">
            <h2 class="text-indigo-900 text-lg md:text-xl font-semibold mb-4">Available add-ons <span
                    class="font-normal">on all plans</span></h2>

            <div class="space-y-4 md:space-y-6">
                <!-- Onboarding Sessions -->
                <div
                    class="bg-white p-4 md:p-6 rounded-md border-b mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div class="flex items-start md:items-center space-x-4 mb-4 md:mb-0">
                        <div class="text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m2 2h.01M15 10h.01M12 2a10 10 0 100 20 10 10 0 000-20zM4.05 13.91l1.366 1.366c.488.488 1.16.708 1.826.665l3.905-.246a.25.25 0 01.272.272l-.246 3.905c-.043.666.177 1.338.665 1.826l1.366 1.366a9.954 9.954 0 01-5.91-8.154v-.002a9.953 9.953 0 013.154-7.476 9.954 9.954 0 017.476-3.154 9.953 9.953 0 017.476 3.154 9.954 9.954 0 013.154 7.476 9.954 9.954 0 01-3.154 7.476 9.953 9.953 0 01-7.476 3.154c-3.87 0-7.273-2.286-8.872-5.908z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-indigo-900 text-xl font-semibold">Step-by-step</h3>
                            <p class="text-gray-600 text-xl">3x Onboarding sessions</p>
                            <p class="text-gray-500 text-md">Enhance your Somaplus experience with our Onboarding service.
                                Tailored for new users, we’ll help you optimize platform features, from user setup to
                                curriculum management.</p>
                        </div>
                    </div>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-md">Contact sales</button>
                </div>

                <!-- SMS Gateway -->
                <div
                    class="bg-white p-4 md:p-6 rounded-md border-b mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div class="flex items-start md:items-center space-x-4 mb-4 md:mb-0">
                        <div class="text-indigo-500">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h6.25M21 10h-6.25M3 6.75h7.75M21 6.75h-8.75M3 13.25h3.75M21 13.25h-6.75M3 17.5h4.25M21 17.5h-8.75M3 14.75v-5a2 2 0 012-2h14a2 2 0 012 2v5">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-indigo-900 text-xl font-semibold">SMS gateway</h3>
                            <p class="text-gray-600 text-xl">Send SMS messages</p>
                            <p class="text-gray-500 text-md">Seamlessly communicate with students and guardians via SMS
                                directly within Somaplus.</p>
                        </div>
                    </div>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-md">Contact sales</button>
                </div>

                <!-- Custom Report Cards -->
                <div
                    class="bg-white p-4 md:p-6 rounded-md border-b mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div class="flex items-start md:items-center space-x-4 mb-4 md:mb-0">
                        <div class="text-indigo-500">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m2 2h.01M15 10h.01M12 2a10 10 0 100 20 10 10 0 000-20zM4.05 13.91l1.366 1.366c.488.488 1.16.708 1.826.665l3.905-.246a.25.25 0 01.272.272l-.246 3.905c-.043.666.177 1.338.665 1.826l1.366 1.366a9.954 9.954 0 01-5.91-8.154v-.002a9.953 9.953 0 013.154-7.476 9.954 9.954 0 017.476-3.154 9.953 9.953 0 017.476 3.154 9.954 9.954 0 013.154 7.476 9.954 9.954 0 01-3.154 7.476 9.953 9.953 0 01-7.476 3.154c-3.87 0-7.273-2.286-8.872-5.908z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-indigo-900 text-xl font-semibold">Customizable</h3>
                            <p class="text-gray-600 text-xl">Custom report cards</p>
                            <p class="text-gray-500 text-md">Personalize your assessment process with tailored report
                                cards, exclusive to your institution.</p>
                        </div>
                    </div>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-md">Contact sales</button>
                </div>

                <!-- Custom Transcripts -->
                <div
                    class="bg-white p-4 md:p-6 rounded-md border-b mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div class="flex items-start md:items-center space-x-4 mb-4 md:mb-0">
                        <div class="text-indigo-500">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m2 2h.01M15 10h.01M12 2a10 10 0 100 20 10 10 0 000-20zM4.05 13.91l1.366 1.366c.488.488 1.16.708 1.826.665l3.905-.246a.25.25 0 01.272.272l-.246 3.905c-.043.666.177 1.338.665 1.826l1.366 1.366a9.954 9.954 0 01-5.91-8.154v-.002a9.953 9.953 0 013.154-7.476 9.954 9.954 0 017.476-3.154 9.953 9.953 0 017.476 3.154 9.954 9.954 0 013.154 7.476 9.954 9.954 0 01-3.154 7.476 9.953 9.953 0 01-7.476 3.154c-3.87 0-7.273-2.286-8.872-5.908z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-indigo-900 text-xl font-semibold">Customizable</h3>
                            <p class="text-gray-600 text-xl">Custom transcripts</p>
                            <p class="text-gray-500 text-md">Craft unique transcripts reflecting your institution’s
                                identity and standards.</p>
                        </div>
                    </div>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-md">Contact sales</button>
                </div>
            </div>
        </div>
    </div>

    <div class=" flex items-center bg-gray-100 justify-center  md:mt-24 mt-16">
        <div class=" container grid md:grid-cols-12 grid-cols-1 p-8 items-center gap-[30px]">
            <div class="md:col-span-6 order-1 md:order-2">
                <div class="lg:ms-8 ">
                    <img class="w-2/3" src="{{ asset('images/illustrator/SEO_SVG.svg') }}" alt="illustrate">
                </div>
            </div>

            <div class="md:col-span-6 order2 md:order-1">
                <div class="lg:me-5">
                    <h6 class="text-purple-800 text-lg font-bold uppercase mb-2">Simple & Effective</h6>
                    <h3 class="mb-4 md:text-2xl md:leading-normal text-gray-700 text-2xl leading-normal font-semibold">
                        SomaPlus <br> Comprehensive Analytics for School Operations</h3>

                    <p class="text-gray-600 max-w-xl">SomaPlus streamlines all school management tasks into one seamless
                        platform, allowing you to focus on what matters most—education. Effortlessly manage everything from
                        student data to billing, all in one place.</p>

                    <ul class="list-none text-slate-400 my-6">
                        <li class="mb-2 text-gray-600 flex"><i
                                class="fa-regular fa-circle-check text-indigo-800 text-xl me-2"></i> Real-Time Data
                            Analytics for School Performance</li>
                        <li class="mb-2 text-gray-600 flex"><i
                                class="fa-regular fa-circle-check text-indigo-800 text-xl me-2"></i> Automated Billing and
                            Financial Management</li>
                        <li class="mb-2 text-gray-600 flex"><i
                                class="fa-regular fa-circle-check text-indigo-800 text-xl me-2"></i> Effortless
                            Communication with Students and Staff</li>
                    </ul>

                    <a href=""
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Get
                        Started</a>
                </div>
            </div>

        </div>
    </div>


    </div>
@endsection
