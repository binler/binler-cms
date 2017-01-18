<!DOCTYPE html>
<html lang="en">
<head>
    {render('admin/partial/head.tpl')}
</head>
<body>
    <div class="app app-default">
        <!-- Sidebar  -->
        {render('admin/partial/sidebar.tpl')}
        <!-- End Sidebar -->

        <!-- App container -->
        <div class="app-container">

            <!-- Navbar -->
            {render('admin/partial/navbar.tpl')}
            <!-- End Navbar -->

            <!-- Content -->
            {$content}
            <!-- End Content -->

            <!-- Floating -->
            {render('admin/partial/float.tpl')}
            <!-- End Floating -->

            <!-- Footer -->
            {render('admin/partial/footer.tpl')}
            <!-- End Footer -->

        </div>
        <!-- End App container -->

    </div>

{asset_js refs='vendor.js' attrs=[]}
{asset_js refs='app.js' attrs=[]}
</body>
</html>
