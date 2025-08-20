<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Services Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Intelligent Customer Experience Solutions</h1>
                    <p class="lead mb-4">Transform your customer interactions with our AI-powered services designed to deliver exceptional experiences at scale.</p>
                    <a href="#our-services" class="btn btn-light btn-lg px-4 py-3">Explore Our Services</a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-headset fa-7x text-primary mb-3"></i>
                        <h4>Customer Experience</h4>
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
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </div>
    </nav>

    <!-- Services Overview Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Our Comprehensive Service Portfolio</h2>
                    <p class="lead">From AI-powered automation to human-centered support, we offer a full spectrum of customer experience solutions tailored to your business needs.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-headset fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Customer Support</h4>
                        <p>24/7 multilingual support across all channels with seamless AI-human handoffs.</p>
                        <a href="#customer-support" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-robot fa-2x"></i>
                        </div>
                        <h4 class="mb-3">AI & Automation</h4>
                        <p>Intelligent chatbots, NLP, and workflow automation to streamline operations.</p>
                        <a href="#ai-automation" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Content Moderation</h4>
                        <p>Keep your platforms safe with our AI-human hybrid moderation solutions.</p>
                        <a href="<?= site_url('service/moderation') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-tools fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Technical Support</h4>
                        <p>Expert troubleshooting and technical assistance for your products and services.</p>
                        <a href="#technical-support" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-database fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Data Annotation</h4>
                        <p>High-quality labeled data to train and improve your AI models.</p>
                        <a href="<?= site_url('service/data-ai') ?>" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-project-diagram fa-2x"></i>
                        </div>
                        <h4 class="mb-3">CRM Integration</h4>
                        <p>Seamless integration with your existing customer relationship platforms.</p>
                        <a href="#crm-integration" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Support Section -->
    <section id="customer-support" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="bg-light rounded p-5 text-center">
                        <i class="fas fa-headset fa-7x text-primary mb-3"></i>
                        <h4>Customer Support Team</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Omnichannel Customer Support</h2>
                    <p class="lead">Deliver exceptional service across every customer touchpoint.</p>
                    <p>Our hybrid approach combines AI efficiency with human empathy to resolve inquiries faster while maintaining the personal touch your customers expect.</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">24/7 Availability</h5>
                                    <p>Round-the-clock support across all time zones</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Multilingual</h5>
                                    <p>Support in 30+ languages with native speakers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Seamless Escalation</h5>
                                    <p>AI handles routine queries, humans step in when needed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Performance Analytics</h5>
                                    <p>Real-time insights to continuously improve service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?= site_url('contact') ?>" class="btn btn-primary mt-3">Request Support Demo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- AI & Automation Section -->
    <section id="ai-automation" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                    <div class="bg-light rounded p-5 text-center">
                        <i class="fas fa-robot fa-7x text-primary mb-3"></i>
                        <h4>AI Automation</h4>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="fw-bold mb-4">AI & Intelligent Automation</h2>
                    <p class="lead">Transform customer interactions with our cutting-edge AI solutions.</p>
                    <p>Our proprietary natural language processing and machine learning technologies enable intelligent automation that understands context, learns from interactions, and improves over time.</p>
                    
                    <div class="mt-4">
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">1</div>
                                <div>
                                    <h5 class="mb-2">Conversational AI</h5>
                                    <p class="mb-0">Human-like chatbots that understand intent and context</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">2</div>
                                <div>
                                    <h5 class="mb-2">Workflow Automation</h5>
                                    <p class="mb-0">Streamline repetitive processes with intelligent automation</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">3</div>
                                <div>
                                    <h5 class="mb-2">Sentiment Analysis</h5>
                                    <p class="mb-0">Detect customer emotions and adjust responses accordingly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-4">Explore AI Capabilities</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Moderation Section -->
    <section id="content-moderation" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">Content Moderation & Trust & Safety</h2>
                    <p class="lead">Protect your brand and users with our hybrid moderation platform</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 bg-white bg-opacity-10 border-0">
                        <div class="bg-white text-primary rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-robot fa-lg"></i>
                        </div>
                        <h4 class="mb-3">AI-Powered Filtering</h4>
                        <p>Advanced algorithms detect and flag inappropriate content in real-time across text, images, and video.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 bg-white bg-opacity-10 border-0">
                        <div class="bg-white text-primary rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-users fa-lg"></i>
                        </div>
                        <h4 class="mb-3">Human Review</h4>
                        <p>Our expert moderators review flagged content with cultural and contextual understanding.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 bg-white bg-opacity-10 border-0">
                        <div class="bg-white text-primary rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-chart-line fa-lg"></i>
                        </div>
                        <h4 class="mb-3">Continuous Learning</h4>
                        <p>Our system learns from every decision to improve accuracy and reduce false positives.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?= site_url('service/moderation') ?>" class="btn btn-light btn-lg px-4 py-3">Get Moderation Demo</a>
            </div>
        </div>
    </section>

    <!-- Technical Support Section -->
    <section id="technical-support" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="bg-light rounded h-100 d-flex align-items-center justify-content-center p-5">
                                    <i class="fas fa-tools fa-7x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-5">
                                    <h2 class="fw-bold mb-4">Technical Support Services</h2>
                                    <p class="lead mb-4">Expert troubleshooting and technical assistance for your products and services.</p>
                                    
                                    <div class="mb-4">
                                        <div class="d-flex mb-3">
                                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="fas fa-laptop-code"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Multi-Tier Support</h5>
                                                <p class="small text-muted mb-0">From basic troubleshooting to advanced technical issues</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="fas fa-mobile-alt"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Omnichannel Support</h5>
                                                <p class="small text-muted mb-0">Phone, email, chat, and remote assistance</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="fas fa-shield-alt"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Security Focused</h5>
                                                <p class="small text-muted mb-0">Our platform ensures data security</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-light p-4 rounded mb-4">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h3 class="text-primary mb-0">95%</h3>
                                                <p class="small mb-0">First Contact Resolution</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 class="text-primary mb-0">4.8/5</h3>
                                                <p class="small mb-0">Customer Satisfaction</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 class="text-primary mb-0">24/7</h3>
                                                <p class="small mb-0">Global Coverage</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <a href="<?= site_url('contact') ?>" class="btn btn-primary">Learn About Our Technical Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Annotation Section -->
    <section id="data-annotation" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-4">AI Data Annotation Services</h2>
                    <p class="lead">High-quality training data to power your machine learning models</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <h4 class="mb-3">Text Annotation</h4>
                        <p class="mb-3">Entity recognition, sentiment analysis, intent classification, and more.</p>
                        <a href="<?= site_url('service/data-ai') ?>" class="btn btn-sm btn-outline-primary">Details</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-image"></i>
                        </div>
                        <h4 class="mb-3">Image Annotation</h4>
                        <p class="mb-3">Bounding boxes, segmentation, keypoint detection, and classification.</p>
                        <a href="<?= site_url('service/data-ai') ?>" class="btn btn-sm btn-outline-primary">Details</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-video"></i>
                        </div>
                        <h4 class="mb-3">Video Annotation</h4>
                        <p class="mb-3">Object tracking, action recognition, and temporal segmentation.</p>
                        <a href="<?= site_url('service/data-ai') ?>" class="btn btn-sm btn-outline-primary">Details</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-voice"></i>
                        </div>
                        <h4 class="mb-3">Audio Annotation</h4>
                        <p class="mb-3">Speech recognition, speaker diarization, and sound classification.</p>
                        <a href="<?= site_url('service/data-ai') ?>" class="btn btn-sm btn-outline-primary">Details</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?= site_url('service/data-ai') ?>" class="btn btn-primary btn-lg px-4 py-3">Request Data Annotation Quote</a>
            </div>
        </div>
    </section>

    <!-- CRM Integration Section -->
    <section id="crm-integration" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4">CRM & Tool Integration</h2>
                    <p class="lead">Seamlessly connect our solutions with your existing tech stack</p>
                    <p>We specialize in integrating our AI-powered customer experience platform with all major CRM systems and business tools to create a unified workflow.</p>
                    
                    <div class="mt-4">
                        <div class="row g-3">
                            <div class="col-4 col-md-3">
                                <div class="bg-white p-3 rounded shadow-sm text-center">
                                    <i class="fab fa-salesforce fa-3x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="bg-white p-3 rounded shadow-sm text-center">
                                    <i class="fas fa-hubspot fa-3x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="bg-white p-3 rounded shadow-sm text-center">
                                    <i class="fab fa-microsoft fa-3x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="bg-white p-3 rounded shadow-sm text-center">
                                    <i class="fab fa-zendesk fa-3x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="card p-4 mb-3 shadow-sm">
                            <div class="d-flex">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Real-time Data Sync</h5>
                                    <p class="mb-0">Keep customer records updated across all systems automatically</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-4 mb-3 shadow-sm">
                            <div class="d-flex">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Custom Workflows</h5>
                                    <p class="mb-0">Tailor processes to match your unique business requirements</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-4 shadow-sm">
                            <div class="d-flex">
                                <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Enterprise Security</h5>
                                    <p class="mb-0">End-to-end encryption and compliance with data protection standards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Comparison Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-3">Service Tiers Comparison</h2>
                    <p class="lead">Choose the right level of support for your business needs</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 bg-dark border-light">
                        <div class="card-header text-center p-4">
                            <h4 class="mb-3">Essential</h4>
                            <div class="price mb-3">
                                <span class="currency">$</span>
                                <span class="amount">29</span>
                                <span class="period">/month</span>
                            </div>
                            <p class="small">Basic AI automation with limited human support</p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-outline-light w-100">Get Started</a>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Basic chatbot</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Email support</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> 8/5 coverage</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Basic analytics</li>
                                <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> Phone support</li>
                                <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> CRM integration</li>
                                <li class="text-muted"><i class="fas fa-times me-2"></i> Dedicated account manager</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-header text-center p-4 bg-primary">
                            <h4 class="mb-3">Professional</h4>
                            <div class="price mb-3">
                                <span class="currency">$</span>
                                <span class="amount">99</span>
                                <span class="period">/month</span>
                            </div>
                            <p class="small">Balanced AI and human support for growing businesses</p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-light w-100">Get Started</a>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Advanced chatbot</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Email & chat support</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> 12/5 coverage</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Advanced analytics</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Phone support</li>
                                <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> CRM integration</li>
                                <li class="text-muted"><i class="fas fa-times me-2"></i> Dedicated account manager</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 bg-dark border-light">
                        <div class="card-header text-center p-4">
                            <h4 class="mb-3">Enterprise</h4>
                            <div class="price mb-3">
                                <span class="currency">$</span>
                                <span class="amount">299</span>
                                <span class="period">/month</span>
                            </div>
                            <p class="small">Premium support with full customization</p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-outline-light w-100">Contact Sales</a>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Premium chatbot</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Omnichannel support</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> 24/7 coverage</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Premium analytics</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> Priority phone support</li>
                                <li class="mb-2"><i class="fas fa-check me-2"></i> CRM integration</li>
                                <li><i class="fas fa-check me-2"></i> Dedicated account manager</li>
                            </ul>
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
                    <p class="lead mb-5">Our team is ready to help you find the perfect solution for your business needs.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Contact Us</a>
                        <a href="<?= site_url('contact') ?>" class="btn btn-outline-light btn-lg px-4 py-3">Request Demo</a>
                    </div>
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
    
    .price .amount {
        font-size: 2.5rem;
        font-weight: bold;
    }
    
    .price .currency {
        font-size: 1.5rem;
        vertical-align: super;
    }
    
    .price .period {
        font-size: 1rem;
        color: #6c757d;
    }
</style>
<?= $this->endSection() ?>