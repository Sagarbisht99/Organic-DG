<?php
// Import company information from site_identity
$company_info = include __DIR__ . '/../site_identity/company_info.php';
?>

<footer class="pt-5 footer-section">
    <div class="container py-5">
        <div class="row g-4">
            
            <div class="col-lg-4">
                <h4 class="fw-black text-white mb-4"><?php echo explode(' ', $company_info['company']['name'])[0]; ?> <span class="text-gold"><?php echo explode(' ', $company_info['company']['name'])[1]; ?></span></h4>
                <p class="text-white-50 pe-lg-5 footer-desc">
                    <?php echo $company_info['company']['description']; ?>
                </p>
                <div class="d-flex gap-3 mt-4">
                    <?php if (!empty($company_info['social_media']['linkedin'])): ?>
                    <a href="<?php echo $company_info['social_media']['linkedin']; ?>" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($company_info['social_media']['facebook'])): ?>
                    <a href="<?php echo $company_info['social_media']['facebook']; ?>" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($company_info['social_media']['instagram'])): ?>
                    <a href="<?php echo $company_info['social_media']['instagram']; ?>" class="social-link"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($company_info['social_media']['twitter'])): ?>
                    <a href="<?php echo $company_info['social_media']['twitter']; ?>" class="social-link"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <h6 class="text-white fw-bold text-uppercase mb-4 ls-2">Navigation</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="index.php#products">Our Products</a></li>
                    <li><a href="index.php#export-map">Global Network</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4">
                <h6 class="text-white fw-bold text-uppercase mb-4 ls-2">Our Portfolio</h6>
                <ul class="list-unstyled footer-links">
                    <?php foreach ($company_info['operations']['product_categories'] as $category): ?>
                    <li><a href="contact.php"><?php echo $category; ?></a></li>
                    <?php endforeach; ?>
                    <li><a href="contact.php">Cold Chain Logistics</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4">
                <h6 class="text-white fw-bold text-uppercase mb-4 ls-2">Headquarters</h6>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt mt-1 me-3 text-warning"></i>
                        <span><?php echo $company_info['contact']['address']; ?></span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-phone-alt me-3 text-warning"></i>
                        <span><?php echo $company_info['contact']['phone_primary']; ?></span>
                    </li>
                    <?php if (!empty($company_info['contact']['phone_secondary'])): ?>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-phone-alt me-3 text-warning"></i>
                        <span><?php echo $company_info['contact']['phone_secondary']; ?></span>
                    </li>
                    <?php endif; ?>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-envelope me-3 text-warning"></i>
                        <span><?php echo $company_info['contact']['email']; ?></span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="mt-5 pt-4 border-top border-secondary text-center">
            <p class="text-white-50 small mb-0">
                &copy; <?php echo date("Y"); ?> <strong><?php echo $company_info['company']['name']; ?></strong>. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
<?php $wa = preg_replace('/\D+/', '', $company_info['contact']['phone_primary']); ?>
<a href="https://wa.me/<?php echo $wa; ?>?text=Hello%20Republic%20Exim" class="floating-whatsapp" target="_blank" rel="noopener" aria-label="WhatsApp">
    <i class="fab fa-whatsapp fa-lg"></i>
</a>

