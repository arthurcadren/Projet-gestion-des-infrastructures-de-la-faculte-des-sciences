@extends('adminpage.app')


@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row" style="margin-left: 250px;width: 1000px;">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card mr-5" >
                <div class="card-body">
                  <h4 class="card-title text-center">Create New Class Room</h4>
                  <p class="card-description text-center">
                    Fill in the form to create a new class Room
                  </p>
                        @if($message= Session::get('success'))
                            <div class="message">
                                {{$message}}
                            </div>
                        @endif
                  <form class="forms-sample" action="{{route('insertdata')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Class Room Name</label>
                      <input type="text" class="form-control" name="noms" id="exampleInputUsername1" placeholder="Amphi 350" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Capacity </label>
                      <input type="number" class="form-control" name="capacite" id="exampleInputEmail1" placeholder="200 " required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Location Description</label>
                      <input type="text" class="form-control" name="emplacement" id="exampleInputPassword1" placeholder="Opposite computer department" required>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Class Image</label>
                      <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Browse for image">
                    </div> -->
                    <div class="btn text-center" >
                      <button type="submit" class="btn btn-primary mr-2">Create</button>
                      <button class="btn btn-light">Cancel</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <!--  -->
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @endsection