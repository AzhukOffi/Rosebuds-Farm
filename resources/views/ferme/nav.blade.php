<!-- sidenav  -->
<aside class="z-100 green-nav max-w-62.5 max-height ease-nav-brand fixed inset-y-0 my-4 ml-2 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent bg-unfocus" id="navbar">
    <div class="h-19.5">
        <a onclick="closeNav()" class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden">
            <span onclick="closeNav()" class="material-symbols-outlined">
            close
            </span>
        </a>

        <a class="block px-8 py-6 -0 text-sm whitespace-nowrap text-slate-700 flex justify-center" href="/">
            <img src="img/RosebudsFull.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12" alt="main_logo" />
        </a>
    </div>
    <script>
        var navBar = document.getElementById('navbar').classList
        function openNav() {
            navBar.add("translate-x-0")
            navBar.add("shadow-soft-xl")
        }
        function closeNav() {
            console.log("test")
            navBar.remove("translate-x-0")
            navBar.remove("shadow-soft-xl")
        }
    </script>

    <hr class="h-px mt-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-height overflow-auto grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        @if (request()->is('/'))
        <li class="mt-2 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">home</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Accueil</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">home</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Accueil</span>
          </a>
        </li>
        @endif
        @if (request()->is('stock'))
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/stock">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">eco</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Stock</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/stock">
            <div class="green-nav-icon green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">eco</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Stock</span>
          </a>
        </li>
        @endif
        @if (request()->is('pointeuse'))
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/pointeuse">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">work_history</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pointeuse</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/pointeuse">
            <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">work_history</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pointeuse</span>
          </a>
        </li>
        @endif
        @if (request()->is('notes'))
            <li class="mt-0.5 w-full">
                <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/notes">
                    <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <span class="material-symbols-rounded text-white">request_quote</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Notes de frais</span>
                </a>
            </li>
        @else
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/notes">
                    <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
                        <span class="material-symbols-rounded text-gray-800">request_quote</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Notes de frais</span>
                </a>
            </li>
        @endif
        @if (request()->is('thé'))
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/thé">
            <div class="green-nav-icon bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">emoji_food_beverage</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Thés</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/thé">
            <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">emoji_food_beverage</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Thés</span>
          </a>
        </li>
        @endif
        @if (request()->is('vente'))
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/vente">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">storefront</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Supérettes / Farine</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/vente">
            <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">storefront</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Supérettes / Farine</span>
          </a>
        </li>
        @endif
        @if (request()->is('facturation'))
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/facturation">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">person</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Facturation client</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/facturation">
            <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">person</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Facturation client</span>
          </a>
        </li>
        @endif
        @if (Auth::user()->rankLevel >= 2)
          @if (request()->is('entreprise'))
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/entreprise">
              <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                  <span class="material-symbols-rounded text-white">factory</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Entreprise</span>
            </a>
          </li>
          @else
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/entreprise">
              <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
                <span class="material-symbols-rounded text-gray-800">factory</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Entreprise</span>
            </a>
          </li>
          @endif
        @endif
        @if (request()->is('comptes'))
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/comptes">
            <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-white">account_balance_wallet</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Livre des comptes</span>
          </a>
        </li>
        @else
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/comptes">
            <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
              <span class="material-symbols-rounded text-gray-800">account_balance_wallet</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Livre des comptes</span>
          </a>
        </li>
        @endif
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60"></h6>
            </li>
        @if (request()->is('annuaire'))
            <li class="mt-0.5 w-full mb-0">
                <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/annuaire">
                    <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <span class="material-symbols-rounded text-white">group</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Annuaire</span>
                </a>
            </li>
        @else
            <li class="mt-0.5 w-full mb-0">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"  href="/annuaire">
                    <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
                        <span class="material-symbols-rounded text-gray-800">group</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Annuaire</span>
                </a>
            </li>
        @endif
        @if (request()->is('documentation'))
            <li class="mt-0.5 w-full mb-0">
                <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors bg-unfocus" href="/documentation">
                    <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <span class="material-symbols-rounded text-white">question_mark</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Documentation</span>
                </a>
            </li>
        @else
            <li class="mt-0.5 w-full mb-0">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"  href="/documentation">
                    <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
                        <span class="material-symbols-rounded text-gray-800">question_mark</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Documentation</span>
                </a>
            </li>
        @endif
        @if (Auth::user()->rankLevel >= 4)
          <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60"></h6>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/direction">
              <div class="green-nav-icon shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5 bg-unfocus">
                <span class="material-symbols-rounded text-gray-800">open_in_new</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Panel direction</span>
            </a>
          </li>
        @endif

     </div>
</aside>
<li class="flex items-center pl-4 xl:hidden">
    <a onclick="openNav()" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500 mt-6 ml-2 w-2">
        <div class="w-4.5 overflow-hidden">
            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
        </div>
    </a>
</li>
  <!-- end sidenav -->
