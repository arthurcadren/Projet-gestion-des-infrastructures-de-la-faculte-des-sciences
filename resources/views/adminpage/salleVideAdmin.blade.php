@extends('adminpage.app')


@section('content')
      <!-- partial -->
      <div class="main-panel"> 
        <div class="mt-5"> <p class="text-center font-weight-bold fs-1">Check for Empty Class Rooms </p>  
          <div class="forms" >


            <blockquote class="text-center">
              <p class="mb-0">Find an empty and quiet class room where you can study without beign diastracted.</p>
            </blockquote>
            <form action="{{route('showvideAdmin')}}">
            <div class="row ml-2">
              <div class="col-sm-11">
                <div class="form-group">
                  <label for="basic-url" class="form-label">Select Day</label>
                  <select class="selectpicker form-control" name="imputempty" data-width="85%" required>
                    <option selected hidden>Select day</option>
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
                  </select>
                </div>
              </div>
            </div>

            

          </div>
          <div class="col-md-12 text-center">
            <input type="submit" value="Go there Now" class="btn btn-primary">
            <!-- <button type="button" class="btn btn-primary ">Go there Now</button> -->
          </div>
        </div>

        </form>

        <!-- partial:../../partials/_footer.html -->
        @endsection