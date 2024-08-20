
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
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
</head>
<body>
    <div>
        <h1>Thanks for Booking</h1>
        <p>Your Booking is complete.</p>
         @yield('content')        
    </div>
</body>
</html>