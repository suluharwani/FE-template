<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Layanan Data & AI</h1>
                    <p class="lead mb-4">Data training berkualitas tinggi untuk memberdayakan model machine learning Anda dengan presisi manusia dan efisiensi AI.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Request Konsultasi</a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-brain fa-7x text-primary mb-3"></i>
                        <h4>AI & Data Analysis</h4>
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
                <li class="breadcrumb-item active" aria-current="page">Layanan Data & AI</li>
            </ol>
        </div>
    </nav>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Layanan AI & Data Analysis Kami</h2>
                    <p class="lead">Kami menyediakan berbagai layanan AI dan analisis data untuk membantu bisnis Anda tumbuh</p>
                </div>
            </div>
            
            <div class="row g-4">
                <?php foreach ($ai_services as $service): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-database fa-2x"></i>
                        </div>
                        <h4 class="mb-3"><?= esc($service) ?></h4>
                        <p>Layanan <?= esc($service) ?> yang membantu bisnis Anda membuat keputusan data-driven yang lebih baik.</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Studi Kasus</h2>
                    <p class="lead">Lihat bagaimana layanan kami telah membantu klien kami mencapai hasil yang luar biasa</p>
                </div>
            </div>
            
            <div class="row g-4">
                <?php foreach ($case_studies as $case): ?>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="bg-primary text-white rounded-circle mb-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-chart-line fa-lg"></i>
                            </div>
                            <h4 class="mb-3">Success Story</h4>
                            <p><?= esc($case) ?></p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary mt-3">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Proses Kerja Kami</h2>
                    <p class="lead">Bagaimana kami memberikan layanan AI dan analisis data terbaik untuk bisnis Anda</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <span class="fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Konsultasi & Assessment</h4>
                        <p>Kami menganalisis kebutuhan bisnis Anda dan menilai data yang tersedia</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <span class="fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">Pengembangan Model</h4>
                        <p>Kami mengembangkan dan melatih model AI yang disesuaikan dengan kebutuhan Anda</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <span class="fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Implementasi & Optimasi</h4>
                        <p>Kami menerapkan solusi dan terus mengoptimalkan performa model</p>
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
                    <h2 class="mb-4">Siap Meningkatkan Model AI Anda?</h2>
                    <p class="lead mb-5">Para ahli anotasi data kami siap membantu Anda membangun dataset training yang lebih baik.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Mulai Sekarang</a>
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
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
</style>
<?= $this->endSection() ?>