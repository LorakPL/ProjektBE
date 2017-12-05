<?php /* Smarty version Smarty-3.1.19, created on 2017-11-20 14:11:27
         compiled from "/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11194952155a12d47fa405b4-87797881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa20d1c49b1737f6550aada2464c4e678a740ac0' => 
    array (
      0 => '/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1507213303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11194952155a12d47fa405b4-87797881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a12d47fa4d231_36751568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a12d47fa4d231_36751568')) {function content_5a12d47fa4d231_36751568($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
