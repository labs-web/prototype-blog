<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once  $config['views_path'] . 'head.php'; ?>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="path/to/adminlte/css/adminlte.min.css">
</head>

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
        <?php include_once  $config['views_path'] . 'nav.php'; ?>

        <?php include_once  $config['views_path'] . 'aside.php'; ?>


        <div class="content-wrapper">
            <!-- Content Header -->
            <section class="content-header">
                <!-- ... Your header content here ... -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Your content here -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../layouts/footer.php" ?>
    </div>

    <!-- AdminLTE Script -->
    <script src="path/to/adminlte/js/adminlte.min.js"></script>
    
</body>

</html>
