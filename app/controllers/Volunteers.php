<?php
    class Volunteers extends Controller{
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            $this->userModel = $this->model('User');
        }

        public function index(){
            $volunteer = $this->userModel->getUserByRegNo($_SESSION['user_regNo']);

            $data = [
                'volunteer' => $volunteer
            ];

            $this->view('volunteers/index', $data);
        }

    }

?>