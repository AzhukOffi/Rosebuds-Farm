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
        <div class="max-w-full px-3 md:w-1/2 md:flex-none">
            <h6 class="mb-0 font-bold">Annuaire</h6>
        </div>
        <div class="grid place-items-center w-full min-h-[140px] bg-[#f8fafc] p-6 border border-blue-grey-50 rounded-lg scroll-mt-48 overflow-x-scroll lg:overflow-visible">
            <div class="w-full max-w-full">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                    <div id="annuaire" class="table-responsive">


                    </div>
                </div>
            </div>
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


        const dataTable = new simpleDatatables.DataTable("#annuaire", {
            searchable: true,
            data: convertedObject,
            fixedHeight: true,
            perPage: 20,
            perPageSelect: [10, 20, 30, 40, 50],
            classes: classes
        });

        function convertObject(dataObject) {
            if (dataObject.length === 0) return {
                headings: [],
                data: []
            };

            let obj = {
                // Quickly get the headings
                headings: ["Nom", "Numéro", "Entreprise", "Détails"],

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
                obj.data[i].push(dataObject[i]["entreprise"]);
                obj.data[i].push(dataObject[i]["details"]);
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
