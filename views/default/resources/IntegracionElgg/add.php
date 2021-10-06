<?php
// make sure only logged in users can see this page
gatekeeper();

// set the title
$title = "Creacion de un post nuevo!";

// add the form to the main column
$content = elgg_view_form("IntegracionElgg/save");

// optionally, add the content for the sidebar
$sidebar = "";

// draw the page, including the HTML wrapper and basic page layout
echo elgg_view_page($title, [
            'content' => $content,
            'sidebar' => $sidebar
]);