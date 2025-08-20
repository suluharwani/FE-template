<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PageModel;
use App\Models\ServiceModel;
use App\Models\TeamModel;
use App\Models\ContactModel;
use App\Models\CareerModel;
use App\Models\SettingModel;

class Admin extends BaseController
{
    protected $userModel;
    protected $pageModel;
    protected $serviceModel;
    protected $teamModel;
    protected $contactModel;
    protected $careerModel;
    protected $settingModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pageModel = new PageModel();
        $this->serviceModel = new ServiceModel();
        $this->teamModel = new TeamModel();
        $this->contactModel = new ContactModel();
        $this->careerModel = new CareerModel();
        $this->settingModel = new SettingModel();
        $this->session = \Config\Services::session();
        
        // Check if user is logged in and is admin for all methods except login
        if (!in_array($this->request->getMethod(true), ['GET', 'POST']) || 
            !in_array($this->request->getMethod(true), ['GET', 'POST']) || 
            $this->request->getMethod(true) === 'POST' && $this->request->getUri()->getPath() !== '/admin/login') {
            if (!$this->isLoggedIn() || !$this->isAdmin()) {
                return redirect()->to('/admin/login');
            }
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pageCount' => $this->pageModel->countAll(),
            'serviceCount' => $this->serviceModel->countAll(),
            'teamCount' => $this->teamModel->countAll(),
            'contactCount' => $this->contactModel->where('is_read', 0)->countAllResults(),
            'careerCount' => $this->careerModel->where('status', 'new')->countAllResults(),
        ];
        
