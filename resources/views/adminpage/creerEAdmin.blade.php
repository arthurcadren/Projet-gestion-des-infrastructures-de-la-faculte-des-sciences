@extends('adminpage.app')


@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row" style="margin-left: -30px;width: 2000px;">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card mr-5" >
                <div class="card-body">
                  <h4 class="card-title text-center">Create New Class Room Event</h4>
                  <p class="card-description text-center">
                    Fill in the form to create a new class Room Event
                  </p>
                  @if($message= Session::get('success'))
                      <div class="message">
                          {{$message}}
                      </div>
                  @endif
                  <form class="forms-sample" action="{{route('insertevenement')}}" method="post">
                    @csrf
                    <div class="first" style="display: flex;">
                      <div class="form-group w-50">
                        <label for="exampleInputUsername1"> Day</label>
                        <!-- <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Monday" width="50%"> -->
                        <select name="jour" class="form-control" required>
                          <option selected hidden>Jour evenement</option>
                          <option value="Lundi" selected>Lundi</option>
                          <option value="Mardi">Mardi</option>
                          <option value="Mercredi">Mercredi</option>
                          <option value="Jeudi">Jeudi</option>
                          <option value="Vendredi">Vendredi</option>
                          <option value="Samedi">Samedi</option>
                        </select>
                      </div>
                      <div class="form-group w-50 ml-2">
                        <label for="exampleInputEmail1">Class </label>
                        <select name="salle" class="form-control" id="exampleInputEmail1" required>
                        @foreach($salles as $salle)
                          <option value="{{ $salle->nomSalle }}">{{ $salle->nomSalle }}</option>
                        @endforeach
                          <!-- <option selected hidden>ICT4D</option>
                          <option value="ICT4D">ICT4D</option>
                          <option value="Informatique">Informatique</option>
                          <option value="Mathematique">Mathematique</option>
                          <option value="Physique">Physique</option>
                          <option value="Aucune">Aucune</option> -->
                        </select>
                        <!-- <input type="text" class="form-control" name="salle" id="exampleInputEmail1" placeholder="Amphi 350 "> -->
                      </div>
                    </div>
                    <div class="second" style="display: flex;">
                      <div class="form-group w-50">
                        <label for="exampleInputPassword1">Event Type</label>
                        <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="SN" required> -->
                        <select name="type" id="" class="form-control" required>
                            <option selected hidden>Type evenement</option>
                            <option value="Cour">Cour</option>
                            <option value="CC">CC</option>
                            <option value="SN">SN</option>
                            <option value="TP">TP</option>
                            <option value="TD">TD</option>
                            <option value="Vide">Vide</option>
                            <option value="Administratif">Administratif</option>
                            <option value="Soutenance">Soutenance</option>
                        </select>
                      </div>
                      <div class="form-group w-50 ml-2">
                        <label for="exampleInputConfirmPassword1">Event Name</label>
                        <input type="text" class="form-control" name="nomevent" id="exampleInputConfirmPassword1" placeholder="Vide">
                      </div>
                    </div>

                    <div class="first" style="display: flex;">
                      <div class="form-group w-50">
                        <label for="exampleInputUsername1">Filiere</label>
                        <!-- <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ICTD4 " width="50%"> -->
                        <select name="filiere" class="form-control" required>
                          <option selected hidden>ICT4D</option>
                          <option value="ICT4D">ICT4D</option>
                          <option value="Informatique">Informatique</option>
                          <option value="Mathematique">Mathematique</option>
                          <option value="Physique">Physique</option>
                          <option value="Aucune">Aucune</option>

                        </select>
                      </div>
                      <div class="form-group w-50 ml-2">
                        <label for="exampleInputEmail1">level </label>
                        <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="L3 "> -->
                        <select name="niveau" class="form-control" required>
                          <option selected hidden>L3</option>
                          <option value="L1">L1</option>
                          <option value="L2">L2</option>
                          <option value="L3">L3</option>
                          <option value="M1">M1</option>
                          <option value="M2">M2</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="Administratif">Administatif</option>
                          <option value="Aucun">Aucun</option>
                        </select>
                      
                      </div>
                    </div>
                    <div class="second" style="display: flex;">
                      <div class="form-group w-50">
                        <label for="exampleInputPassword1">Start Time</label>
                        <input type="time" class="form-control" name="debut" id="exampleInputPassword1" placeholder="7:30">
                      </div>
                      <div class="form-group w-50 ml-2">
                        <label for="exampleInputConfirmPassword1">End Time </label>
                        <input type="time" class="form-control" name="fin" id="exampleInputConfirmPassword1" placeholder="9:30">
                      </div>
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