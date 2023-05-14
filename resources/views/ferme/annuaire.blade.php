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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include("ferme.nav")

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <div class="flex justify-center mt-5">
            <button onclick="openModal('', '', '', '', 'add')" id="addAnnuaire" data-toggle="modal" data-target="#import" type="button" class="inline-block  px-8 py-3 mb-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xl ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Ajouter</button>
        </div>
        <div class="grid place-items-center w-full min-h-[140px] bg-[#f8fafc] p-6 rounded-lg scroll-mt-48 overflow-x-scroll lg:overflow-visible">
            <div class="w-full max-w-full">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                    <div id="annuaire" class="table-responsive">


                    </div>
                </div>
            </div>
        </div>
        <!-- The dialog -->
        <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

        <div id="dialog" class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
            <h1 id="modalTitle" class="text-xl  text-center">Ajouter une personne</h1>
            <form id="modalForm" method="POST" action="/edit" enctype="multipart/form-data">
                @csrf
                <input type="text" id="form_name" name="name" placeholder="Prénom Nom" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                <input type="text" id="form_numero" name="numero" placeholder="Numéro de téléphone" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">

                <div className="w-4/5">
                    <select id="form_entreprise" choices-select="" name="entreprise" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <option value="Benny's">Benny's</option>
                        <option value="Pillbox Hospital">Pillbox Hospital</option>
                        <option value="LSPD">LSPD</option>
                        <option value="Emerald Bar">Emerald Bar</option>
                        <option value="Rosebud's Farm">Rosebud's Farm</option>
                        <option value="Ron Petroleum">Ron Petroleum</option>
                        <option value="Taxi">Taxi</option>
                        <option value="Vignoble">Vignoble</option>
                        <option value="Weazel News">Weazel News</option>
                        <option value="Inconnu">Inconnu / Intérim</option>
                        <option value="Criminel">Criminel</option>
                    </select>
                </div>
                <input type="text" id="form_details" name="details" placeholder="Détails" class="text-center focus:shadow-soft-primary-outline mt-4 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">

                <div class="flex justify-center">
                    <input class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="submit" value="Envoyer">
                    <input id="close" class="inline-block px-8 py-3 mt-4 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-600 to-red-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs" type="button" value="Fermer">
                </div>
            </form>
        </div>
      <!-- end cards -->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script>
        const convertedObject = convertObject(JSON.parse('{{ $annuaire }}'.replace(/&quot;/g, '"')));

        const classes = {
            bottom: "dataTable-bottom",
            container: "dataTable-container",
            cursor: "dataTable-cursor",
            dropdown: "dataTable-dropdown",
            empty: "dataTable-empty",
            headercontainer: "dataTable-headercontainer",
            info: "dataTable-info",
            input: "dataTable-input",
            loading: "dataTable-loading",
            pagination: "dataTable-pagination",
            paginationList: "dataTable-pagination-list",
            search: "dataTable-search",
            selector: "dataTable-selector",
            sorter: "dataTable-sorter",
            table: "table table-flush text-[#67748e] dataTable-table",
            top: "dataTable-top",
            wrapper: "dataTable-wrapper"
        };

        var dialog = document.getElementById('dialog');
        var form = document.getElementById('modalForm');
        var closeButton = document.getElementById('close');
        var modalTitle = document.getElementById('modalTitle');
        var modalInput = document.getElementById('modalInput');
        var overlay = document.getElementById('overlay');
        var focus = document.getElementsByClassName('bg-unfocus'), i;
        var form_name = document.getElementById('form_name')
        var form_numero = document.getElementById('form_numero')
        var form_details = document.getElementById('form_details')
        var form_entreprise = document.getElementById('form_entreprise')


        const dataTable = new simpleDatatables.DataTable("#annuaire", {
            searchable: true,
            data: convertedObject,
            fixedHeight: true,
            perPage: 20,
            perPageSelect: [10, 20, 30, 40, 50],
            classes: classes
        });

        function openModal(id, name, numero, entreprise, details, type) {
            if (type === "edit") {
                modalTitle.innerHTML = "Modifier l'annuaire";
                console.log(id)
                modalForm.action = "/editAnnuaire/" + id
                form_name.value = name.replace("&#039;", "'")
                form_numero.value = numero
                form_details.value = details
            } else {
                modalTitle.innerHTML = "Ajouter dans l'annuaire";
                modalForm.action = "/addAnnuaire"
                form_details.value = ""
                form_numero.value = "051-"
            }
            dialog.classList.remove('hidden');
            overlay.classList.remove('hidden');

            for (var i = 0, optionsLength = form_entreprise.options.length; i < optionsLength; i++) {
                if (form_entreprise.options[i].value == entreprise) {
                    form_entreprise.selectedIndex = i;
                    return true;
                }
            }
        }

        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });

        function convertObject(dataObject) {
            if (dataObject.length === 0) return {
                headings: [],
                data: []
            };

            let obj = {
                // Quickly get the headings
                headings: ["Nom", "Numéro", "Entreprise", "Détails", ""],

                // data array
                data: []
            };

            const len = dataObject.length;
            let date = new Date().toLocaleDateString('fr-FR')
            // Loop over the objects to get the values
            for (let i = 0; i < len; i++) {
                date = new Date(dataObject[i]["timestamp"])

                obj.data[i] = [];
                obj.data[i].push(dataObject[i]["name"].replace("&#039;", "'"));
                obj.data[i].push(dataObject[i]["numero"]);
                obj.data[i].push(dataObject[i]["entreprise"].replace("&#039;", "'"));
                obj.data[i].push(dataObject[i]["details"]);
                obj.data[i].push(`<div class="text-center"> <button id="person_${dataObject[i]['id']}" onclick="openModal('${dataObject[i]["id"]}', '${dataObject[i]["name"]}', '${dataObject[i]["numero"]}', '${dataObject[i]["entreprise"]}', '${dataObject[i]["details"]}', 'edit')" data-toggle="modal" data-target="#import" type="button" class="inline-block px-2 py-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"><span class="material-symbols-outlined">edit</span></button><a href="/removeAnnuaire/${dataObject[i]['id']}"><button type="button" class="inline-block bg-red-500 px-2 py-2 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"><span class="material-symbols-outlined">delete</span></button></a></div>`);
            }




            return obj
        };


    </script>
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
