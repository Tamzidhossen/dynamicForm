<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic form Test</title>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-3">
        <div class="card shadow">
            <div class="mx-3 my-3">
                <button type="submit" id="addNew" class="btn btn-primary">Add New</button>
            </div>
            <div class="row">
                <div class="col-lg-10" id="form">
                    @if (session('succ'))
                        <div class="alert alert-success mx-3 mt-2">{{ session('succ') }}</div>
                    @endif
                    <form action="{{ route('dynamic.succ') }}" method="POST">
                        @csrf
                        <div class="card mx-3 mb-3 form-section">
                            <div class="card-header">
                                <span>Title</span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Brand Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title Name" required>
                                </div>
                                    <button type="button" id="addCommit" class="btn btn-primary ">Add Commit</button>
                                    <button type="button" id="removeCommit" class="btn btn-danger ">Remove Commit</button>
                                <div class="commit-section"></div>
                            </div>
                        </div>
                        <div class="mb-3 mx-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#addNew').click(function(){
                let newSection = $('.form-section:first').clone();
                newSection.find('input').val('');
                newSection.find('.commit-section').empty();
                $('#form').prepend(newSection);
            })

            $('#form').on('click', '#addCommit', function(){
                let commitSection = `<div class="row mt-3">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <span>Comment</span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Context Type</label>
                                    <input type="text" class="form-control" name="context" placeholder="Context Type">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">video Source Type</label>
                                    <input type="text" class="form-control" name="video" placeholder="Commit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                $(this).siblings('.commit-section').append(commitSection);
            })

            $('#form').on('click', '#removeCommit', function(){
                $(this).closest('.form-section').remove();
            })
        })
    </script>
</body>
</html>