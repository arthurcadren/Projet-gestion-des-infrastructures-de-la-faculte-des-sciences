  @extends('adminpage.app')


  @section('content')

  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 
                  <h3 class="font-weight-bold">Welcome {{$user->name}}</h3>
                 
                  <h6 class="font-weight-normal mb-0">All systems are running easily! <span class="text-primary"></span></h6><!-- smoothly You have  3 unread alerts!-->
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (3 April 2023)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="{{asset('template2/template/images/dashboard/infra.PNG')}}" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div style="margin-top: -30px;">
                        <h2 class="mb-0 font-weight-normal" ><i class="icon-sun mr-2" ></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal" style="margin-top: -40px;">Yaounde</h4>
                        <h6 class="font-weight-normal">Cameroon</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin transparent">

              <div class="row">
               <!-- <a href="{{route('listeVAdmin')}}"> -->

                <a class="col-md-6 mb-4 stretch-card transparent" href="{{route('listeVAdmin')}}">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Vehicles booked</p>
                      <p class="fs-30 mb-2">{{ $countv }}</p>
                      <p>15% (Last 30 days)</p>
                    </div>
                  </div>
                

                </a>
                

                <a class="col-md-6 mb-4 stretch-card transparent" href="{{route('listeCAdmin')}}">
                  <!-- <a href="{{route('listeCAdmin')}}"> -->
                  <div class="card card-dark-blue">
                    
                    <div class="card-body">
                      <p class="mb-4">Total Class Room Booked</p>
                      <p class="fs-30 mb-2">{{ $count }}</p>
                      <p>22% (Last 30 days)</p>
                    </div>
                    
                  </div>
                  <!-- </a> -->
                </a>
                
              
              </div>
              <div class="row">
                <a class="col-md-6 mb-4 mb-lg-0 stretch-card transparent" href="{{route('listeTAdmin')}}">
                    <!-- <a href="{{route('listeTAdmin')}}"> -->
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Space Booked</p>
                      <p class="fs-30 mb-2">{{ $countt }}</p>
                      <p>35% (Last 30 days)</p>
                    </div>
                  </div>
                      <!-- </a> -->

                </a>

                <a class="col-md-6 stretch-card transparent" href="{{route('validRAdmin')}}">
                
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Pending Reservations</p>
                      <p class="fs-30 mb-2">{{ $countRT }}</p>
                      <p>12% (Last 30 days)</p>
                    </div>
                  </div>
                

                </a>
              </div>
            </div>
          </div>
          
        </div>
   
        



  @endsection
     
      