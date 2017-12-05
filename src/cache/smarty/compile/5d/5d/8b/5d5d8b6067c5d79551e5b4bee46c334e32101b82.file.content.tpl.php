<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 20:09:56
         compiled from "/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95756678059fcbf044af679-26584023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5d8b6067c5d79551e5b4bee46c334e32101b82' => 
    array (
      0 => '/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/content.tpl',
      1 => 1507213303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95756678059fcbf044af679-26584023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fcbf044b9b17_24997832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fcbf044b9b17_24997832')) {function content_59fcbf044b9b17_24997832($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
