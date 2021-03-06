<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// route authentication
$route['default_controller']					= 'login';
$route['forgot'] 								= 'authentication/forgot';
$route['forgot/reset/(:any)'] 					= 'authentication/forgot/reset/$1';
// route police
$route['create_spdp'] 	 						= 'police/spdp/store';
$route['replied_spdp']	 						= 'police/spdp/replied';
$route['spdp_replied']	 						= 'police/spdp/get_replied';
$route['delete']  								= 'police/spdp/delete';
$route['police/history']						= 'police/spdp/history';
// route prosecutor
$route['reply_spdp'] 							= 'prosecutor/prosecutor/create_reply_spdp';

$route['surat/surat_polisi'] 					= 'lapas/surat_polisi';
$route['surat/surat_kejaksaan'] 				= 'lapas/surat_kejaksaan';
$route['surat/detail_polisi/(:any)']			= 'lapas/detail_surat_polisi/$1';
$route['surat/detail_kejaksaan/(:any)'] 		= 'lapas/detail_surat_kejaksaan/$1';
$route['unduh/unduh_surat_polisi/(:any)'] 		= 'lapas/unduh_surat_polisi/$1';
$route['unduh/unduh_surat_kejaksaan/(:any)'] 	= 'lapas/unduh_surat_kejaksaan/$1';
// route change password
$route['change_password'] 						= 'profile/change_password';
// route superadmin 
$route['superadmin/edit/(:any)'] 				= 'superadmin/edit/$1';
// route 404
$route['404_override'] 							= '';
$route['translate_uri_dashes'] 					= FALSE;
