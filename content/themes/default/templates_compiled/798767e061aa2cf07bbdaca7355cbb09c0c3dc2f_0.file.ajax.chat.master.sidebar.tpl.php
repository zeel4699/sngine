<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-18 11:17:47
  from '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/ajax.chat.master.sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_625d48dbb3edb9_49978613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '798767e061aa2cf07bbdaca7355cbb09c0c3dc2f' => 
    array (
      0 => '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/ajax.chat.master.sidebar.tpl',
      1 => 1650267159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d48dbb3edb9_49978613 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_friends']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
        <li class="feeds-item">
            <div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
">
                <div class="data-avatar">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
">
                </div>
                <div class="data-content">
                    <div class="float-right">
                        <i class="fa fa-circle <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_is_online']) {?>online<?php } else { ?>offline<?php }?>"></i>
                    </div>
                    <div>
                        <strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_status_enabled'] && !$_smarty_tpl->tpl_vars['_user']->value['user_is_online']) {?>
                            <br>
                            <small>
                                <?php ob_start();
echo __("Last Seen");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_last_seen'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_last_seen'];?>
</span>
                            </small>
                        <?php }?>
                    </div>
                </div>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
