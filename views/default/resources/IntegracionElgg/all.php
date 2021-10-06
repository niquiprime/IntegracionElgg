<?php
gatekeeper();
$titlebar = "Todos los Post Hechos";
$pagetitle = "Lista de Posts";

$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'IntegracionElgg',
    'owner_guid' => elgg_get_logged_in_user_guid(),
));

echo elgg_view_page($titlebar, [
    'title' => $pagetitle,
    'content' => $body,
]);