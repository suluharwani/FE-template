<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home Routes
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/about-us', 'Home::aboutUs');
$routes->get('/career', 'Home::career');
$routes->get('/contact-us', 'Home::contactUs');
$routes->get('/join-us', 'Home::joinUs');
$routes->get('/page', 'Home::page');
$routes->get('/services', 'Home::service');
$routes->get('/services/data-ai', 'Home::serviceDataAI');
$routes->get('/services/data-security', 'Home::serviceDataSecurity');
$routes->get('/services/moderation', 'Home::serviceModeration');
$routes->get('/services/tab', 'Home::serviceTab');

// Jika ingin menggunakan URL yang lebih pendek (opsional)
$routes->get('/about', 'Home::aboutUs');
$routes->get('/contact', 'Home::contactUs');
$routes->get('/join', 'Home::joinUs');

$routes->group('admin', function($routes) {
    $routes->get('login', 'Admin::login');
    $routes->post('login', 'Admin::login');
    $routes->get('logout', 'Admin::logout');
    
    $routes->get('/', 'Admin::index');
    
    // Pages
    $routes->get('pages', 'Admin::pages');
    $routes->get('pages/create', 'Admin::createPage');
    $routes->post('pages/create', 'Admin::createPage');
    $routes->get('pages/edit/(:num)', 'Admin::editPage/$1');
    $routes->post('pages/edit/(:num)', 'Admin::editPage/$1');
    $routes->get('pages/delete/(:num)', 'Admin::deletePage/$1');
    
    // Services
    $routes->get('services', 'Admin::services');
    $routes->get('services/create', 'Admin::createService');
    $routes->post('services/create', 'Admin::createService');
    $routes->get('services/edit/(:num)', 'Admin::editService/$1');
    $routes->post('services/edit/(:num)', 'Admin::editService/$1');
    $routes->get('services/delete/(:num)', 'Admin::deleteService/$1');
    
    // Team
    $routes->get('team', 'Admin::team');
    $routes->get('team/create', 'Admin::createTeamMember');
    $routes->post('team/create', 'Admin::createTeamMember');
    $routes->get('team/edit/(:num)', 'Admin::editTeamMember/$1');
    $routes->post('team/edit/(:num)', 'Admin::editTeamMember/$1');
    $routes->get('team/delete/(:num)', 'Admin::deleteTeamMember/$1');
    
    // Contacts
    $routes->get('contacts', 'Admin::contacts');
    $routes->get('contacts/view/(:num)', 'Admin::viewContact/$1');
    $routes->get('contacts/delete/(:num)', 'Admin::deleteContact/$1');
    
    // Careers
    $routes->get('careers', 'Admin::careers');
    $routes->get('careers/view/(:num)', 'Admin::viewCareer/$1');
    $routes->post('careers/update-status/(:num)', 'Admin::updateCareerStatus/$1');
    $routes->get('careers/download-resume/(:num)', 'Admin::downloadResume/$1');
    $routes->get('careers/delete/(:num)', 'Admin::deleteCareer/$1');
    
    // Users
    $routes->get('users', 'Admin::users');
    $routes->get('users/create', 'Admin::createUser');
    $routes->post('users/create', 'Admin::createUser');
    $routes->get('users/edit/(:num)', 'Admin::editUser/$1');
    $routes->post('users/edit/(:num)', 'Admin::editUser/$1');
    $routes->get('users/delete/(:num)', 'Admin::deleteUser/$1');
    
    // Settings
    $routes->get('settings', 'Admin::settings');
    $routes->post('settings', 'Admin::settings');
});

// Default route for pages
$routes->get('(:segment)', 'Page::view/$1');