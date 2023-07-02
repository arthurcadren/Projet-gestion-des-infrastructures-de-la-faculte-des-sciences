@extends('adminpage.app')


@section('content')


<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width: 800px;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width: 800px;">
                <div class="card-body ml-2" style="width: 800px;">
                  <h4 class="card-title">List of fields</h4>
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
                          <th>identifier</th>
                          <th>type</th>
                          <th>size</th>
                          <!-- <th>Emplacement</th> -->
                          <th>photo</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($terrains as $row)
                        <tr>
                          <td>{{$row->id}}</td>
                          <td>{{$row->type}}</td>
                          <td>{{$row->dimension}}</td>
                          <!-- <td>{{$row->emplacement}}</td> -->
                          <td><img src="{{asset('phototerrain/'.$row->phototerrain)}}" style="width: 35px;" alt=""></td>
                          <td><a href="{{route('vinfoTerrain',['phototerrain'=>$row->phototerrain])}}"><label class="badge badge-success">Voir</label></a></td>
                          <td><a href="{{route('deleteterrain',['id'=>$row->id])}}"><label class="badge badge-danger">Delete</label></a></td>
                          <td><a href="{{route('updateterrain',['phototerrain'=>$row->phototerrain])}}"><label class="badge badge-success">Update</label></a></td>
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