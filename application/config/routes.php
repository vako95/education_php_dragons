<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'AdminLogin';

$route['admin_index']     = 'AdminCon/index';
$route['admin_index_act'] = 'AdminCon/login_act';
$route['admin_log_out'] = 'AdminCon/log_out';
$route['admin_dashboard'] = 'AdminCon/dashboard';
$route['admin_not_found'] = 'AdminCon/notFound';
$route['admin_profile']   = 'AdminCon/profile';


$route['admin_news']           = 'AdminCon/news';
$route['admin_creat_news']     = 'AdminCon/creat_news';
$route['admin_creat_news_act'] = 'AdminCon/creat_news_act';

$route['delete_news/(.*)']     = 'AdminCon/delete_news/$1';
$route['update_news/(.*)']     = 'AdminCon/update_news/$1';
$route['update_news_act/(.*)'] = 'AdminCon/update_news_act/$1';

$route['admin_user_reguest']   = 'AdminCon/user_reguest';
$route['admin_delete_message/(.*)']   = 'AdminCon/delete_message/$1';

$route['admin_news_view/(.*)']         = 'AdminCon/news_view/$1';


$route['update_skilled/(.*)']     = 'AdminCon/update_skilled/$1';
$route['update_skilled_act/(.*)'] = 'AdminCon/update_skilled_act/$1';
$route['admin_news_skilled']      = 'AdminCon/news_skilled';
$route['admin_creat_skilled']     = 'AdminCon/creat_skilled';
$route['admin_creat_skilled_act'] = 'AdminCon/creat_skilled_act';
$route['delete_skilled/(.*)']     = 'AdminCon/delete_skilled/$1';


//popular cours

$route['admin_popular_courses']   = 'AdminCon/popular_courses';
$route['admin_creat_popular']     = 'AdminCon/creat_popular';
$route['admin_creat_popular_act'] = 'AdminCon/creat_popular_act';
$route['delete_popular/(.*)']     = 'AdminCon/delete_popular/$1';
$route['update_popular/(.*)']     = 'AdminCon/update_popular/$1';
$route['update_popular_act/(.*)'] = 'AdminCon/update_popular_act/$1';

//popular cours

$route['admin_about_skilled']     = 'AdminCon/about_skilled';
$route['admin_creat_about']       = 'AdminCon/creat_about';
$route['admin_about_act']         = 'AdminCon/about_act';
$route['delete_about/(.*)']       = 'AdminCon/delete_about/$1';;


//USERCON
$route['index'] = 'UserCon/index';
$route['about'] = 'UserCon/about';
$route['contact'] = 'UserCon/contact';
$route['courses'] = 'UserCon/courses';
$route['team'] = 'UserCon/team';
$route['contactAct'] = 'UserCon/contactAct';
$route['testimonial'] = 'UserCon/testimonial';

$route['news_single/(.*)'] = 'UserCon/news_single/$1';
$route['404'] = 'UserCon/error_404';

//AdminLogin Admin registratiion
$route['admin_cover_index']          = 'AdminLogin/cover_index';
$route['admin_logout']               = 'AdminLogin/logout';
$route['admin_cover_login']          = 'AdminLogin/cover_login';
$route['admin_cover_registration']   = 'AdminLogin/cover_registration';
//VISITOR PORTAL


$route['admin_visitor_index']             = 'VisitorPortal/index';

$route['admin_personal_information']      = 'VisitorPortal/personal_information';
$route['admin_personal_edit']             = 'VisitorPortal/personal_information_edit';

$route['admin_programming_skills']        = 'VisitorPortal/programming_skills';


$route['update_post_programming_skills']     = 'VisitorPortal/update_post_programming_skills';
$route['_personal_information_edit_submit']  = 'VisitorPortal/_personal_information_edit_submit';

$route['admin_programming_skills_edit']      = 'VisitorPortal/programming_skills_edit';
$route['_programming_skills_edit_submit']    = 'VisitorPortal/_programming_skills_edit_submit';

$route['admin_profile_picture_edit']         = 'VisitorPortal/profile_picture_edit';
$route['admin_profile_picture_edit_submit']  = 'VisitorPortal/_profile_picture_edit_submit';

// Admin Portal
$route['admin_potal_index']                = 'AdminPortal/index';
$route['admin_users_list']                 = 'AdminPortal/users_list';
$route['admin_users_list_deactivated']     = 'AdminPortal/users_list_deactivated';

$route['admin_visitors_list']              = 'AdminPortal/visitors_list';
$route['admin_visitors_list_deactivated']  = 'AdminPortal/visitors_list_deactivated';

$route['admin_add_user']                   = 'AdminPortal/add_user';
$route['admin_edit_user']                  = 'AdminPortal/edit_user';
$route['admin_edit_user/(.*)']             = 'AdminPortal/edit_user/$1';
$route['deactivate_user/(.*)']             = 'AdminPortal/deactivate_user/$1';
$route['reactivate_user/(.*)']             = 'AdminPortal/reactivate_user/$1';

$route['deactivate_visitor/(.*)']          = 'AdminPortal/deactivate_visitor/$1';
$route['reactivate_visitor/(.*)']          = 'AdminPortal/reactivate_visitor/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
