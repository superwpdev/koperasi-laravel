<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<br>
<button class="btn btn-primary mb-2">Add Member</button>
<table class="table table-dark table-responsive">
    <tr>
        <th>name</th>
        <th>Addreess</th>
        <th>Telpon</th>
        <th>Email</th>
        <th>Status</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    @foreach ($res_member as $item )
    <tr>
        <td>{{$item->name}}</td>    
        <td>{{$item->address}}</td>
        <td>{{$item->telp}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
    </tr>
    @endforeach
</table>
    

</body>
</html>