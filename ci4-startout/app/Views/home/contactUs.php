<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Contact Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Let's talk about your customer experience needs</h1>
                    <p class="lead mb-4">Our team is ready to help you transform your customer interactions with intelligent AI solutions.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contact-form" class="btn btn-light btn-lg px-4 py-3">Send us a message</a>
                        <a href="#contact-info" class="btn btn-outline-light btn-lg px-4 py-3">Contact information</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-headset fa-7x text-primary mb-3"></i>
                        <h4>Customer Support</h4>
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
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div>
    </nav>

    <!-- Contact Form Section -->
    <section id="contact-form" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Send us a message</h2>
                            <p class="text-center text-muted mb-5">Complete the form below and our team will get back to you within 24 hours.</p>
                            
                            <form id="contactForm" action="<?= site_url('contact/send') ?>" method="POST">
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
                                    <label for="company" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="service" class="form-label">Service Interest *</label>
                                    <select class="form-select" id="service" name="service" required>
                                        <option value="" selected disabled>Select a service</option>
                                        <option value="customer-support">Customer Support</option>
                                        <option value="ai-automation">AI & Automation</option>
                                        <option value="content-moderation">Content Moderation</option>
                                        <option value="technical-support">Technical Support</option>
                                        <option value="crm-integration">CRM Integration</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="message" class="form-label">Your Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                                    <label class="form-check-label" for="consent">I agree to the privacy policy and consent to Startout AI contacting me about my inquiry. *</label>
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 py-3">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section id="contact-info" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-5">
                    <h2 class="fw-bold mb-4">Other ways to reach us</h2>
                    <p class="lead">We're available through multiple channels to serve you better.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Our Office</h4>
                        <p class="mb-0"><?= esc($office_address) ?></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-phone-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Call Us</h4>
                        <p class="mb-2"><strong>Phone:</strong> <?= esc($phone) ?></p>
                        <p class="mb-0"><strong>Hours:</strong> <?= esc($working_hours) ?></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Email Us</h4>
                        <p class="mb-2"><strong>Email:</strong> <?= esc($email) ?></p>
                        <p class="mb-0"><strong>Response:</strong> Within 24 hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mb-5">
                    <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
                    <p class="lead">Find quick answers to common questions about our services.</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What types of businesses do you work with?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We work with businesses of all sizes across various industries, from startups to enterprise organizations. Our solutions are tailored to meet the specific needs of each client.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How quickly can you start a new project?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most projects can be started within 1-2 weeks after initial consultation and agreement. The exact timeline depends on the complexity of your requirements.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you offer customized solutions?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we specialize in creating customized AI solutions tailored to your specific business needs and customer experience goals.
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
                    <h2 class="mb-4">Ready to transform your customer experience?</h2>
                    <p class="lead mb-5">Schedule a consultation with our experts today and discover how Startout AI can help your business.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#contact-form" class="btn btn-light btn-lg px-4 py-3 fw-bold">Get Started</a>
                        <a href="tel:<?= esc(str_replace([' ', '+', '-', '(', ')'], '', $phone)) ?>" class="btn btn-outline-light btn-lg px-4 py-3 fw-bold">
                            <i class="fas fa-phone-alt me-2"></i> Call Us Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission handling
        const contactForm = document.getElementById('contactForm');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
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
                        alert('Thank you for your message! Our team will get back to you shortly.');
                        this.reset();
                    } else {
                        alert('There was an error sending your message. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error sending your message. Please try again.');
                });
                */
                
                // For demo purposes (remove when implementing backend)
                alert('Thank you for your message! Our team will get back to you shortly.');
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

        // Animation for form elements
        const formElements = document.querySelectorAll('.form-control, .form-select, .form-check-input');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        formElements.forEach(element => {
            element.classList.add('animate__animated');
            observer.observe(element);
        });
    });
</script>
<style>
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
    
    .accordion-button {
        font-weight: 500;
        padding: 1.25rem;
    }
    
    .accordion-button:not(.collapsed) {
        background-color: var(--primary-color);
        color: white;
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
    
    #contact-form {
        scroll-margin-top: 100px;
    }
</style>
<?= $this->endSection() ?>