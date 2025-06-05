<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form', 'url'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;
    protected $validation;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();

        // Set default validation rules
        $this->setDefaultValidationRules();
    }

    /**
     * Set default validation rules for forms
     */
    protected function setDefaultValidationRules()
    {
        // Booking form validation rules
        $this->validation->setRuleGroup('booking', [
            'name' => [
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required' => 'Please enter your name',
                    'min_length' => 'Name must be at least 3 characters long',
                    'max_length' => 'Name cannot exceed 100 characters'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Please enter your email',
                    'valid_email' => 'Please enter a valid email address'
                ]
            ],
            'room_type' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Please select a room type',
                    'numeric' => 'Invalid room type selected'
                ]
            ],
            'check_in' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'Please select a check-in date',
                    'valid_date' => 'Please enter a valid check-in date'
                ]
            ],
            'check_out' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'Please select a check-out date',
                    'valid_date' => 'Please enter a valid check-out date'
                ]
            ]
        ]);

        // Contact form validation rules
        $this->validation->setRuleGroup('contact', [
            'name' => [
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required' => 'Please enter your name',
                    'min_length' => 'Name must be at least 3 characters long',
                    'max_length' => 'Name cannot exceed 100 characters'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Please enter your email',
                    'valid_email' => 'Please enter a valid email address'
                ]
            ],
            'subject' => [
                'rules' => 'required|min_length[3]|max_length[200]',
                'errors' => [
                    'required' => 'Please enter a subject',
                    'min_length' => 'Subject must be at least 3 characters long',
                    'max_length' => 'Subject cannot exceed 200 characters'
                ]
            ],
            'message' => [
                'rules' => 'required|min_length[10]|max_length[1000]',
                'errors' => [
                    'required' => 'Please enter your message',
                    'min_length' => 'Message must be at least 10 characters long',
                    'max_length' => 'Message cannot exceed 1000 characters'
                ]
            ]
        ]);
    }

    /**
     * Validate form data using the specified rule group
     *
     * @param string $ruleGroup The validation rule group to use
     * @return bool
     */
    protected function validateForm(string $ruleGroup): bool
    {
        if (!$this->validation->run($this->request->getPost(), $ruleGroup)) {
            $this->session->setFlashdata('errors', $this->validation->getErrors());
            return false;
        }
        return true;
    }

    /**
     * Save data to localStorage (mockup functionality)
     *
     * @param string $key The storage key
     * @param array $data The data to store
     * @return bool
     */
    protected function saveToLocalStorage(string $key, array $data): bool
    {
        try {
            $existingData = json_decode($this->session->get($key) ?? '[]', true);
            $existingData[] = $data;
            $this->session->set($key, json_encode($existingData));
            return true;
        } catch (\Exception $e) {
            log_message('error', 'Error saving to session: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Get data from localStorage (mockup functionality)
     *
     * @param string $key The storage key
     * @return array
     */
    protected function getFromLocalStorage(string $key): array
    {
        try {
            return json_decode($this->session->get($key) ?? '[]', true);
        } catch (\Exception $e) {
            log_message('error', 'Error reading from session: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Render a view with common data
     *
     * @param string $view The view to render
     * @param array $data Additional data to pass to the view
     * @return string
     */
    protected function renderView(string $view, array $data = []): string
    {
        $commonData = [
            'title' => $data['title'] ?? 'Luxury Hotel',
            'errors' => $this->session->getFlashdata('errors') ?? [],
            'success' => $this->session->getFlashdata('success') ?? null
        ];

        return view($view, array_merge($commonData, $data));
    }
}
