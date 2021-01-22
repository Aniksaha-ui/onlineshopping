		@extends("AdminPages.Dashboard")
		@Section("form")

		<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<random class="title">Carousel Slider</random>
					<!-- start content_slider -->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider1.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider2.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider3.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider4.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider5.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider6.jpg')}}" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="{{asset('shop/images/slider7.jpg')}}" alt="name">
						</div>
						
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
		@endsection