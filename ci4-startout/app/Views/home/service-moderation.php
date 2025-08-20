<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Content Moderation Services</h1>
                    <p class="lead mb-4">Keep your platforms safe with our AI-human hybrid moderation solutions.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Request Moderation Demo</a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-filter fa-7x text-primary mb-3"></i>
                        <h4>Content Moderation</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="bg-light py-3">
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('service') ?>">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Content Moderation</li>
            </ol>
        </div>
    </nav>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Our Content Moderation Services</h2>
                    <p class="lead">Comprehensive moderation solutions to keep your platforms safe and engaging</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-user-shield fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Trust & Safety</h4>
                        <p>Comprehensive protection for your users and brand reputation.</p>
                        <ul class="text-start mt-3">
                            <li>Policy development</li>
                            <li>Risk assessment</li>
                            <li>Crisis management</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-filter fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Content Moderation</h4>
                        <p>Real-time filtering of inappropriate content across all media types.</p>
                        <ul class="text-start mt-3">
                            <li>Text moderation</li>
                            <li>Image filtering</li>
                            <li>Video review</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Community Management</h4>
                        <p>Professional engagement to nurture healthy online communities.</p>
                        <ul class="text-start mt-3">
                            <li>User engagement</li>
                            <li>Conflict resolution</li>
                            <li>Community guidelines</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-share-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Social Media</h4>
                        <p>Moderation across all major social platforms and networks.</p>
                        <ul class="text-start mt-3">
                            <li>Platform-specific policies</li>
                            <li>Brand protection</li>
                            <li>Trend monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Success Stories</h2>
                    <p class="lead">See how our moderation services have helped clients maintain safe platforms</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="bg-primary text-white rounded-circle mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-chart-line fa-lg"></i>
                            </div>
                            <h4 class="mb-3">Social Platform Safety</h4>
                            <p>Reduced harmful content by 92% for a major social media platform while maintaining user engagement.</p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="bg-primary text-white rounded-circle mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <h4 class="mb-3">Gaming Community Protection</h4>
                            <p>Implemented comprehensive moderation for a gaming platform with 5M+ users, reducing toxic behavior by 78%.</p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Our Moderation Process</h2>
                    <p class="lead">How we deliver effective content moderation for your platform</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <span class="fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Assessment & Strategy</h4>
                        <p>We analyze your platform's needs and develop a customized moderation strategy</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <span class="fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">Implementation</h4>
                        <p>We deploy our AI-human hybrid moderation system tailored to your requirements</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <span class="fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Ongoing Optimization</h4>
                        <p>We continuously monitor and improve moderation effectiveness</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Need Custom Moderation Solutions?</h2>
                    <p class="lead mb-5">Our moderation experts can tailor a solution to your specific requirements.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Get Custom Quote</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for anchor links
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

        // Animation for cards
        const cards = document.querySelectorAll('.card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        cards.forEach(card => {
            card.classList.add('animate__animated');
            observer.observe(card);
        });
    });
</script>
<style>
    .breadcrumb {
        margin-bottom: 0;
    }
    
    .breadcrumb-item a {
        text-decoration: none;
        color: var(--primary-color);
    }
    
    .breadcrumb-item.active {
        color: #6c757d;
    }
    
    .card {
        transition: transform 0.3s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        border: none;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    
    ul.text-start {
        padding-left: 1.5rem;
    }
    
    ul.text-start li {
        margin-bottom: 0.5rem;
    }
</style>
<?= $this->endSection() ?>