<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "admin/dashboard/index";
$route['404_override'] = '';

//Admin Dashboard
$route['admin'] = "admin/dashboard/index";
$route['admin/dashboard'] = "admin/dashboard/index";

//Login
$route['admin/login']= "admin/admin_authenticate/index";
$route['admin/validateadmin']= "admin/admin_authenticate/login";
$route['admin/logout']= "admin/admin_authenticate/logout";

//Admin Setup Box
$route['admin/setup_box'] = "admin/maintain_setup_box/index";
$route['admin/setup_box/getJson'] = "admin/maintain_setup_box/getJson";
$route['admin/setup_box/add'] = "admin/maintain_setup_box/add";
$route['admin/setup_box/save'] = "admin/maintain_setup_box/addListener";
$route['admin/setup_box/edit/(:any)'] = "admin/maintain_setup_box/edit/$1";
$route['admin/setup_box/update/(:any)'] = "admin/maintain_setup_box/editListener/$1";
$route['admin/setup_box/delete/(:any)'] = "admin/maintain_setup_box/deleteListener/$1";

//society
$route['admin/society'] = "admin/maintain_society/index";
$route['admin/society/getJson'] = "admin/maintain_society/getJson";
$route['admin/society/add'] = "admin/maintain_society/add";
$route['admin/society/save'] = "admin/maintain_society/addListener";
$route['admin/society/edit/(:any)'] = "admin/maintain_society/edit/$1";
$route['admin/society/update/(:any)'] = "admin/maintain_society/editListener/$1";
$route['admin/society/delete/(:any)'] = "admin/maintain_society/deleteListener/$1";

//Customer
$route['admin/customer'] = "admin/maintain_customer/index";
$route['admin/customer/getJson'] = "admin/maintain_customer/getJson";
$route['admin/customer/add'] = "admin/maintain_customer/add";
$route['admin/customer/save'] = "admin/maintain_customer/addListener";
$route['admin/customer/edit/(:any)'] = "admin/maintain_customer/edit/$1";
$route['admin/customer/update/(:any)'] = "admin/maintain_customer/editListener/$1";
$route['admin/customer/delete/(:any)'] = "admin/maintain_customer/deleteListener/$1";
$route['admin/customer/get'] = "admin/maintain_customer/getCustomerAutocomplete";
$route['admin/customer/import'] = "admin/maintain_customer/import_excel_file";
$route['admin/customer/import_file'] = "admin/maintain_customer/importListener";
$route['admin/customer/history/(:any)'] = "admin/maintain_customer/customerHistory/$1";


//Admin Profile
$route['admin/proflie'] = "admin/profile/index";
$route['admin/proflie/update'] = "admin/profile/editProfileListener";

//Admin Monthly Customer payment
$route['admin/monthly/(:num)/(:num)'] = "admin/maintain_monthly_payment/index/$1/$2";
$route['admin/monthly/getJson/(:num)/(:num)'] = "admin/maintain_monthly_payment/getJson/$1/$2";
$route['admin/monthly/view'] = "admin/maintain_monthly_payment/view";
$route['admin/monthly/check_history/(:any)'] = "admin/maintain_monthly_payment/checkCustomerHistory/$1";
$route['admin/monthly/save'] = "admin/maintain_monthly_payment/addMonthlyPaymentListener";

/* End of file routes.php */
/* Location: ./application/config/routes.php */