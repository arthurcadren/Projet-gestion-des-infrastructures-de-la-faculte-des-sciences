@extends('adminpage.app')


@section('content')
      
      
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row" style="margin-left: 250px;width: 1000px;">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card mr-5" >
                <div class="card-body">
                  <h4 class="card-title text-center">Create New School Bus</h4>
                  <p class="card-description text-center">
                    Fill in the form to create a new School Bus
                  </p>

                  @if($message= Session::get('success'))
                      <div class="message">
                          {{$message}}
                      </div>
                  @endif
                  <form class="forms-sample" action="/updatevoiturevrai/{{$data->numero_plaque}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Vehicle Brand</label>
                      <input type="text" class="form-control" name="marque" id="exampleInputUsername1" value="{{$data->marque}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Vehicle Model </label>
                      <input type="text" class="form-control" name="modele" id="exampleInputEmail1" value="{{$data->modele}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Manufactures year </label>
                      <input type="text" class="form-control" name="annee" id="exampleInputPassword1" value="{{$data->annee}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Vehicle Color  </label>
                      <input type="text" class="form-control" name="couleur"  id="exampleInputPassword1" value="{{$data->couleur}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Vehicle Matricule number  </label>
                      <input type="text" class="form-control" name="num_plaque" id="exampleInputPassword1" value="{{$data->numero_plaque}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1"> Image</label>
                      <input type="file" class="form-control" name="photo" id="exampleInputConfirmPassword1" value="{{$data->photo}}" required>
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