@include('admin.includes.formLink')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election</title>

    <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}" type="text/css">

    {{--<link rel="stylesheet" href="{{asset('css/admin/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/admin/sb-admin-2.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap4.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/admin/datatables.min.css')}}">
    <link rel="stylesheet" src="{{asset('bootstrap-select/css/bootstrap-select.min.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
   

    {{-- <link rel="stylesheet" href="{{ asset('chosen/style.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.min.css') }}"> --}}
  
   
   
   <style>
        .border-dotted {
            border-style: dotted;
            border-width: 3px;
        }

        .dataTables_wrapper .dt-buttons {
            float: left;
            text-align: center;
            margin-left: 20px;
        }

        .bg-abasas-dark {

            background-color: #2a3f5c !important;
            color: #fff;

        }

        .adminTitle {
            font-size: 30px;
            text-transform: uppercase;
            font-family: 'Arial', Times, serif;
            font-style: normal;
            font-weight: 800;
            color: #2a3f5c !important;
            line-height: normal;
            text-align: center;
        }

        @media only screen and (min-width: 1920px) {
            .adminTitle {
                font-size: 45px;
            }
        }

        @media only screen and (min-width: 1600px) and (max-width: 1919px) {
            .adminTitle {
                font-size: 45px;
            }
        }

        @media only screen and (min-width: 1200px) and (max-width: 1599px) {
            .adminTitle {
                font-size: 40px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .adminTitle {
                font-size: 30px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .adminTitle {
                font-size: 25px;
            }
        }

        @media only screen and (max-width: 767px) {
            .adminTitle {
                font-size: 18px;
            }
        }

        @media only screen and (max-width: 576px) {
            .adminTitle {
                font-size: 15px;
            }
        }

    </style>



    <script src="{{asset('js/admin/jquery.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrapbundle.js')}}"></script>
    <script src="{{asset('js/admin/easing.min.js')}}"></script>
    <script src="{{asset('js/admin/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/admin/Chart.min.js')}}"></script>
    {{-- <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script> --}}
    <script src="{{asset('js/admin/datatables.min.js')}}"></script>
    {{-- <script src="{{asset('js/admin/dataTables.bootstrap4.min.js')}}"></script> --}}




    <script src="{{asset('js/abasas/app.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    {{-- <script src="{{asset('chosen/chosen.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('chosen/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('chosen/init.js') }}" type="text/javascript" charset="utf-8"></script>
     --}}
</head>


<body id="page-top">







    <!-- Page Wrapper -->
    <div id="wrapper">


        <x-sidebar />




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <x-navbar />

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-abasas-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <p>Developed By <a target="_blank" href="https://abasas.tech"> <span
                                    class="font-weight-bold text-success"> Abasas Technologies</span> </a>
                        </p>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->



    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    @yield('customJS')

    

</body>

</html>
