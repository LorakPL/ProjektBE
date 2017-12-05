<?php /*%%SmartyHeaderCode:115554148259fcd20b6f9b94-98845767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c66164fcf7e53b7200fa34f7a916b1e1e52b860' => 
    array (
      0 => '/www/artur_www/www/projekt_BE/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1507213303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115554148259fcd20b6f9b94-98845767',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1c5b507402e3_45152801',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c5b507402e3_45152801')) {function content_5a1c5b507402e3_45152801($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//www.artur.iq.pl/projekt_BE/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Szukaj" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Szukaj</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
