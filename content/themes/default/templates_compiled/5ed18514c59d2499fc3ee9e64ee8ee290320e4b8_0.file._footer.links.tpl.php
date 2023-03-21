<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-18 07:29:35
  from '/home/u487468990/domains/thecricketceo.com/public_html/content/themes/default/templates/_footer.links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_625d135f9127b3_05925386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed18514c59d2499fc3ee9e64ee8ee290320e4b8' => 
    array (
      0 => '/home/u487468990/domains/thecricketceo.com/public_html/content/themes/default/templates/_footer.links.tpl',
      1 => 1650266550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d135f9127b3_05925386 (Smarty_Internal_Template $_smarty_tpl) {
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
