<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Display</title>
</head>
<body>
   
    <div class="container">
    <h1>All information of properties</h1>
        <a href="{{url('/home')}}" class="btn btn-success">Add New</a>
        <table class="table table-striped table-hover text-center align-middle">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Owner</th>
                <th scope="col">Unit</th>
                <th scope="col">Bedroom</th>
                <th scope="col">Bathroom</th>
                <th scope="col">Car Parking</th>
                <th scope="col">CCTV</th>
                <th scope="col">Address</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $property)
                <tr>
                <td>{{$property->id}}</td>
                <td>
                    <img width="100" height="100" src="property/{{$property->image}}">
                </td>
                <td>{{$property->owner}}</td>
                <td>{{$property->unit}}</td>
                <td>{{$property->bedroom}}</td>
                <td>{{$property->bathroom}}</td>
                <td>{{$property->carparking}}</td>
                <td>{{$property->cctv}}</td>
                <td>{{$property->address}}</td>
                <td>{{$property->price}}</td>
                <td>
                    <a href="{{url('update',$property->id)}}"><i class="fas fa-file-edit"></i></a>
                    <a href="{{url('delete',$property->id)}}"> <i class="fas fa-trash-alt"></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>