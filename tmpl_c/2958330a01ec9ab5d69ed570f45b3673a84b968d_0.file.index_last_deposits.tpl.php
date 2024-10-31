<?php /* Smarty version 3.1.27, created on 2024-10-31 21:32:29
         compiled from "/home/multistream6/domains/account.econoxtrades.online/public_html/tmpl/index_last_deposits.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5311173446723f76d2be914_00008287%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2958330a01ec9ab5d69ed570f45b3673a84b968d' => 
    array (
      0 => '/home/multistream6/domains/account.econoxtrades.online/public_html/tmpl/index_last_deposits.tpl',
      1 => 1559319312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5311173446723f76d2be914_00008287',
  'variables' => 
  array (
    'last_deposits' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6723f76d2cafd7_41790143',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6723f76d2cafd7_41790143')) {
function content_6723f76d2cafd7_41790143 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/account.econoxtrades.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '5311173446723f76d2be914_00008287';
if ($_smarty_tpl->tpl_vars['last_deposits']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Deposits</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_deposits']->value;
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
 <td class=menutxt><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
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