@extends('layouts.app')
@section('content')
    <div class="home">
        <div class="container mx-auto px-4 h-screen flex flex-col justify-center items-center">
            <div class="flex flex-col md:flex-row justify-center items-center h-full w-full">
                <!-- Left column -->
                <div class="md:w-1/2 w-full text-center md:text-left leading-10 px-4">
                    <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold mt-6 md:-mt-24 text-blue-900 mb-10 md:mb-20">
                        The Modern System for Your School
                    </h1>
                    <p class="text-lg sm:text-2xl md:text-3xl text-gray-700 mb-10 md:mb-20">
                        Start using Paperless Admission, Digital Gradebooks, and accept tuition fees online.
                    </p>
                    <div class="flex justify-center md:justify-start space-x-4 mb-8">
                        <button class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800">
                            Start Your Free Trial
                        </button>
                        <button class="border border-blue-900 text-blue-900 px-6 py-2 rounded-md hover:bg-blue-100">
                            Book a Demo
                        </button>
                    </div>
                    <div class="flex justify-center md:justify-start space-x-6">
                        <div class="flex items-center">
                            <img src="software-advice-logo.png" alt="Software Advice" class="h-6 mr-2">
                            <div class="text-yellow-400">★★★★★</div>
                            <span class="ml-1">4.8</span>
                        </div>
                        <div class="flex items-center">
                            <img src="getapp-logo.png" alt="GetApp" class="h-6 mr-2">
                            <div class="text-yellow-400">★★★★★</div>
                            <span class="ml-1">4.8</span>
                        </div>
                        <div class="flex items-center">
                            <img src="capterra-logo.png" alt="Capterra" class="h-6 mr-2">
                            <div class="text-yellow-400">★★★★★</div>
                            <span class="ml-1">4.8</span>
                        </div>
                    </div>
                </div>

                <!-- Right column -->
                <div class=" w-full mt-10 md:mt-0 flex justify-center md:justify-end">
                    <img src="{{ asset('images/spj.png') }}" class="w-full " alt="logo" />
                </div>
            </div>
        </div>

    </div>

    {{--    <!-- Home-Area-End --> --}}

    <div class="container mx-auto px-4 py-8 mb-16">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-blue-800 mb-4">Schools that trust us</h2>
        <p class="text-center text-lg sm:text-xl mb-10 sm:mb-16">
            Read more testimonials in <a href="#" class="text-blue-600 hover:underline">customer stories</a>
        </p>
        <div id="keen-slider" class="keen-slider">
            <div class="keen-slider__slide flex items-center justify-center px-4 md:px-2">
                <img src="http://master.somaplus.net/somaplus-docs/01J3NJQNVYWN6Z0DQS12NWR74S.png" alt="OR Logo"
                    class="h-16 sm:h-20 md:h-28 object-contain">
            </div>
            <div class="keen-slider__slide flex items-center justify-center px-4 md:px-2">
                <img src="http://master.somaplus.net/somaplus-docs/80gFCRu1av5IVIYl4HpE4v9Ygz09YM-metadmluZSBsb2dvLnBuZw==-.png"
                    alt="Recom Logo" class="h-16 sm:h-20 md:h-28 object-contain">
            </div>
            <div class="keen-slider__slide flex items-center justify-center px-4 md:px-2">
                <img src="http://master.somaplus.net/somaplus-docs/01HKPXRWC03DMWTXFKSPHQ0TYE.jpg"
                    alt="Lone Star Bakery Logo" class="h-16 sm:h-20 md:h-28 object-contain">
            </div>
            <div class="keen-slider__slide flex items-center justify-center px-4 md:px-2">
                <img src="http://master.somaplus.net/somaplus-docs/NqUbvnLlTUL05GArYQXv0CCqb6VoiI-metaMjkxNjg1NjIxXzM2NTExMjM5MjQyNzU0N18xNTEwNjg2NjMxNjMzNTI4MTg1X24uanBn-.jpg"
                    alt="Berridge Logo" class="h-16 sm:h-20 md:h-28 object-contain">
            </div>
            <div class="keen-slider__slide flex items-center justify-center px-4 md:px-2">
                <img src="http://master.somaplus.net/somaplus-docs/01HT02SQNAWRC0XWEB815QR1YT.jpg" alt="RC Logo"
                    class="h-16 sm:h-20 md:h-28 object-contain">
            </div>
            <div class="keen-slider__slide flex items-center justify-center px-4 md:px-2">
                <img src="http://master.somaplus.net/somaplus-docs/01J0JSFGWNWX7CMH8MXJ5F43EP.png" alt="RC Logo"
                    class="h-16 sm:h-20 md:h-28 object-contain">
            </div>
        </div>
    </div>


    {{--    <!-- About-Area --> --}}
    {{--    --}}{{-- <section class="py-12" id="about_page"> <!-- Replaces 'section-padding' --> --}}
    {{--        <div class="container mx-auto px-4"> --}}
    {{--            <div class="flex flex-wrap justify-center"> <!-- Centers the content and handles responsiveness --> --}}
    {{--                <div class="w-full md:w-8/12"> <!-- Adjusts the width based on breakpoints --> --}}
    {{--                    <div class="text-center"> --}}
    {{--                        <img src="images/about-logo.png" alt="About Logo" class="mx-auto" width="50"> --}}
    {{--                        <div class="h-5"></div> <!-- Replaces 'space-20' --> --}}
    {{--                        <h5 class="title font-semibold text-xl">About Soma Plus</h5> --}}
    {{--                        <div class="h-8"></div> <!-- Replaces 'space-30' --> --}}
    {{--                        <p class="text-base leading-relaxed"> --}}
    {{--                            Somaplus is an online learning platform that allows schools / school owners to be able to offer --}}
    {{--                            online learning support while retaining the control of their schools. --}}
    {{--                        </p> --}}
    {{--                        <div class="h-5"></div> <!-- Space between paragraphs --> --}}
    {{--                        <p class="text-base leading-relaxed"> --}}
    {{--                            Somaplus enables individual schools to be able to offer custom made learning guidelines, quizzes, --}}
    {{--                            and assignments / tests that enable each school to be able to offer quality learning as per each --}}
    {{--                            standards. --}}
    {{--                        </p> --}}
    {{--                        <div class="h-5"></div> <!-- Space between paragraphs --> --}}
    {{--                        <p class="text-base leading-relaxed"> --}}
    {{--                            Somaplus provides a 3 party linkage of School, Teacher, and learner making the school to be able --}}
    {{--                            to keep close contact with its learners and parents while ensuring close personal contacts with --}}
    {{--                            the parents hence safeguarding the school business. --}}
    {{--                        </p> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </section> --}}
    {{--     --}}


    <!-- About-Area-End -->


    <!-- Gallery-Area -->
    {{-- <section class="gallery-area w-full section-padding" id="gallery_page">
        <div class="container  w-full">
            <div class="flex flex-col items-center justify-center w-full sm:flex-row">

            </div>

            </div>
    </section> --}}

    {{-- @if (isset($schoolsData) && is_array($schoolsData) && isset($schoolsData['schools']))
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-2">Schools that trust us</h2>
        <p class="text-center mb-8">
            Read more testimonials in <a href="#" class="text-blue-600 hover:underline">customer stories</a>
        </p>
        
        <div class="flex flex-wrap justify-center items-center gap-8">
            @foreach ($schoolsData['schools'] as $school)
                <div class="w-32 h-32 flex items-center justify-center">
                    <img src="{{ $school['logo'] }}" alt="{{ $school['name'] }}" class="max-w-full max-h-full object-contain">
                </div>
            @endforeach
        </div>
    </div>
@endif --}}

    <!-- Gallery-Area-End -->



    <div class="bg-purple-600  mt-24 w-full mb-24 py-32">
        <div class="flex flex-col items-center justify-center text-center font-sans text-white leading-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-semibold">
                Do more with SomaPlus
            </h2>
            <p class="text-xl sm:text-2xl md:text-2xl mt-3">
                Manage all of your processes efficiently, regardless of the
                <br class="hidden sm:block">
                <span class="mt-3">size of your educational institution.</span>
            </p>
        </div>
    </div>

    <div class="flex gap-12 font-sans ">
        <ul class="w-64 bg-white border-r border-gray-200 py-4">
            @php
                $features = [
                    [
                        'title' => 'User Management',
                        'description' => 'Manage all user accounts, including students, teachers, and administrators. Features include
            account creation, role assignment, and permission settings.',
                        'icon' => '👥',
                    ],
                    [
                        'title' => 'Attendance Tracking',
                        'description' => 'Track student attendance in real-time. Teachers can mark attendance quickly, and
            administrators can generate reports to monitor attendance trends.',
                        'icon' => '🕒',
                    ],
                    [
                        'title' => 'Shift Management',
                        'description' => 'Easily manage and schedule shifts for teachers and staff. The system supports flexible
            scheduling, shift swaps, and automated notifications.',
                        'icon' => '📅',
                    ],
                    [
                        'title' => 'Automated Billing',
                        'description' => 'Automate the billing process with customizable invoicing, payment reminders, and integration
            with payment gateways. Generate reports to track payments and outstanding balances.',
                        'icon' => '💵',
                    ],
                    [
                        'title' => 'Messaging System',
                        'description' => 'Send and receive messages between students, parents, and staff. The system supports group
            messages, announcements, and automated reminders.',
                        'icon' => '✉️',
                    ],
                    [
                        'title' => 'Grade Management',
                        'description' => 'Record and track student grades across all subjects. The system allows teachers to enter
            grades, and students/parents can view progress reports.',
                        'icon' => '📝',
                    ],
                    [
                        'title' => 'Library Management',
                        'description' => 'Manage library resources including book checkouts, returns, and reservations. Track overdue
            books and send automated reminders.',
                        'icon' => '📚',
                    ],
                    [
                        'title' => 'Course Management',
                        'description' => 'Create and manage courses with detailed syllabi, lesson plans, and resources. Students can
            enroll in courses, and teachers can track progress.',
                        'icon' => '📘',
                    ],
                    [
                        'title' => 'Event Calendar',
                        'description' => 'Maintain a centralized calendar for school events, exams, holidays, and meetings. Staff,
            students, and parents can view and subscribe to events.',
                        'icon' => '📆',
                    ],
                    [
                        'title' => 'Parental Portal',
                        'description' => 'Allow parents to monitor their child\'s progress, including attendance, grades, and
            communication with teachers. The portal also provides access to billing and payments.',
                        'icon' => '🏫',
                    ],
                    [
                        'title' => 'Feedback and Surveys',
                        'description' => 'Create and distribute surveys to collect feedback from students, parents, and staff. Analyze
            responses to improve school operations and services.',
                        'icon' => '🗒️',
                    ],
                    [
                        'title' => 'Report Generation',
                        'description' => 'Generate detailed reports on various aspects of school management, including student
            performance, attendance, and financial summaries.',
                        'icon' => '📊',
                    ],
                    [
                        'title' => 'Resource Management',
                        'description' => 'Manage school resources such as classrooms, labs, and equipment. The system supports booking,
            maintenance tracking, and resource allocation.',
                        'icon' => '🏫',
                    ],
                    [
                        'title' => 'Notifications and Alerts',
                        'description' => 'Send automated notifications and alerts for important events, deadlines, and updates.
            Customize alerts based on user roles and preferences.',
                        'icon' => '🔔',
                    ],
                    [
                        'title' => 'Data Analytics',
                        'description' => 'Analyze data related to student performance, attendance, and resource utilization. The system
            provides insights and trends to inform decision-making.',
                        'icon' => '📈',
                    ],
                    [
                        'title' => 'Security and Permissions',
                        'description' => 'Ensure the security of school data with role-based access control, encryption, and regular
            audits. Manage permissions to restrict access to sensitive information.',
                        'icon' => '🔒',
                    ],
                    [
                        'title' => 'Online Admission',
                        'description' => 'Streamline the admission process with online forms, document uploads, and automated
            notifications. The system tracks applications and supports communication with applicants.',
                        'icon' => '📝',
                    ],
                    [
                        'title' => 'Transport Management',
                        'description' => 'Manage school transportation, including route planning, vehicle tracking, and driver
            assignments. Communicate with parents about bus schedules and delays.',
                        'icon' => '🚌',
                    ],
                    [
                        'title' => 'Alumni Management',
                        'description' => 'Maintain a database of alumni with contact information and career details. Engage alumni
            through newsletters, events, and donation campaigns.',
                        'icon' => '🎓',
                    ],
                    [
                        'title' => 'Health and Wellness Tracking',
                        'description' => 'Monitor student health records, including vaccinations, medical history, and wellness checks.
            Integrate with school nurse services and track incidents.',
                        'icon' => '🏥',
                    ],
                ];
            @endphp

            <!-- Loop through the features array to generate the list of tabs -->
            @foreach ($features as $index => $feature)
                <li id="tab{{ $index }}"
                    class="tab flex items-center text-sm text-gray-600 hover:bg-gray-100 py-3 px-6 cursor-pointer transition-all">
                    <span class="mr-3 text-gray-400">{{ $feature['icon'] }}</span>
                    {{ $feature['title'] }}
                </li>
            @endforeach
        </ul>

        <div class="flex-1">
            <!-- Loop through the features array again to generate the content for each tab -->
            @foreach ($features as $index => $feature)
                <div id="content{{ $index }}"
                    class="tab-content max-w-2xl {{ $index === 0 ? 'block' : 'hidden' }} mt-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $feature['title'] }}</h2>
                    <p class="text-gray-600 mb-8">{{ $feature['description'] }}</p>
                    <img src="path-to-{{ strtolower(str_replace(' ', '-', $feature['title'])) }}-image.jpg"
                        class="w-full h-48 object-cover" alt="{{ $feature['title'] }}">
                </div>
            @endforeach
        </div>
    </div>




    <!--

                                                                                                                                                                                                      Heads up! 👋

                                                                                                                                                                                                      This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
                                                                                                                                                                                                    -->


    {{-- line divider here --}}

    <hr class="bg-gray-600">
    {{-- line divider here --}}



    <div class="container mx-auto px-4 py-20">
        <div class="flex flex-col md:flex-row items-center">

            <!-- Image Section -->
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <img src="https://media.istockphoto.com/id/1358280405/photo/confident-businessman-in-his-office.webp?b=1&s=612x612&w=0&k=20&c=vOxIbYZZ9mgdPp6tfCAw4aSEbzLwsXmah_O_FCekusw="
                    alt="School management system in action" class="rounded-lg shadow-lg w-full h-auto object-cover">
            </div>

            <!-- Content Section -->
            <div class="w-full md:w-1/2 md:pl-12 flex flex-col justify-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 text-center md:text-left">Seamless School
                    Operations</h2>
                <p class="text-xl font-semibold text-gray-700 mb-4 text-center md:text-left">SomaPlus: Your
                    All-in-One
                    Solution</p>
                <p class="text-gray-600 text-xl mb-6 text-center md:text-left">
                    Say goodbye to operational disruptions with SomaPlus. Our system ensures that your school
                    runs smoothly
                    with features like automated attendance tracking, real-time notifications, and comprehensive
                    reporting
                    tools, all designed to keep your administration efficient and your staff informed.
                </p>
                <div class="flex justify-center md:justify-start">
                    <button
                        class="bg-indigo-900 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-800 transition duration-300">
                        Explore All Features
                    </button>
                </div>
            </div>
        </div>
    </div>



    <hr class="mb-16">


    <div class="container mb-10 mx-auto p-16">
        <div class="flex flex-col md:flex-row justify-between mb-8">
            <div class="mb-4 md:mb-0">
                <h2 class="text-xl font-bold">Basilio B. Joshua</h2>
                <p class="text-gray-600">Pola Junior school</p>
                <p class="text-gray-600">Director</p>
            </div>
            <div class="md:w-2/3 mb-14">
                <p class="text-2xl italic font-bold text-gray-900">
                    "With SomaPlus, I can easily manage Finances and communicate with parents, even on short
                    notice. Their
                    support team is always there when I need them, ensuring everything runs smoothly."
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div>
                <p class="text-5xl font-bold text-purple-700">99%</p>
                <p class="text-gray-600 mt-5">Parent Engagement Rate</p>
            </div>
            <div>
                <p class="text-5xl font-bold text-purple-700">24x</p>
                <p class="text-gray-600 mt-5">Faster Financial Management</p>
            </div>
            <div>
                <p class="text-5xl font-bold text-purple-700">85%</p>
                <p class="text-gray-600 mt-5">Operational Efficiency Boost</p>
            </div>
            <div>
                <p class="text-5xl font-bold text-purple-700">100+</p>
                <p class="text-gray-600 mt-5">Student exam perfomance tracking</p>
            </div>
        </div>
    </div>




    <div class="flex items-center p-3 mt-11 mb-11 text-gray-700 justify-center flex-col font-medium">
        <h1 class="text-2xl font-extrabold">
            Find out if our system works for your school
        </h1>
        <p class="underline">
            <a href="#">Talk to one of our experts <i class="fa-solid fa-arrow-right w-7 "></i> </a>
        </p>

    </div>


    <div class="bg-purple-900 text-white p-8 flex flex-col items-center justify-center">
        <h1 class="text-3xl sm:text-4xl text-center font-bold mb-8">Available Anytime, Every Day</h1>

        <div class="w-full max-w-5xl p-8">
            <div class="flex flex-col md:flex-row border border-gray-400 rounded-lg overflow-hidden">
                <div class="flex-1 p-8 sm:p-14 border-b md:border-b-0 md:border-r border-gray-400">
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-2">99% Uptime</h2>
                    <p class="text-blue-300 mb-4">SomaPlus ensures your school’s system is always up and
                        running with our
                        robust infrastructure and proactive support.</p>
                    <div class="flex justify-end">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-900" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex-1 p-8 sm:p-14 border-b md:border-b-0 md:border-r border-gray-400">
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-2">Real-Time Monitoring</h2>
                    <p class="text-blue-300 mb-4">Keep track of student attendance and staff activity with
                        SomaPlus’s live
                        monitoring and detailed reports.</p>
                    <div class="flex justify-end">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-900" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex-1 p-8 sm:p-14">
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-2">Automated Alerts</h2>
                    <p class="text-blue-300 mb-4">Receive notifications for important events, from attendance
                        issues to
                        system updates, ensuring you’re always in the loop.</p>
                    <div class="flex justify-end">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-900" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4 sm:px-14 mt-16 py-8 flex flex-col items-center justify-center">
        <div class="flex w-full flex-col md:flex-row justify-between items-center mb-4">
            <div class="mb-4 md:mb-0">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Custom School Portal</h1>
                <p class="text-gray-500 mt-2">Designed to streamline your school management and enhance
                    communication with
                    SomaPlus.</p>
            </div>
            <button class="bg-indigo-900 text-white px-4 py-2 rounded-md">Explore More</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-12 p-4 sm:p-14">
            <div>
                <svg class="w-12 h-12 text-purple-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">Shift Management</h2>
                <p class="text-gray-500 mb-4">Easily manage class schedules, staff shifts, and more with
                    SomaPlus,
                    accessible from your phone or laptop.</p>
                <a href="#" class="text-purple-500 font-semibold flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div>
                <svg class="w-12 h-12 text-purple-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                    </path>
                </svg>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">Message Students and Staff</h2>
                <p class="text-gray-500 mb-4">Enhance communication with SomaPlus by sending mass
                    announcements, private
                    messages, and more to staff and students.</p>
                <a href="#" class="text-purple-500 font-semibold flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div>
                <svg class="w-12 h-12 text-purple-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">Automated Billing</h2>
                <p class="text-gray-500 mb-4">Automate your billing process with SomaPlus, ensuring accurate
                    timesheets and
                    quick approvals.</p>
                <a href="#" class="text-purple-500 font-semibold flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>





    <!-- How-To-Use -->
    {{-- <div class="space-10 absolute "> <hr> </div>
        <!-- Download-Area -->
        <div class=" -mt-11  ">
            <div class="p-11 flex items-center justify-center w-full ">
                <div class="flex  items-center justify-center w-full flex-col sm:flex-row">
                    <section class="section-padding" id="features_page">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="page-title">
                                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Features</h5>
                                        <div class="space-10"></div>
                                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">
                                            Our Approach of Design is Simple and Easy to use
                                        </h3>
                                    </div>
                                    <div class="space-20"></div>
                                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                                        <p>
                                            Somaplus provides a 3 party linkage of School, Teacher and learner making the school to be able
                                            to keep close contact with its learners and parents will ensuring close personal contacts with
                                            the parents hence safeguarding the school business.
                                        </p>
                                    </div>
                                    <div class="space-50"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                                    <div class="space-60 hidden visible-xs"></div>
                                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="box-icon">
                                            <i class="lnr lnr-clock"></i>
                                        </div>
                                        <h4>Notifications</h4>
                                        <p>
                                            All the students will be notified in case of any new tests and notes.
                                        </p>
                                    </div>
                                    <div class="space-50"></div>
                                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="box-icon">
                                            <i class="lnr lnr-laptop-phone"></i>
                                        </div>
                                        <h4> Parents' Portal</h4>
                                        <p>
                                            All the parents are provided with a portal to view quizzes and notes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="w-full sm:w-1/2 section-padding">
                        <h3 class="text-white">Video</h3>
                        <div class="h-5"></div>


                        <div class="claas ml-2  right-11">
                            <img src={{asset('images/ploit.png')}} class="" alt="logo"/>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <div>
        <x-Testimonials></x-Testimonials>
    </div>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center text-gray-900 mb-12">
            SomaPlus Onboarding Process
        </h1>

        <div
            class="flex flex-col space-y-12 md:space-y-0 md:flex-row justify-between items-start md:items-center md:space-x-8 mt-12">

            <!-- Peaching -->
            <div class="flex-1 flex flex-col items-start md:items-start">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zm0 4c-3.313 0-6 2.687-6 6v2h12v-2c0-3.313-2.687-6-6-6zm0 10H6v-1c0-2.667 2.333-5 5-5s5 2.333 5 5v1h-6z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-xl  font-bold text-center md:text-left mb-4 text-indigo-800">Peaching</h2>
                <p class="text-gray-900 text-lg  md:text-left">
                    After the client accepts onboarding, we begin by creating the school account and handling
                    data entry.
                </p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:block text-gray-800 text-4xl self-center">→</div>

            <!-- Training -->
            <div class="flex-1 flex flex-col items-start md:items-start">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h18v12H3V3zm0 15h18v2H3v-2zm0 0V5h18v13h-1V7H4v11H3z"></path>
                    </svg>
                </div>
                <h2 class="text-xl  font-bold text-center md:text-left mb-4 text-indigo-800">Training</h2>
                <p class="text-gray-900 text-lg  md:text-left">
                    We provide comprehensive training on the SomaPlus system to ensure seamless integration into
                    your
                    operations.
                </p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:block text-gray-800 text-4xl self-center">→</div>

            <!-- Support -->
            <div class="flex-1 flex flex-col items-start md:items-start">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7a4 4 0 011-1 4 4 0 014-4 4 4 0 014 4 4 4 0 014 4v7.04a4.1 4.1 0 01-2.036.6H7.036A4.1 4.1 0 015 18.04V11a4 4 0 01-1-4zm7 1a1 1 0 10-2 0 1 1 0 002 0zm-1 9a3 3 0 003-3 3 3 0 00-3-3 3 3 0 00-3 3 3 3 0 003 3z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-xl  font-bold text-center md:text-left mb-4 text-indigo-800">Support</h2>
                <p class="text-gray-900 text-lg  md:text-left">
                    We offer ongoing support to assist you with any issues or questions that may arise.
                </p>
            </div>
        </div>
    </div>



    {{-- FAQS --}}

    <div class="container mx-auto px-4 py-8 mt-7 mb-24">
        <h1 class="text-3xl font-bold text-center text-indigo-900 mb-8">
            Questions & answers
        </h1>

        <div class="space-y-4">
            <div class="border-b border-gray-200">
                <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleAnswer(this)">
                    <span class="text-2xl font-semibold text-indigo-900">How does SomaPlus insure its staff and
                        teachers?</span>
                    <span class="text-2xl text-indigo-900">−</span>
                </button>
                <div class="pb-4 text-xl font-semibold hidden text-gray-600  fadeIn">
                    <p>All staff and teachers registered with SomaPlus are covered by our comprehensive
                        occupational
                        accidental insurance policy. This policy provides coverage for bodily injury and
                        property damage
                        during work-related activities. The insurance coverage amounts to $1,000,000 aggregate
                        with $500,000
                        per occurrence.</p>
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleAnswer(this)">
                    <span class="text-2xl font-semibold text-indigo-900">How does SomaPlus support schools and
                        businesses?</span>
                    <span class="text-2xl text-indigo-900">+</span>
                </button>
                <div class="hidden pb-4 text-xl font-semibold text-gray-600  fadeIn">
                    <p>SomaPlus offers a range of services to support schools and educational businesses,
                        including access
                        to vetted staff, comprehensive management tools, and insurance coverage for all
                        registered
                        personnel.</p>
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleAnswer(this)">
                    <span class="text-2xl font-semibold text-indigo-900">Are SomaPlus staff and teachers
                        vetted?</span>
                    <span class="text-2xl text-indigo-900">+</span>
                </button>
                <div class="hidden pb-4 text-xl font-semibold text-gray-600  fadeIn">
                    <p>Yes, all staff and teachers registered with SomaPlus undergo a thorough vetting process,
                        including
                        background checks, qualifications verification, and interviews to ensure they meet our
                        high
                        standards.</p>
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleAnswer(this)">
                    <span class="text-2xl font-semibold text-indigo-900">How much do SomaPlus's services
                        cost?</span>
                    <span class="text-2xl text-indigo-900">+</span>
                </button>
                <div class="hidden pb-4 text-xl font-semibold text-gray-600  fadeIn">
                    <p>SomaPlus offers competitive pricing for its range of services. The cost varies depending
                        on the
                        specific services required by the school or educational institution. For a detailed
                        quote, please
                        contact our support team.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Download-Area-End -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-indigo-900 mb-4">
                    Find out if the system Works for your school
                </h1>
                <p class="text-gray-600 max-w-lg text-lg mt-4">
                    See exactly how all your Management headaches will be solved by our system experts today.
                </p>
            </div>
            <div class="w-full md:w-auto">
                <button
                    class="w-full md:w-auto bg-indigo-900 text-white font-semibold py-3 px-6 rounded-lg hover:bg-navy-800 transition duration-300">
                    Contact Sales
                </button>
            </div>
        </div>
    </div>

    <script>
        function toggleAnswer(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('span:last-child');

            answer.classList.toggle('hidden');
            icon.textContent = answer.classList.contains('hidden') ? '+' : '−';

        }
    </script>
@endsection
