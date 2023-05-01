@extends('adminpage.app')


@section('content')


<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="width: 800px;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width: 800px;">
                <div class="card-body ml-2" style="width: 800px;">
                  <h4 class="card-title">Message Notification</h4>
                  <p class="card-description">
                    Queries <code>Received</code>
                  </p>
                  <div class="table-responsive">
                        <form action="#" method="post">
                        </form>
                            
                            <label for="">Nom Salle: </label>
                            <input type="text" value="{{$data->nomSalle}}" name="" id=""><br>
                            <label for="">Type:   </label>
                            <input type="text" value="{{$data->capacite}}" name="" id=""><br>
                            <label for="">Dimension:  </label>
                            <input type="text" value="{{$data->emplacement}}" name="" id=""><br>
                          
                  </div>

                </div>
              </div>
            </div>
            
          </div>
        </div>


@endsection