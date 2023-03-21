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
      <link href="{{ url('css/full-softUI.css') }}" rel="stylesheet" />
      <link href="{{ url('css/nucleo-icons.css') }}" rel="stylesheet" />
      <link href="{{ url('css/nucleo-svg.css') }}" rel="stylesheet" />
      <script src="{{ url('js/tailwind.js') }}"></script>
      <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include("nav")

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
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Entreprise</li>
            </ol>
          </nav>
          </div>
        </div>
      </nav>

      @if($errors->any())
        <div class="relative w-full p-4 text-white bg-red-500 rounded-lg text-center">{{ $errors->first() }}</div>
      @endif
        @if(Session::has('download.in.the.next.request'))
            <div class="relative w-full p-4 text-white bg-green-500 rounded-lg text-center text-white"><a target="_blank" href="{{ url('/') }}/{{ Session::get('download.in.the.next.request') }}">Accéder au PDF</a> </div>
        @endif
        <div class="flex justify-center mt-5">
            <button id="uploadFile" data-toggle="modal" data-target="#import" type="button" class="inline-block  px-4 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Envoyer un fichier</button>
        </div>
        <div class="flex flex-wrap -mx-3 columns-4 bg-white mt-5">
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/Benny's.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center text-red-600">Aucune livraison hebdomadaire</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0"></h5>
                    </div>
                </div>
            </div>
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <datalist id="annuaire">
                    @foreach($annuaire as $client)
                        <option value="{{ $client->name }}">{{ $client->name }}</option>
                    @endforeach
                </datalist>
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/Emerald Bar.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center font-bold">Livraison - Mardi & Jeudi</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0">800 Patates &nbsp&nbsp / &nbsp&nbsp 250 Laitues<br>50 Carottes &nbsp&nbsp / &nbsp&nbsp 50 Oignons<br>275 Farines<br><br><h5 class="font-semibold">385.5KG (3 Ponys & 3 Personnes)</h5></h5>
                        <form method="GET" action="/contrat/Restaurant">
                            <input list="annuaire" placeholder="Livré à" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="contact" type="text">

                            <button class="mt-4 inline-block  px-4 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Générer le bon de livraison</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/EMS.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center text-red-600">Aucune livraison hebdomadaire</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0"></h5>
                    </div>
                </div>
            </div>
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/Downtown.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center text-red-600">Aucune livraison hebdomadaire</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0"></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 columns-4 bg-white mt-4">
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/LSPD.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center text-red-600">Aucune livraison hebdomadaire</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0"></h5>
                    </div>
                </div>
            </div>
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/Ron.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center text-red-600">Aucune livraison hebdomadaire</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0"></h5>
                    </div>
                </div>
            </div>
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/Vignoble.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center font-bold">Livraison - Lundi</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0">1000 Carottes &nbsp&nbsp / &nbsp&nbsp 500 Pêches<br>500 Framboises &nbsp&nbsp / &nbsp&nbsp 500 Fraises<br><br><h5 class="font-semibold">159KG (Livré par le vignoble)</h5></h5>
                        <form method="GET" action="/contrat/Vignoble">
                            <input list="annuaire" placeholder="Livré à" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="contact" type="text">
                            <button class="mt-4 inline-block  px-4 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Générer le bon de livraison</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" max-w-full px-3 w-1/4 md:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 mx-6 mb-0 text-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <img src="img/icons/Weazel.webp" class="relative text-white opacity-100 fas fa-landmark text-xl top-31/100 mx-auto" alt="Bennys" />
                    </div>
                    <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 text-center text-red-600">Aucune livraison</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">
                        <h5 class="mb-0"></h5>
                    </div>
                </div>
            </div>
        </div>


      <form method="POST" action="/facturerEntreprise">
        @csrf
        <div class="relative flex flex-col w-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border bg-white bg-unfocus mt-5 ">
          <div class="p-6 pb-0 mb-0 rounded-t-2xl">
            <h5>Facturation (Hors Contrat)</h5>
          </div>
            <div class="flex-auto px-0 pt-0 pb-2 columns-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Produit</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Prix / Prix Contrat</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nombre</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Prix total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($leftProducts as $product)
                      <tr class="text-center">
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div>
                            <img src="img/icons/{{ $product->name }}.png" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 font-bold leading-tight text-xs">{{ $product->name }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 font-semibold leading-tight text-xs">{{ $product->entreprisePrice }} $</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent m-auto text-center">
                          <input autocomplete=off oninput="updateValue('{{ $product->name }}', '{{ $product->entreprisePrice }}/{{ $product->contratPrice }}')" placeholder="Nombre de produits" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="{{ $product->name }}" type="number">
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p id="{{ $product->name }}" class="mb-0 font-semibold leading-tight text-xs">0 $</p>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Prix total</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nombre</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Prix Unitaire</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Produit</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($rightProducts as $product)
                      <tr class="text-center">
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p id="{{ $product->name }}" class="mb-0 font-semibold leading-tight text-xs">0 $</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent m-auto text-center">
                          <input autocomplete=off oninput="updateValue('{{ $product->name }}', '{{ $product->entreprisePrice }}/{{ $product->contratPrice }}')" placeholder="Nombre de produits" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="{{ $product->name }}" type="number">
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 font-semibold leading-tight text-xs">{{ $product->entreprisePrice }} $</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 font-bold leading-tight text-xs">{{ $product->name }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <div>
                            <img src="img/icons/{{ $product->name }}.png" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 md:flex-none justify-center mt-3">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4 pt-0 text-center justify-center">
              <div class="flex-auto p-4 pt-0 text-center">
                <b><h6 id="total" class="mb-0 mt-4 text-center">0 $</h6></b>
              </div>
              <div class="mt-1 md:flex md:items-center text-center justify-center">
                <select name="entreprise" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  <option value="Benny's">Benny's</option>
                  <option value="EMS">Pillbox Hospital</option>
                  <option value="LSPD">LSPD</option>
                  <option value="Restaurant">Emerald Bar</option>
                  <option value="Ron">Ron Petroleum</option>
                  <option value="Taxi">Downtown Cab Co.</option>
                  <option value="Vignoble">Vignoble</option>
                  <option value="Weazel">Weazel News</option>
                </select>
              </div>
                <input list="annuaire" placeholder="Livré à" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="contact" type="text">

                <div class="md:flex md:items-center text-center justify-center">

                <input class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="submit" value="Facturer">
              </div>
            </div>
            </div>
          </div>
        </div>
    </form>

    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

    <!-- The dialog -->
    <div id="dialog" class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
        <h1 id="modalTitle" class="text-xl  text-center">Envoyer un fichier</h1>
        <form id="modalForm" method="POST" action="/upload" enctype="multipart/form-data">
            @csrf
            <div className="w-4/5">
                <select id="entreprise" choices-select="" name="entreprise" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    <option value="Bennys">Benny's</option>
                    <option value="EMS">Pillbox Hospital</option>
                    <option value="LSPD">LSPD</option>
                    <option value="Restaurant">Emerald Bar</option>
                    <option value="Ron">Ron Petroleum</option>
                    <option value="Taxi">Downtown Cab Co.</option>
                    <option value="Vignoble">Vignoble</option>
                    <option value="Weazel">Weazel News</option>
                </select>
            </div>
            <div className="w-4/5">
                <select id="type" choices-select="" name="type" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    <option value="factures">Venant d'un prestataire</option>
                    <option value="livraisons">Vers un prestataire</option>
                </select>
            </div>
            <input type="file" name="pdf" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
            <input type="text" name="details" placeholder="Nom du fichier" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
            <div class="flex justify-center">
                <input class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="submit" value="Envoyer">
                <input id="close" class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-600 to-red-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="button" value="Fermer">
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

        var uploadFile = document.getElementById('uploadFile');
        uploadFile.addEventListener('click', function () {
            openModal();
        });


        function openModal() {
            dialog.classList.remove('hidden');
            overlay.classList.remove('hidden');
        }

        // hide the overlay and the dialog
        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    </script>


    <!-- Javascript code -->
    <script>
        const input = document.querySelector("input");
        const log = document.getElementById("values");
        const contrat = document.getElementById("contrat");
        let allPrice = {}

        input.addEventListener("input", updateValue);

        function updateValue(product, price) {
          let finalPrice = 0

          if (contrat.checked) {
            finalPrice = parseInt(price.split("/")[1])
          } else {
            finalPrice = parseInt(price.split("/")[0])
            console.log(finalPrice)
          }
          let total = 0;
          let productTotal = finalPrice * document.getElementsByName(product)[0].value

          document.getElementById(product).innerHTML = productTotal + " $"
          allPrice[product] = productTotal

          Object.entries(allPrice).forEach(([key, value]) => {
            total += value
          });

          document.getElementById("total").innerHTML = total + " $"
        }

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
