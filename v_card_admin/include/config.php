<?php
include_once (__DIR__ . '/db_connection.php');

$base_url = 'https://account.econoxtrade.online/';
$home_url = 'https://econoxtrade.online/';
$asset_link = $base_url . 'v_card_admin/admin_assets/';
$admin_url = $base_url . 'v_card_admin/';
$external_base_url = 'https://qfsholdings.io/';
$site_name  = 'EconoXtrade Investment';
$favicon_url = $base_url . 'assets/imgs/qfsicon.png';
$site_logo = $home_url .'assets/imgs/qfs.png';
$login_url = $base_url . '?a=login';
const current_year = '|default:2024';
