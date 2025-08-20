<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Careers Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Build the Future of Customer Experience</h1>
                    <p class="lead mb-4">Join our team of innovators working at the intersection of AI and human-centered design.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#open-positions" class="btn btn-light btn-lg px-4 py-3">View Open Positions</a>
                        <a href="#why-join-us" class="btn btn-outline-light btn-lg px-4 py-3">Why Join Us</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-users fa-7x text-primary mb-3"></i>
                        <h4>Team Collaboration</h4>
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
                <li class="breadcrumb-item active" aria-current="page">Careers</li>
            </ol>
        </div>
    </nav>

    <!-- Why Join Us Section -->
    <section id="why-join-us" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Why Join Startout AI?</h2>
                    <p class="lead">We're building more than just a company - we're creating a movement to transform customer experiences worldwide.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-brain fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Cutting-Edge AI</h4>
                        <p>Work with the latest AI technologies and help shape the future of customer experience.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-globe fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Global Impact</h4>
                        <p>Your work will directly impact customers and businesses around the world.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Talented Team</h4>
                        <p>Collaborate with some of the brightest minds in AI and customer experience.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Growth Opportunities</h4>
                        <p>We invest in your development with training, mentorship, and career paths.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4">Benefits & Perks</h2>
                    <p class="lead">We believe our people are our greatest competitive advantage.</p>
                    <p>At Startout AI, we've created an environment that fosters innovation, collaboration, and personal growth. We value diversity of thought and background, and we're committed to creating an inclusive workplace where everyone can thrive.</p>
                    
                    <div class="row mt-4">
                        <?php foreach ($benefits as $benefit): ?>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2"><?= esc($benefit) ?></h5>
                                    <p class="small">Comprehensive benefits package</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="bg-white rounded p-5 shadow-sm">
                        <i class="fas fa-trophy fa-7x text-primary mb-3"></i>
                        <h4>Great Workplace</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section id="open-positions" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Open Positions</h2>
                    <p class="lead">Explore opportunities to join our growing team</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="position-filters mb-5 text-center">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary active" data-filter="all">All Positions</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="engineering">Engineering</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="operations">Operations</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="product">Product</button>
                        </div>
                    </div>
                    
                    <div class="position-list">
                        <?php foreach ($open_positions as $position): ?>
                        <div class="position-card mb-4" data-category="engineering">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="mb-2"><?= esc($position) ?></h4>
                                            <div class="d-flex flex-wrap gap-3 mb-3">
                                                <span class="badge bg-light text-dark"><i class="fas fa-map-marker-alt me-2"></i>Remote</span>
                                                <span class="badge bg-light text-dark"><i class="fas fa-briefcase me-2"></i>Full-time</span>
                                            </div>
                                        </div>
                                        <span class="badge bg-primary">Engineering</span>
                                    </div>
                                    <p class="mb-4">Join our team to work on cutting-edge AI solutions that transform customer experiences across various industries.</p>
                                    <a href="<?= site_url('contact') ?>" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Employee Testimonials -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="mb-3">Hear From Our Team</h2>
                    <p class="lead">What makes Startout AI a great place to work</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 bg-secondary text-white p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light text-dark rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-user fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Jennifer K.</h5>
                                <p class="small text-light mb-0">AI Research Scientist</p>
                            </div>
                        </div>
                        <blockquote class="mb-0">
                            <p>"The opportunity to work on cutting-edge AI problems that have real-world impact is what excites me every day. The collaborative culture here is unmatched."</p>
                        </blockquote>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 bg-secondary text-white p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light text-dark rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-user fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">David M.</h5>
                                <p class="small text-light mb-0">Customer Experience Lead</p>
                            </div>
                        </div>
                        <blockquote class="mb-0">
                            <p>"I've grown more in my two years at Startout AI than in my previous five years combined. The leadership truly invests in employee development."</p>
                        </blockquote>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 bg-secondary text-white p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light text-dark rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-user fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Priya S.</h5>
                                <p class="small text-light mb-0">Product Manager</p>
                            </div>
                        </div>
                        <blockquote class="mb-0">
                            <p>"The balance between innovation and execution is perfect here. We move fast but always keep quality and customer impact at the forefront."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Our Hiring Process</h2>
                    <p class="lead">What to expect when you apply</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Application Review</h4>
                        <p>Our team reviews your application and portfolio to assess fit.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">Initial Screening</h4>
                        <p>A 30-minute call with our recruiting team to discuss your background.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Team Interviews</h4>
                        <p>Virtual or in-person interviews with your potential future team members.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fw-bold">4</span>
                        </div>
                        <h4 class="mb-3">Skills Assessment</h4>
                        <p>A practical exercise to demonstrate your skills (varies by role).</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fw-bold">5</span>
                        </div>
                        <h4 class="mb-3">Final Decision</h4>
                        <p>We make an offer to candidates who are the best fit for our team.</p>
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
                    <h2 class="mb-4">Don't See Your Dream Role?</h2>
                    <p class="lead mb-5">We're always looking for talented individuals. Send us your resume and we'll contact you when a matching position opens.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Submit General Application</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Position filtering functionality
        const filterButtons = document.querySelectorAll('.position-filters button');
        const positionCards = document.querySelectorAll('.position-card');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                
                // Filter positions
                positionCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

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

        // Animation for process steps
        const processSteps = document.querySelectorAll('.position-card, .card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        processSteps.forEach(step => {
            step.classList.add('animate__animated');
            observer.observe(step);
        });
    });
</script>
<style>
    .position-filters .btn {
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
    }
    
    .position-filters .btn.active {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
    
    .position-card {
        transition: transform 0.3s ease;
    }
    
    .position-card:hover {
        transform: translateY(-5px);
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