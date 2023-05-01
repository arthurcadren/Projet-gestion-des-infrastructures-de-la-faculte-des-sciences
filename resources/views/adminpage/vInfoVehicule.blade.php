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
                            
                            <p><img src="{{asset('photovehicule/'.$data->photo)}}" style="width: 350px;" alt=""></p>
                            <label for="">N plaque: </label>
                            <input type="text" value="{{$data->numero_plaque}}" name="" id=""><br>
                            <label for="">Modele:   </label>
                            <input type="text" value="{{$data->modele}}" name="" id=""><br>
                            <label for="">Couleur:  </label>
                            <input type="text" value="{{$data->couleur}}" name="" id=""><br>
                            <label for="">Marque:   </label> 
                            <input type="text" value="{{$data->marque}}" name="" id=""><br>
                            <label for="">Annee:    </label> 
                            <input type="text" value="{{$data->annee}}" name="" id="" selected>
                            
                    
                  </div>

                </div>
              </div>
            </div>
            
          </div>
        </div>


@endsection