@extends('adminpage.app')


@section('content')


<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width: 800px;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width: 800px;">
                <div class="card-body ml-2" style="width: 800px;">
                  <h4 class="card-title">Liste des Salles</h4>
                  <p class="card-description">
                    Queries <code>Received</code>
                  </p> 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nom Salle</th>
                          <th>Capacite</th>
                          <!-- <th>Emplacement</th> -->
                          <!-- <th>Action</th> -->
                        </tr>
                      </thead>
                      <tbody>
                     

                      @foreach($salles as $row)
                        <tr>
                          <td>{{$row->nomSalle}}</td>
                          <td>{{$row->capacite}}</td>
                          <!-- <td>{{$row->emplacement}}</td> -->
                          <td><a href="{{route('vinfoSalle',['nomSalle'=>$row->nomSalle])}}"><label class="badge badge-success">Voir</label></a></td>
                          <td><a href="{{route('deletesalle',['nomSalle'=>$row->nomSalle])}}"><label class="badge badge-danger">Delete</label></a></td>
                          <td><a href="{{route('updatedata',['nomSalle'=>$row->nomSalle])}}"><label class="badge badge-success">Update</label></a></td>
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