<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index() {
        // print_r($this->session->userdata('logged_in'));die;
        // parent::mainpage('dashboard/index',
        //     [
        //         'title' => 'Dashboard',
        //     ]
        // );
        switch(ENVIRONMENT){
        case "production":
        redirect('http://timekeeping.payakapps.com/timesheet');break;
        case "testing":
        redirect('http://timekeeping.payakapps.com/timesheet');break;
        default :
        redirect('http://localhost/restotimekeeping/timesheet');break;
        }
     }
}