<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$companyInfo = include 'site_identity/company_info.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Republic General Trading LLC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1A1A1A" />

    <?php include 'Components/links.php'; ?>



</head>

<body>
    <?php include 'Components/Navbar.php'; ?>

    <div id="scroll-container" data-scroll-container>
        <section class="contact-hero text-white">
            <div class="container py-5 text-center text-lg-start">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Send Us a Message</h2>
                    <p class="text-muted mb-4">Have questions about our products or need a custom quote? Reach out to our team and we'll respond within 24 hours.</p>
                    <h1 class="display-3 fw-bold mb-4">Republic General Trading LLC</h1>
                    <p class="lead mb-0" style="color: white;">Connect with us for premium agricultural products and worldwide export solutions</p>
                </div>
            </div>
        </section>

        <section class="pb-5 bg-white">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-8">
                        <div class="card contact-card bg-white p-4 p-md-5 rounded-0">
                            <h3 class="fw-bold mb-4">Request a Quote</h3>
                            <form id="contactForm">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="small fw-bold text-uppercase">First Name</label>
                                        <input type="text" class="form-control rounded-0" id="firstName" placeholder="e.g. John" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small fw-bold text-uppercase">Last Name</label>
                                        <input type="text" class="form-control rounded-0" id="lastName" placeholder="e.g. Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small fw-bold text-uppercase">Corporate Email</label>
                                        <input type="email" class="form-control rounded-0" id="email" placeholder="name@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small fw-bold text-uppercase">WhatsApp / Phone</label>
                                        <input type="tel" class="form-control rounded-0" id="phone" placeholder="+971 ...">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="small fw-bold text-uppercase">Interest Category</label>
                                        <select class="form-select rounded-0" id="product">
                                            <option value="">Select Service...</option>
                                            <option value="export">Bulk Export Inquiries</option>
                                            <option value="logistics">Logistics & Supply Chain</option>
                                            <option value="packaging">Private Labeling/Packaging</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="small fw-bold text-uppercase">Your Requirements</label>
                                        <textarea class="form-control rounded-0" id="message" rows="5" required placeholder="Tell us about the volume, destination, and product..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark btn-lg rounded-0 w-100 fw-bold py-3 btn-contact-submit">
                                            PROCEED TO SEND <i class="fas fa-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="ps-lg-3">
                            <!-- Global Headquarters Box -->
                            <div class="info-box bg-light p-4 mb-4">
                                <h5 class="fw-bold mb-3">Global Headquarters</h5>
                                <p class="mb-2 text-muted">
                                    <i class="fas fa-map-marker-alt me-2 text-warning"></i>
                                    Al Quoz Industrial Area 3, Dubai, United Arab Emirates
                                </p>
                                <p class="mb-2 text-muted">
                                    <i class="fas fa-phone me-2 text-warning"></i>
                                    +971 4 123 4567
                                </p>
                                <p class="mb-2 text-muted">
                                    <i class="fas fa-envelope me-2 text-warning"></i>
                                    info@harvestexim.com
                                </p>
                                <p class="mb-0 text-muted">
                                    <i class="fas fa-globe me-2 text-warning"></i>
                                    www.harvestexim.com
                                </p>
                            </div>

                            <!-- Social Media Box -->
                            <div class="info-box bg-light p-4 mb-4">
                                <h5 class="fw-bold mb-3">Connect With Us</h5>
                                <p class="mb-3 text-muted">Follow our updates and market analysis on social platforms</p>
                                <div class="d-flex gap-2 contact-social">
                                    <a href="<?php echo htmlspecialchars($companyInfo['social_media']['linkedin']); ?>" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="<?php echo htmlspecialchars($companyInfo['social_media']['instagram']); ?>" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="<?php echo htmlspecialchars($companyInfo['social_media']['facebook']); ?>" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>

                            <!-- Partner Contact Details -->
                            <div class="info-box bg-light p-4 mb-4">
                                <p class="small text-muted mb-3 text-uppercase fw-bold">Partner Contact Details</p>
                                <div class="mb-3">
                                    <a href="mailto:<?php echo htmlspecialchars($companyInfo['partners'][0]['email']); ?>" class="text-decoration-none text-dark fw-bold"><?php echo htmlspecialchars($companyInfo['partners'][0]['email']); ?></a><br>
                                    <span class="small text-muted"><?php echo htmlspecialchars($companyInfo['partners'][0]['name']); ?> - <?php echo htmlspecialchars($companyInfo['partners'][0]['phone']); ?></span>
                                </div>
                                <div>
                                    <a href="mailto:<?php echo htmlspecialchars($companyInfo['partners'][1]['email']); ?>" class="text-decoration-none text-dark fw-bold"><?php echo htmlspecialchars($companyInfo['partners'][1]['email']); ?></a><br>
                                    <span class="small text-muted"><?php echo htmlspecialchars($companyInfo['partners'][1]['name']); ?> - <?php echo htmlspecialchars($companyInfo['partners'][1]['phone']); ?></span>
                                </div>
                            </div>

                            <!-- Visit Headquarters -->
                            <div class="info-box bg-light p-4">
                                <h6 class="fw-bold mb-3">Visit Headquarters</h6>
                                <p class="text-muted small mb-3"><?php echo htmlspecialchars($companyInfo['contact']['address']); ?></p>
                                <div class="d-flex gap-2 contact-social">
                                    <a href="mailto:<?php echo htmlspecialchars($companyInfo['contact']['email']); ?>" class="social-link"><i class="fas fa-envelope"></i></a>
                                    <a href="tel:<?php echo htmlspecialchars($companyInfo['contact']['phone_primary']); ?>" class="social-link"><i class="fas fa-phone"></i></a>
                                    <a href="<?php echo htmlspecialchars($companyInfo['contact']['website']); ?>" class="social-link"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    </div>
            </div>
        </section>

        <section class="map-wrapper" style="height: 450px; overflow: hidden;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115511.0163353841!2d55.1979929!3d25.1950275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e50842bdf94!2sDubai!5e0!3m2!1sen!2sae!4v1620000000000"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </section>

        <?php include 'Components/footer.php'; ?>
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".contact-hero h6", {
            opacity: 0,
            y: 15,
            duration: 0.6
        });
        gsap.from(".contact-hero h1", {
            opacity: 0,
            y: 20,
            duration: 0.8
        });
        gsap.from(".contact-card", {
            opacity: 0,
            y: 25,
            duration: 0.6,
            scrollTrigger: {
                trigger: ".contact-card",
                start: "top 80%"
            }
        });
        gsap.utils.toArray(".info-box").forEach(el => {
            gsap.from(el, {
                opacity: 0,
                y: 15,
                duration: 0.5,
                scrollTrigger: {
                    trigger: el,
                    start: "top 90%"
                }
            });
        });
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button');
            const originalText = btn.innerHTML;

            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> PROCESSING...';
            btn.style.opacity = '0.7';

            setTimeout(() => {
                alert('Success! Our trade desk will contact you within 2-4 hours.');
                btn.innerHTML = originalText;
                btn.style.opacity = '1';
                e.target.reset();
            }, 2000);
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>