<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .container{
            width: 800px;
            align:center;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Update property informations</h2>
        <form action="{{url('update_new',$property->id)}}" method="post" enctype="multipart/form-data">
        @csrf    
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Old Image</label>
                <div class="col-sm-10">
                    <img width="100" height="100" src="/property/{{$property->image}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Change Image</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" name="file">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Owner</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="owner" value="{{$property->owner}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Unit</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="unit" value="{{$property->unit}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Bedroom</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="bedroom" value="{{$property->bedroom}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Bathroom</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="bathroom" value="{{$property->bathroom}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Car Parking</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="carparking" value="{{$property->carparking}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">CCTV</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="cctv" value="{{$property->cctv}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">address</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="address" value="{{$property->address}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="price" value="{{$property->price}}">
                </div>
            </div>
            <button class="btn btn-success" type="submit" name="submit">Update</button>
            <a href="{{url('/view')}}" class="btn btn-danger">Cancel to update</a>
        </form>
    </div>
    
</body>
</html>