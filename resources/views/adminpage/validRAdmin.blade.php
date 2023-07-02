@extends('adminpage.app')


@section('content')


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width: 800px;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width: 800px;">
                <div class="card-body ml-2" style="width: 800px;">
                  <h4 class="card-title">Reseration  Status</h4>
                  <p class="card-description">
                    Queries <code>Received</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Client</th>
                          <th>Service type.</th>
                          <th>Date Reserved</th>
                          <th>D prise</th>
                          <th>D remise</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                          <td>{{$row->utilisateur_id}}</td>
                          <td>Bus Reservation</td>
                          <td>{{$row->date_reservation}}</td>
                          <td>{{$row->date_debut}}</td>
                          <td>{{$row->date_fin}}</td>
                          <td><a href="{{route('refusereserv',['numplaque'=>$row->numero_plaque])}}"><label class="badge badge-danger">Reject</label></a></td>
                          <td><a href="{{route('acceptreserv',['numplaque'=>$row->numero_plaque])}}"><label class="badge badge-success">Accept</label></a></td>
                        </tr>
                        @endforeach
                        <thead>
                        <tr>
                          <th>Terrain</th>
                          <th>Service type.</th>
                          <th>Date Reserved</th>
                          <th>H prise</th>
                          <th>H remise</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        @foreach($doto as $raw)
                         <tr>
                          <td>{{$raw->terrain_id}}</td>
                          <td>Terrain Reservation</td>
                          <td>{{$raw->jourdeprise}}</td>
                          <td>{{$raw->debut}}</td>
                          <td>{{$raw->fin}}</td>
                          <td><a href="{{route('refuseterrain',['id'=>$row->id])}}"><label class="badge badge-danger">Reject</label></a></td>
                          <td><label class="badge badge-success">Accept</label></td>
                        </tr>
                        @endforeach
                        <!--<tr>
                          <td>Abikum</td>
                          <td>Space Reservation</td>
                          <td>14 Febuary 2023</td>
                          <td><label class="badge badge-danger">Reject</label></td>
                          <td><label class="badge badge-success">Accept</label></td>
                        </tr>
                        <tr>
                          <td>Semengue</td>
                          <td>Adert Space Reservation</td>
                          <td>16 march 2023</td>
                          <td><label class="badge badge-danger">Reject</label></td>
                          <td><label class="badge badge-success">Accept</label></td>
                        </tr>
                        <tr>
                          <td>Job</td>
                          <td>Bus Reservation</td>
                          <td>1 April 2023</td>
                          <a href="http://"> <td><label class="badge badge-danger">Pending</label></td></a>
                          <a href="http://"><td><label class="badge badge-success">Accept</label></td></a>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
       

        @endsection
        