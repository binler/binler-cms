<div class="col-xs-12">
    <div class="card">
        <div class="card-header">
            <div>
                <a href="/admin/page/create" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    <span class="title">Create</span>
                </a>
                <a href="" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                    <span class="title">Delete</span>
                </a>
            </div>
        </div>
        <div class="card-body no-padding">
            <div class="table-responsive">
            <table class="datatable table primary" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $pages as $item}
                        <tr>
                            <td>{$item.page_title}</td>
                            <td>{$item.page_description}</td>
                            <td>{$item.page_status}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
