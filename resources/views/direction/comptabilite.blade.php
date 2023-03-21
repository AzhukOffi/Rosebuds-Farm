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
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Popper -->
    <!-- Main Styling -->
    <link href="{{ url('css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    <link href="{{ url('css/full-softUI.css') }}" rel="stylesheet" />
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
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Comptabilité</li>            </ol>
          </nav>
          </div>
        </div>
      </nav>
      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/5">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Chiffre d'affaire</p>
                    <h5 class="mb-0 font-bold">
                      $ {{ number_format($ca, 0, ',', ' ') }}
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-green-400">
                    <i class="ni leading-none ni-bold-up text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/5">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Dépenses</p>
                    <h5 class="mb-0 font-bold">
                      $ {{ number_format($depenses, 0, ',', ' ') }}
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-red-700 to-red-400">
                      <i class="ni leading-none ni-bold-down text-lg relative top-4 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/5">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="flex-auto p-4">
                      <div class="flex flex-row -mx-3">
                          <div class="flex-none w-2/3 max-w-full px-3">
                              <div>
                                  <p class="mb-0 font-sans font-semibold leading-normal text-sm">Notes de frais</p>
                                  <h5 class="mb-0 font-bold">
                                      $ {{ number_format($noteDeFrais, 0, ',', ' ') }}
                                  </h5>
                              </div>
                          </div>
                          <div class="px-3 text-right basis-1/3">
                              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-red-700 to-red-400">
                                  <i class="ni leading-none ni-bold-down text-lg relative top-4 text-white"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/5">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Bénéfices</p>
                    <h5 class="mb-0 font-bold">
                      $ {{ number_format(($ca - $depenses), 0, ',', ' ') }}
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  @if ($ca - $depenses >= 0)
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-green-400">
                      <i class="ni leading-none ni-bold-up text-lg relative top-3.5 text-white"></i>
                    </div>
                  @else
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-red-700 to-red-400">
                        <i class="ni leading-none ni-bold-down text-lg relative top-4 text-white"></i>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/5">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Coffre</p>
                    <h5 class="mb-0 font-bold">
                        $ {{ number_format($compta[0]->bankEnd + ($ca - $depenses), 0, ',', ' ') }}
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  @if ($ca - $depenses >= 0)
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-green-400">
                      <i class="ni leading-none ni-bold-up text-lg relative top-3.5 text-white"></i>
                    </div>
                  @else
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-red-700 to-red-400">
                        <i class="ni leading-none ni-bold-down text-lg relative top-4 text-white"></i>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="w-full max-w-full">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl mt-2 bg-clip-border">
                <h6 style="font-size: 120%" class="mb-0 mt-5 ml-4 font-bold capitalize">Livre des comptes</h6>
                <div id="comptes" class="table-responsive">
                </div>
            </div>
        </div>
        <div class="w-full max-w-full">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl mt-2 bg-clip-border">
                <h6 style="font-size: 120%" class="mb-0 mt-5 ml-4 font-bold capitalize">Notes de frais</h6>
                <div id="frais" class="table-responsive">
                </div>
            </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
      <script>

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

        const livreDesComptes = prepareComptes();
        const notesDeFrais = prepareFrais();


          new simpleDatatables.DataTable("#comptes", {
              searchable: true,
              data: livreDesComptes,
              fixedHeight: true,
              classes: classes
          });

        new simpleDatatables.DataTable("#frais", {
            searchable: true,
            data: notesDeFrais,
            fixedHeight: true,
            classes: classes
        });




        function prepareComptes() {
          dataObject = JSON.parse('{{ $comptes }}'.replace(/&quot;/g, '"'));
          if (dataObject.length === 0) return {
              headings: [],
              data: []
          };
          let obj = {
            headings: ["", "Employé", "Type", "Montant", "Détails", "Date"],
            data: []
          };

          const len = dataObject.length;
          let date = new Date().toLocaleDateString('fr-FR')

          for (let i = 0; i < len; i++) {
              date = new Date(dataObject[i]["timestamp"])

              obj.data[i] = [];
              obj.data[i].push('<span class="material-symbols-rounded text-gray-800">' + JSON.parse(dataObject[i]["meta"].replace(/&#039;/g, '"'))["icon"] + "</span>");
              obj.data[i].push('<b>' + dataObject[i]["user"] + '</b>');
              obj.data[i].push(dataObject[i]["name"]);
              obj.data[i].push(dataObject[i]["montant"]);
              obj.data[i].push(dataObject[i]["details"].replace("&#039;", "'"));
              obj.data[i].push(('0' + date.getDate()).slice(-2) + "/" + ('0' + date.getMonth()).slice(-2) + " - " + ('0' + date.getHours()).slice(-2) + ":" + ('0' + date.getMinutes()).slice(-2));
          }

          obj["data"] = obj["data"].reverse();

          return obj
        }
        function prepareFrais() {
              dataObject = JSON.parse('{{ $noteDeFraisDetails }}'.replace(/&quot;/g, '"'));
              console.log(dataObject);
              if (dataObject.length === 0) return {
                  headings: [],
                  data: []
              };
              let frais = {
                  headings: ["Employé", "Motif", "Montant", "Date"],
                  data: []
              };

              const len = dataObject.length;
              let date = new Date().toLocaleDateString('fr-FR')

              for (let i = 0; i < len; i++) {
                  date = new Date(dataObject[i]["timestamp"])

                  frais.data[i] = [];
                  frais.data[i].push('<b>' + dataObject[i]["user"] + '</b>');
                  frais.data[i].push(dataObject[i]["type"]);
                  frais.data[i].push(dataObject[i]["montant"]);
                  frais.data[i].push(('0' + date.getDate()).slice(-2) + "/" + ('0' + date.getMonth()).slice(-2) + " - " + ('0' + date.getHours()).slice(-2) + ":" + ('0' + date.getMinutes()).slice(-2));
              }

            frais["data"] = frais["data"].reverse();

              return frais;
          }


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
