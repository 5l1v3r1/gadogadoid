<?php 
    class Mhome extends CI_Model{
        
        public function get_banner($id){
            $this->db->where('id_banner', $id);
            return $this->db->get('banner');
        }

        public function get_game($id=null){
            if($id!=null){
                $this->db->where('id_game', $id);
            }
            $this->db->limit(8, 0);
            return $this->db->get('game');
        }

    }
?>