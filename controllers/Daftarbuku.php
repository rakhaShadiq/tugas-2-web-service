<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Daftarbuku extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $daftarbuku = $this->db->get('buku')->result();
        } else {
            $this->db->where('id', $id);
            $daftarbuku = $this->db->get('buku')->result();
        }
        $this->response($daftarbuku, 200);
    }

    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'judul'          => $this->post('judul'),
                    'penerbit'    => $this->post('penerbit'),
					 'penulis'          => $this->post('penulis'),
                    'tahun_terbit'    => $this->post('tahun_terbit'));
        $insert = $this->db->insert('buku', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'       => $this->put('id'),
                    'judul'          => $this->put('judul'),
                    'penerbit'    => $this->put('penerbit'),
					 'penulis'          => $this->put('penulis'),
                    'tahun_terbit'    => $this->put('tahun_terbit'));
					
        $this->db->where('id', $id);
        $update = $this->db->update('buku', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('buku');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>