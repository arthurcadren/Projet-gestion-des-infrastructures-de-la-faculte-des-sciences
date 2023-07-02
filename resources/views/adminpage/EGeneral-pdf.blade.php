<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Infrastructure Management</title>

    <title>Document</title>
</head>
<body>
    

<div class="table-responsive">
                    <table class="table" border=1>
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
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>


<!-- <table class="table" border=1>
  <thead>
    <tr>
      <th>Heure</th>
      <th>Nom Salle</th>
      <th>Jour</th>
      <th>Evenement</th>
      <th>Filiere</th>
      <th>Nom Event</th>
      <th>Niveau</th>
    </tr>
  </thead>
  <tbody>
    @php
        $lastSalle = '';
    @endphp
    @foreach($data as $row)
        @php
            // Check if current salle is same as lastSalle
            $isSameSalle = ($lastSalle == $row->nomSalle);
            // If not, echo the row with the salle and store new lastSalle
            if (!$isSameSalle) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td>".$row->nomSalle."</td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "</tr>";
            }
        @endphp
        <tr>
          <td>{{$row->tempsdebut}} <br> {{$row->tempsfin}}</td>
          <td>@if (!$isSameSalle) {{$row->nomSalle}} @endif</td>
          <td>{{$row->Date}}</td>
          <td>{{$row->evenement}}</td>
          <td>{{$row->filiere}}</td>
          <td>{{$row->nomevent}}</td>
          <td>{{$row->niveau}}</td>
        </tr>
        @php
            // Update lastSalle
            $lastSalle = $row->nomSalle;
        @endphp
    @endforeach
  </tbody>
</table> -->







</body>
</html>