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

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Popper -->
    <!-- Main Styling -->
    <link href="{{ url('css/noaccess.css') }}" rel="stylesheet" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
  <div id="notfound">
      <div class="notfound">
          <div class="notfound-404">
              <h1>
                  <span style="font-size: 100%" class="material-symbols-outlined">
                    cancel
                  </span>
              </h1>
          </div>
          <h2>Vous n'avez pas accès au site</h2>
          <p>Si vous êtes employé, contactez Connor Parker</p>
          <div class="notfound-social">
              <a href="/"><span class="material-symbols-outlined">home</span></a>
          </div>
      </div>
  </div>

  </body>

</html>
