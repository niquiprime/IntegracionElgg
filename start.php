<?php

function my_blog_init() {
    // register a hook handler to override urls
    elgg_register_plugin_hook_handler('entity:url', 'object', 'IntegracionElgg_set_url');
}

return function() {
    // register an initializer
    elgg_register_event_handler('init', 'system', 'IntegracionElgg_init');
};

function my_blog_set_url($hook, $type, $url, $params) {
    $entity = $params['entity'];
    if ($entity->getSubtype() === 'IntegracionElgg') {
        return "IntegracionElgg/view/{$entity->guid}";
    }
};

function my_blog_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           echo elgg_view_resource('IntegracionElgg/add');
           break;

        case 'view':
            $resource_vars['guid'] = elgg_extract(1, $segments);
            echo elgg_view_resource('IntegracionElgg/view', $resource_vars);
            break;

        case 'all':
        default:
           echo elgg_view_resource('IntegracionElgg/all');
           break;
    }

    return true;
}