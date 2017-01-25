<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{asset_css refs='vendor.css' attrs=[]}
{asset_css refs='flat-admin.css' attrs=[]}
{asset_js refs='tinymce/tinymce.min.js'}
{asset_js refs='jquery.min.js'}
<script>tinymce.init({ selector:'textarea#editor_content', height: '400', resize: false });</script>
<title>{$title|cat: ' | '|cat: Config::get('cms_name')}</title>
<script type="text/javascript">
    $(window).load(function() {
        // $(".loading-page").hide();
    });
</script>
