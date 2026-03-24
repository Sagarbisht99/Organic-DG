<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us | Republic Exim Foodstuff Trading LLC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include 'components/links.php'; ?>

    <style>
        :root { --gold: #FFCC00; --charcoal: #1A1A1A; }
        body { font-family: 'Inter', sans-serif; background-color: #fff; color: #333; overflow-x: hidden; }

        /* Hero Header */
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.pexels.com/photos/4483610/pexels-photo-4483610.jpeg');
            background-size: cover; background-position: center;
            padding: 120px 0; color: white;
        }

        /* Mission Section */
        .mission-box {
            border-left: 5px solid var(--gold);
            padding: 30px;
            background: #f8f9fa;
        }

        /* Timeline / Process Step */
        .step-icon {
            width: 80px; height: 80px;
            background: var(--charcoal);
            color: var(--gold);
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem; margin: 0 auto 20px;
            transition: 0.3s;
        }
        .step-card:hover .step-icon {
            background: var(--gold); color: var(--charcoal);
            transform: translateY(-10px);
        }

        /* Numbers Section */
        .stats-dark {
            background: var(--charcoal);
            color: white;
            padding: 80px 0;
        }

        .gold-divider {
            width: 60px; height: 4px; background: var(--gold); margin: 20px 0;
        }
    </style>
</head>
<body>

    <?php include 'components/Navbar.php'; ?>
    <div id="scroll-container" data-scroll-container>
    <section class="about-hero">
        <div class="container text-center">
            <h6 class="text-uppercase fw-bold mb-3" style="color: var(--gold); letter-spacing: 5px;">Our Story</h6>
            <h1 class="display-3 fw-bold">The Bridge Between <br>Farms & Global Markets</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="https://images.pexels.com/photos/2199293/pexels-photo-2199293.jpeg" class="img-fluid shadow-lg" alt="Global Shipping">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">A Legacy of Quality and Trust</h2>
                    <p class="text-muted mb-4">
                        Founded with a vision to streamline the global food supply chain, <strong>Republic Exim Foodstuff Trading LLC</strong> has grown into a premier Dubai-based hub for international trade. We specialize in the sourcing, packaging, and export of premium agricultural products.
                    </p>
                    <div class="mission-box mb-4">
                        <h5 class="fw-bold">Our Mission</h5>
                        <p class="mb-0 italic text-muted">"To empower farmers globally by connecting them with international buyers through a transparent, efficient, and quality-driven logistics network."</p>
                    </div>
                    <p class="text-muted">
                        With over 5 years of excellence, we ensure that every product—from fresh citrus to organic grains—reaches our clients with its nutritional value and freshness intact.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-dark">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">15+</h2>
                    <p class="text-uppercase small fw-bold">Sourcing Countries</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">50k</h2>
                    <p class="text-uppercase small fw-bold">Tons Shipped</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">200+</h2>
                    <p class="text-uppercase small fw-bold">Global Partners</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">100%</h2>
                    <p class="text-uppercase small fw-bold">Quality Inspection</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h6 class="text-uppercase fw-bold text-warning" style="letter-spacing: 3px;">How We Work</h6>
                <h2 class="display-5 fw-bold">The Republic Advantage</h2>
                <div class="gold-divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 text-center step-card">
                    <div class="step-icon"><i class="fas fa-seedling"></i></div>
                    <h4 class="fw-bold">Direct Sourcing</h4>
                    <p class="text-muted px-3">We eliminate middlemen by working directly with certified farms in Egypt, India, and beyond.</p>
                </div>
                <div class="col-lg-4 text-center step-card">
                    <div class="step-icon"><i class="fas fa-microscope"></i></div>
                    <h4 class="fw-bold">Quality Control</h4>
                    <p class="text-muted px-3">Every batch undergoes rigorous lab testing to meet UAE and international food safety standards.</p>
                </div>
                <div class="col-lg-4 text-center step-card">
                    <div class="step-icon"><i class="fas fa-ship"></i></div>
                    <h4 class="fw-bold">Express Logistics</h4>
                    <p class="text-muted px-3">Our strategic Dubai location allows us to deliver by sea, air, or land with unmatched speed.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-warning">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Ready to grow your business with us?</h2>
                    <p class="mb-0 opacity-75 fw-bold">Partner with the most reliable foodstuff trader in the Middle East.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="contact.php" class="btn btn-dark btn-lg rounded-0 px-5 fw-bold">JOIN OUR NETWORK</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    </div>

</body>
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
    gsap.from(".about-hero h6", {opacity:0, y:15, duration:0.6});
    gsap.from(".about-hero h1", {opacity:0, y:20, duration:0.8});
    gsap.utils.toArray(".mission-box,.step-card,.stats-dark .display-4").forEach(el => {
        gsap.from(el, {opacity:0, y:20, duration:0.6, scrollTrigger:{trigger:el, start:"top 85%"}});
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
