<?php 
class Article_model extends CI_Model{
    public function create($formArray){
        $this->db->insert('articles',$formArray);
        return $this->db->insert_id();
    }
    public function getarticles(){
        
       $result = $this->db->get('articles')->result_array();
       return $result;
    }
    public function getArticle($id){
        $this->db->where('id',$id);
        $res = $this->db->get('articles')->row_array();
        return $res; 
    }
    public function update($id, $formArray) {
        $this->db->where('id', $id);
        $this->db->update('articles', $formArray);
    }
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('articles');
    }
}

	
?>