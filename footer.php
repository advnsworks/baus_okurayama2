<!-- footer -->
<div class="footer-nav pc">
	<p>
		<a href="index.html"><img src="images/f_top.png" alt="TOP"/></a> ｜
		<a href="landscape.html"><img src="images/f_landscape.png" alt="LANDSCAPE"/></a> ｜
		<a href="design.html"><img src="images/f_dezign.png" alt="DESIGN"/></a> ｜
		<a href="location.html"><img src="images/f_location.png" alt="LOCATION"/></a> ｜
		<a href="access.html"><img src="images/f_access.png" alt="ACCESS"/></a> ｜
		<a href="plan.html"><img src="images/f_plan.png" alt="PLAN"/></a> ｜
		<a href="modelhouse.html"><img src="images/f_modelhouse.png" alt="MODEL HOUSE"/></a> ｜
		<a href="quality.html"><img src="images/f_quality.png" alt="QUALITY"/></a> ｜
		<a href="https://www.baus-web.jp/owners/" target="_blank"><img src="images/f_brand.png" alt="BRAND"/></a>
		 ｜
		<a href="map/map.html" target="_blank">現地案内図</a> ｜
		<a href="outline/outline.html" target="_blank">物件概要</a> ｜
<!--		<a href="https://www.baus-web.jp/reserve/form-bg-miyazakidai/" target="_blank">来場予約</a> ｜
		<a href="https://www.baus-web.jp/form/contact/index.php?id=2345" target="_blank">資料請求</a>-->
	</p>
</div>
<div class="footer-nav sp">
	<ul class="footer-nav-ul">
		<li>
			<a href="index.html">TOP</a>
		</li>
		<li>
			<a href="landscape.html">LANDSCAPE</a>
		</li>
		<li>
			<a href="design.html">DESIGN</a>
		</li>
		<li>
			<a href="location.html">LOCATION</a>
		</li>
		<li>
			<a href="access.html">ACCESS</a>
		</li>
		<li>
			<a href="plan.html">PLAN</a>
		</li>
		<li>
			<a href="modelhouse.html">MODEL HOUSE</a>
		</li>
		<li>
			<a href="quality.html">QUALITY</a>
		</li>
		<li>
			<a href="https://www.baus-web.jp/owners/" target="_blank">BRAND</a>
		</li>
		<li>
			<a href="map.html" target="_blank">現地案内図</a>
		</li>
		<li>
			<a href="outline.html" target="_blank">物件概要</a>
		</li>
<!--		<li>
			<a href="https://www.baus-web.jp/form/contact/index.php?id=2363" target="_blank">物件エントリー</a>
		</li>
		<li style="width: 100%; border-bottom: 0;">
            <a href="https://www.baus-web.jp/reserve/form-bg-okurayama/" target="_blank">来場予約</a>
          </li>
		<li>
			<a href="login.html" target="_blank">物件エントリー者様限定サイト</a>
		</li>-->
	</ul>
	<p class="clear"></p>
</div>
<div class="container">
	<div class="footer-wrapper">
		<div class="pc">
			<div class="foot-flex">
				<div class="footer-tel">
					<p>
						<img src="images/footer_tel.png" alt="お問い合わせは「バウスガーデン大倉山」現地販売センター　0120-000-000　営業時間／10：00～17：00　定休日／水・木曜日、第2火曜日、第4火曜日（祝日を除く）"> </p>
				</div>
				<div class="footerLogoArea">
					<p>
						<a href="https://www.nittochi.co.jp/" target="_blank">
							<img src="images/footer_logo.png" alt="日本土地建物" /> </a>
					</p>
				</div>
				<p class="clear"></p>
			</div>
		</div>
		<div class="sp">
			<p class="footer-tel">
				<a href="tel:0120170980">
					<img src="images/sp/footer_tel.png" alt="お問い合わせは「バウスガーデン宮崎台」現地販売センター　0120-664-941　営業時間／10：00～17：00　定休日／水・木曜日、第2火曜日、第4火曜日（祝日を除く）"
					/> </a>
			</p>
			<p class="footerLogoArea">
				<a href="https://www.nittochi.co.jp/" target="_blank">
					<img src="images/sp/footer_logo.png" alt="日本土地建物" /> </a>
			</p>
		</div>
	</div>
</div>
<address> Copyright Chuo-Nittochi Co., Ltd. All Rights Reserved. </address>
<!-- /.footer -->
<!-- PC pagetop -->
<!--<div class="pc">
	<div id="page-top">
		<a href="#wraplink" data-scroll>
			<img src="images/pagebtn.png" width="70" height="70" alt="PAGE TOP" /> </a>
	</div>
</div>-->
<!-- SP fixfooter -->
<!--<div class="sp_footerfixArea sp">
	<ul class="flex-ul">
		<li>
			<a href="tel:0120170980">
				<img src="images/sp/footerfix_bt01.png" alt="TEL" /> </a>
		</li>
		<li>
			<a href="https://www.baus-web.jp/form/contact/index.php?id=2363" target="_blank">
				<img src="images/sp/footerfix_bt03.png" alt="物件エントリー" /> </a>
		</li>
		<li>
			<a href="login.html" target="_blank">
				<img src="images/footerfix_gentei.png" alt="限定サイト" /> </a>
		</li>
		<li>
			<a href="https://www.baus-web.jp/reserve/form-bg-okurayama/" target="_blank">
				<img src="images/footerfix_yoyaku.png" alt="来場予約" /> </a>
		</li>
		
		
	</ul>
</div>-->


<script type="text/javascript">
	$(window).on('load resize', function() {
		var width = $(window).width();
		var border = 768;
		if (width < border) {
			$(".toggleImg").each(function() {
				$(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
			})
		} else {
			$(".toggleImg").each(function() {
				$(this).attr("src", $(this).attr("src").replace("_sp", "_pc"));
			})
		}
	});
	$(window).on('load resize', function() {
		var width = $(window).width();
		var border = 768;
		if (width < border) {
			$(".toggleImg li span").each(function(e) {
				var bg = $(this).css('background-image');
				bg = bg.replace("_pc", "_sp");
				$(this).css('background-image', bg);
			})
		} else {
			$(".toggleImg li span").each(function(e) {
				var bg = $(this).css('background-image');
				bg = bg.replace("_sp", "_pc");
				$(this).css('background-image', bg);
			})
		}
	});
</script>


</body>

</html>