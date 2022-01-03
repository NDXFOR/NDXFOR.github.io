<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'Petagis',
            'content' => 'dasbor'
        );

        $this->load->view('layout/viewunion', $data, FALSE);
    }

    public function tahunan()
    {
        $data = array(
            'judul' => 'Petagis',
            'content' => 'tahunan'
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }

    public function kerso()
    {
        $data = array(
            'judul' => 'Petagis',
            'content' => 'kerso'
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }

    public function dermolo()
    {
        $data = array(
            'judul' => 'Petagis',
            'content' => 'dermolo'
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }

    public function jambu()
    {
        $data = array(
            'judul' => 'Petagis',
            'content' => 'jambu'
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }
}
