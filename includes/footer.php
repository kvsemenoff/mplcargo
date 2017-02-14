<section class="section section__padding section__footer">
	<div class="container">
		<div class="row">

			<div class="dd-logo-wrap dd-logo-wrap__footer dd-float__left margin-center">
				<div class="dd-logo-img dd-float__left_min">
					<img src="img/logo.png" alt="">
				</div>	
				<div class="dd-logo-txt dd-float__left_min">
					<span class="copy">© 2017  ООО «Компания»</span><br>
					<a class="privacy" href="#">Политика конфиденциальности</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="logo-diz dd-float__left margin-center">
				<span>Разработка дизайна</span>
				<img src="img/develop.png" alt="">
			</div>

			<!-- Правая часть -->
			<div class="dd-right-wrap dd-float__left">
				<div class="dd-green text__center dd-float__left ">
					<span>Звонок по России, турции<br>
						и Италии бесплатный
					</span>
				</div>
				<div class="dd-numbers dd-float__left">
					<div class="dd-numbers__box number__style text__center dd-float__left">
						<span class="rus-number">8 800 350 02 05</span>
					</div>
					<div class="dd-numbers__box text__center dd-float__left">
						<div class="dd-tyrkey text__center">
							<a class="number__style turkey-number" href="#">+90 212 900 89 56</a>
						</div>
						<div class="dd-italy text__center">
							<a class="number__style turkey-number" href="#">+88 888 988 89 56</a>
						</div>
						<div class="dd-links-h-w">	
							<a class="dd-links-h dd-links-h1" href="#">Турция</a>
							<a class="dd-links-h dd-links-h2" href="#">Италия</a>
						</div>
					</div>	

					<div class="clearfix"></div>	
				</div>
			</div>
			<div class="dd-numbers__box text__center dd-float__right">
				<div class="dd-soc-ico ">
					<span><img src="img/whatsapp_logo.png" alt=""></span>
					<span><img src="img/viber_logo.png" alt=""></span>
					<span><img src="img/skype_logo.png" alt=""></span>
				</div>
				<span class="number__style">+7 921 8914384</span><br>
				<a class="dd-links-h" href="#">Заказать звонок</a>
			</div>	
			<div class="clearfix"></div>
			<!-- конец правой части -->
		</div>
	</div>
</section>

<script>
	$('.dd-tyrkey').click(function(e){
		e.preventDefault();		
		$('.dd-italy').each(function(){
			if ($(this).css('display') == 'inline-block' ){
				$(this).css("display","none");
				$(this).prev(".dd-tyrkey").show();
			}
		});
		$(this).css("display","none");
		$(this).next('.dd-italy').css("display","inline-block");	
	});
	$('.dd-italy').click(function(e){	
		e.preventDefault();			
		$(this).css("display","none");
		$(this).prev('.dd-tyrkey').css("display","inline-block");		
	});
</script>