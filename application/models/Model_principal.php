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
        return $this->db->query("select nome,quantidade from usuario order by quantidade desc")->result();
    }

    public function resposta($dados){

       // var_dump($dados);
        
        $this->db->select('*');
        $this->db->from('resposta');
        $this->db->where('resposta',$dados['resposta']);
    

        
        
        $resposta = $this->db->get();

       // var_dump($resposta);

        if($resposta->num_rows()==1){
            return $resposta->row();
            //var_dump($resposta);
            
        }else{
            return false;
        }


    }
    public function transferencia($data){

        //$this->db->where('carteira', $data['carteira']);
        //$this->db->set('quantidade', $data['quantidade = quantidade+quantidade_btc']);
        //return $this->db->update('usuario');

         
     return("update usuario set quantidade = quantidade+10 where carteira = 'carteira'");
       
    
    }

}