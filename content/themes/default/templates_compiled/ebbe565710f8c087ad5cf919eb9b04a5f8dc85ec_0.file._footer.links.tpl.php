<?php
/* Smarty version 3.1.34-dev-7, created on 2023-03-20 20:14:01
  from 'C:\xampp\htdocs\client\content\themes\default\templates\_footer.links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6418be89298af3_58540774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebbe565710f8c087ad5cf919eb9b04a5f8dc85ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\client\\content\\themes\\default\\templates\\_footer.links.tpl',
      1 => 1650267161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6418be89298af3_58540774 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- footer links -->
<div class="container">
	<div class="row footer <?php if ($_smarty_tpl->tpl_vars['page']->value == 'index' && !$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>border-top-0<?php }?>">
		<div class="col-sm-6">
			&copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
		</div>

		<div class="col-sm-6 links">
			<?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
$_smarty_tpl->tpl_vars['static_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->do_else = false;
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration === $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_11_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
						<?php echo __($_smarty_tpl->tpl_vars['static_page']->value['page_title']);?>

					</a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
				<?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
				 · 
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
					<?php echo __("Contact Us");?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
				 · 
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
					<?php echo __("Directory");?>

				</a>
			<?php }?>
		</div>
	</div>
</div>
<!-- footer links --><?php }
}
