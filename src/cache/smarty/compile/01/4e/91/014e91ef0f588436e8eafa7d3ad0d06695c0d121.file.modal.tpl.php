<?php /* Smarty version Smarty-3.1.19, created on 2018-01-19 00:54:10
         compiled from "/var/www/html/wndxtywws7kxuaby/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16121158835a6133a3025d24-37094842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014e91ef0f588436e8eafa7d3ad0d06695c0d121' => 
    array (
      0 => '/var/www/html/wndxtywws7kxuaby/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1507216902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16121158835a6133a3025d24-37094842',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6133a3051a31_40230517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6133a3051a31_40230517')) {function content_5a6133a3051a31_40230517($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
