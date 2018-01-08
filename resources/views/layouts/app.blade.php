<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
	{{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.3.0/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style6.css') }}" />
	<script src="{{ asset('/js/modernizr-custom.js') }}"></script>

	 <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	

	<style>
		body, html {
			font-family: 'Unica One', cursive ! important;
		}
	</style>


</head>
<body class="demo-6">
    <div id="app" class="wrapper">

		     <!-- Sidebar Holder -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="ion-android-close"></i>
                </div>

                <div class="sidebar-header text-uppercase bg-dark">
					Latest News
				</div>

				<div class="row mt-3 ml-2">
					<div class="col-3 p-0">
						<img class="img-fluid" src="{{ asset('/img/thumbs_dummies/10.jpg') }}">
					</div>
					<div class="col-9">
						<span>
							Some Article Title
						</span>
						<br/>
						<small class="text-muted text-uppercase">
							september 10, 2017
						</small>
					</div>

				</div>

				<div class="row mt-3 ml-2">
					<div class="col-3 p-0">
						<img class="img-fluid" src="{{ asset('/img/thumbs_dummies/7.jpg') }}">
					</div>
					<div class="col-9">
						<span>
						 consectetuer adipiscing elit
						</span>
						<br/>
						<small class="text-muted text-uppercase">
							april 10, 2018
						</small>
					</div>

				</div>

				<div class="row mt-3 ml-2">
					<div class="col-3 p-0">
						<img class="img-fluid" src="{{ asset('/img/thumbs_dummies/3.jpg') }}">
					</div>
					<div class="col-9">
						<span>
							lorem ipsum 
						</span>
						<br/>
						<small class="text-muted text-uppercase">
							march 16, 2018
						</small>
					</div>

				</div>

             
            </nav>

		<div id="content">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<a class="navbar-brand" style="font-size: 20px;" href="#">
				WEBER AMORES
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto text-uppercase">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Video</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="sidebarCollapse" href="javascript::void(0);"><i class="ion-android-menu text-dark" style="font-size: 20px;"></i></a>
					</li>
				</ul>
			</div>
		</nav>
       

        <div class="container">

				
				<!-- /content -->
            	@yield('content')
			   
		</div>
		
		<div class="row footer p-3 bg-dark">
			<div class="col">
				<span class="text-muted small">
					© 2011-2018 Weber Amores. All rights reserved.
				</span>
			</div>
		</div>

		</div>

	</div>
	
	<div class="overlay"></div>

    <!-- Scripts -->
	{{--  <script src="{{ asset('js/app.js') }}"></script>  --}}

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	

	
  <script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('/js/classie.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
	
	<!-- jQuery Custom Scroller CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
   	<script type="text/javascript">
		$(document).ready(function () {
			$("#sidebar").mCustomScrollbar({
				theme: "minimal"
			});

			$('#dismiss, .overlay').on('click', function () {
				$('#sidebar').removeClass('active');
				$('.overlay').fadeOut();
			});

			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').addClass('active');
				$('.overlay').fadeIn();
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
			});
		});
	</script>
	
		<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : 1,
					y : -0.75
				},
				pagemargin : 50,
				onOpenItem : function(instance, item) {
					var win = {width: window.innerWidth, height: window.innerHeight};
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 150);
								el.style.WebkitTransition = 'opacity .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1), -webkit-transform .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';
								el.style.transition = 'opacity .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1), transform .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';
							
								el.style.WebkitTransform = 'translate3d(-' + win.width + 'px,0,0)';
								el.style.transform = 'translate3d(-' + win.width + 'px,0,0)';
								el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 150);
							el.style.WebkitTransition = 'opacity .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1), -webkit-transform .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';
							el.style.transition = 'opacity .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1), transform .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';


							el.style.WebkitTransform = 'translate3d(0,0,0)';
							el.style.transform = 'translate3d(0,0,0)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>

</body>
</html>
