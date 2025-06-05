<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function rooms()
    {
        $rooms = [
            [
                'id' => 1,
                'name' => 'Deluxe Room',
                'description' => 'Spacious room with city view',
                'price' => 150,
                'image' => 'deluxe-room.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Executive Suite',
                'description' => 'Luxury suite with separate living area',
                'price' => 250,
                'image' => 'executive-suite.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Presidential Suite',
                'description' => 'Ultimate luxury with panoramic views',
                'price' => 500,
                'image' => 'presidential-suite.jpg'
            ]
        ];

        return view('rooms', ['rooms' => $rooms]);
    }

    public function booking()
    {
        if ($this->request->getMethod() === 'post') {
            $bookingData = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'check_in' => $this->request->getPost('check_in'),
                'check_out' => $this->request->getPost('check_out'),
                'room_type' => $this->request->getPost('room_type')
            ];

            // Store in localStorage (handled by JavaScript)
            return $this->response->setJSON(['success' => true, 'data' => $bookingData]);
        }

        return view('booking');
    }

    public function contact()
    {
        if ($this->request->getMethod() === 'post') {
            $contactData = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'message' => $this->request->getPost('message')
            ];

            // Store in localStorage (handled by JavaScript)
            return $this->response->setJSON(['success' => true, 'data' => $contactData]);
        }

        return view('contact');
    }
}
