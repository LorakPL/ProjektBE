<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 21:34:38
         compiled from "/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/controllers/modules/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31754043759fcd2de45c1f5-80902867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2366708052f6077d7c8c55e2c85a4a0146838e' => 
    array (
      0 => '/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/controllers/modules/configure.tpl',
      1 => 1507213303,
      2 => 'file',
    ),
    '838500f4ea72e88c290d459ade91cd7b31b5bc31' => 
    array (
      0 => '/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/page_header_toolbar.tpl',
      1 => 1507213303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31754043759fcd2de45c1f5-80902867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'page_header_toolbar_title' => 0,
    'page_header_toolbar_btn' => 0,
    'breadcrumbs2' => 0,
    'toolbar_btn' => 0,
    'k' => 0,
    'table' => 0,
    'btn' => 0,
    'help_link' => 0,
    'tab_modules_open' => 0,
    'tab_modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fcd2de690bb9_69971078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fcd2de690bb9_69971078')) {function content_59fcd2de690bb9_69971078($_smarty_tpl) {?>


<?php if (!isset($_smarty_tpl->tpl_vars['title']->value)&&isset($_smarty_tpl->tpl_vars['page_header_toolbar_title']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_header_toolbar_title']->value, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['toolbar_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value, null, 0);?>
<?php }?>

<div class="bootstrap">
	<div class="page-head">
		
<h2 class="page-title">
	<?php echo smartyTranslate(array('s'=>'Configure'),$_smarty_tpl);?>

</h2>
<h4 class="page-subtitle"><?php echo $_smarty_tpl->tpl_vars['module_display_name']->value;?>
</h4>


		
<ul class="breadcrumb page-breadcrumb">
	<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!='') {?>
		<li class="breadcrumb-current">
			<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!='') {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'], ENT_QUOTES, 'UTF-8', true);?>

			<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!='') {?></a><?php }?>
		</li>
	<?php }?>
	<li><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</li>
	<li>
		<i class="icon-wrench"></i>
		<?php echo smartyTranslate(array('s'=>'Configure'),$_smarty_tpl);?>

	</li>
</ul>

		
<script type="text/javascript">
	var header_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Confirm reset'),$_smarty_tpl);?>
';
	var body_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Would you like to delete the content related to this module ?'),$_smarty_tpl);?>
';
	var left_button_confirm_reset = '<?php echo smartyTranslate(array('s'=>'No - reset only the parameters'),$_smarty_tpl);?>
';
	var right_button_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Yes - reset everything'),$_smarty_tpl);?>
';
</script>
<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
			<li>
				<a id="desc-module-back" class="toolbar_btn" href="javascript: window.history.back();" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">
					<i class="process-icon-back"></i>
					<div><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<!-- <li>
				<a id="desc-module-disable" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_disable_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
">
					<i class="process-icon-off"></i>
					<div><?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<li>
				<a id="desc-module-uninstall" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_uninstall_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
">
					<i class="process-icon-uninstall"></i>
					<div><?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<li>
				<a id="desc-module-reset" class="toolbar_btn <?php if ($_smarty_tpl->tpl_vars['is_reset_ready']->value) {?>reset_ready<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['module_reset_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
">
					<i class="process-icon-reset"></i>
					<div><?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
</div>
				</a>
			</li> -->
			<?php if (isset($_smarty_tpl->tpl_vars['trad_link']->value)) {?>
			<li>
				<a id="desc-module-translate" data-toggle="modal" data-target="#moduleTradLangSelect" class="toolbar_btn" href="#" title="<?php echo smartyTranslate(array('s'=>'Translate'),$_smarty_tpl);?>
">
					<i class="process-icon-flag"></i>
					<div><?php echo smartyTranslate(array('s'=>'Translate'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['module_update_link']->value)) {?>
			<li>
				<a id="desc-module-update" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_update_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
">
					<i class="process-icon-refresh"></i>
					<div><?php echo smartyTranslate(array('s'=>'Check update'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php }?>
			<li>
				<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_hook_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
">
					<i class="process-icon-anchor"></i>
					<div><?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
</div>
				</a>
			</li>
		</ul>
	</div>
</div>



	</div>
</div>
<?php }} ?>
