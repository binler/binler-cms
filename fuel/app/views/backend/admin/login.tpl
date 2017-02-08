<!DOCTYPE html>
<html>
<head>
    {render('backend/partial/head.tpl')}
</head>

<body>
    <div class="app app-default">

        <div class="app-container app-login">
            <div class="flex-center">
                <div class="app-header"></div>
                <div class="app-body">
                    <div class="app-block">
                        <div class="app-form">
                            <div class="form-header">
                                <div class="app-brand"><span class="highlight">{$cms_name}</span> Admin</div>
                            </div>
                            {form attrs=['class' => 'form_login'] hidden=[]}
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" maxlength="200" required class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
                                <input type="password" required maxlength="255" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon2">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success btn-submit" value="Login">
                            </div>
                            {/form}
                        </div>
                    </div>
                </div>
                <div class="app-footer">
                </div>
            </div>
        </div>

    </div>

    {asset_js refs='vendor.js' attrs=[]} {asset_js refs='app.js' attrs=[]} {asset_js refs='admin.js' attrs=[]}

</body>

</html>
