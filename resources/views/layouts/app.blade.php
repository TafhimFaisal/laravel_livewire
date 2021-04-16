
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Manage Book</title>
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @livewireStyles
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
  <script src="{{asset('/js/app.js')}}"></script>
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <livewire:partials.nav />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <livewire:partials.content-header :title="$title" />

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    {{$slot}}
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <livewire:partials.sidebar />

        <livewire:partials.footer />

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
