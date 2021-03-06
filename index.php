<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/carousel.css">
  <title>The Golden Wattle</title>
</head>
<header class="flex items-center h-24 bg-gw-cream justify-center">

  <img class="round-logo md:mr-8" src="<?php echo get_bloginfo('template_url') ?>/images/gw-round-logo.png"/>
  <a href="#menus" class="hidden md:block no-underline font-bold md:pr-6">Menus</a>
  <a href="#functions" class="hidden md:block no-underline font-bold md:pr-6">Functions</a>
  <a href="#events" class="hidden md:block no-underline font-bold md:pr-6">Events</a>
  <a href="#contact" class="hidden md:block no-underline font-bold md:pr-6">Contact</a>
</header>

<body class="bg-white">
  <section class="relative header-style flex flex-col items-center text-center pt-6 md:pt-12 lg:pt-0 pb-6">
    <div class="hidden lg:block header-background underlay bg-gw-cream w-full h-48 z-0"></div>
    <img class="header-background logo pb-12 w-5/6 md:w-2/3 max-w-lg " src="<?php echo get_bloginfo('template_url') ?>/images/gw-header.png">
    <div class="header-background address pb-6">
      <p>110 Pirie Street,<br>Adelaide, 5000</p>
      <p>(08) 8223 7874<br>info@thegoldenwattle.com</p>
    </div>
    <div class="header-background image flex flex-col items-center lg:flex-row lg:-mr-10">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/gw-flame-grilled.jpg" class="w-full max-w-xl" />
      <div class="social flex justify-center text-3xl pt-4 lg:pt-0 lg:self-start lg:flex-col lg:pl-2">
        <a href="https://www.facebook.com/thegoldenwattle/" class="fab fa-facebook pr-4 lg:pr-0 lg:pb-2 cursor-pointer"></a>
        <a href="https://www.instagram.com/thegoldenwattle/" class="fab fa-instagram"></a>
      </div>
    </div>
  </section>
  <section class="flex flex-col items-center m-auto text-center max-w-lg pt-12 pb-12">
    <h2 class="pb-6 px-4 text-lg md:text-2xl">Welcome to The Golden Wattle. <br> Classic Pub hospitality in the heart of Adelaide.</h2>
    <h3 class="max-w-md">Open Monday to Friday for Breakfast, Lunch & Dinner, Saturday for Lunch & Dinner.</h3>
  </section>
  <section id="menus" class="m-auto text-center max-w-xl pt-12 lg:pb-12">
    <h1 class="pb-12 text-3xl md:text-5xl">Menus</h1>
    <div class="flex flex-col items-center md:flex-row justify-between px-4">
      <a href="#" class="w-64 py-4 bg-gw-blue no-underline text-white font-bold mb-6 text-lg">Breakfast</a>
      <a href="#" class="w-64 py-4 bg-gw-blue no-underline text-white font-bold mb-6 text-lg">Lunch/Dinner</a>
      <a href="#" class="w-64 py-4 bg-gw-blue no-underline text-white font-bold mb-6 text-lg">Wines</a>
    </div>
  </section>

  <section class="carousel text-center py-12 w-full">
    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_1.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_3.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_4.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_5.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_6.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_7.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_8.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_9.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/carousel/gw_10.jpg" style="width:100%">
    </div>
  </section>



  <section id="functions" class="m-auto text-center py-12 bg-gw-cream">
    <h1 class="pb-6 text-3xl md:text-5xl">Functions</h1>
    <h3 class="m-auto max-w-md pb-12 px-4"> Host your next function at The Wattle.
      We have a range of different spaces to suit large or small bookings including the mezzanine which can be booked exclusively.
    </h3>
    <a href="#" class="py-4 px-6 bg-gw-blue mb-12 no-underline text-white font-bold mb-6 text-lg">View Canapés & Platters </a>
    <div class="flex flex-col md:flex-row md:justify-center mt-16 md:flex-wrap m-auto max-w-3xl">
      <img class="pb-4 w-full md:w-1/2 md:pr-2" src="<?php echo get_bloginfo('template_url') ?>/images/function-space-1.jpg" />
      <img class="pb-4 w-full md:w-1/2 md:pl-2" src="<?php echo get_bloginfo('template_url') ?>/images/function-space-2.jpg" />
      <img class="pb-4 w-full md:w-1/2 md:pr-2" src="<?php echo get_bloginfo('template_url') ?>/images/function-space-3.jpg" />
      <img class="pb-4 w-full md:w-1/2 md:pl-2" src="<?php echo get_bloginfo('template_url') ?>/images/function-space-4.jpg" />
    </div>
  </section>
  <section id="events" class="m-auto text-center max-w-md py-12">
    <h1 class="text-3xl md:text-5xl">Events</h1>
    <div class="">
    </div>
  </section>
</body>
<footer id="contact" class="text-center py-12 bg-gw-blue">
  <div class="m-auto max-w-3xl px-4">
    <h1 class="pb-12 text-cream text-3xl md:text-5xl">Contact</h1>
    <div class="flex flex-col md:flex-row md:justify-between">
      <div class="md:text-left md:ml-12 w-full pt-6 md:w-1/2">
        <div class="pb-6 font-semibold">
          <a href="tel:(08) 8223 7874" class="text-lg lg:text-2xl text-cream md:no-underline">(08) 8223 7874</a>
          <a href="mailto:info@thegoldenwattle.com" class="text-lg lg:text-2xl text-cream mb-12">info@thegoldenwattle.com</a>
        </div>
        <h2 class="text-lg lg:text-2xl">110 Pirie Street,<br>
          Adelaide, 5000</h2>
        <br>
        <h2 class="text-lg lg:text-2xl">Hours</h2>
        <div class="text-lg">
          <p>Mon – Thu, 7 am – 12 pm</p>
          <p>Fri, 7 am – 2 am</p>
          <p>Sat, 12 pm - 2 am</p>
        </div>
        <div class="flex justify-center md:justify-start text-3xl py-6">
          <i class="fab fa-facebook pr-4"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.2435490320468!2d138.60181271571346!3d-34.92542838209891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0cf22057d1545%3A0x5900ae2d481501!2sThe+Golden+Wattle!5e0!3m2!1sen!2sau!4v1544069024696" width="600" height="450" frameborder="" style="border:0" allowfullscreen>
        </iframe>
        <!-- <div class="absolute bg-grey" style="width:600px; height:450px;">
        </div> -->
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/scripts/main.js"></script>

</html>
