<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/fonts/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/fonts/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/fonts/fontawesome5-overrides.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/css/styles.min.css')); ?>">

</head>

<body id="page-top">

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
    <div class="text-center mt-5">
        <div class="error mx-auto" data-text="404">
            <p class="m-0">404</p>
        </div>
        <p class="text-dark mb-5 lead">Page Not Found</p>
        <a href="<?php echo e(route('welcome')); ?>"><h3 class="text-primary">Go Home ?</h3></a>

    </div>
</div>


<script src="<?php echo e(asset('dashboard_assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard_assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="<?php echo e(asset('js/script.min.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\x\htdocs\astu_edc\resources\views/errors/404.blade.php ENDPATH**/ ?>