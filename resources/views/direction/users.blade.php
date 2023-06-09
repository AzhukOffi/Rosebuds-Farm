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
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Employés</li>
            </ol>
          </nav>
          </div>
        </div>
      </nav>
        @if($errors->any())
            <div class="relative w-full p-4 text-white bg-red-500 rounded-lg text-center">{{ $errors->first() }}</div>
        @endif
        @if(Session::has('lien_embauche'))
            <div class="relative w-full p-4 text-white bg-green-500 rounded-lg text-center text-white">
                <h5>{{ url(Session::get('lien_embauche')) }}</h5>
            </div>
        @endif



    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border bg-white bg-unfocus" >
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">

                    <thead class="align-bottom">
                    <tr>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">&nbsp&nbsp&nbsp   Personne</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Salaire</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)

                        <tr class="text-center">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div>
                                        <img src="/photos/{{ $user->name }}.png" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="{{ $user->name }}" />
                                    </div>
                                    <div class="flex flex-col text-left ml-1">
                                        <h5 class="mb-0 leading-normal text-sm">{{ $user->name }}</h5>
                                        <p class="mb-0 leading-tight text-xs text-slate-400 text-left">{{ $user->rank }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                $ {{ $user->salary  }}
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">

                                <button id="{{ $user->id }}" data-toggle="modal" data-target="#import" type="button" class="inline-block px-2 py-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                                  <span class="material-symbols-outlined">
                                    edit
                                  </span>
                                </button>
                                <a href="/licencier/{{ $user->id }}">
                                    <button type="button" class="inline-block px-5 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-600 to-red-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Licencier</button>
                                </a>
                            </td>
                        </tr>
                        <script>
                            var person_{{ $user->id }} = document.getElementById('{{ $user->id }}');
                            person_{{ $user->id }} .addEventListener('click', function () {
                                openModal({!!json_encode($user)!!}, {{ $user->id }});
                                form.action = "{{ url('updateUser') }}/{{ $user->id }}";
                            });

                        </script>
                    @endforeach
                    <tr class="text-center">
                        <td></td>
                    </tr>
                    <tr class="text-center">
                        <form method="POST" action="/direction/embaucher">
                            @csrf
                            <td class="p-2 leading-normal ml-4 text-left align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                <img src="{{ asset('img/icons/add.png') }}" class="inline-block align-middle items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="{{ $user->name }}" />
                                <input placeholder="Prénom Nom" type="text" name="name" class="inline-block text-left focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-1/2 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                <select choices-select="" name="sex" class="inline-block w-4/5 text-center focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                    <option class="text-center" value="0">Homme</option>
                                    <option class="text-center" value="1">Femme</option>
                                </select>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                <button type="submit" class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Embaucher</button>
                            </td>
                        </form>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

        <div id="dialog" class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/3 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
            <h1 id="modalTitle" class="text-xl  text-center">Erreur</h1>
            <form id="modalForm" method="POST" action="/updateUser" enctype="multipart/form-data">
                @csrf
                <div className="w-4/5">
                    <select id="rank" choices-select="" name="rank" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <option value="0">Apprenti / Apprentie</option>
                        <option value="1">Ouvrier / Ouvrière</option>
                        <option value="2">Maraicher / Maraichère</option>
                        <option value="3">Ingénieur agronome</option>
                        <option value="4">Chef / Cheffe de culture</option>
                        <option value="5">Directeur / Directrice</option>
                    </select>
                </div>
                <div className="w-4/5">
                    <select id="sex" choices-select="" name="sex" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <option value="0">Homme</option>
                        <option value="1">Femme</option>
                    </select>
                </div>
                <input type="file" name="photo" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                <div class="flex justify-center">
                    <input class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="submit" value="Modifier">
                    <input id="close" class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-600 to-red-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="button" value="Fermer">
                </div>
            </form>
        </div>
    </div>

        <script>
            var dialog = document.getElementById('dialog');
            var form = document.getElementById('modalForm');
            var closeButton = document.getElementById('close');
            var modalTitle = document.getElementById('modalTitle');
            var modalInput = document.getElementById('modalInput');
            var overlay = document.getElementById('overlay');
            var focus = document.getElementsByClassName('bg-unfocus'), i;



            function openModal(user, id) {
                dialog.classList.remove('hidden');
                overlay.classList.remove('hidden');
                modalTitle.innerHTML = "Modifier les informations de <b>" + user["name"] + "</b>";
                document.getElementById('rank').options[user["rankLevel"]].defaultSelected = true;
                document.getElementById('sex').options[user["sex"]].defaultSelected = true;
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

  <!-- plugin for scrollbar  -->
  <script src=" {{ url('js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ url('js/plugins/chartjs.min.js') }}"></script>



  <!-- main script file  -->
  <script src=" {{ url('js/soft-ui-dashboard-tailwind.js') }}" async></script>
</html>
