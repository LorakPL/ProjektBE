<?php
/**
*
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    Piotr Karecki <tech@dotpay.pl>
*  @copyright dotpay
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*
*/

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_0_8($module)
{
        // Process Module upgrade to 0.8
	unlink(__FILE__.'/../confirmation.php');
	unlink(__FILE__.'/../confirmation.tpl');
	unlink(__FILE__.'/../dotpay.jpg');
	unlink(__FILE__.'/../dotpay.tpl');
	unlink(__FILE__.'/../dp_pay.tpl');
	unlink(__FILE__.'/../payment.php');
	unlink(__FILE__.'/../pl.php');
	unlink(__FILE__.'/../urlc.php');
	return $module; 
}