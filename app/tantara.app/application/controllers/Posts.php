<?php
    class Posts extends CI_Controller{
        public function index($offset = 0){
            //Configuration pagination
            $config['base_url'] = base_url() . 'posts/index/';
            $config['total_rows'] = $this->db->count_all('posts');
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;
            //On attribue une classe propre à la pagination
            $config['attributes'] = array('class' => 'pagination-link');

            //Initialisation pagination
            $this->pagination->initialize($config);

            $data['title']='Liste des Tantara';

            $data['posts'] = $this->posts_m->get_posts(FALSE, $config['per_page'], $offset);         

            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL){
            //On met dans la variable $post(qui est un tableau) les résultats de get_posts. (résultats après where)
            $data['post'] = $this->posts_m->get_posts($slug);        

            if(empty($data['post'])){
                show_404();
            }           

            $data['titre'] = $data['post']['titre'];            

            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');

        }

        public function create(){
            //Vérifier si l'utilisateur qui va sur ce lien est bien connecté
            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $data['title'] = 'Ecrire un "tantara"';    
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');

            if($this->form_validation->run() === FALSE){ 
                //si les set_rules ne sont pas respéctés
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
            }else{
                //sinon, si c'est ok, on appelle la méthode insert
                $this->posts_m->create_post();

                //Message de succès. en utilisant une méthode de la bibliothèque session
                $this->session->set_flashdata('post_created','Votre Tantara a été partagé avec succès !');

                redirect('posts');
            }

            
        }
    }
?>