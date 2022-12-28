<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RHDL | Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../../../assets/css/stylesdashboard.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../../../../assets/css/trix.css">
        <script type="text/javascript" src="../../../../assets/js/trix.js"></script>
        <style>
            trix-toolbar [data-trix-button-group = "file-tools"]{
                display: none;
            }
        </style>
        {{-- Bootstrap CSS  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">   
    </head>
    <body class="sb-nav-fixed">
        @include('dashboard.layouts.header')
        <div id="layoutSidenav">
            @include('dashboard.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('container')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>    
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../../../assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../../../assets/demo/chart-area-demo.js"></script>
        <script src="../../../../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../../../assets/js/datatables-simple-demo.js"></script>
        <!--===============================================================================================-->	
        <script src="../../../../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../../../../assets/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
            window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(200, function(){
            $(this).remove(); 
        });
        }, 2000);
        </script>
    <!--===============================================================================================-->	
    </body>
</html>
