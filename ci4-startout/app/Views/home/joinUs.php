<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Join Us Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Shape the Future of Customer Experience</h1>
                    <p class="lead mb-4">Join our mission to revolutionize how businesses connect with their customers through intelligent AI solutions.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#application-form" class="btn btn-light btn-lg px-4 py-3">Apply Now</a>
                        <a href="#why-join" class="btn btn-outline-light btn-lg px-4 py-3">Why Join Us</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-rocket fa-7x text-primary mb-3"></i>
                        <h4>Join Our Team</h4>
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
                <li class="breadcrumb-item active" aria-current="page">Join Us</li>
            </ol>
        </div>
    </nav>

    <!-- Why Join Section -->
    <section id="why-join" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Why Join Our Team?</h2>
                    <p class="lead">We're not just building a company - we're creating a movement to transform customer experiences globally.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-rocket fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Work-Life Balance</h4>
                        <p>Flexible schedules and remote options to help you thrive both professionally and personally.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-brain fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Cutting-Edge Tech</h4>
                        <p>Work with the latest AI, machine learning, and NLP technologies to solve real-world problems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Exceptional Team</h4>
                        <p>Collaborate with brilliant minds from diverse backgrounds who share your passion for innovation.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Growth Opportunities</h4>
                        <p>We invest in your development through training, mentorship, and challenging projects.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-balance-scale fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Impactful Work</h4>
                        <p>Your contributions will directly shape how businesses interact with millions of customers worldwide.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Great Benefits</h4>
                        <p>Comprehensive health coverage, generous PTO, and competitive compensation packages.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-5">
                    <h2 class="fw-bold mb-4">Membership Plans</h2>
                    <p class="lead">Choose the plan that works best for you and join our community</p>
                </div>
            </div>
            
            <div class="row g-4">
                <?php foreach ($membership_plans as $plan_name => $plan_details): ?>
                <div class="col-md-4">
                    <div class="card h-100 text-center">
                        <div class="card-header bg-primary text-white py-4">
                            <h3 class="fw-bold mb-0"><?= esc($plan_name) ?></h3>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title pricing-card-title mb-4"><?= esc($plan_details['price']) ?></h4>
                            <ul class="list-unstyled mb-4">
                                <?php foreach ($plan_details['features'] as $feature): ?>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <?= esc($feature) ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent py-3">
                            <a href="#application-form" class="btn btn-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section id="application-form" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Apply to Join Our Community</h2>
                            <p class="text-center text-muted mb-5">Fill out the form below and we'll get back to you soon.</p>
                            
                            <form id="joinForm" action="<?= site_url('join/send') ?>" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="firstName" class="form-label">First Name *</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="lastName" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="membership_plan" class="form-label">Membership Plan *</label>
                                    <select class="form-select" id="membership_plan" name="membership_plan" required>
                                        <option value="" selected disabled>Select a plan</option>
                                        <?php foreach ($membership_plans as $plan_name => $plan_details): ?>
                                        <option value="<?= esc(strtolower($plan_name)) ?>"><?= esc($plan_name) ?> - <?= esc($plan_details['price']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="message" class="form-label">Why do you want to join us? *</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    <div class="form-text">Tell us about your interests and how you'd like to contribute to our community.</div>
                                </div>
                                
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="privacyConsent" name="privacy_consent" required>
                                    <label class="form-check-label" for="privacyConsent">I agree to the privacy policy and consent to Startout AI processing my data for membership purposes. *</label>
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 py-3">Submit Application</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-5">
                    <h2 class="fw-bold mb-4">What Our Members Say</h2>
                    <p class="lead">Hear from people who've joined our community</p>
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
                                <h5 class="mb-0">Michael T.</h5>
                                <p class="small text-light mb-0">Premium Member</p>
                                <p class="small text-light">Joined 2022</p>
                            </div>
                        </div>
                        <blockquote class="mb-0">
                            <p>"The community support and resources available have helped me grow both personally and professionally. The networking opportunities are incredible."</p>
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
                                <h5 class="mb-0">Sarah L.</h5>
                                <p class="small text-light mb-0">Enterprise Member</p>
                                <p class="small text-light">Joined 2021</p>
                            </div>
                        </div>
                        <blockquote class="mb-0">
                            <p>"The exclusive events and training sessions have been invaluable for my career development. It's more than a membership - it's a growth partnership."</p>
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
                                <h5 class="mb-0">David K.</h5>
                                <p class="small text-light mb-0">Basic Member</p>
                                <p class="small text-light">Joined 2023</p>
                            </div>
                        </div>
                        <blockquote class="mb-0">
                            <p>"Even with the free plan, I've gained access to amazing resources and connected with like-minded professionals. A great way to start your journey."</p>
                        </blockquote>
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
                    <h2 class="mb-4">Ready to Join Our Community?</h2>
                    <p class="lead mb-5">Become part of a growing network of professionals and enthusiasts in the AI and customer experience space.</p>
                    <a href="#application-form" class="btn btn-light btn-lg px-5 py-3">Apply for Membership</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission handling
        const joinForm = document.getElementById('joinForm');
        
        if (joinForm) {
            joinForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic form validation
                const formData = new FormData(this);
                let isValid = true;
                
                // Check required fields
                const requiredFields = this.querySelectorAll('[required]');
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('is-invalid');
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                if (!isValid) {
                    alert('Please fill in all required fields.');
                    return;
                }
                
                // Email validation
                const emailField = this.querySelector('input[type="email"]');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailField && !emailRegex.test(emailField.value)) {
                    alert('Please enter a valid email address.');
                    emailField.classList.add('is-invalid');
                    return;
                }
                
                // If using AJAX submission (uncomment to use)
                /*
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Thank you for your application! We will review your information and get back to you soon.');
                        this.reset();
                    } else {
                        alert('There was an error sending your application. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error sending your application. Please try again.');
                });
                */
                
                // For demo purposes (remove when implementing backend)
                alert('Thank you for your application! We will review your information and get back to you soon.');
                this.reset();
            });
        }

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
    .pricing-card-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-color);
    }
    
    .card-header {
        border-radius: 0.5rem 0.5rem 0 0 !important;
    }
    
    .list-unstyled li {
        padding: 0.25rem 0;
    }
    
    .form-control, .form-select {
        border-radius: 8px;
        padding: 0.75rem 1rem;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    
    .form-control.is-invalid {
        border-color: #dc3545;
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
    
    #application-form {
        scroll-margin-top: 100px;
    }
</style>
<?= $this->endSection() ?>