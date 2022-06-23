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
$route['default_controller'] 					= 'home';
$route['dang-ky-tai-khoan.html'] 				= 'account';
$route['dang-nhap.html'] 						= 'account/login';
$route['quen-mat-khau.html']					= 'account/forgotPass';
$route['dang-xuat.html'] 						= 'account/logout';
$route['quen-mat-khau.html']					= 'account/forgotPass';
$route['dang-tin.html']  						= 'news';
$route['tin-da-dang.html']  					= 'news/postedNew';
$route['tin-da-luu.html']  						= 'saved_news';
$route['cap-nhat-tin-dang-(:num).html'] 		= 'news/editNew/$1';
$route['cap-nhat-thong-tin.html']				= 'account/updateInfo';
$route['doi-mat-khau.html']						= 'account/updatePassword';
$route['(:any)-n(:num).html']					= 'news/newDetail/$1/$2';
$route['(:any)-u(:num).html']					= 'account/detailUserPost/$1/$2';
$route['(:any)-g(:num).html']					= 'news/listSearchNewByTag/$1/$2';
$route['tim-phong-tro-tai-(:any)-c(:num).html'] = 'news/listSearchNewByCity/$1/$2';
$route['tim-phong-tro-tai-(:any)-d(:num).html'] = 'news/listSearchNewByCity/$1/$2';
$route['tim-phong-tro-tai-(:any)-s(:num).html'] = 'news/listSearchNewByStreet/$1/$2';
$route['tim-(:any)-t(:num).html']			    = 'news/listSearchNewByNewType/$1/$2';
$route['tim-(:any)-t(:num)c(:num).html']		= 'news/listSearchNewByNewTypeCity/$2/$3';
$route['tim-(:any)-t(:num)d(:num).html']		= 'news/listSearchNewByNewTypeCity/$2/$3';
$route['tim-(:any)-t(:num)s(:num).html']		= 'news/listSearchNewByNewTypeStreet/$2/$3';
$route['tat-ca-phong-tro.html']					= 'news/allNews';
$route['phong-tro-quanh-day.html']				= 'news/newsMap';
$route['phong-tro-theo-ban-do.html']			= 'news/makerMap';
$route['404_override'] 							= '';
$route['translate_uri_dashes'] 					= FALSE;
