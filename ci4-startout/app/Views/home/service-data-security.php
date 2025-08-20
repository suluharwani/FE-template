<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-5">
                    <h1 class="display-4 fw-bold mb-3">Layanan Keamanan Data</h1>
                    <p class="lead mb-4">Platform keamanan kami yang sedang dipatenkan untuk lingkungan kerja remote yang terlindungi.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Request Demo Keamanan</a>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="bg-light rounded p-5 text-dark">
                        <i class="fas fa-shield-alt fa-7x text-primary mb-3"></i>
                        <h4>Data Security</h4>
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
                <li class="breadcrumb-item active" aria-current="page">Keamanan Data</li>
            </ol>
        </div>
    </nav>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Fitur Keamanan Kami</h2>
                    <p class="lead">Kami menyediakan solusi keamanan data yang komprehensif untuk melindungi bisnis Anda</p>
                </div>
            </div>
            
            <div class="row g-4">
                <?php foreach ($security_features as $feature): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-lock fa-lg"></i>
                        </div>
                        <h4 class="mb-3"><?= esc($feature) ?></h4>
                        <p>Fitur keamanan canggih untuk melindungi data bisnis Anda dari ancaman cyber.</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Compliance Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Standar Kepatuhan</h2>
                    <p class="lead">Kami mematuhi standar keamanan dan kepatuhan internasional terkemuka</p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <?php foreach ($compliance as $standard): ?>
                <div class="col-md-4 col-lg-3">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-certificate fa-lg"></i>
                        </div>
                        <h4 class="mb-3"><?= esc($standard) ?></h4>
                        <p>Kepatuhan penuh dengan standar <?= esc($standard) ?> untuk keamanan data.</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Manfaat Keamanan Data Kami</h2>
                    <p class="lead">Mengapa memilih layanan keamanan data kami untuk bisnis Anda</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-user-shield fa-lg"></i>
                        </div>
                        <h4 class="mb-3">Perlindungan Data</h4>
                        <p>Melindungi data sensitif bisnis dan pelanggan dari akses tidak sah</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-check-circle fa-lg"></i>
                        </div>
                        <h4 class="mb-3">Kepatuhan Regulasi</h4>
                        <p>Memastikan kepatuhan dengan regulasi perlindungan data yang berlaku</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-bolt fa-lg"></i>
                        </div>
                        <h4 class="mb-3">Kinerja Optimal</h4>
                        <p>Solusi keamanan yang tidak mengorbankan kinerja sistem</p>
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
                    <h2 class="mb-4">Amankan Data Pelanggan Anda Hari Ini</h2>
                    <p class="lead mb-5">Para ahli keamanan kami siap menilai kebutuhan Anda dan menerapkan solusi terbukti kami.</p>
                    <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3">Hubungi Tim Keamanan</a>
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