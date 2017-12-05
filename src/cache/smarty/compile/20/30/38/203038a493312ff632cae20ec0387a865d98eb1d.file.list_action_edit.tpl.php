<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 23:18:07
         compiled from "/var/www/html/wndxtywws7kxuaby/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6253493585a271b1fd597e1-52280812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '203038a493312ff632cae20ec0387a865d98eb1d' => 
    array (
      0 => '/var/www/html/wndxtywws7kxuaby/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1512507207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6253493585a271b1fd597e1-52280812',
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
  'unifunc' => 'content_5a271b1fdccbc5_53733274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a271b1fdccbc5_53733274')) {function content_5a271b1fdccbc5_53733274($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
