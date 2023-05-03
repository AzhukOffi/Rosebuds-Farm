<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <style type="text/css">
        @import url("https://themes.googleusercontent.com/fonts/css?kit=dpiI8CyVsrzWsJLBFKehGpLhv3qFjX7dUn1mYxfCXhI");
        @font-face {
            font-family: 'Roboto';
            src: url({{ storage_path('fonts\Roboto.ttf') }}) format("truetype");
            font-weight: 400;
            font-style: normal;
        }
        body {
            margin: 5%;
        }
        h1 {
            display: inline;
            text-align: center;
        }

        h1, img {
            display: inline-block;
        }

        h2 {
            text-align: right;
        }
        img {
            width: 40%;
            height: auto;
            vertical-align:middle;
            float: right;
        }

        .roboto {
            font-family: 'Roboto', sans-serif;
        }

        .adress {
            top: 15%;
            position: absolute;
            right: 5%;
            text-align: right;
            line-height: 15%;
            font-size: 110%;
        }

        .infos {
            margin-top: 30%;
            line-height: 25%;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table td,  .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #74952d;
            color: white;
        }

        .signature {
            border: 2px solid;
            border-color: black;
            width: 50%;
            height: 50%;
            line-height: 20%;
        }

        .total {
            right: 5%;
            text-align: right;
            line-height: 15%;
            font-size: 110%;
        }

        .footer {
            margin-top: 10%;
            width: 100%;
            display: inline-block;
        }

    </style>
</head>
<body>
    <div>
        <h1 class="roboto">Bon de livraison</h1>
        <img src="data:image/png;base64,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" alt="" />
    </div>
    <div class="adress roboto">
        <h3>Rosebud’s Farms</h3>
        <h4>2000-2001 Union Road</h4>
        <h4>Grapeseed, Los Plantos</h4>
    </div>
    <div class="roboto infos">
        <p><b>Date :</b> {{ $date }}</p><br>
        <p><b>Livré à :</b> {{ $to }}</p>
        <p><b>Rédigé par :</b> {{ $from }}</p>
    </div>
    <table class="table roboto">
        <thead>
            <th style="width: 20%">Quantité</th>
            <th>Produits</th>
            <th style="width: 25%">Prix</th>
        </thead>
        <tbody>
            @for($i = 0; $i < count($quantity); $i++)
                <tr>
                    <td style="text-align: center;">{{ $quantity[$i] }}</td>
                    <td style="text-align: left;">{{ $products[$i] }}</td>
                    <td style="text-align: right;">{{ $price[$i] }} $</td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div class="footer">
        <h3 class="roboto total">Total : {{ $total }} $</h3>
        <div class="signature roboto">
            <h3 style="text-align: center;">Signature</h3>
        </div>
    </div>

</body>
</html>
