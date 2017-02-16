<section class="section section__padding section__slider">
	<div class="container">
		<div class="dd-title-slide">
			<span>Отзывы наших клиентов</span>
		</div>
		<div class="dd-slide__testemonials">
			<div class="item">
				<div class="item__box">
					<div class="dd-img-box">
						<img src="img/otziv1.png" alt="">
					</div>
					<div class="item__box__element">
						<p>Начала работу с MLP Fashion в 2014 году. Всегда приятное общение, хороший срок, быстрая обратная связь. Стали работать с подругами из Назрани и Грозного.
							Так что спасибо большое! Надеюсь, так и продолжим работу.
						</p>
					</div>
					<span>Магазин Патимат, Махачкала</span>
				</div>
			</div>
			<div class="item">
				<div class="item__box">
					<div class="dd-img-box">
						<img src="img/otziv2.png" alt="">
					</div>
					<div class="item__box__element">
						<p>Ребята молодцы. Доставляют груз в удобное время и место. Неважно, выходной или будний день.
						</p>
						<p>
							Такие тарифы, которые сделали они для моего магазина, не мог предложить никто. Бывали, конечно, задержки товара на пару дней этой осенью, но по сравнению с остальными карго-компаниями, у которых груз стоял неделями, они просто молодцы.
						</p>
					</div>
					<span>Елена, магазин Valenza, Санкт-Петербург</span>
				</div>
			</div>
			<div class="item">
				<div class="item__box">
					<div class="dd-img-box">
						<img src="img/otziv3.png" alt="">
					</div>
					<div class="item__box__element">
						<p>На начальном этапе сотрудничества они творили просто чудеса. Умудрялись забрать товар тогда, когда другие говорили, что физически не успеют на пятничную отправку.
						</p>
						<p>
							Тарифы на уровне, сервис на уровне, всегда приятное общение и быстрая обратная связь. Одним словом, рекомендовала бы всем в своем городе…
							Но не хочется помогать конкурентам.
						</p>
					</div>
					<span>Кристина, бутик MILANO, Новокузнецк</span>
				</div>
			</div>
		</div>
		<div class="button-slide">
			<a class="button-1" name="modal" href="#log-in12">Расчитать стоимость доставки</a>
		</div>
	</div>
</section>

<script>
	var owl = $(".dd-slide__testemonials");

	owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="dd-left"></span>','<span class="dd-right"></span>'],
        responsive:{
        	0:{
        		items:1
        	},       
        	1000:{
        		items:2
        	},
        	1248:{
        		items:3
        	}
        }
    });
</script>