<?php

/*
    Asatru PHP - routes configuration file

    Add here all your needed routes.

    Schema:
        [<url>, <method>, controller_file@controller_method]
    Example:
        [/my/route, get, mycontroller@index]
        [/my/route/with/{param1}/and/{param2}, get, mycontroller@another]
    Explanation:
        Will call index() in app\controller\mycontroller.php if request is 'get'
        Every route with $ prefix is a special route
*/

return [
    array('/', 'GET', 'index@index'),
    array('/auth', 'GET', 'index@auth'),
    array('/login', 'POST', 'index@login'),
    array('/logout', 'ANY', 'index@logout'),
    array('/password/restore', 'POST', 'index@restore_password'),
    array('/password/reset', 'GET', 'index@view_reset_password'),
    array('/password/reset', 'POST', 'index@reset_password'),
    array('/plants/location/{id}', 'GET', 'index@plants_from_location'),
    array('/plants/location/{id}/water', 'ANY', 'index@set_plants_watered'),
    array('/plants/details/{id}', 'GET', 'index@view_plant_details'),
    array('/plants/add', 'POST', 'index@add_plant'),
    array('/plants/details/edit', 'POST', 'index@edit_plant_details'),
    array('/plants/details/edit/link', 'POST', 'index@edit_plant_link'),
    array('/plants/details/edit/photo', 'POST', 'index@edit_plant_details_photo'),
    array('/plants/details/gallery/add', 'POST', 'index@add_plant_gallery_photo'),
    array('/plants/details/gallery/photo/remove', 'POST', 'index@remove_gallery_photo'),
    array('/plants/remove', 'ANY', 'index@remove_plant'),
    array('/profile', 'GET', 'index@view_profile'),
    array('/profile/preferences', 'POST', 'index@edit_preferences'),
    array('/search', 'GET', 'index@view_search'),
    array('/search/perform', 'POST', 'index@perform_search'),
    array('/tasks', 'GET', 'index@view_tasks'),
    array('/tasks/create', 'POST', 'index@create_task'),
    array('/tasks/edit', 'POST', 'index@edit_task'),
    array('/tasks/toggle', 'POST', 'index@toggle_task'),
    array('/inventory', 'GET', 'index@view_inventory'),
    array('/inventory/add', 'POST', 'index@add_inventory_item'),
    array('/inventory/edit', 'POST', 'index@edit_inventory_item'),
    array('/inventory/amount/increment', 'ANY', 'index@inc_inventory_item'),
    array('/inventory/amount/decrement', 'ANY', 'index@dec_inventory_item'),
    array('/inventory/remove', 'ANY', 'index@remove_inventory_item'),
    array('/inventory/group/add', 'POST', 'index@add_inventory_group_item'),
    array('/inventory/group/edit', 'POST', 'index@edit_inventory_group_item'),
    array('/inventory/group/remove', 'ANY', 'index@remove_inventory_group_item'),
    array('/chat', 'GET', 'index@view_chat'),
    array('/chat/add', 'POST', 'index@add_chat_message'),
    array('/chat/query', 'GET', 'index@query_chat_messages'),
    array('/chat/typing', 'ANY', 'index@get_chat_typing_status'),
    array('/chat/typing/update', 'ANY', 'index@update_chat_typing'),
    array('/user/online', 'ANY', 'index@get_online_users'),
    array('/admin', 'GET', 'admin@index'),
    array('/admin/environment/save', 'POST', 'admin@save_environment'),
    array('/admin/user/create', 'POST', 'admin@create_user'),
    array('/admin/user/update', 'POST', 'admin@update_user'),
    array('/admin/user/remove', 'ANY', 'admin@remove_user'),
    array('/admin/location/add', 'POST', 'admin@add_location'),
    array('/admin/location/update', 'POST', 'admin@update_location'),
    array('/admin/location/remove', 'ANY', 'admin@remove_location'),
    array('/admin/media/logo', 'POST', 'admin@upload_media_logo'),
    array('/admin/media/background', 'POST', 'admin@upload_media_background'),
    array('/history', 'GET', 'index@view_history'),
    array('/plants/history/add', 'ANY', 'index@add_to_history'),
    array('/plants/history/remove', 'ANY', 'index@remove_from_history'),
    array('/cronjob/overduetasks', 'GET', 'cronjobs@overdue_tasks'),
    array('$404', 'ANY', 'error404@index')
];
