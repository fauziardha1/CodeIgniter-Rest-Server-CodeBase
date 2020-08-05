<?php
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Sarugo extends REST_Controller{
    public function index_get()
    {
        $data = "hello World!";

        $this->response($data,200);
    }

    public function index_post()
    {
        $data = "hello World! post";

        $this->response($data,200);
    }
    public function index_put()
    {
        $data = "hello World! put";

        $this->response($data,200);
    }
    public function index_delete()
    {
        $data = "hello World! delete";

        $this->response($data,200);
    }
}