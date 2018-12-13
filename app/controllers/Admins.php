<?php
    class Admins extends Controller{

        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            $this->userModel = $this->model('User');
        }

        public function index(){
            $admins = $this->userModel->getUserByRegNo($_SESSION['user_regNo']);

            $data = [
                'admins' => $admins
            ];

            $this->view('admins/index', $data);
        }
        
        public function confirm(){
            $members = $this->userModel->getAll();

            $data = [
                'members' => $members
            ];

            $this->view('admins/confirm', $data);
        }

        public function assign($id){
            // $adders = $this->userModel->getUserById($id);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $data = [
                    'id' => $id,
                    'category' => $_POST['category'],
                    'event' => $_POST['event'],
                    'category_err' => '',
                    'event_err' => ''
                ];

                if($data['category'] == 'None'){
                    $data['category_err'] = 'Please enter category';
                }

                if($data['event'] == 'None'){
                    $data['event_err'] = 'Please enter event';
                }

                if(empty($data['category_err']) && empty($data['event_err'])){
                    if($this->postModel->updateUser($data)){
                        redirect('admins/confirm');
                    }else{
                        die("Something went wrong");
                    }
                }else{
                    $this->view('admins/assign', $data);
                }

            }else{
                $data = [
                    // 'adders' => $adders,
                    'id' => $id,
                    'category' => '',
                    'event' => '',
                    'category_err' => '',
                    'event_err' => ''
                ];

                $this->view('admins/assign', $data);
            }

        }
        


    }

?>