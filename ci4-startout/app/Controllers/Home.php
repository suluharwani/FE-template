<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home - Selamat Datang di Website Kami',
            'page' => 'home',
            'featured_services' => [
                'AI & Data Analysis',
                'Content Moderation',
                'Data Security'
            ]
        ];
        return view('home/index', $data);
    }

    public function aboutUs(): string
    {
        $data = [
            'title' => 'Tentang Kami - Profil Perusahaan',
            'page' => 'about',
            'company_history' => 'Didirikan pada tahun 2010, kami telah melayani lebih dari 500 klien di seluruh dunia.',
            'team_members' => [
                ['name' => 'John Doe', 'position' => 'CEO'],
                ['name' => 'Jane Smith', 'position' => 'CTO'],
                ['name' => 'Robert Johnson', 'position' => 'Lead Developer']
            ]
        ];
        return view('home/aboutUs', $data);
    }

    public function career(): string
    {
        $data = [
            'title' => 'Karir - Bergabunglah dengan Tim Kami',
            'page' => 'career',
            'open_positions' => [
                'Senior PHP Developer',
                'Frontend Engineer',
                'Data Scientist',
                'UX/UI Designer'
            ],
            'benefits' => [
                'Gaji kompetitif',
                'Asuransi kesehatan',
                'Work from home flexibility',
                'Pelatihan dan pengembangan'
            ]
        ];
        return view('home/career', $data);
    }

    public function contactUs(): string
    {
        $data = [
            'title' => 'Hubungi Kami - Customer Service',
            'page' => 'contact',
            'office_address' => 'Jl. Contoh No. 123, Jakarta Selatan, Indonesia',
            'phone' => '+62 21 1234 5678',
            'email' => 'info@perusahaan.com',
            'working_hours' => 'Senin - Jumat: 09:00 - 17:00'
        ];
        return view('home/contactUs', $data);
    }

    public function joinUs(): string
    {
        $data = [
            'title' => 'Bergabung - Daftar Menjadi Anggota',
            'page' => 'join',
            'membership_plans' => [
                'Basic' => ['price' => 'Free', 'features' => ['Akses terbatas', 'Dukungan email']],
                'Premium' => ['price' => 'Rp 99.000/bulan', 'features' => ['Akses penuh', 'Dukungan prioritas', 'Fitur eksklusif']],
                'Enterprise' => ['price' => 'Custom', 'features' => ['Solusi khusus', 'Dukungan 24/7', 'Training khusus']]
            ]
        ];
        return view('home/joinUs', $data);
    }

    public function page(): string
    {
        $data = [
            'title' => 'Halaman - Informasi Umum',
            'page' => 'general',
            'content' => 'Ini adalah halaman umum yang berisi informasi penting tentang layanan dan produk kami.'
        ];
        return view('home/page', $data);
    }

    public function service(): string
    {
        $data = [
            'title' => 'Layanan - Solusi Profesional',
            'page' => 'services',
            'services_overview' => 'Kami menyediakan berbagai layanan profesional untuk memenuhi kebutuhan bisnis Anda.'
        ];
        return view('home/service', $data);
    }

    public function serviceDataAI(): string
    {
        $data = [
            'title' => 'Layanan Data & AI - Solusi Kecerdasan Buatan',
            'page' => 'service-data-ai',
            'ai_services' => [
                'Machine Learning Solutions',
                'Predictive Analytics',
                'Natural Language Processing',
                'Computer Vision'
            ],
            'case_studies' => [
                'Meningkatkan efisiensi operasional hingga 40% untuk perusahaan retail',
                'Mengurangi biaya operasional hingga 25% dengan automasi cerdas'
            ]
        ];
        return view('home/service-data-ai', $data);
    }

    public function serviceDataSecurity(): string
    {
        $data = [
            'title' => 'Layanan Keamanan Data - Perlindungan Informasi',
            'page' => 'service-data-security',
            'security_features' => [
                'Enkripsi data end-to-end',
                'Backup otomatis harian',
                'Monitoring 24/7',
                'Audit keamanan berkala'
            ],
            'compliance' => ['GDPR', 'ISO 27001', 'PCI DSS']
        ];
        return view('home/service-data-security', $data);
    }

    public function serviceModeration(): string
    {
        $data = [
            'title' => 'Layanan Moderasi - Konten Aman dan Terkendali',
            'page' => 'service-moderation',
            'moderation_types' => [
                'Moderasi konten teks',
                'Moderasi gambar dan video',
                'Moderasi komunitas',
                'Moderasi ulasan produk'
            ],
            'coverage' => '24/7',
            'languages' => ['Indonesia', 'Inggris', 'Jawa', 'Sunda']
        ];
        return view('home/service-moderation', $data);
    }

    public function serviceTab(): string
    {
        $data = [
            'title' => 'Layanan Tab - Ringkasan Layanan Kami',
            'page' => 'service-tab',
            'tabs' => [
                'tab1' => ['title' => 'Layanan Data & AI', 'content' => 'Solusi kecerdasan buatan untuk transformasi digital'],
                'tab2' => ['title' => 'Keamanan Data', 'content' => 'Perlindungan menyeluruh untuk aset digital Anda'],
                'tab3' => ['title' => 'Moderasi Konten', 'content' => 'Menjaga platform Anda tetap aman dan nyaman']
            ]
        ];
        return view('home/service-tab', $data);
    }
}