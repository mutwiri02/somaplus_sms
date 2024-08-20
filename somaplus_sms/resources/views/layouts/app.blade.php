<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Soma Plus</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <!-- Plugin-CSS -->
{{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/App.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<!-- Styles -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
.box {
width: 200px;
height: 50px;
}
/* .box:hover{
border: 2px  black;
box-shadow: 5px 5px gray ;
transition: ease-in 2ms;
} */
.page-container {
display: flex;        /* Enables flexbox */
justify-content: center; /* Horizontally centers the child in the flex container */
align-items: center;  /* Vertically centers the child in the flex container */
height: 100vh;        /* Full viewport height */
width: 100vw;         /* Full viewport width */
}

/* Ensure the inner centered container takes up the necessary space */
.centered-container {
width: 100%;         /* Full width of the parent container */
max-width: 90%;   /* Maximum width of the content */
margin: auto;        /* Centers the content horizontally */
}
.heights{
width: 1300px;
}

@media (max-width: 767px) {
    .imges1{
        display: none;
    }
}
.m-b {
background-color: #ffffff;
height: 100vh;
background-image:
radial-gradient(at 47% 33%, hsl(288.92, 100%, 87%) 0, transparent 59%),
radial-gradient(at 82% 65%, hsl(271.91, 99%, 54%) 0, transparent 55%);
background-size: cover;
background-size: cover;
}
.rect{
height: 50vh;
}
.img {
width: 80vw;
animation: scroll 6s linear infinite;
height: auto;
white-space: nowrap; /* Prevents wrapping */

}
.mocku{
width: 39vw;

}
.checks ul{
list-style-image: url('check.svg');
list-style-type: none; /* Remove default bullet */
padding-left: 20px; /* Adjust the padding for the text */
.checks ul li{
list-style-image: url(./fonts./svgs/solid/check.svg);

}
.slide-track {
width: 100%;
display: flex;
gap: 3em;
overflow: hidden;
}


.slider {

padding: 20px;
}

@keyframes scroll {
from {
transform: translateX(1000%);
}
to {
transform: translateX(-1000%);
}

}
.list{
text-align: start;
list-style: none;
list-style-image: url('./fonts./svgs/solid/check.svg'); /* Remove default bullet */
padding-left: 20px; /* Adjust the padding for the text */
}
}
.urefu{
height: fit-content;
}


</style>
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
<!-- Preloader-content -->
{{-- <div class="preloader">
    <span><i class="lnr lnr-sun"></i></span>
</div> --}}
<!-- MainMenu-Area -->
<nav class="mainmenu-area nav lg-container h-24 flex items-center font-semibold text-white justify-between bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-24">
            <a href="/" class="flex items-center">
                <img src="{{asset('images/Logo1.png')}}" class="h-16 w-16" alt="logo" />
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-700">Somaplus</h1>
            </a>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-gray-900 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:flex items-center space-x-4">
                <ul class="flex text-gray-700 text-lg font-medium items-center">
                    <li><a href="/features" class="ml-7 hover:text-blue-900">Features</a></li>
                    <li><a href="/pricing" class="ml-7 hover:text-blue-900">Pricing</a></li>
                    <li><a href="/customers-case-studies" class="ml-7 hover:text-blue-900">Customers</a></li>
                    <li class="relative group">
                        <a href="#" class="ml-7 hover:text-blue-900">Solution <i class="fa-solid fa-caret-down"></i></a>
                        <!-- Dropdown menu can be added here -->
                    </li>
                    <li><a href="/contactUs" class="ml-7 hover:text-blue-900">Contact</a></li>
                </ul>
                <a href="#" class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition duration-300">
                    Start Your Free Trial
                </a>
                <a href="/Book-a-demo" class="border border-blue-900 text-blue-900 px-4 py-2 rounded-md hover:bg-blue-100 transition duration-300">
                    Book a Demo
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white absolute top-24 left-0 right-0 shadow-md transition-all duration-300 ease-in-out">
        <ul class="flex flex-col text-gray-700 text-lg font-medium">
            <li><a href="/features" class="block py-2 px-4 hover:bg-gray-100">Features</a></li>
            <li><a href="/pricing" class="block py-2 px-4 hover:bg-gray-100">Pricing</a></li>
            <li><a href="/customers-case-studies" class="block py-2 px-4 hover:bg-gray-100">Customers</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-100">Solution <i class="fa-solid fa-caret-down"></i></a></li>
            <li><a href="/contactUs" class="block py-2 px-4 hover:bg-gray-100">Contact</a></li>
        </ul>
        <div class="p-4 space-y-2">
            <a href="#" class="block w-full bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition duration-300 text-center">
                Start Your Free Trial
            </a>
            <a href="/Book-a-demo" class="block w-full border border-blue-900 text-blue-900 px-4 py-2 rounded-md hover:bg-blue-100 transition duration-300 text-center">
                Book a Demo
            </a>
        </div>
    </div>
</nav>


<!-- MainMenu-Area-End -->
@yield('content')
<footer class="bg-purple-600 text-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="flex flex-col md:flex-row md:justify-between">
            <div class="p-4 mb-6 md:mb-0 flex flex-col items-center md:items-start">
                <a href="/" class="flex items-center mb-4">
                    <img src={{asset('images/Logo1.png')}} class="h-20 w-20" alt="logo"/>
                    <h1 class="text-3xl font-semibold">Somaplus</h1>
                </a>
                <div class="flex mt-4 sm:justify-center">
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-brands fa-facebook text-2xl mr-3"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                        <i class="fa-brands fa-instagram text-2xl mr-3"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                        <i class="fa-brands fa-x-twitter text-2xl mr-3"></i>
                    </a>
                </div>
                <div class="text-lg text-white font-medium mt-4">
                    <ul class="flex flex-wrap justify-center md:justify-start">
                        <li class="mb-3 mr-4"><a href="#">Our Team</a></li>
                        <li class="mb-3 mr-4"><a href="#">Customers</a></li>
                        <li class="mb-3"><a href="#">Solutions</a></li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-6">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase dark:text-white">Features</h2>
                    <ul class="dark:text-gray-400 font-semibold">
                        <li class="mb-4"><a href="#" class="hover:underline">Student Admissions</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Financial management</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Exam Management</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Transport Management</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Digital Library</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Teacher Management</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Teachers Portal</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Student portal/Guardian portal</a></li>
                    </ul>
                </div>
                <div class="hidden sm:block"></div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4"><a href="#" class="hover:underline">Privacy Policy</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Terms &amp; Conditions</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Director Portal</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Managers portal</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Pricing</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Contact us</a></li>
                        <li class="mb-4"><a href="#" class="hover:underline">Book a Demo</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col sm:flex-row text-sm mb-4 text-center sm:text-left">
                <p class="mb-2 sm:mb-0 sm:mr-4">Email: <a href="mailto:sales.somaplus@gmail.com" class="hover:underline">sales.somaplus@gmail.com</a></p>
                <p>Phone: <a href="tel:+254110407501" class="hover:underline">+25411 040 7501</a></p>
            </div>
            <div class="text-center text-sm">
                <span class="text-sm text-white sm:text-center dark:text-gray-400">
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    <a href="/" class="hover:underline">Somaplus™</a>. All Rights Reserved. 
                    <a href="#" class="underline">Privacy Policy</a>
                </span>
                <p class="mt-2">
                    Danka Plaza <span class="pointer text-gray-300">Next to GMC place.</span>
                    <span>Kitengela, Kajiado</span>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-Area-End -->
<!--Vendor-JS-->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/vendor/jquery-ui.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.js"></script>


<script type="module">
    import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'


    var animation = { duration: 7000, easing: (t) => t }

    const keenSlider = new KeenSlider(
      '#keen-slider',
      {
        loop: true,
        renderMode: "performance",
        drag: false,
        created(s) {
          s.moveToIdx(5, true, animation)
        },
        updated(s) {
          s.moveToIdx(s.track.details.abs + 5, true, animation)
        },
        animationEnded(s) {
          s.moveToIdx(s.track.details.abs + 5, true, animation)
        },
        slides: {
                    perView: 1,
                    spacing: 15,
                },
                breakpoints: {
                    "(min-width: 768px)": {
                        slides: { perView: 3, spacing: 20 },
                    },
                    "(min-width: 1024px)": {
                        slides: { perView: 5, spacing: 20 },
                    },
                
                
        },
      },
      []
    )

    const keenSliderPrevious = document.getElementById('keen-slider-previous')
    const keenSliderNext = document.getElementById('keen-slider-next')

    const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
    const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

    keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
    keenSliderNext.addEventListener('click', () => keenSlider.next())

    keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
    keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
  </script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
        } else {
            mobileMenu.style.maxHeight = '0';
        }
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.1/flowbite.js" integrity="sha512-HoR86EEia6LhUfMMFBzFB+nWZeEpYdYcpU4qe0SIEvqj1nqoaQniIyfxkwfGZ8fO5NFwMEL3cjdc0pVb8FHHfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
