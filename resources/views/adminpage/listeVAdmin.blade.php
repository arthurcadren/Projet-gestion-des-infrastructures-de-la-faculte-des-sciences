@extends('adminpage.app')


@section('content')


<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width: 800px;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width: 800px;">
                <div class="card-body ml-2" style="width: 800px;">
                  <h4 class="card-title">Liste des Vehicules</h4>
                  <p class="card-description">
                    Queries <code>Received</code>
                    

                    @if($message= Session::get('success'))
                        <div class="message">
                            {{$message}}
                        </div>
                    @endif


                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Num plaque</th>
                          <th>Modele</th>
                          <!-- <th>Couleur</th> -->
                          <th>Marque</th>
                          <!-- <th>Annee</th> -->
                          <th>photo</th>
                          <!-- <th>Action</th> -->
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($vehicules as $row)
                        <tr>
                          <td>{{$row->numero_plaque}}</td>
                          <td>{{$row->modele}}</td>
                          <!-- <td>{{$row->couleur}}</td> -->
                          <td>{{$row->marque}}</td>
                          <!-- <td>{{$row->annee}}</td> -->
                          <td><img src="{{asset('photovehicule/'.$row->photo)}}" style="width: 35px;" alt=""></td>
                          <td><a href="{{route('vinfoVehicule',['numplaque'=>$row->numero_plaque])}}"><label class="badge badge-success">Voir</label></a></td>

                          <td><a href="{{route('deletevoiture',['numplaque'=>$row->numero_plaque])}}"><label class="badge badge-danger">Delete</label></a></td>
                          <td><a href="{{route('updatevoiture',['numplaque'=>$row->numero_plaque])}}"><label class="badge badge-success">Update</label></a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>


@endsection