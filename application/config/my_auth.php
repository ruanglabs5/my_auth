<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /*
| -------------------------------------------------------------------------
|  default_redirect  
| -------------------------------------------------------------------------
|  defaultredirect will automatically be redirect to the page they have set 
|
*/
// $config['default_redirect'] = 'dashboard'; 
 /*
| -------------------------------------------------------------------------
| enable_login_attemps 
| -------------------------------------------------------------------------
| enable login_attempts is to enable the login attempts, the default is FALSE
| please set TRUE if you want to enable attempts login
|
*/
$config['enable_login_attemps'] = TRUE;
 /*
| -------------------------------------------------------------------------
| max_login_attemps 
| -------------------------------------------------------------------------
| login attempts default is 5, if you want more than 5 please change max 
| below 
| 
*/ 
$config['max_login_attemps'] = 5; 
/*
| -------------------------------------------------------------------------
| enable_redirect_role
| -------------------------------------------------------------------------
| enable redirect role are several redirect based on the role where we want 
| to redirect, default is FALSE, change to TRUE if you want to enable
|
*/ 
$config['enable_redirect_role'] = TRUE;
/*
| -------------------------------------------------------------------------
| redirect_role
| -------------------------------------------------------------------------
| redirect role is redirect based on role users, for example you can change
| array bellow. example : users is role and user is a controller
|
*/ 
$config['redirect_role'] = array('admin' => 'admin',
								 'users'  => 'user');
/*
| -------------------------------------------------------------------------
| Email from
| -------------------------------------------------------------------------
| email from is email for admin send forgotten password to user, recommend 
| mailjet
|
*/ 
$config['email_from'] = ''; // email your admin
/*
| -------------------------------------------------------------------------
| forgotten password setup
| -------------------------------------------------------------------------
| Please fill in the config below to forgotten your password, recommend use 
| mailjet
|
*/ 
$config['email_forgotten'] = array('protocol'  => 'smtp', 
						'smtp_host' => '', 
						'smtp_port' => '', 
						'smtp_user' => '',
						'smtp_pass' => '',
						'charset' 	=> 'utf-8',
						'mailtype'  => 'html',
						'newline'   => "\r\n" );
/*
| -------------------------------------------------------------------------
| expired_reset
| -------------------------------------------------------------------------
| redirect role is redirect based on role users, for example you can change
| array bellow. example : admin is role and home is a controller
|
*/ 
$config['expired_reset'] = 600;


