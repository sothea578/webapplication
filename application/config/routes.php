<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route['/'] = 'Users/home';
$route['Admin'] = 'Admin/login';
$route['Galleries/show_gallery_data/(:num)'] = 'Galleries/show_gallery_data';
$route['Admin/user_data/(:num)'] = 'Admin/user_data';
$route['Contacts/contact_data/(:num)'] = 'Contacts/contact_data';
$route['Admin/bookTour_user_info/(:num)'] = 'Admin/bookTour_user_info';
$route['Categories/show_category_data/(:num)'] = 'Categories/show_category_data';
$route['Destinations/show_destination_data/(:num)'] = 'Destinations/show_destination_data';
$route['Tour_types/show_tour_type_data/(:num)'] = 'Tour_types/show_tour_type_data';
$route['Services/serviceData/(:num)'] = 'Services/serviceData';
$route['Services/servicePackageData/(:num)'] = 'Services/servicePackageData';


/* End of file routes.php */
/* Location: ./application/config/routes.php */