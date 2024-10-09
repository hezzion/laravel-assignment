<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Brand Project</title>
    <!-- Link external CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content with Two Containers -->
    <div class="container-fluid">
        <div class="row" >
            <!-- Left Container (Product Images and Description) -->
            <div class="left-container col-6" style="border-color:black; padding:20px; margin:20px; background-color:#f4f4f4; border-radius: 10px;border: 3px solid #d4af37">
                <div class="latest-products-title">Our Latest Products</div>
                <div class="row mb-4">
                    <!-- Product Card Components -->
                    <x-product-card image="Product 1 (1).jpeg" name="Submariner" />
                    <x-product-card image="Product 2.jpeg" name="Daytona" />
                    <x-product-card image="Rolex Watch.jpeg" name="Air King" />
                    <x-product-card image="Product 4.jpeg" name="Gmt-Master" />
                </div>
            </div>

            <!-- Right Container (Login Form) -->
            <div class="right-container col-5 d-flex justify-content-center align-items-center" style="border: 3px solid #d4af37; margin:20px 20px 20px 30px; display: float-left; background-color:#f4f4f4; border-radius: 10px;">
                <x-login-form />
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
