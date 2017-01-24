<div class="col-xs-12">
    <div class="card">
        <div class="card-header">
            <div>
                <a href="/admin/page/create" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    <span class="title">Tạo mới</span>
                </a>
                <a href="" class="btn btn-danger btn-delete" data-type="{Uri::current()}">
                    <i class="fa fa-trash"></i>
                    <span class="title">Xóa</span>
                </a>
                <a href="javascript:" class="btn btn-primary btn-select-all">
                    <i class="fa fa-check"></i>
                    <span class="title">Chọn tất cả</span>
                </a>
                <a href="/page/page/test" class="btn btn-primary">
                    <i class="fa fa-database"></i>
                    <span class="title">Dummy data</span>
                </a>
            </div>
        </div>

        <div class="card-body no-padding">
            <div class="table-responsive">
            {form attrs=['class' => 'form'] hidden=[]}
            <table class="datatable table primary" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $pages as $item}
                        <tr>
                            <td>
                                <div class="checkbox">
                                    {form_checkbox field='page_id[]' value=$item.id attrs=['class' => 'page_id', 'id' => ('page_'|cat: $item.id)]}
                                    {form_label text='' id=('page_'|cat: $item.id) attrs=[]}
                                </div>
                            </td>
                            <td>{$item.page_title}</td>
                            <td>
                                <span class="badge {($item.page_status == \Constant::PUBLISH) ? 'badge-success' : 'badge-danger'} badge-icon">
                                    <i class="fa {($item.page_status == \Constant::PUBLISH) ? 'fa-check' : 'fa-times'}"></i>
                                    <span>{($item.page_status == \Constant::PUBLISH) ? 'PUBLISH' : 'UNPUBLISH'}</span>
                                </span>
                            </td>
                            <td>{$item.created_at|date_format: "Ngày %d Tháng %m  Năm %Y"}</td>
                            <td>
                                <a href="{('/admin/page/view/'|cat: $item.id)}" class="btn btn-info">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Xem</span>
                                </a>
                                <a href="{('/admin/page/edit/'|cat: $item.id)}" class="btn btn-warning">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Sửa</span>
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            {/form}
            </div>
        </div>
    </div>
</div>
