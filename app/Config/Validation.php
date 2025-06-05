<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    /**
     * Validation rules for the booking form
     */
    public $booking = [
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
    ];

    /**
     * Validation rules for the contact form
     */
    public $contact = [
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
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
