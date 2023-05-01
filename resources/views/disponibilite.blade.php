<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row) 

                    <td><img src="{{asset('photovehicule/'.$row->photo)}}" alt="" style="width:100px;"></td>
                    
                    <td>{{$row->numero_plaque}}</td>
                    
                    <td>Lundi-Samedi de 7H30 a 16H30</td>
                
            @endforeach

            </tbody>
    </table>
</body>
</html>