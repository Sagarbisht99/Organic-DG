<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us | Republic Exim Foodstuff Trading LLC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1A1A1A" />

    <?php include 'components/links.php'; ?>

    <style>
        :root { --gold: #FFCC00; --dark: #1A1A1A; --light-gray: #f8f9fa; }
        
        body { font-family: 'Inter', sans-serif; overflow-x: hidden; }
        
        /* Hero Refinement */
        .contact-hero {
            background: linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), 
                        url('https://images.pexels.com/photos/4483610/pexels-photo-4483610.jpeg'); /* Warehouse/Logistics BG */
            background-size: cover;
            background-position: center;
            padding: 100px 0;
        }

        /* Form Styling */
        .contact-card {
            border: none;
            border-top: 5px solid var(--gold);
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
            margin-top: -150px; /* Overlap effect */
        }

        .form-control, .form-select {
            border: 1px solid #e0e0e0;
            padding: 12px 15px;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: var(--gold);
            box-shadow: none;
        }

        /* Info Sidebar */
        .info-box {
            background: var(--light-gray);
            border-left: 3px solid var(--gold);
            transition: 0.3s;
        }

        .info-box:hover { transform: translateX(5px); background: #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }

        .social-link {
            width: 40px; height: 40px;
            display: inline-flex;
            align-items: center; justify-content: center;
            background: var(--dark); color: white;
            transition: 0.3s; text-decoration: none;
        }
        .social-link:hover { background: var(--gold); color: var(--dark); transform: translateY(-3px); }
        
        /* Map grayscale filter */
        .map-wrapper iframe { filter: grayscale(100%) invert(90%); }
    </style>
</head>

<body>
    <?php include 'components/Navbar.php'; ?>

    <div id="scroll-container" data-scroll-container>
    <section class="contact-hero text-white">
        <div class="container py-5 text-center text-lg-start">
            <div class="row">
                <div class="col-lg-7">
                    <h6 class="text-uppercase fw-bold mb-3" style="color: var(--gold); letter-spacing: 4px;">Connect With Us</h6>
                    <h1 class="display-3 fw-bold mb-4">Let's Talk Business</h1>
                    <p class="lead opacity-75 mb-0">From bulk grain exports to fresh produce logistics, our global trade desk is ready to facilitate your next shipment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5 bg-white">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-8">
                    <div class="card contact-card bg-white p-4 p-md-5 rounded-0">
                        <h3 class="fw-bold mb-4">Request a Shipment Quote</h3>
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
                                    <button type="submit" class="btn btn-dark btn-lg rounded-0 w-100 fw-bold py-3" style="letter-spacing: 2px; background: var(--dark);">
                                        PROCEED TO SEND <i class="fas fa-arrow-right ms-2" style="font-size: 0.8rem; color: var(--gold);"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 pt-lg-5">
                    <div class="ps-lg-3 mt-lg-5">
                        <h5 class="fw-bold mb-4 border-bottom pb-2">Global Directory</h5>
                        
                        <div class="info-box p-3 mb-3">
                            <p class="small text-muted mb-1 text-uppercase fw-bold">General Sales</p>
                            <a href="mailto:info@republicexim.com" class="text-decoration-none text-dark fw-bold">info@republicexim.com</a><br>
                            <span class="small">+971 58 627 6802</span>
                        </div>

                        <div class="info-box p-3 mb-3">
                            <p class="small text-muted mb-1 text-uppercase fw-bold">Logistics Hub</p>
                            <a href="mailto:tracking@republicexim.com" class="text-decoration-none text-dark fw-bold">tracking@republicexim.com</a><br>
                            <span class="small">+971 58 686 0192</span>
                        </div>

                        <div class="mt-5">
                            <h6 class="fw-bold mb-3">Visit Headquarters</h6>
                            <p class="text-muted small">Business Bay, Dubai,<br>United Arab Emirates</p>
                            
                            <div class="d-flex gap-2 mt-4">
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
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

    <?php include 'components/footer.php'; ?>
    </div>

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
        gsap.from(".contact-hero h6", {opacity:0, y:15, duration:0.6});
        gsap.from(".contact-hero h1", {opacity:0, y:20, duration:0.8});
        gsap.from(".contact-card", {opacity:0, y:25, duration:0.6, scrollTrigger:{trigger:".contact-card", start:"top 80%"}});
        gsap.utils.toArray(".info-box").forEach(el => {
            gsap.from(el, {opacity:0, y:15, duration:0.5, scrollTrigger:{trigger:el, start:"top 90%"}});
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
