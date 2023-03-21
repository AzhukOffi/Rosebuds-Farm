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
    <link href="{{ url('css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


  </head>

  <body class="mr-3 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include("nav")

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Pointeuse</li>
            </ol>
          </nav>
          </div>
        </div>
      </nav>

        @if($errors->any())
            <div class="relative w-full p-4 text-white bg-red-500 rounded-lg text-center mb-3">{{ $errors->first() }}</div>
        @endif

      <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border bg-white">
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <div class="p-5 flex flex-wrap justify-center items-center gap-2 mt-2 mb-6">
                <a class="mx-auto" href="{{ route('startService') }}">
                  <button type="button" class="px-6 py-4 font-bold text-white uppercase transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Début de service</button>
                </a>
                <a class="mx-auto" href="{{ route('endService') }}">
                  <button type="button" class="px-6 py-4 font-bold text-white uppercase transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 button-color leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Fin de service</button>
                </a>
              </div>
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Début de service</th>
                  <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Fin de service</th>
                  <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Durée du service</th>
                  <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Salaire </th>
                  <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pointeuses as $pointeuse)
                  <tr>
                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                      <span class="font-semibold leading-tight text-xs text-slate-400">{{ \Carbon\Carbon::parse($pointeuse->start)->format('d/m/Y -  H:i') }}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="font-semibold leading-tight text-xs text-slate-400">
                        @if ($pointeuse->end == "2000-01-01 00:00:00")
                          /
                        @else
                        {{ \Carbon\Carbon::parse($pointeuse->end)->format('d/m/Y -  H:i') }}
                        @endif
                      </span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="font-semibold leading-tight text-xs text-slate-400">{{ $pointeuse->time }}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="font-semibold leading-tight text-xs text-slate-400">{{ $pointeuse->salary }} $</span>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      @if ($pointeuse->end != "2000-01-01 00:00:00")
                      <button id="edit-{{ $pointeuse->id }}"  data-toggle="modal" data-target="#import" type="button" class="inline-block px-2 py-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                        <span class="material-symbols-outlined">
                          edit
                        </span>
                      </button>
                      @endif
                    </td>
                    <script>
                      var edit = document.getElementById("edit-{{ $pointeuse->id }}");
                      var start = document.getElementById("start");
                      var end = document.getElementById("end");

                      edit.addEventListener('click', function () {
                        openModal({{ $pointeuse->id }});
                        document.modal.start.value = "{{ \Carbon\Carbon::parse($pointeuse->start)->format('H:i') }}";
                        document.modal.end.value = "{{ \Carbon\Carbon::parse($pointeuse->end)->format('H:i') }}";
                      });
                    </script>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Overlay element -->
    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

    <!-- The dialog -->
    <div id="dialog" class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
        <h1 id="modalTitle" class="text-xl  text-center">Modifier la pointeuse</h1>
        <form id="modalForm" name="modal" method="POST" action="/updatePointeuse/0">
          @csrf
          <div class="py-5 border-t border-b border-gray-300">
            <input id="start" placeholder="Début" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="start" type="time" value="0">
            <input id="end" placeholder="Fin" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="end" type="time" value="0">

          </div>
          <div class="flex justify-center">
              <!-- This button is used to close the dialog -->
              <button type="button" id ="close" class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-red-500 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Fermer</button>
              <input class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="submit" value="Modifier">
          </div>
      </form>
    </div>

    <script>
      var dialog = document.getElementById('dialog');
      var form = document.getElementById('modalForm');
      var closeButton = document.getElementById('close');
      var modalTitle = document.getElementById('modalTitle');
      var modalInput = document.getElementById('modalInput');
      var overlay = document.getElementById('overlay');
      var focus = document.getElementsByClassName('bg-unfocus'), i;


      function openModal(id) {
        form.action = "/updatePointeuse/" + id
        dialog.classList.remove('hidden');
        overlay.classList.remove('hidden');
      }

      // hide the overlay and the dialog
      closeButton.addEventListener('click', function () {
          dialog.classList.add('hidden');
          overlay.classList.add('hidden');
      });
  </script>

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
