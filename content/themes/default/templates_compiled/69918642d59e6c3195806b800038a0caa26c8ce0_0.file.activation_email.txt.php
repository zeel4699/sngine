<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-18 10:54:48
  from '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/emails/activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_625d43785f64d7_63044463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69918642d59e6c3195806b800038a0caa26c8ce0' => 
    array (
      0 => '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/emails/activation_email.txt',
      1 => 1650267160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d43785f64d7_63044463 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
