<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-20 02:28:56
  from '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/emails/new_user_added_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_625f6fe8951d33_85919273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a43bbcbd15e5d5e43b91718f21b485d1ffa6858' => 
    array (
      0 => '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/emails/new_user_added_email.txt',
      1 => 1650421544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625f6fe8951d33_85919273 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
