<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="/img/favicon.png" />
        <title>{{ config('app.name'); }}</title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Main Styling -->
        <link href="{{ url('css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    </head>
    <body class="h-full green-nav">
        <div class="relative w-full p-4 align-middle items-center inline-block text-center">
            <form action="/signPDF/{{ $id }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Prénom et nom"
                       class="align-middle inline-block focus:shadow-soft-primary-outline w-1/5 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"/>
                <button type="submit" class="align-middle inline-block px-3 py-3 ml-8 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Signer</button>

            </form>
        </div>
        <embed src="{{ route('pdf', ['id' => $id]) }}" type="application/pdf" class="h-full w-full m-0" style="height: 90vh">
    </body>
</html>




