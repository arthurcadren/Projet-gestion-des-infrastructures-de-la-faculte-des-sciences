@extends('adminpage.app')


@section('content')


<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width: 800px;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width: 800px;">
                <div class="card-body ml-2" style="width: 800px;">
               
                  <h4 class="card-title">Emploie de temps Salle</h4>
                  
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
                          <th>Heure</th>
                          <th>Nom Salle</th>
                          <th>jour</th>
                          <th>Evenement</th>
                          <th>filiere</th>
                          <th>Nom Event</th>
                          <th>Niveau</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                          <td>{{$row->tempsdebut}} <br> {{$row->tempsfin}}</td>
                          <td>{{$row->nomSalle}}</td>
                          <td>{{$row->Date}}</td>
                          <td>{{$row->evenement}}</td>
                          <td>{{$row->filiere}}</td>
                          <td>{{$row->nomevent}}</td>
                          <td>{{$row->niveau}}</td>


                          <td><a href="{{route('deleteevent',['Date'=>$row->Date,'nomevent'=>$row->nomevent,'tempsdebut'=>$row->tempsdebut,'tempsfin'=>$row->tempsfin]) }}"><label class="badge badge-danger">Delete</label></a></td>
                          <td><a href="{{route('updateevent',['nomevent'=>$row->nomevent])}}"><label class="badge badge-success">Update</label></a></td>
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