<aside class= "green-nav max-w-62.5 max-height ease-nav-brand fixed inset-y-0 my-4 ml-2 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent bg-unfocus">
  <div class="h-19.5">
    <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
    <a class="block px-8 py-6 -0 text-sm whitespace-nowrap text-slate-700 flex justify-center" href="/">
      <img src="/img/RosebudsFull.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12" alt="main_logo" />
    </a>
  </div>
  <hr class="h-px mt-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
  <div class="items-center block w-auto max-height overflow-auto grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      @if (request()->is('direction'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/direction">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">home</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Accueil</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">home</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Accueil</span>
          </a>
        </li>
        @endif
        @if (request()->is('direction/comptabilite'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/direction/comptabilite">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">account_balance</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Comptabilité</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction/comptabilite">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">account_balance</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Comptabilité</span>
          </a>
        </li>
        @endif
        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Relations entreprises</h6>
        </li>
        @if (request()->is('direction/livraisons'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/direction/livraisons">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">local_shipping</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Bon de livraisons</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction/livraisons">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">local_shipping</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Bon de livraisons</span>
          </a>
        </li>
        @endif
        @if (request()->is('direction/factures'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/direction/factures">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">order_approve</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Factures</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction/factures">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">order_approve</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Factures</span>
          </a>
        </li>
        @endif
       <!-- @if (request()->is('direction/contrat'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/direction/contrat">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">edit_document</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Contrats</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction/contrat">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">edit_document</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Contrats</span>
          </a>
        </li>
        @endif-->
        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Gestion employés</h6>
        </li>
        @if (request()->is('direction/users'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/direction/users">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">group</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Employés</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction/users">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">group</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Employés</span>
          </a>
        </li>
        @endif
      <li class="w-full mt-4">
        <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60"></h6>
      </li>
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/">
          <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
            <span class="material-symbols-rounded text-gray-800">open_in_new</span>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Panel employé</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
