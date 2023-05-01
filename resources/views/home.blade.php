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
                     <a href="{{route('auth')}}"> 
                        <a class="nav-link" href="{{route('auth2')}}">Services</a>
                     </a>
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

      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital">Welcome to<br>Campus Infrastructure<br> Manager</h1>
                     <div class="btn_main">
                        <div class="more_bt"><a href="{{route('contact')}}">Contact us</a></div>
                        <div class="contact_bt active"><a href="{{route('services')}}">book now</a></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">We<br>Make Your<br>Dream Home</h1>
                     <div class="btn_main">
                        <div class="more_bt"><a href="{{route('contact')}}">Contact us</a></div>
                        <div class="contact_bt active"><a href="{{route('services')}}">book now</a></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">With<br>the best<br>Resources </h1>
                     <div class="btn_main">
                        <div class="more_bt"><a href="{{route('contact')}}">Contact us</a></div>
                        <div class="contact_bt active"><a href="{{route('services')}}">book Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-left"><img src="images/left-icon.png"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-right"><img src="images/right-icon.png"></i>
            </a>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_main">
                     <div class="about_taital">About Us</div>
                     <p class="about_text">It is a long established fact that the university of yaounde1 is on of the 
                        best in central africa. Offering one of the best training in education and computer science in
                        particular, the faculty of science has taken an extra step to digitalize her Infrastructure management.
                     </p>
                     <div class="about_bt"><a href="{{route('about')}}">About More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="images/rec.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
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
                        <div class="box_left_one">
                           <!-- <div class="image_1"><img src="images/imageclasse.jpg"></div> -->
                        </div>
                        <div class="box_right_one">
                           <div class="icon_1"><img src="images/classRoom.png"><span class="padding_left_10">ClassRoom Reservation</span></div>
                           <p class="long_text">Make your conferences and meeting can take up more successful! </p>
                        </div>
                     </div>
                     <div class="see_bt"><a href="{{route('services')}}">See More</a></div>
                  </div>
                  <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><img src="images/busIcon.png"><span class="padding_left_10">Bus  Reservation</span></div>
                           <p class="long_text"> You can also have access to our school buses for your precoius events. </p>
                        </div>
                     </div>
                     <div class="see_bt"><a href="{{route('services')}}">See More</a></div>
                  </div>
                  <div class="box_right">
                     <div class="box_left_main">
                        <div class="box_right_one">
                           <div class="icon_1"><img src="images/fieldIcon.png"><span class="padding_left_10">Space  Reservaton</span></div>
                           <p class="long_text">Our different sport spaces and open air spaces are also available. </p>
                        </div>
                        <!-- <div class="box_left_one">
                           <div class="image_2"><img src="images/sport.jpg"></div>
                        </div> -->
                     </div>
                     <div class="see_bt"><a href="{{route('services')}}">See More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- project section start -->
      <!-- <div class="project_section layout_padding">
         <div class="container">
            <h1 class="project_taital">Latest Projects</h1>
            <div class="project_menu">
               <ul>
                  <li class="active"><a href="#">All</a></li>
                  <li><a href="#">Building</a></li>
                  <li><a href="#">Commercial</a></li>
                  <li><a href="#">Interior Design</a></li>
                  <li><a href="#">Residential</a></li>
               </ul>
            </div>
         </div>
         <div class="project_section_2 layout_padding">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div><img src="images/img-3.png" class="image_3"></div>
                  </div>
                  <div class="col-sm-3">
                     <div><img src="images/img-4.png" class="image_3"></div>
                  </div>
                  <div class="col-sm-3">
                     <div><img src="images/img-5.png" class="image_3"></div>
                  </div>
                  <div class="col-sm-3">
                     <div><img src="images/img-6.png" class="image_3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- project section end -->
      <!-- philosophy section start -->
      <div class="philosophy_section layout_padding">
         <div class="container">
            <h1 class="philosophy_taital">Why Us</h1>
            <p class="philosophy_text">Our services are premuim and best because of the following</p>
         </div>
         <div class="philosophy_section_2 layout_padding">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 padding_0">
                     <div class="philosophy_box_main">
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">01</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Quick in Response</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">02</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Satisfaction Guarantee</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">03</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Clean & Vantillated class rooms</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">04</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Large and diverse sport fields</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">05</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Affordable Prices </h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 padding_0">
                     <div class="image_7"><img src="images/img-7.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- philosophy section end -->
      <!-- project section start -->
      <div class="project_section_3 layout_padding">
         <div class="container">
            <h1 class="project_taital">A gleams of our resources qualities</h1>
            <p class="philosophy_text">Our beautiful, nice and clean resources can bloom your event</p>
         </div>
         <div class="project_section_2 layout_padding">
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
      <!-- project section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Get In Touch</h1>
         </div>
         <div class="contact_section_2 layout_padding">
            <div class="container">
               <div class="mail_section">
                  <div class="row">
                     <div class="col-md-6">
                        <input type="" class="input_text" placeholder="Name" name="Name" required>
                     </div>
                     <div class="col-md-6">
                        <input type="" class="input_text" placeholder="Email" name="Email" required>
                     </div>
                  </div>
                  <input type="" class="input_text" placeholder="Phone Number" name="Phone Number" required>
                  <textarea name="comment" class="massage_box" form="usrform">Message</textarea>
                  <div class="send_bt">
                     <div class="send_text"><a href="#">SEND</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- newslatter section start -->
      <div class="newslatter_section layout_padding">
         <div class="container">
            <div class="newslatter_main">
               <h1 class="looking_text">Did not find what am looking for! Get to us for your worries.</h1>
               <div class="quote_bt"><a href="#">Get in touch</a></div>
            </div>
         </div>
      </div>
      <!-- newslatter section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">What our clients say! </h1>
            <p class="client_text"> You might want to be convince by the testimonies of our satisfied clients? They have used it, enjoyed it and testify about it. </p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client1.png"></div>
                              <h4 class="henrry_name">Abikum Atum</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/arth.png"></div>
                              <h4 class="henrry_name">Abikum Atum</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client3.png"></div>
                              <h4 class="henrry_name">Abikum Atum</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It was a mind blowing experience, discovering that even in our Africa, we can have good services at vey affordable prices. I mean the cleaniness, comfort was just it.  </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client2.png"></div>
                              <h4 class="henrry_name">Abikum Atum</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
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
                                <li><a href="{{route('about')}}">Institution</a></li>
                                <li><a href="{{route('about')}}">Team</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('auth2')}}">Services</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
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
      <script src="{{asset('template/js/jquery.min.js')}}"></script>
      <script src="{{asset('template/js/popper.min.js')}}"></script>
      <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('template/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('template/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('template/js/owl.carousel.js')}}"></script>
      <script src="{{asset('template/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('template/https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('template/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
   </body>
</html>