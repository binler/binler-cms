<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="/admin"><span class="highlight">{Config::get('cms_name')}</span> Admin</a>
        <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="{( (Uri::segment(2) == '') ? 'active' : ''  )}">
                <a href="/admin">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">Trang chính</div>
                </a>
            </li>
            <li class="{( (Uri::segment(2) == 'page') ? 'active' : ''  )}">
                <a href="/admin/page">
                    <div class="icon">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Quản lý trang</div>
                </a>
            </li>
            <li class="{( (Uri::segment(2) == 'product') ? 'active' : ''  )}">
                <a href="/admin/product">
                    <div class="icon">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                    </div>
                    <div class="title">Quản lý sản phẩm</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <ul class="menu">
            <li>
                <a href="/admin/setting">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </li>
            <li><a href="#"><span class="flag-icon flag-icon-vn flag-icon-squared"></span></a></li>
        </ul>
    </div>
</aside>
