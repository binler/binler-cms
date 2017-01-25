<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            {$page.page_title}
        </div>
        <div class="card-body">
            {\Security::js_fetch_token()}
            {form attrs=['class' => 'form-curd'] hidden=[]}
            {Form::csrf()}
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            {form_label text='Tiêu đề' id='page_title' attrs=[]}
                            {form_input field='page_title' value={form_val index='' default=$page.page_title} attrs=['class' => 'form-control', 'maxlength' => '255' ,'placeholder' => 'Tiếu đề bài viết']}
                        </div>

                        <div class="form-group">
                            {form_label text='Mô tả' id='page_description' attrs=[]}
                            {form_textarea field='page_description' value={form_val index='' default=$page.page_description} attrs=[
                            'class' => 'form-control noresize',
                            'placeholder' => 'Mô tả nội dung bài viết',
                            'rows' => '6']}
                        </div>

                        <div class="form-group">
                            {form_label text='Nội dung bài viết' id='page_content' attrs=[]}
                            {form_textarea field='page_content' value={form_val index='' default=$page.page_content} attrs=['id' => 'editor_content']}
                        </div>

                    </div>

                    <div class="col-md-6">
                        {form_label text='Publish page' id='page_publish' attrs=[]}
                        <div class="form-group">

                            <div class="radio radio-inline">
                                {form_radio field='page_status' value='1' attrs=['id' => 'publish', (($page.page_status == '1') ? 'checked' : '')]}
                                {form_label text='Publish' id='publish' attrs=[]}
                            </div>

                            <div class="radio radio-inline">
                                {form_radio field='page_status' value='0' attrs=['id' => 'unpublish', (($page.page_status == '0') ? 'checked' : '')]}
                                {form_label text='Unpublish' id='unpublish' attrs=[]}
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9 col-md-offset-3">
                        <div class="form-footer">
                            {form_submit field='' value='Lưu' attrs=['class' => 'btn btn-primary submit_form']}
                            {html_anchor text='Quay lại' href=\Router::get('index_page') attrs=['class' => 'btn btn-danger']}
                        </div>
                    </div>

                </div>
            {/form}
        </div>
    </div>
</div>
