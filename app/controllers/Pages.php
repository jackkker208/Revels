<?php
    class Pages extends Controller{
        public function __construct(){ }
        public function index(){
                if(isset($_SESSION['user_category']) == 'admin'){
                    redirect('admins');
                }elseif(isset($_SESSION['user_category']) == 'volunteer'){
                    redirect('volunteers');
                }else{
                    $data = [
                        'title' => 'Revels Tab'
                    ];
                    $this->view('pages/index', $data);
                }
        }
        public function about(){
            $data = [
                'title' => 'About Us',
                'description' => 'What we do is We make Admin Login Easier'
            ];
            $this->view('pages/about', $data);
        }
    }

?>