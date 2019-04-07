<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_principal extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }

    public function adduser($data){

        return $this->db->insert('usuario', $data);
    }

    public function login($dados){
        
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('email',$dados['email']);
            $this->db->where('senha',$dados['senha']);
          
            
            $login = $this->db->get();
            
             if ($login->num_rows() == 1) {
                return $login->row();
            } else {
                return false;
            }
        }
    public function questoes(){

        return $this->db->query("Select * from questoes")->result();
        
    }

    public function ranking(){
        return $this->db->query("select * from usuario inner join carteira on usuario.num_carteira = carteira.id order by quantidade desc")->result();
    }



}