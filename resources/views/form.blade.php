<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Test</title>

    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- <style>
        .lan{
            width:40px;
            height:20px;
            margin-left:100%;
            margin-top:100px;
        }
    </style> --}}
</head>
<body>
    <div class="container my-4">
        <div class="col-lg-12 card shadow p-3">
            <div class="mb-3">
                <button type="submit" class="btn btn-info btn1">Add New</button>
            </div>
            <div class="middle">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card shadow">
                            <div class="card-header">
                                <span>Title</span>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Brand Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title Name">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-info" id="br-name">Add Commit</button>
                                    </div>
                                    <section class="brand pb-3">
                                        {{-- <div class="row">
                                            <div class="col-lg-10">
                                                <a href="" class=" border-0 lan"><i class="bi bi-x-square-fill"></i></a>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span>Comment</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Context Type</label>
                                                            <input type="text" class="form-control" placeholder="Context Type">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">video Source Type</label>
                                                            <input type="text" class="form-control" placeholder="Commit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 pt-3">
                <button class="btn btn-success">Submit</button>
                <a href="" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.btn1').click(function(event){
                event.preventDefault();
                $('.middle').prepend(`
                <div class="row pb-3">
                    <div class="col-lg-10">
                        <div class="card shadow">
                            <div class="card-header">
                                <span>Title</span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Brand Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title Name">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info" id="br-name">Add Commit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `)
            })
        });
        $(document).ready(function(){
            $('#br-name').click(function(event){
                event.preventDefault();
                $('.brand').prepend(`
                    <div class="row pb-3">
                        <div class="col-lg-10">
                            <div class="card shadow">
                                <div class="card-header">
                                    <span>Comment</span>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Context Type</label>
                                        <input type="text" class="form-control" placeholder="Context Type">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">video Source Type</label>
                                        <input type="text" class="form-control" placeholder="Commit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `)
            })
        });
    </script>
</body>
</html>