<?php
    class Categoryheads extends Controller{
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            if(!($_SESSION['user_category'] == 'category head')){
                redirect('categoryheads/index');
            }
            $this->userModel = $this->model('User');
        }

        public function index(){
            $categoryHead = $this->userModel->getUserByRegNo($_SESSION['user_regNo']);

            $data = [
                'categoryHead' => $categoryHead
            ];

            $this->view('categoryheads/index', $data);
        }

    }

?>