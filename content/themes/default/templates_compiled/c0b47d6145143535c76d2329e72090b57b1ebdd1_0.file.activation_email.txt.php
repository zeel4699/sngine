<?php
/* Smarty version 3.1.34-dev-7, created on 2023-03-20 20:15:34
  from 'C:\xampp\htdocs\client\content\themes\default\templates\emails\activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6418bee623f687_28017378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0b47d6145143535c76d2329e72090b57b1ebdd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\client\\content\\themes\\default\\templates\\emails\\activation_email.txt',
      1 => 1650267160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6418bee623f687_28017378 (Smarty_Internal_Template $_smarty_tpl) {
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
