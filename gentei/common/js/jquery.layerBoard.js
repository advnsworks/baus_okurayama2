/*
 * ===================================================================
 *	jquery.layerBoard.js
 *	@auther:kiyoty
 *	@URI:http://www.idea-clippin.com
 *	@create:2012/12/30
 * 	@License:MIT License(X11 License縲々 License)
 * ===================================================================
 *
 * -------------------------------------------------------------------
 *	opition
 * -------------------------------------------------------------------
 * delayTime		//陦ｨ遉ｺ縺ｾ縺ｧ縺ｮ蠕�■譎る俣
 * fadeTime			//陦ｨ遉ｺ縺ｮ繝輔ぉ繝ｼ繝画凾髢�
 * alpha				//繝ｬ繧､繝､繝ｼ縺ｮ騾乗�蠎ｦ
 * limitMin			//菴募�邨碁℃蠕後↓蜀榊ｺｦ陦ｨ遉ｺ縺吶ｋ縺�
 * easing				//繧､繝ｼ繧ｸ繝ｳ繧ｰ
 * limitCookie	//cookie菫晏ｭ俶悄髢�
 *
 * -------------------------------------------------------------------
 *	Example
 *	$('#layer_board_area').layerBoard({alpha:0.5});
 * -------------------------------------------------------------------
*/

(function($) {

  $.fn.layerBoard = function(option) {

		var elements = this;

		elements.each(function(){

			option = $.extend({
				delayTime: 200,						//陦ｨ遉ｺ縺ｾ縺ｧ縺ｮ蠕�■譎る俣
				fadeTime : 500,						//陦ｨ遉ｺ縺ｮ繝輔ぉ繝ｼ繝画凾髢�
				alpha : 0.5,							//繝ｬ繧､繝､繝ｼ縺ｮ騾乗�蠎ｦ

				limitMin : 1,							//菴募�邨碁℃蠕後↓蜀榊ｺｦ陦ｨ遉ｺ縺吶ｋ縺�

				easing: 'linear',					//繧､繝ｼ繧ｸ繝ｳ繧ｰ

				limitCookie : 1	 					//cookie菫晏ｭ俶悄髢�
			}, option);


			var limitSec = option.limitMin * 60; //遘呈焚縺ｫ螟画鋤


			if ($.cookie('layerBoardTime') == null) {

				/*----------------------------------------
					cookie縺後↑縺��ｴ蜷�
				 ----------------------------------------*/
				LayerBoardFunc ();

				//cookie縺ｫ迴ｾ蝨ｨ縺ｮ譎る俣繧偵そ繝�ヨ
				var start = new Date();
				$.cookie('layerBoardTime', start.getTime(), { expires: option.limitCookie,path: '/' });


			} else {

				/*----------------------------------------
					cookie縺後≠繧句�ｴ蜷�
				 ----------------------------------------*/

				//迴ｾ蝨ｨ縺ｮ繝溘Μ遘偵ｒ蜿門ｾ励＠縲∫ｧ呈焚縺ｫ螟画鋤
				var now = new Date();
				secDiff = now.getTime() - $.cookie('layerBoardTime');
				secTime = Math.floor( secDiff / 1000);


				//謖�ｮ壽凾髢薙ｒ邨碁℃縺励※縺�◆蝣ｴ蜷医�縲´ayerBoard繧定｡ｨ遉ｺ
				//cookie繧貞炎髯､蠕後∝�蠎ｦcookie縺ｫ迴ｾ蝨ｨ縺ｮ繝溘Μ遘偵ｒ繧ｻ繝�ヨ
				if (secTime >= limitSec) {

					LayerBoardFunc ();

					$.cookie('layerBoardTime', null, { expires:-1,path: '/' });

					var start = new Date();
					$.cookie('layerBoardTime', start.getTime(), { expires:option.limitCookie,path: '/' });

				}

			}


			/*----------------------------------------
				陦ｨ遉ｺ蜃ｦ逅�
			 ----------------------------------------*/
			function LayerBoardFunc () {


				$('.layer_board_bg', elements).show().animate({opacity: 0},0).delay(option.delayTime).animate({opacity: option.alpha},option.fadeTime,function(){
					$('.layer_board', elements).fadeIn(option.fadeTime);
				})

			}


			/*----------------------------------------
				髱櫁｡ｨ遉ｺ蜃ｦ逅�
			 ----------------------------------------*/
			$('.layer_board_bg', elements).click(function() {

				$('.layer_board', elements).fadeOut(option.fadeTime);
				$(this).fadeOut(option.fadeTime);


			});


			//close繝懊ち繝ｳ縺ｮ蝣ｴ蜷�
			$('.btn_close', elements).click(function() {

				$('.layer_board', elements).fadeOut(option.fadeTime);
				$('.layer_board_bg', elements).fadeOut(option.fadeTime);


			});



			/*----------------------------------------
				繝懊ち繝ｳ縺ｫ繧医ｋ陦ｨ遉ｺ蜃ｦ逅�
			 ----------------------------------------*/
			$('.layer_board_btn').click(function() {

				$('.layer_board_bg', elements).show().animate({opacity: 0},0).delay(option.delayTime).animate({opacity: option.alpha},option.fadeTime,function(){
					$('.layer_board', elements).fadeIn(option.fadeTime);
				});

			});

		});

		return this;

	};

})( jQuery );
