<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 21:35:26
         compiled from "/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195006030259fcd30e0522a6-40737267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11fa2b67d7256a7dcaaf5d4c37c1a0a375589c3e' => 
    array (
      0 => '/www/artur_www/www/projekt_BE/wndxtywws7kxuaby/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1507213303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195006030259fcd30e0522a6-40737267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fcd30e08bc62_36704408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fcd30e08bc62_36704408')) {function content_59fcd30e08bc62_36704408($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
