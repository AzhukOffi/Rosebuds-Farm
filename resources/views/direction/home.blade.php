<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="icon" type="image/png" href="/img/favicon.png" />
    <title>{{ config('app.name'); }}</title>
    <link href="{{ url('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Popper -->
    <!-- Main Styling -->
    <link href="{{ url('css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    <link href="{{ url('css/full-softUI.css') }}" rel="stylesheet" />


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include("direction/nav")

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Direction</li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Accueil</li>
            </ol>
          </nav>
          </div>
        </div>
      </nav>
     <!-- end cards -->
    </main>

  </body>
  <!-- plugin for charts  -->

  <!-- plugin for scrollbar  -->
  <script src=" {{ url('js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ url('js/plugins/chartjs.min.js') }}"></script>



  <!-- main script file  -->
  <script src=" {{ url('js/soft-ui-dashboard-tailwind.js') }}" async></script>
</html>
