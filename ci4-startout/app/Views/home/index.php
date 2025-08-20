<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="fw-bold mb-4">Harmonized AI for What Truly Matters</h1>
            <p class="lead mb-5">Achieve KPIs, scale support, nurture trust, and unify communities, while trimming
                costs. Startout AI makes it effortless</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="<?= site_url('contact') ?>#contact-form" class="btn btn-outline-light btn-lg px-4 py-3 fw-bold">Let's talk</a>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Hybrid by Design. Intelligent by Nature</h2>
                    <p class="lead">Startout AI isn't just about outsourcing, it's about orchestrating people and AI for maximum impact</p>
                    <p>From day one, we've helped businesses thrive. Innovation leads the way, but our mission stays true.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="bg-light rounded p-5">
                        <i class="fas fa-users fa-5x text-primary mb-3"></i>
                        <h4>Team Collaboration</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Driven Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Insight-Led</h2>
                    <p class="lead">Results that matter begin with understanding.</p>
                    <p>At Startout AI, every decision stems from data. We calibrate your project with precision, forecast impact, and scale dynamically. From CX excellence to moderation mastery, continuous refinement is what sets us apart.</p>
                </div>
                <div class="col-lg-6 order-lg-1 text-center">
                    <div class="bg-white rounded p-5 shadow-sm">
                        <i class="fas fa-chart-line fa-5x text-primary mb-3"></i>
                        <h4>Data Analytics Dashboard</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">AI & Automation</h2>
                    <p>Automation that never sleeps. Intelligence that adapts. And human touch where it matters most.</p>
                    <p>Your processes, reimagined. With advanced AI and people-powered insight working round the clock.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="bg-light rounded p-5">
                        <i class="fas fa-robot fa-5x text-primary mb-3"></i>
                        <h4>AI Technology</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Moderation Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Trust & Safety Mastered by the Originators</h2>
            <p class="lead mb-5 mx-auto" style="max-width: 800px;">You deserve a partner that set the industry standard. We combine breakthrough algorithms with expert community managers to shield your brand, and your users from online toxicity, 24/7.</p>
            <a href="<?= site_url('service/moderation') ?>" class="btn btn-light btn-lg px-4 py-3 fw-bold">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </section>

    <!-- Strategy Section -->
    <section class="py-5">
        <div class="container text-center">
            <p class="text-uppercase text-primary fw-bold mb-2">Fuel your outsourcing goals.</p>
            <h2 class="fw-bold mb-4">CX Integration Intelligence on Demand</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="mb-5">Get more than off-the-shelf. We fine-tune your stack with strategic guidance, realtime reporting, and hands-on training, so your daily operations never miss a beat.</p>
                    <a href="<?= site_url('service') ?>" class="btn btn-outline-primary btn-lg px-4 py-3 fw-bold">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-4">Our Featured Services</h2>
                    <p class="lead">Kami menyediakan berbagai layanan profesional untuk memenuhi kebutuhan bisnis Anda</p>
                </div>
            </div>
            
            <div class="row">
                <?php foreach ($featured_services as $service): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="fw-bold"><?= esc($service) ?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="<?= site_url('service') ?>" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Customer Care</h3>
                            <p class="card-text">Exceptional support across all channels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-robot fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">AI & Automation</h3>
                            <p class="card-text">Intelligent solutions for modern businesses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Technical Support</h3>
                            <p class="card-text">Expert help when you need it most.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-pie fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">CRM Optimization</h3>
                            <p class="card-text">Get the most from your customer data.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-puzzle-piece fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">CRM & Tool Integration</h3>
                            <p class="card-text">Seamless connections between systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Content Moderation</h3>
                            <p class="card-text">Keep your platforms safe with our expert moderation teams.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Moderation Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="fw-bold mb-4">Moderation Services</h2>
                    <p class="lead">Comprehensive content moderation solutions for your platform</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-secondary text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-filter fa-3x mb-3"></i>
                            <h3 class="card-title">Content Moderation</h3>
                            <p class="card-text">Keep your platforms safe with our expert moderation teams.</p>
                            <a href="<?= site_url('service/moderation') ?>" class="btn btn-light mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-secondary text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-user-shield fa-3x mb-3"></i>
                            <h3 class="card-title">Trust & Safety</h3>
                            <p class="card-text">Protect your community with our comprehensive safety solutions.</p>
                            <a href="<?= site_url('service/security') ?>" class="btn btn-light mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-secondary text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x mb-3"></i>
                            <h3 class="card-title">Community Management</h3>
                            <p class="card-text">Build and nurture engaged communities with our experts.</p>
                            <a href="<?= site_url('service') ?>" class="btn btn-light mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Ready to Transform Your Business?</h2>
            <p class="lead mb-5">Join hundreds of companies that trust Startout AI for their customer experience and content moderation needs.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3 fw-bold">Get Started</a>
                <a href="<?= site_url('about') ?>" class="btn btn-outline-light btn-lg px-4 py-3 fw-bold">Learn About Us</a>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Animasi scroll untuk section
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        }, observerOptions);

        // Observe semua section
        document.querySelectorAll('section').forEach(section => {
            section.classList.add('animate__animated');
            observer.observe(section);
        });

        // Floating chat widget functionality
        const chatToggle = document.getElementById('chat-toggle');
        const chatContainer = document.getElementById('chat-container');
        
        if (chatToggle && chatContainer) {
            chatToggle.addEventListener('click', function() {
                chatContainer.classList.toggle('active');
            });
        }
    });
</script>
<?= $this->endSection() ?>