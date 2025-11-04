<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function send()
    {
        // Load email config
        $this->load->config('email_config');
        $this->load->library('email');

        // Initialize email settings
        $this->email->initialize($this->config->config);


        // POST data
        $name    = $this->input->post('name');
        $email   = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // Email setup
        $this->email->from($this->config->item('smtp_user'), 'Contact Form');
        $this->email->to($this->config->item('smtp_user')); // same Gmail
        $this->email->subject('New Contact Message: ' . $subject);
        $this->email->message("
            <h3>New Message from Website Contact Form</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ");

        if ($this->email->send()) {
            echo 'OK';
        } else {
            echo $this->email->print_debugger();
        }
    }
}
