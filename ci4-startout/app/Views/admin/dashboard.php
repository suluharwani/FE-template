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
        }
        .sidebar .nav-link.active {
            background-color: #0d6efd;
        }
        .stat-card {
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-0">
                <div class="p-4">
                    <h4 class="text-white">Startout AI Admin</h4>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages">
                            <i class="fas fa-file me-2"></i> Pages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/services">
                            <i class="fas fa-cogs me-2"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/team">
                            <i class="fas fa-users me-2"></i> Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/contacts">
                            <i class="fas fa-envelope me-2"></i> Contacts
                            <?php if ($contactCount > 0): ?>
                            <span class="badge bg-danger float-end"><?= $contactCount ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/careers">
                            <i class="fas fa-briefcase me-2"></i> Careers
                            <?php if ($careerCount > 0): ?>
                            <span class="badge bg-danger float-end"><?= $careerCount ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/settings">
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
            <div class="col-md-10 p-4">
                <h2 class="mb-4">Dashboard</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="card-title">Pages</h6>
                                        <h3><?= $pageCount ?></h3>
                                    </div>
                                    <div>
                                        <i class="fas fa-file fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="card-title">Services</h6>
                                        <h3><?= $serviceCount ?></h3>
                                    </div>
                                    <div>
                                        <i class="fas fa-cogs fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="card-title">Team Members</h6>
                                        <h3><?= $teamCount ?></h3>
                                    </div>
                                    <div>
                                        <i class="fas fa-users fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="card-title">New Contacts</h6>
                                        <h3><?= $contactCount ?></h3>
                                    </div>
                                    <div>
                                        <i class="fas fa-envelope fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Quick Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mb-3">
                                        <a href="/admin/pages/create" class="btn btn-outline-primary btn-lg w-100">
                                            <i class="fas fa-plus-circle fa-2x mb-2"></i><br>
                                            Add New Page
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center mb-3">
                                        <a href="/admin/services/create" class="btn btn-outline-success btn-lg w-100">
                                            <i class="fas fa-plus-circle fa-2x mb-2"></i><br>
                                            Add New Service
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center mb-3">
                                        <a href="/admin/team/create" class="btn btn-outline-info btn-lg w-100">
                                            <i class="fas fa-plus-circle fa-2x mb-2"></i><br>
                                            Add Team Member
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center mb-3">
                                        <a href="/admin/settings" class="btn btn-outline-secondary btn-lg w-100">
                                            <i class="fas fa-cog fa-2x mb-2"></i><br>
                                            Site Settings
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>