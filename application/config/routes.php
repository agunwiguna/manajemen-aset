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

//Merek
$route['admin/merek'] = 'MerekAdminController/index';
$route['admin/merek/create'] = 'MerekAdminController/create';
$route['store-merek'] = 'MerekAdminController/store';
$route['admin/merek/show/(:any)'] = 'MerekAdminController/show/(:any)';
$route['admin/merek/edit/(:any)'] = 'MerekAdminController/edit/(:any)';
$route['update-merek'] = 'MerekAdminController/update_data';
$route['admin/merek/destroy/(:any)'] = 'MerekAdminController/destroy/(:any)';

//Ruangan
$route['admin/ruangan'] = 'RuanganAdminController/index';
$route['admin/ruangan/create'] = 'RuanganAdminController/create';
$route['store-ruangan'] = 'RuanganAdminController/store';
$route['admin/ruangan/show/(:any)'] = 'RuanganAdminController/show/(:any)';
$route['admin/ruangan/edit/(:any)'] = 'RuanganAdminController/edit/(:any)';
$route['update-ruangan'] = 'RuanganAdminController/update_data';
$route['admin/ruangan/destroy/(:any)'] = 'RuanganAdminController/destroy/(:any)';

//Aset
$route['admin/aset'] = 'AsetAdminController/index';
$route['admin/aset/create'] = 'AsetAdminController/create';
$route['store-aset'] = 'AsetAdminController/store';
$route['admin/aset/show/(:any)'] = 'AsetAdminController/show/(:any)';
$route['admin/aset/edit/(:any)'] = 'AsetAdminController/edit/(:any)';
$route['update-aset'] = 'AsetAdminController/update_data';
$route['admin/aset/destroy/(:any)'] = 'AsetAdminController/destroy/(:any)';

//Ruangan Aset
$route['admin/aset-ruangan/(:any)'] = 'AsetAdminController/aset_ruangan/(:any)';


//settingan
$route['(:any)'] = 'errors/show_404';
$route['(:any)/(:any)'] = 'errors/show_404';
$route['(:any)/(:any)/(:any)'] = 'errors/show_404';

