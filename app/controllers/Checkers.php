<?php
    class Checkers extends Controller{
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            $this->userModel = $this->model('User');
        }

        public function index(){
            $user = $this->userModel->getUserByRegNo($_SESSION['user_regNo']);

            $data = [
                'user' => $user
            ];

            $this->view('checkers/index', $data);
        }

        public function buy(){
            $user = $this->userModel->getUserByRegNo($_SESSION['user_regNo']);

            $data = [
                'user' => $user
            ];

            $this->view('checkers/buy', $data);
        }

    }

?>