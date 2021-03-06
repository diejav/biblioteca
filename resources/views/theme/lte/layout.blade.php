<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'Biblioteca')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href='{{ asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}'>
    <!-- Ionicons -->
    <link rel="stylesheet" href='{{ asset("assets/$theme/plugins/ionicons/css/ionicons.min.css")}}'>
    <!-- Theme style -->
    <link rel="stylesheet" href='{{ asset("assets/$theme/dist/css/adminlte.min.css") }}'>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield("styles")

    <link rel="stylesheet" href='{{ asset("assets/css/custom.css") }}'>


</head>

<body class="hold-transition sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio Header -->
        @include("theme/$theme/header")
        <!-- Fin Header -->
        <!-- Inicio Aside -->
        @include("theme/$theme/aside")
        <!-- Fin Aside -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content">
                @yield('contenido')
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- Inicio Footer -->
        @include("theme/$theme/footer")
        <!-- Fin Footer -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src='{{ asset("assets/$theme/plugins/jquery/jquery.min.js") }}'></script>
    <!-- Bootstrap 4 -->
    <script src='{{ asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
    <!-- AdminLTE App -->
    <script src='{{ asset("assets/$theme/dist/js/adminlte.min.js") }}'></script>

    @yield("scriptsPlugins")

    <script src='{{ asset("assets/js/jquery-validation/jquery.validate.min.js") }}'></script>
    <script src='{{ asset("assets/js/jquery-validation/localization/messages_es_AR.min.js") }}'></script>
    <script src='{{ asset("assets/js/funciones.js") }}'></script>
    <!-- AdminLTE for demo purposes -->
    <!--<script src='{{ asset("assets/$theme/dist/js/demo.js") }}'></script>  -->

    @yield("scripts")
</body>

</html>