<?php
// Import company information from site_identity
$company_info = include __DIR__ . '/../site_identity/company_info.php';
?>

<div class="top-contact-bar py-2" style="background-color: #ffcc00; color: black;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-info d-none d-md-flex gap-4">
            <span><i class="fas fa-phone-alt me-2"></i> <?php echo $company_info['contact']['phone_primary']; ?></span>
            <span><i class="fas fa-envelope me-2"></i> <?php echo $company_info['contact']['email']; ?></span>
        </div>
        <div class="social-links d-flex gap-3">
            <?php if (!empty($company_info['social_media']['facebook'])): ?>
                <a href="<?php echo $company_info['social_media']['facebook']; ?>" class="text-black text-decoration-none"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if (!empty($company_info['social_media']['instagram'])): ?>
                <a href="<?php echo $company_info['social_media']['instagram']; ?>" class="text-black text-decoration-none"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>
            <?php if (!empty($company_info['social_media']['linkedin'])): ?>
                <a href="<?php echo $company_info['social_media']['linkedin']; ?>" class="text-black text-decoration-none"><i class="fab fa-linkedin-in"></i></a>
            <?php endif; ?>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light main-nav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <div class="logo-container me-2">
                <img src="assets/logo.png" alt="Republic Logo" width="70" height="60" class="d-inline-block align-top">
            </div>
            <!-- <div class="brand-text text-dark">
                <span class="brand-sub d-none d-lg-inline">Pure Quality. Trusted Globally.</span>
            </div> -->
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#republicNav" aria-controls="republicNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="republicNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                <li class="nav-item d-lg-none">
                    <div class="mt-3 pt-3 border-top border-secondary">
                        <a href="contact.php" class="btn w-100 fw-bold px-4 py-2" style="background-color: #FFD700; color: #333;">
                            GET QUOTE <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </li>
            </ul>
            
            <div class="ms-lg-4 d-none d-lg-block">
                <a href="contact.php" class="btn fw-bold px-4 py-2" style="background-color: #FFD700; color: #333;">
                    GET QUOTE <i class="fas fa-arrow-right ms-2 fs-xxs"></i>
                </a>
            </div>
        </div>
    </div>
</nav>