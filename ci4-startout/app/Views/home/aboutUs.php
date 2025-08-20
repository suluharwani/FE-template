<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- About Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Pioneering Intelligent Customer Experiences</h1>
                    <p class="lead mb-4">Startout AI combines cutting-edge artificial intelligence with deep human expertise to transform how businesses connect with their customers.</p>
                    <a href="#our-story" class="btn btn-light btn-lg px-4 py-3">Our Story</a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-brain fa-7x text-primary mb-3"></i>
                        <h4>AI-Powered Solutions</h4>
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
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div>
    </nav>

    <!-- Our Story Section -->
    <section id="our-story" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4">Our Story</h2>
                    <p class="lead"><?= esc($company_history) ?></p>
                    <p>What started as a small team of AI enthusiasts has grown into an industry leader serving global brands across multiple sectors. Our journey has been marked by continuous innovation, from developing our first natural language processing algorithms to creating our patent-pending Cubeless security platform.</p>
                    <p>Today, we're proud to support over 500 clients worldwide, helping them deliver exceptional customer experiences while optimizing their operations.</p>
                </div>
                <div class="col-lg-6">
                    <div class="timeline">
                        <div class="timeline-item d-flex mb-4">
                            <div class="timeline-year bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4">
                                2010
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold">Company Founded</h5>
                                <p>Startout AI launched with a focus on AI-powered customer support solutions.</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex mb-4">
                            <div class="timeline-year bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4">
                                2012
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold">First Major Client</h5>
                                <p>Partnered with a Fortune 500 company to implement our AI solutions.</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex mb-4">
                            <div class="timeline-year bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4">
                                2015
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold">Cubeless Platform</h5>
                                <p>Introduced our proprietary security solution for remote customer service.</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex">
                            <div class="timeline-year bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4">
                                2023
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-bold">Global Expansion</h5>
                                <p>Opened offices in Europe and Asia to serve international clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="fw-bold mb-4">Our Mission & Values</h2>
                    <p class="lead">Guiding principles that drive everything we do</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-lightbulb fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Innovation</h4>
                        <p>We constantly push boundaries to develop smarter, more effective customer experience solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-handshake fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Integrity</h4>
                        <p>We build trust through transparency, honesty, and ethical business practices.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Collaboration</h4>
                        <p>We believe the best solutions come from working closely with our clients and teams.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Excellence</h4>
                        <p>We're committed to delivering exceptional quality in everything we do.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Meet Our Leadership Team</h2>
                    <p class="lead">The visionaries driving Startout AI forward</p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($team_members as $member): ?>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="team-img mb-4">
                            <div class="bg-light rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                                <i class="fas fa-user fa-3x text-primary"></i>
                            </div>
                        </div>
                        <h4 class="mb-2"><?= esc($member['name']) ?></h4>
                        <p class="text-muted mb-3"><?= esc($member['position']) ?></p>
                        <p>With extensive experience in AI and customer experience, our leadership team brings visionary thinking to every project.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-muted mx-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-muted mx-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Milestones Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Our Milestones</h2>
                    <p class="lead">Key achievements in our journey</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center p-4 h-100">
                        <h3 class="display-4 fw-bold mb-3">500+</h3>
                        <h4 class="mb-3">Clients Worldwide</h4>
                        <p>Trusting us with their customer experience needs</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 h-100">
                        <h3 class="display-4 fw-bold mb-3">15</h3>
                        <h4 class="mb-3">Patents Filed</h4>
                        <p>For our innovative technologies and processes</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4 h-100">
                        <h3 class="display-4 fw-bold mb-3">98%</h3>
                        <h4 class="mb-3">Client Retention</h4>
                        <p>Demonstrating the value we deliver</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 text-center">
                    <div class="bg-light rounded p-5">
                        <i class="fas fa-hands-helping fa-7x text-primary mb-3"></i>
                        <h4>Company Culture</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Our Culture</h2>
                    <p class="lead">We believe our people are our greatest asset.</p>
                    <p>At Startout AI, we've created an environment that fosters creativity, collaboration, and continuous learning. Our team of AI experts, customer experience specialists, and technology innovators work together to push boundaries and deliver exceptional results.</p>
                    <p>We're proud to offer:</p>
                    <ul class="mb-4">
                        <li class="mb-2">Competitive compensation and benefits</li>
                        <li class="mb-2">Flexible work arrangements</li>
                        <li class="mb-2">Professional development programs</li>
                        <li class="mb-2">A diverse and inclusive workplace</li>
                    </ul>
                    <a href="<?= site_url('career') ?>" class="btn btn-primary btn-lg px-4 py-3">Join Our Team</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Ready to experience the Startout AI difference?</h2>
                    <p class="lead mb-5">Contact us today to learn how we can transform your customer experience.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Animasi untuk timeline
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInRight');
                }
            });
        }, { threshold: 0.1 });

        timelineItems.forEach(item => {
            item.classList.add('animate__animated');
            observer.observe(item);
        });

        // Smooth scroll untuk anchor links
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
    });
</script>
<style>
    .timeline-year {
        width: 70px;
        height: 70px;
        font-weight: bold;
        flex-shrink: 0;
    }
    
    .timeline-content {
        flex: 1;
    }
    
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
</style>
<?= $this->endSection() ?>