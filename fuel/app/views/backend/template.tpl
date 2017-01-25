<!DOCTYPE html>
<html lang="en">
<head>
    {render('backend/partial/head.tpl')}
</head>
<body>
    <div class="loading-page">
        <div class="loading-container">
            <div class="box box-left"></div>
            <div class="box box-right"></div>
        </div>
    </div>
    <div class="app app-default">
        <!-- Sidebar  -->
        {render('backend/partial/sidebar.tpl')}
        <!-- End Sidebar -->

        <!-- App container -->
        <div class="app-container">

            <!-- Navbar -->
            {render('backend/partial/navbar.tpl')}
            <!-- End Navbar -->

            <!-- Content -->
            <div class="row">
                {$content}
            </div>
            <!-- End Content -->

            <!-- Floating -->
            {render('backend/partial/float.tpl')}
            <!-- End Floating -->

            <!-- Footer -->
            {render('backend/partial/footer.tpl')}
            <!-- End Footer -->

        </div>
        <!-- End App container -->

    </div>

{asset_js refs='vendor.js' attrs=[]}
{asset_js refs='app.js' attrs=[]}
{asset_js refs='bootbox.min.js' attrs=[]}
{asset_js refs='admin.js' attrs=[]}
</body>
</html>
