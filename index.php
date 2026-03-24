<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<title>AGRO - Global Food Export</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta name="viewport"
		content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

	<meta name="theme-color" content="#FCDB5A" />
	<meta name="msapplication-navbutton-color" content="#FCDB5A" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

 

	<?php include 'components/links.php'; ?>
</head>

<body>
	<!-- Navigation -->
	<?php include 'components/Navbar.php'; ?>
    <div id="scroll-container" data-scroll-container>
    <?php include 'components/hero.php'; ?>
    <main>
        <?php include 'components/trustedPartner.php'; ?>
        <?php include 'components/traceability.php'; ?> <?php include 'components/productCategories.php'; ?>
        
        <?php include 'components/packaging.php'; ?> 
        <?php include 'components/qualityAssurance.php'; ?>

        <?php include 'components/exportDestinations.php'; ?>

        <?php include 'components/blog.php'; ?>
        <?php include 'components/testimonials.php'; ?>
        
        <?php include 'components/faq.php'; ?>
    </main>
    <?php include 'components/footer.php'; ?>
    </div>

	<!-- Custom JavaScript -->
	<script>
        const scrollContainer = document.querySelector('#scroll-container');
        const locoScroll = new LocomotiveScroll({ el: scrollContainer, smooth: true, multiplier: 1.05 });
        gsap.registerPlugin(ScrollTrigger);
        ScrollTrigger.scrollerProxy(scrollContainer, {
            scrollTop(value) { return arguments.length ? locoScroll.scrollTo(value, { duration: 0, disableLerp: true }) : locoScroll.scroll.instance.scroll.y; },
            getBoundingClientRect() { return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight }; },
            pinType: scrollContainer.style.transform ? "transform" : "fixed"
        });
        locoScroll.on("scroll", ScrollTrigger.update);
        ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
        ScrollTrigger.defaults({ scroller: "#scroll-container" });
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".navbar", {y:-60, opacity:0, duration:0.6});
        gsap.from(".hero-heading", {y:20, opacity:0, duration:0.8});
        gsap.from(".hero-cta .btn", {y:12, opacity:0, duration:0.6, stagger:0.1});
        gsap.from(".divider-gold", {scaleX:0, duration:0.6, transformOrigin:"left"});
        gsap.utils.toArray(".display-5,.section-title").forEach(el => {
            gsap.from(el, {opacity:0, y:20, duration:0.6, scrollTrigger:{trigger:el, start:"top 85%"}});
        });
        gsap.utils.toArray(".card").forEach(el => {
            gsap.from(el, {opacity:0, y:20, duration:0.5, scrollTrigger:{trigger:el, start:"top 90%"}});
        });
		// Counter animation for statistics
		function animateCounters() {
			const counters = document.querySelectorAll('.stat-number');
			const speed = 200;

			counters.forEach(counter => {
				const animate = () => {
					const value = +counter.getAttribute('data-count');
					const data = +counter.innerText;
					const time = value / speed;

					if (data < value) {
						counter.innerText = Math.ceil(data + time);
						setTimeout(animate, 1);
					} else {
						counter.innerText = value;
					}
				}
				animate();
			});
		}

		// Trigger counter animation when statistics section is in view
		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					animateCounters();
					observer.unobserve(entry.target);
				}
			});
		});

		const statsSection = document.querySelector('.statistics-section');
		if (statsSection) {
			observer.observe(statsSection);
		}

		// Smooth scrolling for navigation links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			});
		});
	</script>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
