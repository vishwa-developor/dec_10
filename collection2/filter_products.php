<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

               

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Filter Products</h4>
                    </div>
                    <div class="card-body">

                        <form action="FP-Backend.php" method="POST">
                            
                            <div class="from-group mb-3">
                                <label for="">Category</label>
                                <select name="category" class="form-control">
                                    <option value="Electronics">Electronics</option>
                                    <option value="Mobiles">Mobiles</option>
                                    <option value="Food">Food</option>
                                    <option value="Wearables">Wearables</option>
                                    <option value="TV">TV</option>
                                    <option value="Stationery">Stationery</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="filter_by_category" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <form action="FP-Backend.php" method="POST">
                            
                            <div class="from-group mb-3">
                                <label for="">Damaged</label>
                                <select name="damaged" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="filter_by_damaged" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <form action="FP-Backend.php" method="POST">
                            
                            <div class="from-group mb-3">
                                <label for="">Perishable</label>
                                <select name="perishable" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="filter_by_perishable" class="btn btn-primary">Search</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>