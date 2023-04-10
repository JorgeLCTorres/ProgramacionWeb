<!DOCTYPE html>
<html lang="en">

<head>
    <title>Not Found</title>
    <?php
    include("./layouts/head.php");
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php
        include("./layouts/spinner.php");
        ?>

        <!-- 404 Start -->
        <div class="container-fluid">
            <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-md-6 text-center p-4">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1 fw-bold">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="../">Go Back To Home</a>
                </div>
            </div>
        </div>
        <!-- 404 End -->
    </div>

    <?php
    include("./layouts/scripts.php");
    ?>
</body>

</html>