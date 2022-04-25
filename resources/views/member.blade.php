<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IUB ACM Student Chapter</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon1.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    
  

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,500&amp;display=swap">
    <script src="https://kit.fontawesome.com/4bcea57b32.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <a href="#" class="logo me-auto me-lg-0"><img src="assets/img/ACM-LOGO-05.png" alt=""
                            class="img-fluid"></a>
                    {{-- <h1 class="logo me-auto me-lg-0"><a href="#">IUB ACM SC</a></h1> --}}

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto" href="/">Home</a></li>
                            <li class="dropdown"><a href="#"><span>About</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="">IUB ACM SC</a></li>
                                    <li><a href="http://www.cse.iub.edu.bd/" target="blank">IUB CSE</a></li>
                                    <li><a href="">Mission & Strategy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Team</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="/facultySponsor">Faculty Advisors</a></li>
                                    <li><a href="/exbody2021">Core Body</a></li>
                                    <li><a href="/exMember">Executive Body</a></li>
                                    <li class="dropdown"><a href="#"><span>Ex-Core Body</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="/exbody2019">Founding Panel</a></li>
                                            <li><a href="/exbody2020">Core Panel 2020</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto active" href="/member">Members</a></li>
                            <li><a class="nav-link scrollto " href="/roadmap">Event Roadmap</a></li>
                            <li><a class="nav-link scrollto " href="/memberRegistration">Join IUB ACM SC</a></li>
                            <li><a class="nav-link scrollto" href="/">Contact</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                    <!-- .navbar -->
                    <a href="/login" class="get-started-btn scrollto">Login</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <main id="main">
      <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    {{-- <br>
                    <img style="width: 200px; height: 200px" src="images/ACM-LOGO-05.png"" alt=""> --}}
                    <!-- Page Title -->
                    <h1 style="color: rgb(96, 96, 168)"
                        class="h1-responsive font-weight-bold text-center my-5 title-left ">IUB ACM SC MEMBERS</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">      
                    <div class="table-responsive p-3">  
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead class="thead-light">
                                <tr>
                                    <th># No</th>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Member Since</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($member as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->memberID }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->department }}</td>
                                        <td>{{ substr($item->created_at, 0, 10) }}</td>
                                        <td>
                                            <button type="button" value="{{ $item->email }}"
                                                class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target={{ '#exampleModal' . $loop->iteration }}
                                                data-whatever="@mdo">View</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    
    @foreach ($member as $item)
        <div class="modal fade" id={{ 'exampleModal' . $loop->iteration }} tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel"><b>{{ $item->name }}</b></h3>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <img style="width: 300px;height: 300px" src="/memberImage/{{ $item->email }}.jpg"
                                    alt="" class="rounded mx-auto d-block">
                            </div>
                            {{-- <div class="form-group">
                                <label for="message-text" class="col-form-label">Date of Birth (YYYY-MM-DD): </label>
                                {{ substr($item->dob, 0, 10) }} 
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Interest Area: </label>
                                {{ $item->interest }}
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Expectation from IUB ACM SC: </label>
                                {{ $item->expectation }}
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <img style="height: 150px; width: 150px;" src="assets/img/ACM-LOGO-05.png" alt="acmLogo">
            <h3>IUB ACM Student Chapter</h3>
            <p>THE INGENIOUS CLUB OF DEPARTMENT OF CSE, INDEPENDENT UNIVERSITY, BANGLADESH</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/iubacmsc" target="blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/iubacmsc/?hl=en" target="blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/company/iub-acm-student-chapter/mycompany/" target="blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script><strong><span> IUB ACM Student Chapter</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Mohitul Shafir</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Modal -->
  <script>
      $('#myModal').on('shown.bs.modal', function() {
          $('#myInput').trigger('focus')
      })
  </script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>
