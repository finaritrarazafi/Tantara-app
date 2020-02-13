<?php
    class user_m extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        //Fonction s'inscrire
        public function inscrire($enc_password){
            $data = array(
                'nom'=>$this->input->post('nom'),
                'email'=>$this->input->post('email'),
                'pseudo'=>$this->input->post('pseudo'),                
                'mdp'=>$enc_password
            );

            //Insérer dans BD
            return $this->db->insert('utilisateur', $data);
        }
        
        //vérifier si pseudo existe déjà
        public function check_pseudo($pseudo){
            $query=$this->db->get_where('utilisateur', array('pseudo'=> $pseudo));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }
        }

        //Fonction se connecter
        public function login($pseudo, $mdp){
            //Valider
            $this->db->where('pseudo', $pseudo);
            $this->db->where('mdp', $mdp);

            $result = $this->db->get('utilisateur');

            //Récupérer id pour le passer au controller si la ligne existe, sinon, false
            if($result->num_rows() == 1){
                return $result->row(0)->id;
            }else{
                return false;
            }
        }

    }