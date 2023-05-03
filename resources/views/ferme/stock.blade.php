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
    <title>{{ config('app.name'); }}</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ url('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="{{ url('js/tailwind.js') }}"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->

    <link href="{{ url('css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


  </head>

  <body class="mr-3 font-sans antialiased font-normal text-base leading-default text-slate-500 ">
    @include("ferme.nav")
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
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Gestion des stocks</li>
            </ol>
          </nav>
          </div>
        </div>
      </nav>

        @if($errors->any())
            <div class="relative w-full p-4 text-white bg-red-500 rounded-lg text-center mb-3">{{ $errors->first() }}</div>
        @endif

      <div class="relative flex flex-col w-full min-w-0 mb-0 break-words border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border bg-white bg-unfocus" >
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">&nbsp&nbsp&nbsp   Produit</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Stock</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">état</th>
                  <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stocks as $stock)
                <tr class="text-center">
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div>
                        <img src="img/icons/{{ $stock->name }}.png" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                      </div>
                      <div class="flex flex-col text-left ml-1">
                        <h6 class="mb-0 leading-normal text-sm">{{ $stock->name }}</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400 text-left">Minimum : {{ $stock->minStock }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    @if ($stock->stock < $stock->minStock)
                      <p class="mb-0 font-bold leading-tight text-s text-red-600">{{ $stock->stock }}</p>
                    @elseif ($stock->stock < $stock->warnStock)
                      <p class="mb-0 font-bold leading-tight text-s text-orange-500">{{ $stock->stock }}</p>
                    @else
                      <p class="mb-0 font-semibold leading-tight text-s">{{ $stock->stock }}</p>
                    @endif
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    @if (empty($stock->startAt))
                      <p class="mb-0 font-bold leading-tight text-s">/</p>
                    @else
                      @if ($stock->startAt == "2000-01-01 00:00:00")
                        <p class="mb-0 font-bold leading-tight text-s">/</p>
                      @else
                        @if ($stock->startAt < $date)
                          <p class="mb-0 font-bold leading-tight text-s text-green-700">Prêt</p>
                        @else
                        <p class="mb-0 font-bold leading-tight text-s text-red-600">Pas Prêt</p>
                        @endif
                      @endif
                    @endif
                  </td>
                  <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                    @if (!empty($stock->startAt))
                      @if ($stock->startAt != "2000-01-01 00:00:00")
                        <a href="{{ route('startProd', ['name' => $stock->name ]) }}">
                          <button type="button" class="inline-block px-3 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Début</button>
                        </a>
                      @endif

                    @endif
                    <button id="{{ $stock->name }}" data-toggle="modal" data-target="#import" type="button" class="inline-block px-2 py-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                      <span class="material-symbols-outlined">
                        edit
                      </span>
                    </button>
                  </td>
                </tr>
                <script>
                  var {{ $stock->name }} = document.getElementById('{{ $stock->name }}');
                  {{ $stock->name }} .addEventListener('click', function () {
                    openModal("{{ $stock->name }} ");
                    modalInput.value = {{ $stock->stock }} ;
                  });

                </script>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

    <!-- Overlay element -->
    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

    <!-- The dialog -->
    <div id="dialog" class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
        <h1 id="modalTitle" class="text-xl  text-center">Erreur</h1>
        {{ Form::open(array('url' => 'updateStock', 'id' => "modalForm")) }}
        <div class="py-5 border-t border-b border-gray-300">
          {{ Form::number('stock', '0',['id' => 'modalInput', 'class' => 'focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none']); }}
        </div>
        <div class="flex justify-center">
            <!-- This button is used to close the dialog -->
            <button type="button" id ="close" class="inline-block px-6 py-3 mt-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-red-500 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Fermer</button>
            {{ Form::submit('Modifier', ['class' => 'inline-block px-6 py-3 mt-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-lime-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs']); }}
        </div>
        {{ Form::close() }}
    </div>

        <script>
          var dialog = document.getElementById('dialog');
          var form = document.getElementById('modalForm');
          var closeButton = document.getElementById('close');
          var modalTitle = document.getElementById('modalTitle');
          var modalInput = document.getElementById('modalInput');
          var overlay = document.getElementById('overlay');
          var focus = document.getElementsByClassName('bg-unfocus'), i;



          function openModal(plantation, id) {
            dialog.classList.remove('hidden');
            overlay.classList.remove('hidden');
            form.action = "{{ url('updateStock') }}/" + plantation
            modalTitle.innerHTML = "Modifier le stock de <b>" + plantation + "</b>";
          }

          // hide the overlay and the dialog
          closeButton.addEventListener('click', function () {
              dialog.classList.add('hidden');
              overlay.classList.add('hidden');
          });
      </script>
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
