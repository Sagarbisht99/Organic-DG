<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us | Republic General Trading LLC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include 'Components/links.php'; ?>

    </head>
<body>

    <?php include 'Components/Navbar.php'; ?>
    <div id="scroll-container" data-scroll-container>
    <section class="about-hero">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Republic General Trading LLC</h1>
            <p class="lead mb-0" style="color: white;">Specializing in procurement, packaging, and exporting superior agricultural products worldwide</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="assets/about/image-1.png" class="img-fluid shadow-lg" alt="Trucks on road">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">About Republic General Trading LLC</h2>
                    <p class="text-muted mb-4">
                        <strong>Republic General Trading LLC</strong> is a distinguished Dubai-based enterprise specializing in the procurement, packaging, and export of high-grade agricultural products. With extensive expertise in international commerce, we connect growers with global markets through our efficient distribution network.
                    </p>
                    <div class="mission-box mb-4">
                        <h5 class="fw-bold">Our Mission</h5>
                        <p class="mb-0 text-muted">"To empower growers globally by connecting them with international buyers through a transparent, efficient, and excellence-driven distribution network."</p>
                    </div>
                    <p class="text-muted">
                        We pride ourselves on upholding the highest benchmarks of excellence control, ensuring that every product reaches our clients with its nutritional value and freshness intact. Our strategic location in Dubai allows us to serve markets across the Middle East, Africa, Asia, and Europe.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-dark">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">18+</h2>
                    <p class="text-uppercase small fw-bold">Procurement Nations</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">60k</h2>
                    <p class="text-uppercase small fw-bold">Cargo Transported</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">250+</h2>
                    <p class="text-uppercase small fw-bold">Global Associates</p>
                </div>
                <div class="col-md-3">
                    <h2 class="display-4 fw-bold text-warning">99%</h2>
                    <p class="text-uppercase small fw-bold">Excellence Inspection</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h6 class="text-uppercase fw-bold text-warning" style="letter-spacing: 3px;">Our Operations</h6>
                <h2 class="display-5 fw-bold">The Harvest Advantage</h2>
                <div class="gold-divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 text-center step-card">
                    <div class="step-icon"><i class="fas fa-seedling"></i></div>
                    <h4 class="fw-bold">Direct Procurement</h4>
                    <p class="text-muted px-3">We eliminate intermediaries by working directly with certified farms in Egypt, India, and beyond.</p>
                </div>
                <div class="col-lg-4 text-center step-card">
                    <div class="step-icon"><i class="fas fa-microscope"></i></div>
                    <h4 class="fw-bold">Excellence Control</h4>
                    <p class="text-muted px-3">Every batch undergoes comprehensive lab testing to meet UAE and worldwide food safety regulations.</p>
                </div>
                <div class="col-lg-4 text-center step-card">
                    <div class="step-icon"><i class="fas fa-ship"></i></div>
                    <h4 class="fw-bold">Express Distribution</h4>
                    <p class="text-muted px-3">Our strategic Dubai location enables us to deliver by sea, air, or land with unmatched speed.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-warning">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Ready to expand your enterprise with us?</h2>
                    <p class="mb-0 opacity-75 fw-bold">Partner with the most dependable foodstuff trader in the Middle East.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="contact.php" class="btn btn-dark btn-lg rounded-0 px-5 fw-bold">JOIN OUR NETWORK</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'Components/footer.php'; ?>
    </div>

</body>
<script>
    gsap.registerPlugin(ScrollTrigger);
    gsap.from(".about-hero h6", {opacity:0, y:15, duration:0.6});
    gsap.from(".about-hero h1", {opacity:0, y:20, duration:0.8});
    gsap.utils.toArray(".mission-box,.step-card,.stats-dark .display-4").forEach(el => {
        gsap.from(el, {opacity:0, y:20, duration:0.6, scrollTrigger:{trigger:el, start:"top 85%"}});
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
