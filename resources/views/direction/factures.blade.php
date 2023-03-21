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
                        <a class="opacity-50 text-slate-700">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Direction</li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Accueil</li>
                </ol>
            </nav>
        </div>
        </div>
    </nav>
    <div class="flex flex-wrap -mx-3 columns-3 bg-white">
        <div class="w-full max-w-full px-3 lg:w-1/3 mt-3 lg:flex-none">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                            <h1 class="mb-0">Vignoble</h1>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-4 pb-0">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        @foreach($vignoble as $vignobleLine)
                            <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex flex-col">
                                    <h5 class="mb-1 font-bold leading-normal text-sm text-slate-700">{{ $vignobleLine->details }}</h5>
                                    <span class="leading-tight text-xs">#MV-{{ $vignobleLine->fileID }}</span>
                                </div>
                                <div class="flex items-center leading-normal text-sm">
                                    <a target="_blank" href="/pdf/factures/Vignoble/{{ $vignobleLine->fileID }}.pdf">
                                        <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700"><span class="material-symbols-outlined"> download </span></button>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-1/3 mt-3 lg:flex-none">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                            <h1 class="mb-0">Restaurant</h1>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-4 pb-0">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        @foreach($resto as $restoLine)
                            <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex flex-col">
                                    <h5 class="mb-1 font-bold leading-normal text-sm text-slate-700">{{ $restoLine->details }}</h5>
                                    <span class="leading-tight text-xs">#EB-{{ $restoLine->fileID }}</span>
                                </div>
                                <div class="flex items-center leading-normal text-sm">
                                    <a target="_blank" href="/pdf/factures/Restaurant/{{ $restoLine->fileID }}.pdf">
                                        <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700"><span class="material-symbols-outlined"> download </span></button>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-1/3 mt-3 lg:flex-none">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                            <h1 class="mb-0">Benny's</h1>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-4 pb-0">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        @foreach($bennys as $bennysLine)
                            <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex flex-col">
                                    <h5 class="mb-1 font-bold leading-normal text-sm text-slate-700">{{ $bennysLine->details }}</h5>
                                    <span class="leading-tight text-xs">#B-{{ $bennysLine->fileID }}</span>
                                </div>
                                <div class="flex items-center leading-normal text-sm">
                                    <a target="_blank" href="/pdf/factures/Bennys/{{ $bennysLine->fileID }}.pdf">
                                        <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700"><span class="material-symbols-outlined"> download </span></button>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full max-w-full px-3 lg:w-full mt-3 lg:flex-none">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                        <h1 class="mb-0">Autres</h1>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-4 pb-0">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                    @foreach($others as $othersLine)
                        <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
                            <div class="flex flex-col">
                                <h5 class="mb-1 font-bold leading-normal text-sm text-slate-700">{{ $livraisonsLine->Entreprise }} - {{ $othersLine->details }}</h5>
                                <span class="leading-tight text-xs">#{{ $othersLine->fileID }}</span>
                            </div>
                            <div class="flex items-center leading-normal text-sm">
                                <a target="_blank" href="/pdf/factures/{{ $othersLine->Entreprise }}/{{ $othersLine->fileID }}.pdf">
                                    <button class="inline-block px-0 py-3 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-soft-in bg-150 text-sm active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 text-slate-700"><span class="material-symbols-outlined"> download </span></button>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
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
