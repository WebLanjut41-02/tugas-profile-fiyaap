<?php
    defined('BASEPATH')OR exit('No Direct Script Access Allowed');

    class Web extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->library('Form_validation');
            $this->load->helper('url');
            $this->load->helper('form');
        }

        public function index(){
            $data['judul'] = 'Biodata';
            $this->load->view('v_header',$data);
            $this->load->view('v_index',$data);
            $this->load->view('v_footer',$data);
        }

        public function gallery(){
            $data['gallery'] = 'Gallery';
            $this->load->view('v_header',$data);
            $this->load->view('show',$data);
            $this->load->view('v_footer',$data);
        }

        public function Experience(){
            $data['experience'] = 'Experience';
            $this->load->view('v_header',$data);
            $this->load->view('v_experience',$data);
            $this->load->view('v_footer',$data);
        }

        public function Contact(){
            $data['contact'] = 'Send a Message';
            $this->load->view('v_header',$data);
            $this->load->view('v_contact',$data);
            $this->load->view('v_footer',$data);
        }

        public function Pesan(){
            $data['contact'] = 'Send a Message';
            
            $data['name'] = $this->input->post('nm');
            $data['email'] = $this->input->post('mail');
            $data['pesan'] = $this->input->post('komen');

            $this->load->view('v_header',$data);
            $this->load->view('v_contact',$data);
            $this->load->view('v_footer',$data);
        }
    }

?>