<?php


return array(
    // regular form definitions
    'prep_value' => true,
    'auto_id' => true,
    'auto_id_prefix' => '',
    'form_method' => 'post',
    'form_template' => "\n\t\t{open}\n\t\t<table width=100% border=0 cellpadding=5 cellspacing=0 class=cms8341-dataTable>\n{fields}\n\t\t</table>\n\t\t{close}\n",
    'form_id' => 'form_create_user',
    'fieldset_template' => "\n\t\t<tr><td colspan=\"2\">{open}<table>\n{fields}</table></td></tr>\n\t\t{close}\n",
    'field_template' => "\t\t<tr>\n\t\t\t<th align=\"left\" class=\"{error_class}\">{label}{required}</th>\n\t\t\t<td align=\"left\" class=\"{error_class}\">{field} <span>{description}</span> {error_msg}</td>\n\t\t</tr>\n",
    'multi_field_template' => "\t\t<tr>\n\t\t\t<th align=\"left\" class=\"{error_class}\">{group_label}{required}</th>\n\t\t\t<td class=\"{error_class}\">{fields}\n\t\t\t\t{field} {label}\n{fields}<span>{description}</span>\t\t\t{error_msg}\n\t\t\t</td>\n\t\t</tr>\n",
    'error_template' => '<span>{error_msg}</span>',
    'group_label' => '<span>{label}</span>',
    'required_mark' => '<span class="cms_require" <font>（必須）</font>',
    'inline_errors' => false,
    'error_class' => null,
    'label_class' => null,
    // tabular form definitions
    'tabular_form_template' => "<table>{fields}</table>\n",
    'tabular_field_template' => "{field}",
    'tabular_row_template' => "<tr>{fields}</tr>\n",
    'tabular_row_field_template' => "\t\t\t<td>{label}{required}&nbsp;{field} {error_msg}</td>\n",
    'tabular_delete_label' => "Delete?",
);
