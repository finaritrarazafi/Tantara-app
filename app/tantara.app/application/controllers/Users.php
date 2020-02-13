<?php
    class Users extends CI_Controller{
        //fonction pour l'inscription
        public function register(){

            $data['title'] = "Inscription";

            //On vérifie les données entrées dans input
            $this->form_validation->set_rules('nom','Nom','required');
            //On vérifie aussi l'unicité du pseudo
            $this->form_validation->set_rules('pseudo','Pseudo','required|callback_check_pseudo_exists');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('mdp','Mot de passe','required');
            //confirmer mot de passe doit etre conforme à mot de passe
            $this->form_validation->set_rules('mdp2','Confirmer Mot de passe','required|matches[mdp]');            

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/inscription', $data);
                $this->load->view('templates/footer');
            }else{
                // die('Continue');
                //Cripter mot de passe avant de le faire entrer dans la base de données
                $enc_password=md5($this->input->post('mdp'));              

                $this->user_m->inscrire($enc_password);

                //Message de succès. en utilisant une méthode de la bibliothèque session
                $this->session->set_flashdata('user_registered','Inscription réussie, vous pouvez vous connecter !');

                redirect('users/login');
            }
        }

        //Vérifier si pseudo existe
        public function check_pseudo_exists($pseudo){
            $this->form_validation->set_message('check_pseudo_exists','Ce pseudo existe déjà, choisissez un autre !');
            if($this->user_m->check_pseudo($pseudo)){
                return true;
            }else{
                return false;
            }
        }


        public function login(){

            $data['title'] = 'Connexion';

            //On vérifie les données entrées dans input           
            $this->form_validation->set_rules('pseudo','Pseudo','required');
            $this->form_validation->set_rules('mdp','Mot de passe','required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            }else{
                //Récupérer le pseudo
                $pseudo = $this->input->post('pseudo');

                //Récupérer et crypter le mot de passe
                $mdp = md5($this->input->post('mdp'));

                //Récupérer l'id correspondant au pseudo
                $user_id = $this->user_m->login($pseudo, $mdp);

                //si user_id existe
                if($user_id){
                    //Créer session
                    // die('SUCCESS');
                    $data_user = array(
                        'user_id'=>$user_id,
                        'pseudo'=>$pseudo,
                        'logged_in'=>true                        
                    );

                    $this->session->set_userdata($data_user);


                    //Message, en utilisant une méthode de la bibliothèque session
                    $this->session->set_flashdata('user_loggedin','Connexion réussie !');

                    redirect('posts');
                }else{
                    //Message, en utilisant une méthode de la bibliothèque session
                    $this->session->set_flashdata('login_failed','Pseudo et/ou Mot de passe incorret(s) !');

                    redirect('users/login');
                }
                
            }
            
    }

    //fonction pour se déconnecter
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('pseudo');

        $this->session->set_flashdata('user_loggedout','Vous êtes déconnecté !');

        redirect('users/login');

    }
}
?>