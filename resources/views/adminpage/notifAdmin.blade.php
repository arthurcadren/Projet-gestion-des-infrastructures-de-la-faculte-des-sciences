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
                        <form action="{{route('envoyer-message')}}" method="post">
                            @csrf
                                <textarea name="notif" id="" cols="30" rows="10"></textarea><br>
                                <td><button type="submit" class="badge badge-success">Envoyer</button></td>

                        </form>
                    
                  </div>

                </div>
              </div>
            </div>
            
          </div>
        </div>


@endsection