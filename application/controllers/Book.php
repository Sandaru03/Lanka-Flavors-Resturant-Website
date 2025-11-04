<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function table()
    {
        // Load email config
        $this->load->config('email_config');
        $this->load->library('email');
        $this->email->initialize($this->config->config);


        // POST data
        $name    = $this->input->post('name');
        $email   = $this->input->post('email');
        $phone   = $this->input->post('phone');
        $date    = $this->input->post('date');
        $time    = $this->input->post('time');
        $people  = $this->input->post('people');
        $message = $this->input->post('message');

        // Email setup
        $this->email->from($this->config->item('smtp_user'), 'Restaurant Booking');
        $this->email->to($this->config->item('smtp_user'));
        $this->email->subject('New Table Booking Request');
        $this->email->message("
            <h3>New Table Booking Request</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Date:</strong> {$date}</p>
            <p><strong>Time:</strong> {$time}</p>
            <p><strong>People:</strong> {$people}</p>
            <p><strong>Message:</strong> {$message}</p>
        ");

        if ($this->email->send()) {
            echo 'OK';
        } else {
            echo $this->email->print_debugger();
        }
    }
}
