<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('insertuser')}}" method="post">
        @csrf
        <input type="text" name="noms" id="" placeholder="user name" required>
        <input type="text" name="matricule" id="" placeholder="matricule" required>
        <input type="email" name="email" id="" placeholder="mail ex:azerty@gmail.com" required>
        <input type="submit" value="envoyer">
    </form>
    

</body>
</html>