
<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Starter</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">







    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>

        </ul>



            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->





        <!-- Right navbar links -->
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <!-- Navbar Search -->--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="navbar-search" href="#" role="button">--}}
{{--                    <i class="fas fa-search"></i>--}}
{{--                </a>--}}
{{--                <div class="navbar-search-block">--}}
{{--                    <form class="form-inline">--}}
{{--                        <div class="input-group input-group-sm">--}}
{{--                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button class="btn btn-navbar" type="submit">--}}
{{--                                    <i class="fas fa-search"></i>--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">--}}
{{--                                    <i class="fas fa-times"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </li>--}}

            <!-- Messages Dropdown Menu -->
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-comments"></i>--}}
{{--                    <span class="badge badge-danger navbar-badge">3</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="data:image/jpeg;base64,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" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Brad Diesel--}}
{{--                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">Call me whenever you can...</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="http://www.mygeektime.com/wp-content/uploads/2016/10/Make-Your-Life-Easy-With-Some-Simple-Tips.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    John Pierce--}}
{{--                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">I got your message bro</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="data:image/jpeg;base64,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" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Nora Silvester--}}
{{--                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">The subject goes here</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <!-- Notifications Dropdown Menu -->--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-bell"></i>--}}
{{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <span class="dropdown-header">15 Notifications</span>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--                        <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                        <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--                        <span class="float-right text-muted text-sm">2 days</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="fullscreen" href="#" role="button">--}}
{{--                    <i class="fas fa-expand-arrows-alt"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
{{--                    <i class="fas fa-th-large"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
            </svg>
            <span class="brand-text font-weight-light">Language Schools</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel pb-4 mb-1 d-flex">

{{--                <div class="image">--}}
{{--                    <img style="height:40px" src="https://media.istockphoto.com/photos/woman-writing-in-a-tablet-pc-at-home-picture-id811318964?k=6&m=811318964&s=170667a&w=0&h=4X30a_5Lq30w1DzFY_44ua1fYeUVtVPE5QVL7YpGagQ=" class="img-circle elevation-2" alt="User Image">--}}
{{--                </div>--}}

                <li class="nav-link " style ="z-index:200">

                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>

                    <a style ="z-index:200" id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>


            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="students" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('teachers')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teacher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Event</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('payments')}}" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('courses')}}" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Course</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('books')}}" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Book</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('exams')}} " class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('calender')}}" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>
                                        Calendar
                                        <span class="badge badge-info right"></span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('chartjs')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Charts
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link ">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">--}}
{{--                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>--}}
{{--                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>--}}
{{--                                    </svg>--}}
{{--                                    <p>--}}
{{--                                        User Profile--}}
{{--                                         <span class="badge badge-info right"></span>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>


{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <!-- <i class="nav-icon fas fa-th"></i> -->--}}
{{--                            <i class="nav-icon fab fa-airbnb"></i>--}}
{{--                            <p>--}}
{{--                                Simple Link--}}
{{--                                <span class="right badge badge-danger">New</span>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <br/>


                    <div text-center>

                     <div class="col-sm-6 text-info">
                         <h1 class="m-0">Welcom to the  Language Schools</h1>
                         <br/>
                     </div><!-- /.col -->
                        <br/>

                     <img style="height:375px " src="https://dlinq.middcreate.net/wp-content/uploads/2021/05/languageSchoolsHeader.png">
                    </div>
                    <br/>
                    <br/>
                    <div class="content">

                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card" style="width: 45rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                                            <p class="card-text"> Welcome Language Schools faculty! This page provides a range of resources for creating hybrid and fully online courses, from resources for getting started with Canvas, to specific recommendations for language teaching, to opportunities to dive deeper into the theory and practice of research-based online course design.

                                                Unsure who to contact for what at Middlebury? The list at right provides details and contact info for different departments.
                                                </p>

                                        </div>
                                    </div>

                                    <br/>
                                    <br/>

                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h5 class="m-0">FEATURED RESOURCES</h5>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">CAMP DESIGN ONLINE</h5>

                                            <p class="card-text">
                                                Camp Design Online provides a self-paced, asynchronous learning experience for learning about research-based practices for designing online, hybrid, and flexible learning environments. Camp Design will introduce you to key online and hybrid learning design approaches, and provides opportunities for you to apply what you’re learning to the design of your own course.
                                            </p>

                                        </div>
                                        <div class="card  text-black">
                                            <img src="https://dlinq.middcreate.net/wp-content/uploads/2020/05/brooke-cagle-w475s9ZhD4I-unsplash-scaled-e1588606065683-400x256.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title">A LEARNING COMMUNITY FOR BRINGING COURSES ONLINE</h5>
                                                <p class="card-text">As much of education moves toward a future that blends digital and in-person learning in flexible ways, we invite you to join us for Camp Design Online. During camp, we’ll work together to create online, hybrid, and flexible learning environments, guided by research-based practices for good online learning design.</p>
                                                <p class="card-text">Last updated 3 mins ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-lg-6">
                                    <div class="card-group">
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <div class="card">
                                            <img src="https://dlinq.middcreate.net/wp-content/uploads/2017/11/kristopher-roller-188180.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Critical Thinking in Language Teaching: A Rumination</h5>
                                                <p class="card-text">Having spent a series of jam-packed days last week at Music City Center in Nashville at the annual convention of the American Council on the Teaching of Foreign Languages (ACTFL) with over 7,000 language educators, I find myself several days later back in Vermont quietly reexamining some of the buzz that crossed my path in Tennessee.

                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="https://dlinq.middcreate.net/wp-content/uploads/2018/04/Screen-Shot-2018-04-16-at-5.40.51-PM.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Designing for Hindi Language Learning</h5>
                                                <p class="card-text">It all started about a year ago in Amy Collier’s office. Around a small, round table sat four people: Amy, myself, the Director of Middlebury’s School in India Vinita Tripathi, and Middlebury’s Assistant Director of International Programs Bill Mayers. Bill and I had just wrapped up work together on an exciting language-learning site for Middlebury’s School in Morocco.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="https://dlinq.middcreate.net/wp-content/uploads/2019/08/grammargames.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">French Grammar Games (for Grammar Geeks)</h5>
                                                <p class="card-text">This month, Professor Brigitte Humbert and I wrap up a months-long collaboration to create and develop an online, digital language-learning grammar game collection for students of French called French Grammar Games. Initially, the games site was intended only to complement a full course site Brigitte has been developing for several years in Canvas; </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card mb-3" style="max-width: 800px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQUwAMinak2-ug2MzYyvyKCk87sXgEjwk2krvtmyILrK0p9EwwgCYgcYtDcKYLJn_BGD8&usqp=CAU" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Language courses for adults
                                                    </h5>
                                                    <p class="card-text">offers the right program for you. You can choose from face-to-face lessons at our local centers or e-learning options for busy schedules and individual needs.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
{{--                  <div class="col-sm-6">--}}
{{--                        <br/>--}}
{{--                        <br/>--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                           <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                           <li class="breadcrumb-item active">Starter Page</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}



                    <div class="col-12 col-sm-6 col-md-3">
                        <br/>
                        <br/>
                        <br/>

                        <!-- /.info-box -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <br/>
                        <br/>
                        <br/>
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></span>

                            <div class="info-box-content">
                                <span class="info-box-text">address</span>
                                <span class="info-box-number">
 Sheikh Mohammed bin Rashid Blvd ·</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <br/>
                        <br/>
                        <br/>
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Phone</span>
                                <span class="info-box-number">569857421</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>






                </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->



        </div>
        <!-- /.content-header -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
{{--    <footer class="main-footer">--}}
{{--        <!-- To the right -->--}}
{{--        <div class="float-right d-none d-sm-inline">--}}
{{--            Anything you want--}}
{{--        </div>--}}
{{--        <!-- Default to the left -->--}}
{{--        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.--}}
{{--    </footer>--}}
</div>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
