<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <!-- Page Header -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center py-4">
                    <h1 class="display-4 fw-bold mb-3">Informasi Umum Layanan Kami</h1>
                    <p class="lead">Temukan bagaimana Startout AI menggabungkan kecerdasan buatan mutakhir dengan keahlian manusia untuk mentransformasi interaksi pelanggan Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="bg-light py-3">
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informasi Layanan</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="mb-5">
                        <h2 class="fw-bold mb-4">Revolusi Pengalaman Pelanggan dengan AI</h2>
                        <p class="mb-4"><?= esc($content) ?></p>
                        <p>Didirikan berdasarkan prinsip bahwa teknologi harus meningkatkan kemampuan manusia daripada menggantikannya, platform kami memberikan hasil yang terukur melalui:</p>
                        <ul class="mb-4">
                            <li class="mb-2">Otomatisasi cerdas yang menangani pertanyaan rutin 24/7</li>
                            <li class="mb-2">Eskalasi mulus ke pakar manusia ketika diperlukan</li>
                            <li class="mb-2">Algoritma pembelajaran berkelanjutan yang terus meningkat</li>
                            <li class="mb-2">Analitik komprehensif untuk melacak dan mengoptimalkan kinerja</li>
                        </ul>
                        <div class="bg-light rounded p-5 text-center mb-4">
                            <i class="fas fa-chart-line fa-5x text-primary mb-3"></i>
                            <h4>Dashboard AI Pengalaman Pelanggan</h4>
                            <p class="small text-muted">Platform AI proprietary kami memberikan wawasan real-time ke dalam interaksi pelanggan</p>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="fw-bold mb-4">Keunggulan Startout AI</h2>
                        <p>Apa yang membedakan kami dari solusi layanan pelanggan tradisional adalah perpaduan unik teknologi dan keahlian manusia:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <i class="fas fa-brain fa-3x text-primary"></i>
                                        </div>
                                        <h3 class="card-title h5">Pembelajaran Adaptif</h3>
                                        <p class="card-text">AI kami tidak hanya mengikuti skrip—ia belajar dari setiap interaksi untuk memberikan respons yang semakin akurat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <i class="fas fa-user-shield fa-3x text-primary"></i>
                                        </div>
                                        <h3 class="card-title h5">Pengawasan Manusia</h3>
                                        <p class="card-text">Setiap respons AI dipantau oleh tim jaminan kualitas kami untuk memastikan keakuratan dan kesesuaian.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <i class="fas fa-comments fa-3x text-primary"></i>
                                        </div>
                                        <h3 class="card-title h5">Dukungan Omnichannel</h3>
                                        <p class="card-text">Integrasi mulus di seluruh email, chat, media sosial, dan telepon untuk pengalaman pelanggan yang konsisten.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <i class="fas fa-shield-alt fa-3x text-primary"></i>
                                        </div>
                                        <h3 class="card-title h5">Keamanan Utama</h3>
                                        <p class="card-text">Platform Cubeless kami yang sedang dipatenkan memastikan keamanan tingkat perusahaan untuk semua data pelanggan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="fw-bold mb-4">Hasil Terbukti di Berbagai Industri</h2>
                        <p>Solusi kami telah membantu perusahaan di berbagai sektor mencapai peningkatan luar biasa dalam metrik pengalaman pelanggan mereka:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-4 mb-4">
                                <div class="card text-center p-4 h-100">
                                    <h3 class="text-primary fw-bold">73%</h3>
                                    <p>Rata-rata pengurangan waktu respons pertama</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card text-center p-4 h-100">
                                    <h3 class="text-primary fw-bold">92%</h3>
                                    <p>Skor kepuasan pelanggan (CSAT)</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card text-center p-4 h-100">
                                    <h3 class="text-primary fw-bold">40%</h3>
                                    <p>Pengurangan biaya operasional</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-light p-4 rounded mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Sarah Johnson</h5>
                                    <p class="small text-muted mb-0">Director of Customer Experience, TechCorp</p>
                                </div>
                            </div>
                            <blockquote class="mb-0">
                                <p>"Startout AI mentransformasi operasi dukungan pelanggan kami. Kami beralih dari kesulitan dengan waktu respons menjadi memimpin industri dalam kepuasan pelanggan—sambil mengurangi biaya sebesar 35%."</p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="fw-bold mb-4">Cara Kerjanya</h2>
                        <div class="process-steps">
                            <div class="d-flex mb-5">
                                <div class="bg-primary text-white rounded-circle me-4 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <span class="fw-bold">1</span>
                                </div>
                                <div>
                                    <h4>Penilaian Awal</h4>
                                    <p>Kami menganalisis interaksi pelanggan Anda saat ini untuk mengidentifikasi titik masalah dan peluang perbaikan.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-5">
                                <div class="bg-primary text-white rounded-circle me-4 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <span class="fw-bold">2</span>
                                </div>
                                <div>
                                    <h4>Desain Solusi Kustom</h4>
                                    <p>Tim kami merancang solusi hybrid AI-manusia yang disesuaikan dengan kebutuhan bisnis spesifik dan harapan pelanggan Anda.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-5">
                                <div class="bg-primary text-white rounded-circle me-4 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <span class="fw-bold">3</span>
                                </div>
                                <div>
                                    <h4>Implementasi</h4>
                                    <p>Kami mengintegrasikan platform kami dengan sistem yang ada dan melatih AI serta tim Anda untuk kinerja optimal.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="bg-primary text-white rounded-circle me-4 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <span class="fw-bold">4</span>
                                </div>
                                <div>
                                    <h4>Optimasi Berkelanjutan</h4>
                                    <p>Pemantauan dan penyesuaian berkelanjutan memastikan pengalaman pelanggan Anda terus membaik dari waktu ke waktu.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary text-white p-5 rounded text-center mb-5">
                        <h3 class="mb-3">Siap Mentransformasi Pengalaman Pelanggan Anda?</h3>
                        <p class="mb-4">Jadwalkan konsultasi dengan pakar kami untuk melihat bagaimana Startout AI dapat bekerja untuk bisnis Anda.</p>
                        <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3 fw-bold">Mulai Hari Ini</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center fw-bold mb-5">Pertanyaan yang Sering Diajukan</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Bagaimana Startout AI berbeda dari chatbot tradisional?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Tidak seperti chatbot dasar yang mengikuti pohon keputusan kaku, Startout AI menggunakan pemrosesan bahasa alami dan pembelajaran mesin untuk memahami maksud pelanggan dan memberikan respons kontekstual. Sistem kami terus belajar dari interaksi dan dapat mentransfer percakapan dengan mulus ke agen manusia ketika diperlukan.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Industri apa yang Anda kuasai?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Kami memiliki keahlian mendalam di berbagai sektor termasuk e-commerce, teknologi, gaming, travel, dan layanan keuangan. Platform kami dapat beradaptasi dengan hampir semua industri yang menghargai pengalaman pelanggan yang luar biasa.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Berapa lama implementasi biasanya berlangsung?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Sebagian besar implementasi diselesaikan dalam 2-4 minggu, tergantung pada kompleksitas sistem Anda dan ruang lingkup integrasi. Kami menawarkan peluncuran bertahap untuk meminimalkan gangguan pada operasi Anda.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3 border-0 rounded overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    Dukungan seperti apa yang Anda berikan selama implementasi?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Setiap klien menerima manajer implementasi khusus dan dukungan teknis 24/7 selama proses onboarding. Kami juga memberikan pelatihan komprehensif untuk tim Anda dan layanan optimasi berkelanjutan.</p>
                                </div>
                            </div>
                        </div>
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

        // Animation for cards and process steps
        const animatedElements = document.querySelectorAll('.card, .d-flex.mb-5, .accordion-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(element => {
            element.classList.add('animate__animated');
            observer.observe(element);
        });
    });
</script>
<style>
    .process-steps .d-flex {
        position: relative;
    }
    
    .process-steps .d-flex:not(:last-child):after {
        content: '';
        position: absolute;
        left: 25px;
        top: 50px;
        bottom: -50px;
        width: 2px;
        background-color: var(--primary-color);
        opacity: 0.3;
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
    
    blockquote {
        border-left: 4px solid var(--primary-color);
        padding-left: 1rem;
        font-style: italic;
    }
</style>
<?= $this->endSection() ?>