<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Add new information of properties</h1>
        <form action="{{ url('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" name="file">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Owner</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="owner">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Unit</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="unit">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Bedroom</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="bedroom">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Bathroom</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="bathroom">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Car Parking</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="carparking">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">CCTV</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="cctv">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">address</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="address">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="price">
                </div>
            </div>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
            <a href="{{url('/view')}}" class="btn btn-danger">Back to view</a>
        </form>
    </div>

</body>
</html>