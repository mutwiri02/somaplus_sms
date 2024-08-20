@extends ('layouts.app')

@section('content')
<section class="relative table w-full py-36  bg-center bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-100 via-purple-400 to-purple-700  opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-4xl font-bold md:leading-normal tracking-wide leading-normal  text-white">Contact Us</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
 
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<!-- End Hero -->

<!-- Start Section-->
<div class="flex flex-col items-center justify-center">

<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Phone</h5>
                    <p class="text-slate-400 mt-3">Start your seamless management journey Today</p>
                    
                    <div class="mt-5">
                        <a href="tel:+254110407501" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+254110407501</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="fa-regular fa-envelope"></i>                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Email</h5>
                    <p class="text-slate-400 mt-3"> Orchestrate a Seamless Academic Journey </p>
                    
                    <div class="mt-5">
                        <a href="mailto:sales@somaplus.net" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">sales@somaplus.net</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="fa-solid fa-location-dot"></i>
               </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Location</h5>
                    <p class="text-slate-400 mt-3">Danka plaza 2nd floor, next to GMC place, <br> Kitengela, Kenya</p>
                    
                    <div class="mt-5">
                        <a href="https://www.google.com/maps/place/DANKA+PLAZA,Kitengela/@-1.5196286,36.9462385,19z/data=!4m14!1m7!3m6!1s0x182fa1006c6fa113:0x1b5429f58a8d031e!2sDANKA+PLAZA,Kitengela!8m2!3d-1.5196299!4d36.9468836!16s%2Fg%2F11y26mwkgk!3m5!1s0x182fa1006c6fa113:0x1b5429f58a8d031e!8m2!3d-1.5196299!4d36.9468836!16s%2Fg%2F11y26mwkgk?entry=ttu"
                        data-type="iframe" class="video-play-icon read-more lightbox relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View on Google map</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
        
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="{{asset("images/contact.svg")}}" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 p-6">
                        <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                        <form  ">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="subject" class="font-semibold">Your Question:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="book" class="size-4 absolute top-3 start-4"></i>
                                            <input name="subject" id="subject" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Subject :">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                            <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send" class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->
</div>

<div class="container-fluid relative">
    <div class="grid grid-cols-1">
        <div class="w-full leading-[0] border-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.1037738508514!2d36.94623852851697!3d-1.5196285592704393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182fa1006c6fa113%3A0x1b5429f58a8d031e!2sDANKA%20PLAZA%2CKitengela!5e0!3m2!1sen!2ske!4v1724140194905!5m2!1sen!2ske" width="2400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div><!--end grid-->
</div><!--end container-->


@endsection