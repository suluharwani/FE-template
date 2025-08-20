<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Our Comprehensive Services</h1>
                    <p class="lead mb-4">Explore our range of AI-powered solutions tailored to your needs.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Contact Us</a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-cogs fa-7x text-primary mb-3"></i>
                        <h4>All Services</h4>
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
                <li class="breadcrumb-item active" aria-current="page">All Services</li>
            </ol>
        </div>
    </nav>

    <!-- Services Tabs Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Our Service Portfolio</h2>
                    <p class="lead">Discover our comprehensive range of AI-powered solutions</p>
                </div>
            </div>
            
            <ul class="nav nav-tabs service-tabs mb-4 justify-content-center" id="serviceTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="ai-tab" data-bs-toggle="tab" data-bs-target="#ai" type="button">
                        <i class="fas fa-brain me-2"></i> AI Data
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button">
                        <i class="fas fa-shield-alt me-2"></i> Security
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="moderation-tab" data-bs-toggle="tab" data-bs-target="#moderation" type="button">
                        <i class="fas fa-filter me-2"></i> Moderation
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button">
                        <i class="fas fa-headset me-2"></i> Support
                    </button>
                </li>
            </ul>
            
            <div class="tab-content" id="serviceTabsContent">
                <!-- AI Data Tab -->
                <div class="tab-pane fade show active" id="ai" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-database text-primary me-3"></i> Data Collection & Annotation</h4>
                                    <p>Highly accurate training data for machine learning models across all data types.</p>
                                    <ul class="service-features">
                                        <li>Image & video labeling</li>
                                        <li>Text classification</li>
                                        <li>Audio transcription</li>
                                        <li>Data enrichment</li>
                                    </ul>
                                    <a href="<?= site_url('service/data-ai') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-robot text-primary me-3"></i> Generative AI & RLHF</h4>
                                    <p>Reinforced learning from human feedback procedures.</p>
                                    <ul class="service-features">
                                        <li>Preference modeling</li>
                                        <li>Reward model training</li>
                                        <li>Human feedback integration</li>
                                        <li>Model fine-tuning</li>
                                    </ul>
                                    <a href="<?= site_url('service/data-ai') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Security Tab -->
                <div class="tab-pane fade" id="security" role="tabpanel">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="mb-3"><i class="fas fa-lock text-primary me-3"></i> Secure CX Platform</h4>
                            <p>Our patent-pending remote work security solution with enterprise-grade protection.</p>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h5>Key Features:</h5>
                                    <ul>
                                        <li>End-to-end encryption</li>
                                        <li>Access controls</li>
                                        <li>Compliance standards</li>
                                        <li>Threat detection</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5>Benefits:</h5>
                                    <ul>
                                        <li>Data protection</li>
                                        <li>Risk mitigation</li>
                                        <li>Regulatory compliance</li>
                                        <li>Business continuity</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="<?= site_url('service/data-security') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                
                <!-- Moderation Tab -->
                <div class="tab-pane fade" id="moderation" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-user-shield text-primary me-3"></i> Trust & Safety</h4>
                                    <p>Comprehensive protection for your users and brand reputation.</p>
                                    <ul class="service-features">
                                        <li>Policy development</li>
                                        <li>Risk assessment</li>
                                        <li>Crisis management</li>
                                    </ul>
                                    <a href="<?= site_url('service/moderation') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-filter text-primary me-3"></i> Content Moderation</h4>
                                    <p>Real-time filtering of inappropriate content across all media types.</p>
                                    <ul class="service-features">
                                        <li>Text moderation</li>
                                        <li>Image filtering</li>
                                        <li>Video review</li>
                                    </ul>
                                    <a href="<?= site_url('service/moderation') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-users text-primary me-3"></i> Community Management</h4>
                                    <p>Professional engagement to nurture healthy online communities.</p>
                                    <ul class="service-features">
                                        <li>User engagement</li>
                                        <li>Conflict resolution</li>
                                        <li>Community guidelines</li>
                                    </ul>
                                    <a href="<?= site_url('service/moderation') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Support Tab -->
                <div class="tab-pane fade" id="support" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-comments text-primary me-3"></i> General Support</h4>
                                    <p>Multi-language tier-1 to advanced support across all channels.</p>
                                    <ul class="service-features">
                                        <li>24/7 availability</li>
                                        <li>Multi-channel support</li>
                                        <li>Customer satisfaction</li>
                                    </ul>
                                    <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-tools text-primary me-3"></i> Technical Support</h4>
                                    <p>Skilled troubleshooting at any tier for your products and services.</p>
                                    <ul class="service-features">
                                        <li>Expert technicians</li>
                                        <li>Rapid response</li>
                                        <li>Problem resolution</li>
                                    </ul>
                                    <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><i class="fas fa-project-diagram text-primary me-3"></i> CRM Integration</h4>
                                    <p>Get the most from your AI tools with seamless system connections.</p>
                                    <ul class="service-features">
                                        <li>System integration</li>
                                        <li>Workflow optimization</li>
                                        <li>Data synchronization</li>
                                    </ul>
                                    <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
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
                    <h2 class="mb-4">Ready to Transform Your Business?</h2>
                    <p class="lead mb-5">Our experts are ready to help you implement the perfect solution for your needs.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Get Started Today</a>
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

        // Tab functionality
        const triggerTabList = document.querySelectorAll('#serviceTabs button');
        triggerTabList.forEach(triggerEl => {
            triggerEl.addEventListener('click', function (event) {
                event.preventDefault();
                const tabTrigger = new bootstrap.Tab(this);
                tabTrigger.show();
            });
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
    
    .service-tabs .nav-link {
        padding: 1rem 1.5rem;
        font-weight: 500;
        color: #6c757d;
        border: none;
        border-bottom: 3px solid transparent;
    }
    
    .service-tabs .nav-link.active {
        color: var(--primary-color);
        background: none;
        border-bottom: 3px solid var(--primary-color);
    }
    
    .service-tabs .nav-link:hover {
        color: var(--primary-color);
        border-bottom: 3px solid var(--primary-color);
    }
    
    .service-features {
        padding-left: 1.5rem;
    }
    
    .service-features li {
        margin-bottom: 0.5rem;
    }
</style>
<?= $this->endSection() ?>