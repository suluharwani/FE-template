<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Startout AI Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .sidebar .nav-link {
            color: #fff;
            padding: 0.75rem 1rem;
        }
        .sidebar .nav-link.active {
            background-color: #0d6efd;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
        }
        .stat-card {
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-0">
                <div class="p-4 text-center">
                    <h4 class="text-white mb-0">Startout AI</h4>
                    <small class="text-white-50">Admin Panel</small>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() == base_url('/admin') ? 'active' : '' ?>" href="/admin">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/pages') !== false ? 'active' : '' ?>" href="/admin/pages">
                            <i class="fas fa-file me-2"></i> Pages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/services') !== false ? 'active' : '' ?>" href="/admin/services">
                            <i class="fas fa-cogs me-2"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/team') !== false ? 'active' : '' ?>" href="/admin/team">
                            <i class="fas fa-users me-2"></i> Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/contacts') !== false ? 'active' : '' ?>" href="/admin/contacts">
                            <i class="fas fa-envelope me-2"></i> Contacts
                            <?php if (isset($contactCount) && $contactCount > 0): ?>
                            <span class="badge bg-danger float-end"><?= $contactCount ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/careers') !== false ? 'active' : '' ?>" href="/admin/careers">
                            <i class="fas fa-briefcase me-2"></i> Careers
                            <?php if (isset($careerCount) && $careerCount > 0): ?>
                            <span class="badge bg-danger float-end"><?= $careerCount ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/users') !== false ? 'active' : '' ?>" href="/admin/users">
                            <i class="fas fa-user me-2"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= strpos(current_url(), '/admin/settings') !== false ? 'active' : '' ?>" href="/admin/settings">
                            <i class="fas fa-cog me-2"></i> Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/logout">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="col-md-10 main-content">
                <div class="container-fluid p-4">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>