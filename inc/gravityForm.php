<?php

namespace Flynt\GravityForm;

add_filter('gform_field_content', function ($content, $field, $value, $lead_id, $form_id) {
    if ($field->type === 'fileupload') {
        $content = str_replace("File</label>", "Click to <strong>Select</strong> or <strong>Drag</strong> files here</label>", $content);
    }

    return $content;
}, 10, 5);
