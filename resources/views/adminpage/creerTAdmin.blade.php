@extends('adminpage.app')


@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row" style="margin-left: 250px;width: 1000px;">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card mr-5" >
                <div class="card-body">
                  <h4 class="card-title text-center">Create New Space </h4>
                  <p class="card-description text-center">
                    Fill in the form to create a new School Useable Space
                  </p>
                      @if($message= Session::get('success'))
                        <div class="message">
                            {{$message}}
                        </div>
                      @endif
                  <form class="forms-sample" action="{{route('insertterrain')}}" method="POST" id="terrain" enctype="multipart/form-data">
                  @csrf 
                  <div class="form-group">
                      <label for="exampleInputUsername1">Type of Space </label>
                      <input type="text" class="form-control" name="type" id="exampleInputUsername1" placeholder="Sport"required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Dimension  </label>
                      <input type="text" class="form-control" name="dimension" id="exampleInputEmail1" placeholder="24 25 " required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Location  </label>
                      <input type="text" class="form-control" name="emplacement" id="exampleInputPassword1" placeholder="Behind Amphi 502" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Space Image</label>
                      <input type="file" class="form-control" name="phototerrain" id="exampleInputConfirmPassword1" placeholder="Browse for image" required>
                    </div>
                    <div class="btn text-center" >
                      <button type="submit" class="btn btn-primary mr-2">Create</button>
                      <button class="btn btn-light text-center">Cancel</button>
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