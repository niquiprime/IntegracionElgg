<?php
elgg_register_event_handler('init', 'system', IntegracionElgg_init);
function IntegracionElgg_init(){
	elgg_extend_view('css/elgg','IntegracionElgg/css');
	elgg_extend_view('page/elements/sidebar','IntegracionElgg/U_box');
	elgg_extend_view('page/elements/sidebar','IntegracionElgg/U2_box');
	elgg_extend_view('page/elements/admin_notices','IntegracionElgg/noti');
	elgg_extend_view('page/elements/body','IntegracionElgg/noti');
	
}
