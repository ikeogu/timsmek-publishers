<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="no-js">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet"  href="<?php echo e(asset('css/slick.css')); ?>" />
    <link href="<?php echo e(asset('css/ionicons.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <meta name="theme-color" content="#fafafa">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    
	
<head>
  
  

<body>
  
        
		<header>
			<div id="top-header">
				<div class="branding">
					<img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo" class="img-fluid" width="400">
				</div>
				<div id="info">
					<p><i class="icon ion-logo-whatsapp"></i> <i class="icon ion-md-call"></i></i> <span
							class="phone-num">0703-455-9895</span> <span class="mail"> <i
								class="icon ion-md-mail"></i>mails@timeks.com</span></p>
					<p><?php if(auth()->guard()->guest()): ?><a href="/register">Sign Up</a> | <a href="/login">Login</a>  <?php else: ?> <?php echo e(Auth::user()->name); ?> 

						|<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
						 <?php echo e(__('Logout')); ?>

					 	</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
						</form>
						<?php endif; ?> | <a href="#"><i
								class="icon ion-logo-facebook"></i></a> <a href="#"><i class="icon ion-logo-instagram"></i></a> <a
							href="#"><i class="icon ion-logo-twitter"></i></a> </p>
					<form action="<?php echo e(route('search')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<input type="text" name="search" placeholder="Search" required>
						<input type="submit" value="search">
					</form>
				</div>
			</div>
			<nav>
				<div id="toggler" class="small">
					<div></div>
					<div></div>
					<div></div>
				</div>
				<ul class="small-side" id="myNav">
					<li class="list"><a href="/" class="active">Home</a></li>
					<li class="list"><a href="/about">About us <i class="fa fa-chevron-down"></i></a>
					</li>
					<li class="list"><a href="<?php echo e(route('authors.index')); ?>">Our Authors</a></li>
					
					<li class="list"><a href="<?php echo e(route('publish.index')); ?>">Store</a></li>
					<li class="list"><a href="<?php echo e(route('service.index')); ?>">Services</a></li>
					<li class="list"><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
					<li class="list"><a href="<?php echo e(route('article.create')); ?>">Submit an Article</a></li>
				<li  class="list"><a href="<?php echo e(route('contact.create')); ?>"></i> Contact us</a></li>
				<li class="list"><a href="<?php echo e(route('getCart')); ?>"><i class="fa fa-shopping-cart"><sup class="badg"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : 0); ?></sup></i></a></li>
				<?php if(auth()->guard()->check()): ?> 
				   <li class="list"><a href="<?php echo e(route('profile')); ?>">My Profile</a></li>
					<?php if(Auth::user()->isAdmin == 1): ?>
						<li class="list">	<a href="<?php echo e(route('admindashboard')); ?>"> Admin DashBoard</a></li>
					<?php elseif(Auth::user()->isAdmin == 2): ?>
					<li class="list">	<a href="<?php echo e(route('admindashboard')); ?>"> Editor DashBoard</a></li>
					<?php endif; ?>
				<?php endif; ?>	
				</ul>
				<ul class="small-ul">
					<li class="small"><a href="/register">Sign up</a></li>
					<li class="small"><a href="/login">Login</a></li>
				</ul>
			</nav>
		</header>
		<main class="py-4">
				<?php echo $__env->yieldContent('content'); ?>
		</main>
		
		<footer>
			<section id="quick-links">
			  <div class="container">
					<div class="row ">
						<div class="col-md-4 m-0">
							<div class="time-logo">
								<img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="img-fluid" width="300">
							</div>
							<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id magnam fugit officia. Nam qui odit vero
								quia pariatur enim dolore voluptatem quibusdam ducimus dignissimos ex ea, eveniet consectetur repellendus.
							</p>
						</div>
						<div class="col-md-4 m-0">
							<div class="links ml-5">
								<h4>Quick links</h4>
								<ul class="nav-link">
									<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
									<li><a href="<?php echo e(url('/about')); ?>">About</a></li>
									<li ><a href="<?php echo e(route('publish.index')); ?>">Store</a></li>
									<li ><a href="<?php echo e(route('service.index')); ?>">Services</a></li>
									<li ><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
									<li ><a href="<?php echo e(route('article.create')); ?>">Submit article</a></li>
									<li ><a href="<?php echo e(route('contact.create')); ?>"></i> Contact us</a></li> 
								</ul>
							</div>
						</div>
						<div class="col-md-4 m-0">
							<div class="contact-footer pl-5">
								<h4>Contact </h4> 
								<p>Address :</p>
								<p>Email :</p>mails@timeks.com
								<p>Phone:</p> 0703-455-9895
								<p>Tel:</p>0703-455-9895
				
								<div class="row justify-content-right mt-4 user-social-link">
								<div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
								<div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
								<div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>

			<section class="container-fluid" >
				<p  class="justify-content-center"> <span>Copyright &copy; <?php echo e(date('Y')); ?> Timsmek Global Publishers. All rights reserved </span></p>
				<p class="justify-content-left">Design by  <a href="#">Kaiyleb_dev</a> &&  <a href="https://emmanuel-chidera.netlify.com">Emmanuel</a></p> 
			  
			</section>
		</footer>
		
	
	
		<script src="<?php echo e(asset('js/vendor/modernizr-3.7.1.min.js')); ?>"></script>
		<script src="<?php echo e(asset('/js/jquery-3.4.1.min.js')); ?>"
			 crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
		<script type="text/javascript" src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
		<script src="js/plugins.js"></script>
		<script src="<?php echo e(asset('js/jquery-3.3.1.slim.min.js')); ?>"
			></script>
		<script src="<?php echo e(asset('js/popper.min.js')); ?>"
			></script>
		<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"
			></script>
		<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	
		<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
		<script>
			window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
			ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
		</script>
		<script src="https://www.google-analytics.com/analytics.js" async></script>
		<script>
			window.onclick = function (event) {
				if (!event.target.matches('view')) {
					var dropdowns = document.getElementsByClassName("overlay");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
						}
					}
				}
			}

			var btnContainer = document.getElementById("myNav");

			// Get all buttons with class="btn" inside the container
			var btns = btnContainer.getElementsByClassName("list");
			
			// Loop through the buttons and add the active class to the current/clicked button
			for (var i = 0; i < btns.length; i+=1) {
				btns[i].addEventListener("click", function() {
					var current = document.getElementsByClassName("active");
					
					current[0].className = current[0].className.replace(" active", "");
					this.className += " active";
				});
			}

			$('#myModal').on('shown.bs.modal', function () {
  			$('#myInput').trigger('focus')
			});
		</script>
		<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a6f969f6-486d-4233-9337-660fc6f6310a', f: true }); done = true; } }; })();
		</script>

</body>
</html>
<?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/layouts/app.blade.php ENDPATH**/ ?>