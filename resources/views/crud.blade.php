<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Crud Project By sql query Builder</title>
</head>

<body>

    <div class="container-fluid">
        <h1>Crud Project :</h1>
        <div class="row">
            <div class="col-4">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name='name' class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" name='city' class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" name='phone' class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name='submit' value='1' class="btn btn-primary">Submit</button>
                </form>

                @if (session()->has('status'))
                    <br>
                    <h4 class="alert-info">{{session('status')}}</h4>
                @endif

            </div>
            <div class="col-8">
                <div class="students-data">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Phone</th>
                                <th rowspan="2" class="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($students))
                                @foreach ($students as $stu)
                                <tr>
                                    <td scope="row">{{$stu->id}}</td>
                                    <td>{{ $stu->name }}</td>
                                    <td>{{ $stu->city }}</td>
                                    <td>{{ $stu->phone }}</td>
                                    <td><a class="btn btn-info" href="#">Edit</a></td>
                                    <td><a class="btn btn-danger" href="#">Delete</a></td>
                                </tr>
                                @endforeach
                            @else 
                                <h4>Commerce student Table is Empty Pleas Insert Some Data.</h4>
                            @endif

                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
