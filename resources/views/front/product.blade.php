<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    ini title nya gaes {{$title}}
<br>
<button class="btn btn-primary mb-2">Add Product</button>
<table class="table table-dark table-responsive">
    <tr>
        <th>category</th>
        <th>product</th>
        <th>description</th>
        <th>image</th>
        <th>price</th>
        <th>stock</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    @foreach ($res_product as $item )
    <tr>
        <td>{{$item->category}}</td>
        <td>{{$item->product}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->stock}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
    </tr>
    @endforeach
</table>
    

</body>
</html>