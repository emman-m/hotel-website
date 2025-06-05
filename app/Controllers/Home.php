<?php

namespace App\Controllers;

/**
 * Class Home
 * 
 * Controller for the main pages of the hotel website
 */
class Home extends BaseController
{
    /**
     * Display the homepage
     */
    public function index()
    {
        return $this->renderView('home', [
            'title' => 'Welcome to Luxury Hotel'
        ]);
    }

    /**
     * Display the rooms page
     */
    public function rooms()
    {
        return $this->renderView('rooms', [
            'title' => 'Our Rooms & Suites'
        ]);
    }

    /**
     * Display the booking page
     */
    public function booking()
    {
        return $this->renderView('booking', [
            'title' => 'Book Your Stay'
        ]);
    }

    /**
     * Handle booking form submission
     */
    public function submitBooking()
    {
        if (!$this->validateForm('booking')) {
            return redirect()->back()->withInput();
        }

        $bookingData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'room_type' => $this->request->getPost('room_type'),
            'check_in' => $this->request->getPost('check_in'),
            'check_out' => $this->request->getPost('check_out'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($this->saveToLocalStorage('bookings', $bookingData)) {
            $this->session->setFlashdata('success', 'Booking submitted successfully!');
        } else {
            $this->session->setFlashdata('error', 'Failed to save booking. Please try again.');
        }

        return redirect()->to('/booking');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return $this->renderView('contact', [
            'title' => 'Contact Us'
        ]);
    }

    /**
     * Handle contact form submission
     */
    public function submitContact()
    {
        if (!$this->validateForm('contact')) {
            return redirect()->back()->withInput();
        }

        $contactData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($this->saveToLocalStorage('contacts', $contactData)) {
            $this->session->setFlashdata('success', 'Message sent successfully!');
        } else {
            $this->session->setFlashdata('error', 'Failed to send message. Please try again.');
        }

        return redirect()->to('/contact');
    }
}
