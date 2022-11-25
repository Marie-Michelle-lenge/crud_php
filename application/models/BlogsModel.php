<?php 

class BlogsModel extends CI_Model
{
    public function get_blogs()
    {
        $query = $this->db->get('mmtable');
        return $query->result(); 
    }
    public function insert_blog()
    {
        $data = array('title' =>$this->input->post('title'),'description' =>$this->input->post('description'));

        return $this->db->insert('blogs',$data);
    }
    public function update_blog($id)
    {
        $data = array('title' =>$this->input->post('title'),'description' =>$this->input->post('description'));

        return $this->db->insert('blogs',$data);
        if($id == 0)
        {
            return $this->db->insert('blogs',$data);
        }
        else{
            $this->db->where('id',$id);
            return $this->db->insert('blogs',$data);
        }
    }
}