<?php /* Smarty version 3.1.27, created on 2024-10-31 21:32:29
         compiled from "/home/multistream6/domains/account.econoxtrades.online/public_html/tmpl/stats_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6255495376723f76d2235a8_69969535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570f11c8c1d4423582d946d1bbc630a320c69f99' => 
    array (
      0 => '/home/multistream6/domains/account.econoxtrades.online/public_html/tmpl/stats_box.tpl',
      1 => 1559319312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6255495376723f76d2235a8_69969535',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6723f76d23a631_73497213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6723f76d23a631_73497213')) {
function content_6723f76d23a631_73497213 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/account.econoxtrades.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '6255495376723f76d2235a8_69969535';
?>

<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Stats</th>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_members_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=members_stats"));?>
" class=menutxt>Investors Stats</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_paidout_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=paidout"));?>
" class=menutxt>Paid Out</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_top10_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=top10"));?>
" class=menutxt>Investors Top 10</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_last10_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=last10"));?>
" class=menutxt>Investors Last 10</a></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refs10_stats'] == 1) {?>
<tr>
	<td class=menutxt><a href="<?php echo smarty_modifier_myescape(encurl("?a=refs10"));?>
" class=menutxt>Referrers Top 20</a></td>
</tr>
<?php }?>
</table>
<br>
<?php }
}
?>