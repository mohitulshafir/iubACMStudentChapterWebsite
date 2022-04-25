<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Join IUB ACM SC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/regstyle.css">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body oncontextmenu="return false">
    <!--Preloader File-->
    <div class="spinner-wrapper">
        <div class="spinner"></div>
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    {{-- Preloader File End --}}

    <div class="wrapper" style="background-image: url('images/imgIUB.png');">
        <div class="inner">
            <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session()->has('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
                <br>
                <p style="text-align:center;"><img src="images/favicon2.png" alt="Logo"></p> <br>
                <h3>Membership Registration</h3>
                <div class="form-group">

                    <div class="form-wrapper">
                        <label for="">Full Name:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account-o"></i>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Email:</label>
                        <div class="form-holder">
                            <i style="font-style: normal; font-size: 15px;">@</i>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        @foreach ($errors->get('email') as $error)
                            <span class="help-block">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Phone:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-phone"></i>
                            <input type="text" class="form-control" name="phone" minlength="11" maxlength="11"
                                placeholder="01XXXXXXXXX" required>
                        </div>
                        @foreach ($errors->get('phone') as $error)
                            <span class="help-block">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="form-wrapper">
                        <label for="">Date of Birth:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar-alt"></i>
                            <input type="date" name="dob" class="form-control" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Student ID:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-n-1-square"></i>
                            <input type="text" class="form-control" name="studentID" minlength="7" maxlength="7"
                                placeholder="XXXXXXX" required>
                        </div>
                        @foreach ($errors->get('studentID') as $error)
                            <span class="help-block">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="form-wrapper">
                        <label for="">Department:</label>
                        <div class="form-holder select">
                            <select id="department" name="department" class="form-control" required>
                                <option value="" selected disabled>Select Department</option>
                                <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                <option value="Computer Engineering">Computer Engineering</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Electrical & Electronic Engineering">Electrical & Electronic Engineering
                                </option>
                                <option value="BBA">BBA</option>
                                <option value="Other">Other</option>
                            </select>
                            <i class="zmdi zmdi-view-carousel"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Gender:</label>
                        <div class="form-holder select">
                            <select id="gender" name="gender" class="form-control" required>
                                <option selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <i class="zmdi zmdi-face"></i>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Address:</label>
                        <div class="form-holder">
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin"></i>
                                <input name="address" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Facebook URL:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-facebook"></i>
                            <input name="fbURL" type="text" class="form-control" required>
                        </div>
                        @foreach ($errors->get('fbURL') as $error)
                            <span class="help-block">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="form-wrapper">
                        <label for="">How did you hear about IUB ACM SC?</label>
                        <div class="form-holder select">
                            <select name="hearAbout" id="hearAbout" class="form-control" required>
                                <option value="" selected disabled>Select</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Suggestion through Teacher">Suggestion through Teacher</option>
                                <option value="Suggestion through Friends">Suggestion through Friends</option>
                            </select>
                            <i class="zmdi zmdi-search-replace"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Field of Interest:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-comment-edit"></i>
                            <textarea name="interest" class="form-control" id="expectation"
                                placeholder="Exm: Web Development, Content Writing etc."></textarea>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Your expectation from IUB ACM SC?</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-comment-edit"></i>
                            <textarea name="expectation" class="form-control" id="expectation" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-end">
                    <!-- Upload image input-->
                    <div class="form-wrapper">
                        <label for="">Upload your Image (Max 300KB)</label>
                        <div class="form-holder">
                            <input type="file" name="image" accept="image/*">
                        </div>
                        <br>
                        @foreach ($errors->get('image') as $error)
                            <span class="help-block">{{ $error }}</span>
                        @endforeach
                    </div>


                    <div class="button-holder float-right">
                        <button>Register Now</button>
                    </div>
                    <br>
                </div>
                <input type="button" class="btn btn-primary" value="Back to Home" onclick=" relocate_home()">
            </form>
              
            
        </div>
    </div>

    {{-- Preloader --}}
    <script>
        $(document).ready(function() {
            //Preloader
            preloaderFadeOutTime = 500;

            function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                preloader.fadeOut(preloaderFadeOutTime);
            }
            hidePreloader();
        });
    </script>
    {{-- Preloader End --}}

    <script>
        function relocate_home()
        {
             location.href = "/";
        } 
    </script>

</body>

</html>
