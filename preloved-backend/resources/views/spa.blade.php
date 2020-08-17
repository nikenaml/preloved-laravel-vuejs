<!DOCTYPE html>
<html class="has-aside-left has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico">
    <title>Allbrands Store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />







</head>

<body>
    <div id="app">
        <App></App>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>