        return view('admin/dashboard', $data);
    }

    // Authentication Methods
    public function login()
    {
        // If already logged in, redirect to dashboard
        if ($this->isLoggedIn() && $this->isAdmin()) {
            return redirect()->to('/admin');
        }
        
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            
            $user = $this->userModel->where('username', $username)->first();
            
            if ($user && password_verify($password, $user['password']) && $user['is_active']) {
                $sessionData = [
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'is_logged_in' => true
                ];
                
                $this->session->set($sessionData);
                
                // Update last login
                $this->userModel->update($user['id'], ['last_login' => date('Y-m-d H:i:s')]);
                
                return redirect()->to('/admin');
            } else {
                $this->session->setFlashdata('error', 'Invalid username or password');
                return redirect()->to('/admin/login');
            }
        }
        
        return view('admin/login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/admin/login');
    }

    // CRUD Methods for Pages
    public function pages()
    {
        $data = [
            'title' => 'Manage Pages',
            'pages' => $this->pageModel->findAll()
        ];
        
        return view('admin/pages/index', $data);
    }

    public function createPage()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'title' => 'required|min_length[3]|max_length[255]',
                'content' => 'required'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'title' => $this->request->getPost('title'),
                    'slug' => url_title($this->request->getPost('title'), '-', TRUE),
                    'content' => $this->request->getPost('content'),
                    'meta_description' => $this->request->getPost('meta_description'),
                    'meta_keywords' => $this->request->getPost('meta_keywords'),
                    'is_published' => $this->request->getPost('is_published') ? 1 : 0
                ];
                
                if ($this->pageModel->insert($data)) {
                    $this->session->setFlashdata('success', 'Page created successfully');
                    return redirect()->to('/admin/pages');
                } else {
                    $this->session->setFlashdata('error', 'Failed to create page');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Create New Page',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/pages/create', $data);
    }

    public function editPage($id)
    {
        $page = $this->pageModel->find($id);
        
        if (!$page) {
            $this->session->setFlashdata('error', 'Page not found');
            return redirect()->to('/admin/pages');
        }
        
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'title' => 'required|min_length[3]|max_length[255]',
                'content' => 'required'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'title' => $this->request->getPost('title'),
                    'slug' => url_title($this->request->getPost('title'), '-', TRUE),
                    'content' => $this->request->getPost('content'),
                    'meta_description' => $this->request->getPost('meta_description'),
                    'meta_keywords' => $this->request->getPost('meta_keywords'),
                    'is_published' => $this->request->getPost('is_published') ? 1 : 0
                ];
                
                if ($this->pageModel->update($id, $data)) {
                    $this->session->setFlashdata('success', 'Page updated successfully');
                    return redirect()->to('/admin/pages');
                } else {
                    $this->session->setFlashdata('error', 'Failed to update page');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Edit Page',
            'page' => $page,
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/pages/edit', $data);
    }

    public function deletePage($id)
    {
        $page = $this->pageModel->find($id);
        
        if (!$page) {
            $this->session->setFlashdata('error', 'Page not found');
            return redirect()->to('/admin/pages');
        }
        
        if ($this->pageModel->delete($id)) {
            $this->session->setFlashdata('success', 'Page deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete page');
        }
        
        return redirect()->to('/admin/pages');
    }

    // CRUD Methods for Services
    public function services()
    {
        $data = [
            'title' => 'Manage Services',
            'services' => $this->serviceModel->findAll()
        ];
        
        return view('admin/services/index', $data);
    }

    public function createService()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[255]',
                'description' => 'required'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => url_title($this->request->getPost('name'), '-', TRUE),
                    'description' => $this->request->getPost('description'),
                    'icon' => $this->request->getPost('icon'),
                    'content' => $this->request->getPost('content'),
                    'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
                    'is_active' => $this->request->getPost('is_active') ? 1 : 0
                ];
                
                if ($this->serviceModel->insert($data)) {
                    $this->session->setFlashdata('success', 'Service created successfully');
                    return redirect()->to('/admin/services');
                } else {
                    $this->session->setFlashdata('error', 'Failed to create service');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Create New Service',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/services/create', $data);
    }

    public function editService($id)
    {
        $service = $this->serviceModel->find($id);
        
        if (!$service) {
            $this->session->setFlashdata('error', 'Service not found');
            return redirect()->to('/admin/services');
        }
        
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[255]',
                'description' => 'required'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => url_title($this->request->getPost('name'), '-', TRUE),
                    'description' => $this->request->getPost('description'),
                    'icon' => $this->request->getPost('icon'),
                    'content' => $this->request->getPost('content'),
                    'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
                    'is_active' => $this->request->getPost('is_active') ? 1 : 0
                ];
                
                if ($this->serviceModel->update($id, $data)) {
                    $this->session->setFlashdata('success', 'Service updated successfully');
                    return redirect()->to('/admin/services');
                } else {
                    $this->session->setFlashdata('error', 'Failed to update service');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Edit Service',
            'service' => $service,
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/services/edit', $data);
    }

    public function deleteService($id)
    {
        $service = $this->serviceModel->find($id);
        
        if (!$service) {
            $this->session->setFlashdata('error', 'Service not found');
            return redirect()->to('/admin/services');
        }
        
        if ($this->serviceModel->delete($id)) {
            $this->session->setFlashdata('success', 'Service deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete service');
        }
        
        return redirect()->to('/admin/services');
    }

    // CRUD Methods for Team Members
    public function team()
    {
        $data = [
            'title' => 'Manage Team',
            'team' => $this->teamModel->orderBy('display_order', 'ASC')->findAll()
        ];
        
        return view('admin/team/index', $data);
    }

    public function createTeamMember()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[255]',
                'position' => 'required|min_length[3]|max_length[255]'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'position' => $this->request->getPost('position'),
                    'bio' => $this->request->getPost('bio'),
                    'social_linkedin' => $this->request->getPost('social_linkedin'),
                    'social_twitter' => $this->request->getPost('social_twitter'),
                    'display_order' => $this->request->getPost('display_order'),
                    'is_active' => $this->request->getPost('is_active') ? 1 : 0
                ];
                
                // Handle photo upload
                $photo = $this->request->getFile('photo');
                if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'public/uploads/team', $newName);
                    $data['photo'] = $newName;
                }
                
                if ($this->teamModel->insert($data)) {
                    $this->session->setFlashdata('success', 'Team member created successfully');
                    return redirect()->to('/admin/team');
                } else {
                    $this->session->setFlashdata('error', 'Failed to create team member');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Create New Team Member',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/team/create', $data);
    }

    public function editTeamMember($id)
    {
        $member = $this->teamModel->find($id);
        
        if (!$member) {
            $this->session->setFlashdata('error', 'Team member not found');
            return redirect()->to('/admin/team');
        }
        
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[255]',
                'position' => 'required|min_length[3]|max_length[255]'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'position' => $this->request->getPost('position'),
                    'bio' => $this->request->getPost('bio'),
                    'social_linkedin' => $this->request->getPost('social_linkedin'),
                    'social_twitter' => $this->request->getPost('social_twitter'),
                    'display_order' => $this->request->getPost('display_order'),
                    'is_active' => $this->request->getPost('is_active') ? 1 : 0
                ];
                
                // Handle photo upload
                $photo = $this->request->getFile('photo');
                if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                    // Delete old photo if exists
                    if ($member['photo'] && file_exists(ROOTPATH . 'public/uploads/team/' . $member['photo'])) {
                        unlink(ROOTPATH . 'public/uploads/team/' . $member['photo']);
                    }
                    
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'public/uploads/team', $newName);
                    $data['photo'] = $newName;
                }
                
                if ($this->teamModel->update($id, $data)) {
                    $this->session->setFlashdata('success', 'Team member updated successfully');
                    return redirect()->to('/admin/team');
                } else {
                    $this->session->setFlashdata('error', 'Failed to update team member');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Edit Team Member',
            'member' => $member,
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/team/edit', $data);
    }

    public function deleteTeamMember($id)
    {
        $member = $this->teamModel->find($id);
        
        if (!$member) {
            $this->session->setFlashdata('error', 'Team member not found');
            return redirect()->to('/admin/team');
        }
        
        // Delete photo if exists
        if ($member['photo'] && file_exists(ROOTPATH . 'public/uploads/team/' . $member['photo'])) {
            unlink(ROOTPATH . 'public/uploads/team/' . $member['photo']);
        }
        
        if ($this->teamModel->delete($id)) {
            $this->session->setFlashdata('success', 'Team member deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete team member');
        }
        
        return redirect()->to('/admin/team');
    }

    // Contact Submissions Management
    public function contacts()
    {
        $data = [
            'title' => 'Contact Submissions',
            'contacts' => $this->contactModel->orderBy('created_at', 'DESC')->findAll()
        ];
        
        return view('admin/contacts/index', $data);
    }

    public function viewContact($id)
    {
        $contact = $this->contactModel->find($id);
        
        if (!$contact) {
            $this->session->setFlashdata('error', 'Contact submission not found');
            return redirect()->to('/admin/contacts');
        }
        
        // Mark as read
        if (!$contact['is_read']) {
            $this->contactModel->update($id, ['is_read' => 1]);
        }
        
        $data = [
            'title' => 'View Contact',
            'contact' => $contact
        ];
        
        return view('admin/contacts/view', $data);
    }

    public function deleteContact($id)
    {
        $contact = $this->contactModel->find($id);
        
        if (!$contact) {
            $this->session->setFlashdata('error', 'Contact submission not found');
            return redirect()->to('/admin/contacts');
        }
        
        if ($this->contactModel->delete($id)) {
            $this->session->setFlashdata('success', 'Contact submission deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete contact submission');
        }
        
        return redirect()->to('/admin/contacts');
    }

    // Career Applications Management
    public function careers()
    {
        $data = [
            'title' => 'Career Applications',
            'applications' => $this->careerModel->orderBy('created_at', 'DESC')->findAll()
        ];
        
        return view('admin/careers/index', $data);
    }

    public function viewCareer($id)
    {
        $application = $this->careerModel->find($id);
        
        if (!$application) {
            $this->session->setFlashdata('error', 'Application not found');
            return redirect()->to('/admin/careers');
        }
        
        $data = [
            'title' => 'View Application',
            'application' => $application
        ];
        
        return view('admin/careers/view', $data);
    }

    public function updateCareerStatus($id)
    {
        $application = $this->careerModel->find($id);
        
        if (!$application) {
            $this->session->setFlashdata('error', 'Application not found');
            return redirect()->to('/admin/careers');
        }
        
        $status = $this->request->getPost('status');
        
        if ($this->careerModel->update($id, ['status' => $status])) {
            $this->session->setFlashdata('success', 'Application status updated successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to update application status');
        }
        
        return redirect()->to('/admin/careers/view/' . $id);
    }

    public function downloadResume($id)
    {
        $application = $this->careerModel->find($id);
        
        if (!$application || !$application['resume_path']) {
            $this->session->setFlashdata('error', 'Resume not found');
            return redirect()->to('/admin/careers');
        }
        
        $filePath = ROOTPATH . 'public/uploads/resumes/' . $application['resume_path'];
        
        if (file_exists($filePath)) {
            return $this->response->download($filePath, null);
        } else {
            $this->session->setFlashdata('error', 'Resume file not found');
            return redirect()->to('/admin/careers');
        }
    }

    public function deleteCareer($id)
    {
        $application = $this->careerModel->find($id);
        
        if (!$application) {
            $this->session->setFlashdata('error', 'Application not found');
            return redirect()->to('/admin/careers');
        }
        
        // Delete resume file if exists
        if ($application['resume_path'] && file_exists(ROOTPATH . 'public/uploads/resumes/' . $application['resume_path'])) {
            unlink(ROOTPATH . 'public/uploads/resumes/' . $application['resume_path']);
        }
        
        if ($this->careerModel->delete($id)) {
            $this->session->setFlashdata('success', 'Application deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete application');
        }
        
        return redirect()->to('/admin/careers');
    }

    // Settings Management
    public function settings()
    {
        if ($this->request->getMethod() === 'post') {
            $settings = $this->request->getPost('settings');
            
            foreach ($settings as $key => $value) {
                $this->settingModel->setValue($key, $value);
            }
            
            $this->session->setFlashdata('success', 'Settings updated successfully');
            return redirect()->to('/admin/settings');
        }
        
        $data = [
            'title' => 'Site Settings',
            'settings' => $this->settingModel->findAll()
        ];
        
        return view('admin/settings', $data);
    }

    // User Management
    public function users()
    {
        $data = [
            'title' => 'Manage Users',
            'users' => $this->userModel->findAll()
        ];
        
        return view('admin/users/index', $data);
    }

    public function createUser()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'confirm_password' => 'required|matches[password]'
            ]);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'full_name' => $this->request->getPost('full_name'),
                    'role' => $this->request->getPost('role'),
                    'is_active' => $this->request->getPost('is_active') ? 1 : 0
                ];
                
                if ($this->userModel->insert($data)) {
                    $this->session->setFlashdata('success', 'User created successfully');
                    return redirect()->to('/admin/users');
                } else {
                    $this->session->setFlashdata('error', 'Failed to create user');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Create New User',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/users/create', $data);
    }

    public function editUser($id)
    {
        $user = $this->userModel->find($id);
        
        if (!$user) {
            $this->session->setFlashdata('error', 'User not found');
            return redirect()->to('/admin/users');
        }
        
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username,id,' . $id . ']',
                'email' => 'required|valid_email|is_unique[users.email,id,' . $id . ']',
                'full_name' => 'required'
            ];
            
            // Only validate password if provided
            if ($this->request->getPost('password')) {
                $validationRules['password'] = 'min_length[6]';
                $validationRules['confirm_password'] = 'matches[password]';
            }
            
            $validation = \Config\Services::validation();
            $validation->setRules($validationRules);
            
            if ($validation->withRequest($this->request)->run()) {
                $data = [
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'full_name' => $this->request->getPost('full_name'),
                    'role' => $this->request->getPost('role'),
                    'is_active' => $this->request->getPost('is_active') ? 1 : 0
                ];
                
                // Update password only if provided
                if ($this->request->getPost('password')) {
                    $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
                }
                
                if ($this->userModel->update($id, $data)) {
                    $this->session->setFlashdata('success', 'User updated successfully');
                    return redirect()->to('/admin/users');
                } else {
                    $this->session->setFlashdata('error', 'Failed to update user');
                }
            } else {
                $this->session->setFlashdata('error', $validation->getErrors());
            }
        }
        
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/users/edit', $data);
    }

    public function deleteUser($id)
    {
        $user = $this->userModel->find($id);
        
        if (!$user) {
            $this->session->setFlashdata('error', 'User not found');
            return redirect()->to('/admin/users');
        }
        
        // Prevent deleting own account
        if ($user['id'] == $this->session->get('user_id')) {
            $this->session->setFlashdata('error', 'You cannot delete your own account');
            return redirect()->to('/admin/users');
        }
        
        if ($this->userModel->delete($id)) {
            $this->session->setFlashdata('success', 'User deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete user');
        }
        
        return redirect()->to('/admin/users');
    }

    // Helper Methods
    private function isLoggedIn()
    {
        return $this->session->get('is_logged_in');
    }

    private function isAdmin()
    {
        return $this->session->get('role') === 'admin';
    }
}