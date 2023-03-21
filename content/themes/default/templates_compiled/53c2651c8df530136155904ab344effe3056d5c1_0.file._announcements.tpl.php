<?php
/* Smarty version 3.1.34-dev-7, created on 2023-03-20 20:16:22
  from 'C:\xampp\htdocs\client\content\themes\default\templates\_announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6418bf16dd9ea5_70526729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c2651c8df530136155904ab344effe3056d5c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\client\\content\\themes\\default\\templates\\_announcements.tpl',
      1 => 1650267160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6418bf16dd9ea5_70526729 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['announcement']->value['type'];?>
 text-with-list" data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_id'];?>
">
		<button type="button" class="close float-right js_announcment-remover"><span>&times;</span></button>
		<?php if ($_smarty_tpl->tpl_vars['announcement']->value['title']) {?><div class="title"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['announcement']->value['code'];?>

	</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
