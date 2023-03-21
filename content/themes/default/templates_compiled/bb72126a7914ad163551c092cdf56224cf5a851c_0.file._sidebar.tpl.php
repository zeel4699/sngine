<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-18 11:17:45
  from '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_625d48d9a43fa0_62424871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb72126a7914ad163551c092cdf56224cf5a851c' => 
    array (
      0 => '/home/cxnwwvpl/ajay-dev.com/sngine/content/themes/default/templates/_sidebar.tpl',
      1 => 1650267162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 27,
  ),
),false)) {
function content_625d48d9a43fa0_62424871 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card main-side-nav-card">
    <div class="card-body with-nav">
        <ul class="main-side-nav">
            <!-- basic -->
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                    <img class="rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
</span>
                </a>
            </li>

            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
                    <?php echo __("Messages");?>

                </a>
            </li>

            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Settings");?>

                </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dashboard",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Admin Panel");?>

                    </a>
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dashboard",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Moderator Panel");?>

                    </a>
                </li>
            <?php }?>
            <!-- basic -->

            <!-- favorites -->
            <li class="ptb5">
                <strong><small class="text-muted"><?php echo mb_strtoupper(__("favorites"), 'UTF-8');?>
</small></strong>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>class="active"<?php }?>>
                <?php if (!$_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled'] && !$_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("News Feed");?>

                    </a>
                <?php } else { ?>
                    <a href="#newsfeed" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>aria-expanded="true"<?php }?>>
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("News Feed");?>

                    </a>
                    <div class='collapse <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>show<?php }?>' id="newsfeed">
                        <ul>
                            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_recent",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                    <?php echo __("Recent Updates");?>

                                </a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "popular") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/popular">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"popularity",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                        <?php echo __("Popular Posts");?>

                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "discover") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/discover">
                                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_discover",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                        <?php echo __("Discover Posts");?>

                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                <?php }?>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled'] && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "articles") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/articles">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"articles",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("My Articles");?>

                    </a>
                </li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled'] && $_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/products">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("My Products");?>

                    </a>
                </li>
            <?php }?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"saved",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Saved Posts");?>

                </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "memories") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/memories">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"memories",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Memories");?>

                    </a>
                </li>
            <?php }?>
            <!-- favorites -->

            <!-- advertising -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_enabled'] || $_smarty_tpl->tpl_vars['system']->value['wallet_enabled'] || $_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                <li class="ptb5">
                    <small class="text-muted"><?php echo mb_strtoupper(__("Advertising"), 'UTF-8');?>
</small>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_enabled']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "ads" && $_smarty_tpl->tpl_vars['view']->value != "wallet") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo __("Ads Manager");?>

                        </a>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "ads" && $_smarty_tpl->tpl_vars['view']->value == "wallet") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo __("Wallet");?>

                        </a>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_posts") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/posts">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted_posts",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo __("Boosted Posts");?>

                        </a>
                    </li>
                    
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/pages">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted_pages",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                <?php echo __("Boosted Pages");?>

                            </a>
                        </li>
                    <?php }?>
                <?php }?>
            <?php }?>
            <!-- advertising -->

            <!-- explore -->
            <li class="ptb5">
                <small class="text-muted"><?php echo mb_strtoupper(__("explore"), 'UTF-8');?>
</small>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "people") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("People");?>

                </a>
            </li>
            
            <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Pages");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "groups") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Groups");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "events") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Events");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Blogs");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Marketplace");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Forums");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "movies") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Movies");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "games") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Games");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled'] || $_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "developers") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers<?php if (!$_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>/share<?php }?>">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"developers",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Developers");?>

                    </a>
                </li>
            <?php }?>
            <!-- explore -->
        </ul>
    </div>
</div><?php }
}
