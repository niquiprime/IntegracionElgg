<?php
elgg_register_event_handler('init', 'system', IntegracionElgg_init);
function IntegracionElgg_init(){
	elgg_extend_view('css/elgg','IntegracionElgg/css');
	elgg_extend_view('page/elements/sidebar','IntegracionElgg/tri_box');
}
