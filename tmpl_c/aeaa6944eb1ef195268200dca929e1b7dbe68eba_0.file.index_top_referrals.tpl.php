<?php /* Smarty version 3.1.27, created on 2024-10-31 21:32:29
         compiled from "/home/multistream6/domains/account.econoxtrades.online/public_html/tmpl/index_top_referrals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12970433316723f76d2e5ad2_62820782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeaa6944eb1ef195268200dca929e1b7dbe68eba' => 
    array (
      0 => '/home/multistream6/domains/account.econoxtrades.online/public_html/tmpl/index_top_referrals.tpl',
      1 => 1559319312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12970433316723f76d2e5ad2_62820782',
  'variables' => 
  array (
    'top_referrals' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6723f76d2ef9c3_54346231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6723f76d2ef9c3_54346231')) {
function content_6723f76d2ef9c3_54346231 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/account.econoxtrades.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '12970433316723f76d2e5ad2_62820782';
if ($_smarty_tpl->tpl_vars['top_referrals']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>Top Referrals</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['top_referrals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }
}
}
?>