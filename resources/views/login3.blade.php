<!-- <html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Infrastructure management facscience university of yaounde1</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/maincss/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/maincss/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('template/maincss/font-awesome.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('template/maincss/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('template/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="asset('template/maincss/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('template/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('template/maincss/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/maincss/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="images/infralogo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                     </li>
                     
                  </ul>
                  <div class="search_icon"><a href="{{route('services')}}">
                     <button class="book-btn">book now</button>
                  </a></div>
               </div>

               <!-- <div class="collapse navbar-collapse " id="navbarSupportedContent"> -->
                  <ul class="navbar-nav ml-auto navbar-right-top">
                      <li class="nav-item dropdown notification">
                          <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                          <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                              <li>
                                  <div class="notification-title"> Notification</div>
                                  <div class="notification-list">
                                      <div class="list-group">
                                          <a href="#" class="list-group-item list-group-item-action active">
                                              <div class="notification-info">
                                                  <div class="notification-list-user-img"><img src="https://img.icons8.com/office/100/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                  <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Hukonah</span>accepted your invitation to join the team.
                                                      <div class="notification-date">2 min ago</div>
                                                  </div>
                                              </div>
                                          </a>
                                          <a href="#" class="list-group-item list-group-item-action">
                                              <div class="notification-info">
                                                  <div class="notification-list-user-img"><img src="https://img.icons8.com/color/48/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                  <div class="notification-list-user-block"><span class="notification-list-user-name">John Sammy</span>updated the email address
                                                      <div class="notification-date">2 days ago</div>
                                                  </div>
                                              </div>
                                          </a>
                                          <a href="#" class="list-group-item list-group-item-action">
                                              <div class="notification-info">
                                                  <div class="notification-list-user-img"><img src="https://img.icons8.com/color/100/000000/name.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                  <div class="notification-list-user-block"><span class="notification-list-user-name">Kioh Samso</span> is watching your main repository
                                                      <div class="notification-date">2 min ago</div>
                                                  </div>
                                              </div>
                                          </a>
                                         
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-footer"> <a href="#">View all notifications</a></div>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown nav-user">
                          <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" class="user-avatar-md rounded-circle"></a>
                          <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                              <div class="nav-user-info">
                                  <h5 class="mb-0 text-white nav-user-name">Abikum</h5>
                                  <span class="status"></span><span class="ml-2">Connected</span>
                              </div>
                              <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                              <a class="dropdown-item" href="{{route('login')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                              <p>Don't have an account!</p> <a href="{{route('signup')}}">SignUp</a> 
                          </div>
                      </li>
                  </ul>
              <!-- </div> -->
            </nav>
         </div>
      </div>
      <!-- header section end --> 

    <section class="vh-100"  >
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
    
                <h3 class="mb-5">Sign in</h3>
            <form action="{{route('check3')}}" method="post">
                @csrf
                <div class="form-outline mb-2">
                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="name" id="name" required/>
                    <label class="form-label" for="typeEmailX-2">Noms</label>
                </div>
    
                <div class="form-outline mb-2">
                    <input type="text" id="typePasswordX-2" class="form-control form-control-lg" name="matricule" id="matricule" required/>
                    <label class="form-label" for="typePasswordX-2">Matricule</label>
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" required/>
                    <label class="form-check-label" for="form1Example3"> Remember Matricule </label>
                </div>
    
                <a href="{{route('home')}}">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" style="background-color: #021239;">Login</input>
                </a>
    
                <hr class="my-2">
            </form>
                <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                    type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                <!-- <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #021239;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->
                    <p>Don't have an account?</p><a href="{{route('signup')}}">sign Up</a>
    
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>