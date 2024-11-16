<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
    <div class="row my-4">
        <div class="col-lg-11 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Table</h3>
                </div>
                <div class="card-body p-4">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Roll</th>
                            <th>Registation No</th>
                            <th>Board Name</th>
                        </tr>
                        @for ($i=0; $i<5; $i++)
                        <tr>
                            <td><input type="number" class="col-md-2 form-control" placeholder="Enter Id"></td>
                            <td><input type="number" class="col-md-2 form-control" placeholder="Enter Roll"></td>
                            <td><input type="text" class="col-md-2 form-control" placeholder="Enter Name"></td>
                            <td><input type="text" class="col-md-2 form-control" placeholder="Enter Board"></td>
                        </tr>
                        @endfor
                        
                    </table>
                    <div class="mb-3">
                        <button class="btn btn-success">Submit</button>
                        <a href="" class="col-md-1 btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>