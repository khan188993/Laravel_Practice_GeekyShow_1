<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud - Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center mt-5">Update Your Data:</h2>
        <div class="row">
            <div class="col-6 offset-3">
                <form method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name='name' value="{{$students->name}}" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" name='city' value="{{$students->city}}" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" name='phone' value="{{$students->phone}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name='submit' value='1' class="btn btn-primary">Submit</button>
                </form>

                @if (!empty($message))
                    <br>
                    <h4 class="alert-info">{{$message}}</h4>
                @endif

            </div>
        </div>
    </div>
</body>
</html>