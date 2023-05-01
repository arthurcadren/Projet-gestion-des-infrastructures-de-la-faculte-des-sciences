@extends('adminpage.app')


@section('content')
      <!-- partial -->
      
      <div class="main-panel"> 
        <div class="mt-5"> <p class="text-center font-weight-bold fs-1">Consult Time Table </p>
          <div class="forms" >
          <form action="{{route('EGeneral')}}" enctype="multipart/form-data">
            <div class="row ml-2">
              <div class="col-sm-11">
                <div class="form-group">
                  <label for="basic-url" class="form-label">Your Department</label>
                  <select name="input1consult" class="selectpicker form-control" data-width="85%" required>
                    <option selected>Physics Departement</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Mathematique">Mathematique</option>
                    <option value="Physique">Physique</option>
                    <option value="Chimie">Chimie</option>
                    <option value="Administratif">Administratif</option>
                </select>
                </div>
              </div>
            </div>

            <div class="row ml-2">
              <div class="col-sm-11">
                <div class="form-group">
                  <label for="basic-url" class="form-label">Your Class</label>
                  <select name="input2consult" class="selectpicker form-control" id="exampleInputEmail1" data-width="85%" required>
                        @foreach($salles as $salle)
                          <option value="{{ $salle->nomSalle }}">{{ $salle->nomSalle }}</option>
                        @endforeach
                        </select>
                  <!-- <input type="text" class="selectpicker form-control" name="input2consult" placeholder="S005" data-width="85%" required> -->

                </div>
              </div>
            </div>

            <div class="row ml-2" >
              <div class="col-lg-11">
                <div class="form-group">
                  <label for="basic-url" class="form-label">Event Type</label>
                  <select class="selectpicker form-control" name="input3consult" data-width="85%" required>
                    <option value="Cour">Cour</option>
                    <option value="CC">CC</option>
                    <option value="SN">SN</option>
                    <option value="TP">TP</option>
                    <option value="TD">TD</option>
                    <option value="Administratif">Administratif</option>
                  </select>
                </div>
              </div>
            </div>
            
            
          </div>
          <div class="col-md-12 text-center">
            <input type="submit" value="Search" class="btn btn-primary">
            <!-- <button type="button" class="btn btn-primary ">Search</button> -->
          </div>
        </div>
        </form>  
        @endsection
        