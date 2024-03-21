<?php 
class Article_model extends CI_Model{
    public function create($formArray){
        $this->db->insert('articles',$formArray);
    }
    // public function getCategories($params=[]){
    //     if(!empty($params['querystring'])) {
    //         $this->db->like('name',$params['querystring']);
    //     }
    //    $result = $this->db->get('categories')->result_array();
    //    return $result;
    // }
    // public function getCategory($id){
    //     $this->db->where('id',$id);
    //     $res = $this->db->get('categories')->row_array();
    //     return $res; 
    // }
    // public function update($id, $formArray) {
    //     $this->db->where('id', $id);
    //     $this->db->update('categories', $formArray);
    // }
    // public function delete($id) {
    //     $this->db->where('id', $id);
    //     $this->db->delete('categories');
    // }
}

	
?>