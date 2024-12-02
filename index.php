<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tanvir Shaikat">
    <meta name="email" content="ta.shaikat@gmail.com">
    <meta name="description" content="CT Laravel Follow-up Skills Test V2">
    <title>CT Laravel Follow-up Skills Test V2</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom_style.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h1 class="text-center text-uppercase mb-5 fw-bold headtext">Product Page</h1>
    <h3 class="mb-3 mt-5">Add Product</h3>
    <form class="row" id="productForm">
        <div class="mb-3 col-md-5 col-sm-12">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="product_name" placeholder="Enter Product Name" required>
        </div>
        <div class="mb-3 col-md-2 col-sm-12">
            <label for="quantityInStock" class="form-label">Quantity in Stock</label>
            <input type="number" class="form-control" id="quantityInStock" name="quantity_in_stock" placeholder="Enter Quantity" required>
        </div>
        <div class="mb-3 col-md-2 col-sm-12">
            <label for="pricePerItem" class="form-label">Price per Item</label>
            <input type="number" class="form-control" id="pricePerItem" name="price_per_item" placeholder="Enter Price" required>
        </div>
        <div class="mb-3 col-md-3 col-sm-12">
            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
        </div>
        
    </form>

    <h3 class="mt-5 mb-3">Product Data</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity in Stock</th>
                    <th>Price per Item</th>
                    <th>Datetime Submitted</th>
                    <th>Total Value</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <!-- Prodyct data will be available here via ajax -->
            </tbody>
            <tfoot class="fw-bold">
                <tr>
                    <td colspan="4">Total Value:</td>
                    <td id="totalValue">0</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<footer>
    <div class="container">
        <div class="d-flex mt-5 mb-5 footer-area">
            <p>CT Laravel Follow-up Skills Test V2</p> |
            <a target="_blank" href="https://github.com/tanvirshaikat/CT-Laravel-Follow-up-Skills-Test-V2">Github Repository</a>
        </div>
    </div>
</footer>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/ajax.js"></script>
</body>
</html>