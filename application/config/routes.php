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

//Kerusakan
$route['admin/aset-ruangan/kerusakan/(:any)'] = 'AsetAdminController/kerusakan/(:any)';
$route['store-kerusakan'] = 'AsetAdminController/store_kerusakan';

//Ruangan Aset
$route['admin/aset-ruangan/(:any)'] = 'AsetAdminController/aset_ruangan/(:any)';
$route['admin/show-repair/(:any)/(:any)'] = 'AsetAdminController/show_repair/(:any)/(:any)';

//Perbaikan
$route['admin/perbaikan'] = 'PerbaikanAdminController/index';
$route['admin/perbaikan/create'] = 'PerbaikanAdminController/create';
$route['store-perbaikan'] = 'PerbaikanAdminController/store';
$route['admin/perbaikan/show/(:any)'] = 'PerbaikanAdminController/show/(:any)';
$route['admin/perbaikan/move/(:any)'] = 'PerbaikanAdminController/move/(:any)';
$route['admin/perbaikan/edit/(:any)'] = 'PerbaikanAdminController/edit/(:any)';
$route['update-perbaikan'] = 'PerbaikanAdminController/update_data';
$route['move-perbaikan'] = 'PerbaikanAdminController/move_data';

$route['admin/perbaikan/destroy/(:any)'] = 'PerbaikanAdminController/destroy/(:any)';

//Monitoring
$route['admin/kerusakan'] = 'MonitoringAdminController/index';
//$route['admin/kerusakan/create'] = 'MonitoringAdminController/create';
//$route['store-kerusakan'] = 'MonitoringAdminController/store';
$route['admin/kerusakan/show/(:any)'] = 'MonitoringAdminController/show/(:any)';
$route['admin/kerusakan/destroy/(:any)'] = 'MonitoringAdminController/destroy/(:any)';
$route['admin/kerusakan/approve/(:any)'] = 'MonitoringAdminController/approve/(:any)';
$route['admin/kerusakan/reject/(:any)'] = 'MonitoringAdminController/reject/(:any)';
$route['admin/kerusakan/cancel/(:any)'] = 'MonitoringAdminController/cancel/(:any)';

$route['admin/perbaikan/approve/(:any)/(:any)'] = 'MonitoringAdminController/approve_perbaikan/(:any)/(:any)';
$route['admin/perbaikan/reject/(:any)'] = 'MonitoringAdminController/reject_perbaikan/(:any)';

//Laporan Kerusakan
$route['admin/laporan/kerusakan'] = 'MonitoringAdminController/laporan';
$route['print-laporan-kerusakan'] = 'MonitoringAdminController/print_laporan';

//Laporan Perbaikan
$route['admin/laporan/perbaikan'] = 'PerbaikanAdminController/laporan';
$route['print-laporan-perbaikan'] = 'PerbaikanAdminController/print_laporan';


//Data User
$route['admin/user'] = 'UserAdminController/index';
$route['admin/user/create'] = 'UserAdminController/create';
$route['store-user'] = 'UserAdminController/store';
$route['admin/user/edit/(:any)'] = 'UserAdminController/edit/(:any)';
$route['update-user'] = 'UserAdminController/update_data';
$route['admin/user/destroy/(:any)'] = 'UserAdminController/destroy/(:any)';


//settingan
$route['(:any)'] = 'errors/show_404';
$route['(:any)/(:any)'] = 'errors/show_404';
$route['(:any)/(:any)/(:any)'] = 'errors/show_404';

