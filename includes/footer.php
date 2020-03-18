	<footer>
		<div class="container-fluid">
			<div class="col-sm-4"></div>
			<div class="col-sm-8 center-ok">
				<nav class="navbar">
					<ul class="nav navbar-nav">
						<li><a href="/" class="active link-item para">About</a></li>
						<li><a href="CV.pdf" class="link-item para">CV</a></li>
						<li><a href="" class="link-item para">Notes</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	</body>
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/highlight.min.js"></script>
	<script src="includes/aos.js"></script>
	<script src="includes/app.js"></script>
	<script src="includes/jquery.awesome-cursor.js"></script>
	<script>
      document.querySelector('html').classList.remove('no-js');
      if (!window.Cypress) {
        const scrollCounter = document.querySelector('.js-scroll-counter');

        AOS.init({
          mirror: true
        });

        document.addEventListener('aos:in', function(e) {
          console.log('in!', e.detail);
        });

        // window.addEventListener('scroll', function() {
		//   scrollCounter.innerHTML = window.pageYOffset;
		//   console.log(window.pageYOffset);
        // });
      }
	</script>
	<script>
		$('body').awesomeCursor('pencil');
	</script>
</html>