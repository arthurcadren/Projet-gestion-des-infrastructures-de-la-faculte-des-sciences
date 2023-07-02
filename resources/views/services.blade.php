<!DOCTYPE html>
<html lang="en">
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
                          </div>
                      </li>
                  </ul>
              <!-- </div> -->
            </nav>
         </div>
      </div>
      <!-- header section end --> 
      <!-- header section end --> 
      <!-- service section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="services_taital">Our Services</div>
            <p class="services_text">You can now book some of our resources or reserve others!</p>
         </div>
         <div class="services_section_2 layout_padding">
            <div class="container-fluid padding_0">
               <div class="box_main">
                  <div class="box_left">
                     <div class="box_left_main">
                        <!-- <div class="box_left_one">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div> -->
                        <div class="box_right_one">
                           <div class="icon_1"><img src="images/classRoom.png"><span class="padding_left_10">ClassRoom  Reservation</span></div>
                           <p class="long_text">make your conferences and meeting can take up more successful! </p>
                        </div>
                     </div>
                      <div class="see_bt"><a href="{{route('login3')}}">Go there</a></div><!-- #classroom-->
                  </div>
                  <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><img src="images/busIcon.png"><span class="padding_left_10">Bus  Reservation</span></div>
                           <p class="long_text">A good bus could be the blooming point!  </p>
                        </div>
                     </div>
                     <div class="see_bt"><a href="{{route('reserveVtest')}}">Go there</a></div><!-- #busresere-->
                  </div>
                  <div class="box_right">
                     <div class="box_left_main">
                        <div class="box_right_one">
                           <div class="icon_1"><img src="images/fieldIcon.png"><span class="padding_left_10">Space  Reservation</span></div>
                           <p class="long_text">Our different sport spaces and open air spaces are also available. </p>
                        </div>
                        <!-- <div class="box_left_one">
                           <div class="image_2"><img src="images/img-2.png"></div>
                        </div> -->
                     </div>
                     <div class="see_bt"><a href="{{route('reserveTtest')}}">Go there</a></div><!-- #sportresere-->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Class room reseration start -->
      <div class="project_section layout_padding" id="classrooms">
         <div class="container">
            <h1 class="project_taital">Class Room Reservation</h1>
            <div class="project_menu">
               <ul>
                  <li class="active"><a href="#">All</a></li>
                  <li><a href="#">Amphithaire</a></li>
                  <li><a href="#">Salle</a></li>
                  <li><a href="#">Bureau</a></li>
               </ul>
            </div>
         </div>
         <!-- service section end -->
         <div class="project_section_2 layout_padding" id="push-down">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div> 
      </div>
      <p style="color: #ffffff;">break</p></div> <br><br>
      <!-- Class room reseration end -->

      <!-- Bus reseration starts -->
      <div class="project_section layout_padding" id="busresere">
         <div class="container">
            <h1 class="project_taital">Bus Reservation</h1>
            <div class="project_menu">
               <ul>
                  <li class="active"><a href="#">All</a></li>
                  <li><a href="#">Capacity</a></li>
                  <li><a href="#">Model</a></li>
                  <li><a href="#">Department</a></li>
               </ul>
            </div>
         </div>
         
         <div class="project_section_2 layout_padding" id="push-down">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div> 
      </div>
      <!-- Bus reseration ends -->
      <p style="color: #ffffff;">break</p></div> <br><br>

      <!-- Sport Space Reseration start -->
    
      <div class="project_section layout_padding" id="sportresere">
         <div class="container">
            <h1 class="project_taital">Sport and Open Space Reservation</h1>
            <div class="project_menu">
               <ul>
                  <li class="active"><a href="#">All</a></li>
                  <li><a href="#">Advert Space</a></li>
                  <li><a href="#">Sport Fields</a></li>
                  <li><a href="#">Parking Space</a></li>
               </ul>
            </div>
         </div>
         
         <div class="project_section_2 layout_padding" id="push-down">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/conference.jpg" class="image_6">
                                 <h4 class="reader_text">Conference rooms <br>This the home of comfort</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/sports.jpg" class="image_6">
                                 <h4 class="reader_text">Sport Spaces <br>Makes the game enjoyable and spectacular</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/buses.jpg" class="image_6">
                                 <h4 class="reader_text">Travelling Buses <br>Not just spectacular but comfortable</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div> 
      </div>
      <p style="color: #ffffff;">break</p></div> <br><br>
      <!-- Sport Space Reseration  end -->
      
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/map-icon.png" class="image_main"><span class="padding_left_10">P.O BOX 253 Yaounde, Faculty of Science, university of yaounde1</span></a>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/call-icon.png" class="image_main"><span class="padding_left_10">(+237 674536338)</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/mail-icon.png" class="image_main"><span class="padding_left_10">ngwohfrancis@gmail.com</span></a></div>
               </div>
            </div>
         </div>

         <div class="footer-clean">
            <footer>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="services.html#classrooms">class room reseration</a></li>
                                <li><a href="services.html#busreseration">sport space reseration</a></li>
                                <li><a href="services.html#sportreseration">bus reseration</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="about.html">Institution</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                            <p class="copyright">university of Yaounde I © 2023</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2023 All Right Reserved By.<a href="#"> Faculty Science, UY1</p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </body>
</html>