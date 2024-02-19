<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mcourse extends CI_Model
{
    private $tb_main = 'courses';

    function getAll(){
        return $this->db->get($this->tb_main)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tb_main, ["id" => $id])->row();
    }

    public function save()
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->insert($this->tb_main, $data);
        }
    }

    public function update()
    {
        $post = $this->input->post();
        if( !empty($post) ){

            $data = [
            'course'=>$post['course'],
            'mentor'=>$post['mentor'],
            'title'=>$post['title'],

        ];
        return $this->db->update($this->tb_main, $data, array('id' => $post['id']));
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->tb_main, array("id" => $id));
    } 
}