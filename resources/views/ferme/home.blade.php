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
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>{{ config('app.name'); }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ url('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ url('css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include("ferme.nav")


    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->


      @if($errors->any())
        <div class="relative w-full p-4 text-white bg-red-500 rounded-lg text-center mb-3">{{ $errors->first() }}</div>
      @endif

      <div class="text-center mt-20">
        <h1 class="font-bold capitalize text-xl">Direction</h1>
        <div class="flex flex-wrap -mx-3 columns-3 justify-center mt-4">
          @foreach ($directions as $direction)
          <div class="w-full max-w-full px-3 xl:w-1/5 ml-4 mr-4 md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <img src="/photos/{{ $direction->name }}.png" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt=" }}" />
              </div>
              <div class="flex-auto p-4 pt-0 text-center">
                <h6 class="mb-0 text-center">{{ $direction->name }}</h6>
                <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                <h5 class="mb-0">{{ $direction->rank }}</h5>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="text-center">
        <h1 class="font-bold capitalize text-xl mt-8">Employés</h1>

        @foreach ($users as $userCollection)
          <div class="flex flex-wrap -mx-3 columns-3 justify-center mt-4">
          @foreach ($userCollection as $user)
            <div class="w-full max-w-full px-3 xl:w-1/5 ml-4 mr-4 md:flex-none">
              <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <img src="/photos/{{ $user->name }}.png" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="{{ $user->name }}" />
                </div>
                <div class="flex-auto p-4 pt-0 text-center">
                  <h6 class="mb-0 text-center">{{ $user->name }}</h6>
                  <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                  <h5 class="mb-0">{{ $user->rank }}</h5>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        @endforeach

      </div>
      <!-- end cards -->
    </main>

  </body>
  <!-- plugin for charts  -->
  <script src="{{ url('js/plugins/chartjs.min.js') }}" async></script>
  <!-- plugin for scrollbar  -->
  <script src=" {{ url('js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>



  <!-- main script file  -->
  <script src=" {{ url('js/soft-ui-dashboard-tailwind.js') }}" async></script>
</html>
