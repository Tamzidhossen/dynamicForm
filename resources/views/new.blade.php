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

    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Add Items</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST" id="add-form">
                            <div id="show-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="product_name[]" class="form-control" placeholder="Item Name" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="product_price[]" class="form-control" placeholder="Item Price" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="product_qty[]" class="form-control" placeholder="Item Quantity" required>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-success add-item-btn">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Add" class="btn btn-primary w-25" id="add-btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.add-item-btn').click(function(event){
                event.preventDefault();
                $('#show-item').prepend(`<div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="product_name[]" class="form-control" placeholder="Item Name" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="product_price[]" class="form-control" placeholder="Item Price" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="product_qty[]" class="form-control" placeholder="Item Quantity" required>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-danger remove-item-btn">Delete</button>
                                    </div>
                                </div>`)
            })
        });
        // $(document).ready(function(){
        //     $('#add-btn').click(function(){
        //         alert();
        //     })
        // })
        // $('#add-btn').click(function(){
        //     alert('hello');
        // })
    </script>
</body>
</html>