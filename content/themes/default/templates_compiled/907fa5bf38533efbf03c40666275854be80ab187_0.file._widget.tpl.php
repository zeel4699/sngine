<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-18 11:17:45
  from '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_625d48d9c665e5_86794766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907fa5bf38533efbf03c40666275854be80ab187' => 
    array (
      0 => '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/_widget.tpl',
      1 => 1650267162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d48d9c665e5_86794766 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
	<!-- Widgets -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
		<div class="card">
		    <div class="card-header">
		        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
		    </div>
		    <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- Widgets -->
<?php }
}
}
