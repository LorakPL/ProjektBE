/**
 * 2007-2015 PrestaShop
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
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2015 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 **/

/* globals $, ga, jQuery */

var GoogleAnalyticEnhancedECommerce = {

	setCurrency: function(Currency) {
		ga('set', '&cu', Currency);
	},

	add: function(Product, Order, Impression) {
		var Products = {};
		var Orders = {};

		var ProductFieldObject = ['id', 'name', 'category', 'brand', 'variant', 'price', 'quantity', 'coupon', 'list', 'position', 'dimension1'];
		var OrderFieldObject = ['id', 'affiliation', 'revenue', 'tax', 'shipping', 'coupon', 'list', 'step', 'option'];

		if (Product != null) {
			if (Impression && Product.quantity !== undefined) {
				delete Product.quantity;
			}

			for (var productKey in Product) {
				for (var i = 0; i < ProductFieldObject.length; i++) {
					if (productKey.toLowerCase() == ProductFieldObject[i]) {
						if (Product[productKey] != null) {
							Products[productKey.toLowerCase()] = Product[productKey];
						}

					}
				}

			}
		}

		if (Order != null) {
			for (var orderKey in Order) {
				for (var j = 0; j < OrderFieldObject.length; j++) {
					if (orderKey.toLowerCase() == OrderFieldObject[j]) {
						Orders[orderKey.toLowerCase()] = Order[orderKey];
					}
				}
			}
		}

		if (Impression) {
			ga('ec:addImpression', Products);
		} else {
			ga('ec:addProduct', Products);
		}
	},

	addProductDetailView: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'detail');
		ga('send', 'event', 'Produkt', '(Szczegoly)', 'Szczegoly produktu '+Product['name'], Product['id'],{'nonInteraction': 1});
	},

	addToCart: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'add', {list: Product['list']});
		ga('send', 'event', 'Koszyk', '(Dodanie)', 'Dodanie do koszyka produktu '+Product['name'], Product['id']); // Send data using an event.
	},
	
	setGaAjaxComplete: function(func){
	},

	removeFromCart: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'remove');
		ga('send', 'event', 'Koszyk', '(Usuniecie)', 'Usuniecie z koszyka produktu '+Product['name'], Product['id']); // Send data using an event.
	},

	addProductImpression: function(Product) {
		//ga('send', 'pageview');
	},

	/**
	id, type, affiliation, revenue, tax, shipping and coupon.
	**/
	refundByOrderId: function(Order) {
		/**
		 * Refund an entire transaction.
		 **/
		ga('ec:setAction', 'refund', {
			'id': Order.id // Transaction ID is only required field for full refund.
		});
		ga('send', 'event', 'Transakcja', 'Zwrot', {'nonInteraction': 1});
	},

	refundByProduct: function(Order) {
		/**
		 * Refund a single product.
		 **/
		//this.add(Product);

		ga('ec:setAction', 'refund', {
			'id': Order.id, // Transaction ID is required for partial refund.
		});
		ga('send', 'event', 'Transakcja', 'Zwrot', {'nonInteraction': 1});
	},

	addProductClick: function(Product) {
		var ClickPoint = jQuery('a[href$="' + Product.url + '"].quick-view');

		ClickPoint.on("click", function() {
			GoogleAnalyticEnhancedECommerce.add(Product);
			ga('ec:setAction', 'click', {
				list: Product.list
			});

			ga('send', 'event', 'Produkt', 'Wyswietlenie szczegolow', Product.list, {
				'hitCallback': function() {
					return !ga.loaded;
				}
			});
		});

	},

	addProductClickByHttpReferal: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'click', {
			list: Product.list
		});

		ga('send', 'event', 'Produkt', '(Click)', 'Klikniecie produktu '+Product['name'], {
			'nonInteraction': 1,
			'hitCallback': function() {
				return !ga.loaded;
			}
		});

	},

	addTransaction: function(Order) {

		//this.add(Product);
		ga('ec:setAction', 'purchase', Order);
		ga('send', 'event','Transakcja','Zakup', {
			'hitCallback': function() {
				$.get(Order.url, {
					orderid: Order.id,
					customer: Order.customer
				});
			}
		});

	},

	addCheckout: function(Step) {
		ga('ec:setAction', 'checkout', {
			'step': Step
		});
		ga('send', 'event', 'Transakcja', 'Podsumowanie '+ Step, '',{
			hitCallback: function() {}
		});
	},
	
	registerProductClickActions:function(referralList){
		$('li.ajax_block_product a.product_img_link').each(function(){
				var element=$(this);
				var title=element.attr('title');
				var id=element.parent().parent().parent().find('a.ajax_add_to_cart_button').attr('data-id-product');
				$('li.ajax_block_product a[href="'+element.attr('href')+'"][class!="add_to_compare"]').click(function(){
					Product={'id':id,'name':title,'list':referralList};
					GoogleAnalyticEnhancedECommerce.addProductClickByHttpReferal(Product);
				});				
			});
	},

	referralListName: '',
	
	registerGlobalActions: function(activeNewClicks, categoryName, controllerName){
		
		$('a.ajax_add_to_cart_button').each(function(){
			var element=$(this);
			element.click(function(){
				
				if(activeNewClicks==false)return;
				if(GoogleAnalyticEnhancedECommerce.referralListName!='')
					categoryName=GoogleAnalyticEnhancedECommerce.referralListName;
				var id=element.attr('data-id-product');
				var name=element.parent().parent().find('a.product-name').attr('title');
				GoogleAnalyticEnhancedECommerce.addToCart({'id':id,'name':name, 'quantity':1, 'list':categoryName});
			});
		});
		
		if(activeNewClicks==false)return;
		
		if(categoryName!=''){
			var referralList="Kategoria "+categoryName;
			GoogleAnalyticEnhancedECommerce.registerProductClickActions(referralList);
			categoryName="Kategoria "+categoryName;
		}		
		
	},	
	
	registerHomeActions: function(activeNewClicks){
		GoogleAnalyticEnhancedECommerce.referralListName="Strona glowna";
				
		$('li.ajax_block_product a.product_img_link').each(function(){
				var element=$(this);
				var title=element.attr('title');
				var id=element.parent().parent().parent().find('a.ajax_add_to_cart_button').attr('data-id-product');
					Product={'id':id,'name':title,'list':referralList};
					GoogleAnalyticEnhancedECommerce.add(Product,null, true);
			});
		
	},
	
	registerCartActions:function(activeNewClicks){
		if(activeNewClicks==false)return;
		var prevUpQuantity=upQuantity;
		upQuantity=function(id, qty){
			var prevAjax=$('input[name="quantity_'+id+'"]').val();
			prevUpQuantity(id, qty);
			
			setTimeout(function(){
			var quantity=1;
			if(qty===undefined)
				quantity=1;
			else quantity=qty;
			Product={'id':id.split('_')[0],'quantity':quantity, 'list':'Koszyk'}
			
			var afterAjax=$('input[name="quantity_'+id+'"]').val();
			if(prevAjax==afterAjax)
				GoogleAnalyticEnhancedECommerce.addToCart(Product);
			},1000);
			
		}
		var prevDownQuantity=downQuantity;
		downQuantity=function(id, qty){
			var prevAjax=$('input[name="quantity_'+id+'"]').val();
			prevDownQuantity(id,qty);
			
			setTimeout(function(){
			var quantity=1;
			if(qty===undefined)
				quantity=1;
			else quantity=-qty;
			Product={'id':id.split('_')[0],'quantity':quantity, 'list':'Koszyk'};
			
			var afterAjax=$('input[name="quantity_'+id+'"]').val();
			if(prevAjax==afterAjax)
				GoogleAnalyticEnhancedECommerce.removeFromCart(Product);
			},1000);
			
		}
		var prevDeleteProductFromSummary=deleteProductFromSummary;
		deleteProductFromSummary=function(id){
			Product={'id':id.split('_')[0],'quantity':$('input[name="quantity_'+id+'_hidden"]').val(), 'list':'Koszyk'};
			GoogleAnalyticEnhancedECommerce.removeFromCart(Product);
			prevDeleteProductFromSummary(id, null, true);
		}
	}
};
