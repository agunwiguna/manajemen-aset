<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'LoginController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login
$route['proses-login'] = 'LoginController/proses_login';
$route['proses-logout'] = 'LoginController/proses_logout';


//Dashboard
$route['admin/dashboard'] = 'DashboardAdmin/index';

//Aset
$route['admin/aset'] = 'AsetAdminController/index';
$route['admin/aset/create'] = 'AsetAdminController/create';
$route['store-aset'] = 'AsetAdminController/store';
$route['admin/aset/show/(:any)'] = 'AsetAdminController/show/(:any)';
$route['admin/aset/edit/(:any)'] = 'AsetAdminController/edit/(:any)';
$route['update-aset'] = 'AsetAdminController/update_data';
$route['admin/aset/destroy/(:any)'] = 'AsetAdminController/destroy/(:any)';



//settingan
$route['(:any)'] = 'errors/show_404';
$route['(:any)/(:any)'] = 'errors/show_404';
$route['(:any)/(:any)/(:any)'] = 'errors/show_404';

