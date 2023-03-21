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
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Facturation client</li>
            </ol>
          </nav>
          </div>
        </div>
      </nav>

      @if($errors->any())
        <div class="relative w-full p-4 text-white bg-red-500 rounded-lg text-center">{{ $errors->first() }}</div>
      @endif
      
      <form method="POST" action="/facturer">
        @csrf 
        <div class="relative flex flex-col w-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border bg-white bg-unfocus mt-5 ">
          <div class="p-6 pb-0 mb-0 rounded-t-2xl">
            <h5>Facturation client</h5>
          </div>
            <div class="flex-auto px-0 pt-0 pb-2 columns-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Produit</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Prix Unitaire</th>
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
                          <p class="mb-0 font-semibold leading-tight text-xs">{{ $product->price }} $</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent m-auto text-center">
                          <input autocomplete=off oninput="updateValue('{{ $product->name }}', {{ $product->price }})" placeholder="Nombre de produits" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="{{ $product->name }}" type="number">
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
                          <input autocomplete=off oninput="updateValue('{{ $product->name }}', {{ $product->price }})" placeholder="Nombre de produits" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="{{ $product->name }}" type="number">
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                          <p class="mb-0 font-semibold leading-tight text-xs">{{ $product->price }} $</p>
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
                <input autocomplete=off type="text" name="client" list="annuaire" placeholder="Client" class="mt-2 focus:shadow-soft-primary-outline w-1/2 text-sm leading-5.6 ease-soft block text-center appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></input>
                <datalist id="annuaire">
                  @foreach($annuaire as $client)
                    <option value="{{ $client->name }}">{{ $client->name }}</option>
                  @endforeach
                </datalist>
              </div>
              <div class="md:flex md:items-center text-center justify-center">
                <input class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="submit" value="Facturer">
              </div>
            </div>
            </div>
          </div>
        </div>      
    </form>
      

    <!-- Javascript code -->
    <script>
        const input = document.querySelector("input");
        const log = document.getElementById("values");
        let allPrice = {}

        input.addEventListener("input", updateValue);

        function updateValue(product, price) {
          let total = 0;
          let productTotal = price * document.getElementsByName(product)[0].value
         
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
