
<?php
ob_start();
?>

<div class="container-fluid mb-4">
    <div class="p-5 text-center bg-white rounded shadow-sm">
        <i class="bi bi-layers" style="font-size: 60px; color: #8B5E3C;"></i>

        <h1 class="mt-3">Welcome to YS Leather Desk Pads</h1>

        <p class="text-muted mt-3">
            Your one-stop system for managing leather desk pad products,
            customers, staff and orders.
        </p>

    </div>
</div>

<div class="container-fluid mb-4">
    <h3 class="mb-3">What You Can Manage</h3>

    <div class="row g-3">

        <!-- Products Card -->
        <div class="col-12 col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam text-primary"
                       style="font-size: 40px;"></i>

                    <h5 class="card-title mt-3">Products</h5>

                    <p class="card-text text-muted">
                        Manage and track all your products
                    </p>

                    <a href="products.php" class="btn btn-outline-primary">
                        Products
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-person-vcard text-primary"
                       style="font-size: 40px;"></i>

                    <h5 class="card-title mt-3">Customers</h5>

                    <p class="card-text text-muted">
                        Manage and track all your customers
                    </p>

                    <a href="customers.php" class="btn btn-outline-primary">
                        Customers
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge text-primary"
                       style="font-size: 40px;"></i>

                    <h5 class="card-title mt-3">Staffs</h5>

                    <p class="card-text text-muted">
                        Manage and track all your staff members
                    </p>

                    <a href="staffs.php" class="btn btn-outline-primary">
                        Staffs
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-receipt text-primary"
                       style="font-size: 40px;"></i>

                    <h5 class="card-title mt-3">Orders</h5>

                    <p class="card-text text-muted">
                        Create and manage customer orders
                    </p>

                    <a href="orders.php" class="btn btn-outline-primary">
                        Orders
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid">
    <div class="card border-0 bg-light">
        <div class="card-body p-4">
            <h4>
                <i class="bi bi-info-circle text-primary me-2"></i>
                About Our System
            </h4>

            <p class="text-muted mb-0">
                This system helps us manage daily business activities
                more easily, including product information, customer
                records and sales orders.
            </p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
