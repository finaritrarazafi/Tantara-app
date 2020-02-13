<?php
    class posts_m extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }

            if($slug === FALSE){
                $this->db->order_by('posts.id', 'DESC');
                $this->db->join('utilisateur', 'utilisateur.id = posts.user_id');
                $query = $this->db->get('posts');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();

        }

        public function create_post(){
            //on récupère le slug
             $slug = url_title($this->input->post('title'));
            //  $date = date('y-m-d');

             //on récupère les données entrées dans les input
             $data = array(
                'titre'=> $this->input->post('title'),
                'slug'=> $slug,
                'contenu'=> $this->input->post('body'),
                'user_id'=> $this->session->userdata('user_id')
                // 'date_creation'=> $date
             );

             //on insere dans la base, dans la tables posts
             return $this->db->insert('posts', $data);

        }
    }

