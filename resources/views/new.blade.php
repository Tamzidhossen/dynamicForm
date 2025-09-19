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
    <div class="container my-4">
        <div class="card shadow p-3">
            <div class="mb-3">
                <button type="button" id="btn" class="btn btn-primary">Add New</button>
            </div>
            <form id="form">
                <div class="mb-3 form-section">
                    <div class="mb-3">
                        <label class="form-label">commit</label>
                        <input type="text" class="form-control" placeholder="Enter Your Commit">
                    </div>
                    <button type="button" class="btn btn-primary addCommit">Commit</button>
                    <button type="button" class="btn btn-danger removeCommit">Delete</button>
                    <div class="new-section"></div>
                </div>
                <div class="mb-3">
                    <button type="submit" id="btn" class="btn btn-success">Submit</button>
                    <button type="#" id="btn" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btn').click(function () { 
                let addSection = $('.form-section:first').clone();
                $('#form').prepend(addSection);
            });

            $('#form').on('click', 'addCommit', function(){
                let addNew = `
                    <div class="card mt-2 p-3">
                        <label>Comment</label>
                        <input type="text" class="form-control mb-2" name="comment[]" placeholder="Comment">
                        <label>Context Type</label>
                        <input type="text" class="form-control mb-2" name="contextType[]" placeholder="Context Type">
                        <label>Video Source Type</label>
                        <input type="text" class="form-control mb-2" name="videoSourceType[]" placeholder="Video Source Type">
                        <button type="button" class="btn btn-danger remove-commit mt-2">Remove Commit</button>
                    </div>
                `;
                $(this).siblings('.new-section').append(addNew);
            });

            $('#form').on('click', '.removeCommit', function () {
                $(this).closest('.form-section').remove();
            });
        });
    </script>
</body>
</html>