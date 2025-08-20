<?php extend('admin/layout') ?>

<?php section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage Pages</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/admin/pages/create" class="btn btn-sm btn-outline-primary">
            <i class="fas fa-plus"></i> New Page
        </a>
    </div>
</div>

<?php if (session()->getFlashdata('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('error') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= esc($page['title']) ?></td>
                <td><?= esc($page['slug']) ?></td>
                <td>
                    <span class="badge bg-<?= $page['is_published'] ? 'success' : 'secondary' ?>">
                        <?= $page['is_published'] ? 'Published' : 'Draft' ?>
                    </span>
                </td>
                <td><?= date('M j, Y', strtotime($page['created_at'])) ?></td>
                <td>
                    <a href="/<?= $page['slug'] ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="/admin/pages/edit/<?= $page['id'] ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="/admin/pages/delete/<?= $page['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this page?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endSection() ?>