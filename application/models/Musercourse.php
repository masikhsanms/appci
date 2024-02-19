<?php defined('BASEPATH') OR exit('No direct script access allowed');
class musercourse extends CI_Model
{
    private $tb_main = 'userCourse';
    private $tb_users = 'users';
    private $tb_course = 'courses';


    function getAll(){
        return $this->db->get($this->tb_main)->result();
    }

    function getAllUsers(){
        return $this->db->get($this->tb_users)->result();
    }

    function getAllCourses(){
        return $this->db->get($this->tb_course)->result();
    }

    function getAllJoin()
    {
        $sql = "SELECT a.*,b.username,c.course FROM userCourse a 
                INNER JOIN users b ON b.id = a.id_user
                INNER JOIN courses c ON c.id = a.id_course
                WHERE 1";
        return $this->db->query($sql)->result();
    }

    public function getById($id)
    {
        $id_explode = explode('-',$id);
        $id_user = $id_explode[0];
        $id_course = $id_explode[1];

        $sql = "SELECT a.*,b.username,c.course FROM userCourse a 
                INNER JOIN users b ON b.id = a.id_user
                INNER JOIN courses c ON c.id = a.id_course
                WHERE a.id_user='".$id_user."' AND a.id_course='".$id_course."'";

        return $this->db->query($sql)->row();

        // return $this->db->get_where($this->tb_main, ["id_user" => $id_user,'id_course'])->row();
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
            'id_user'=>$post['id_user'],
            'id_course'=>$post['id_course'],
        ];
        return $this->db->update($this->tb_main, $data, array('id_user' => $post['id_userhidden'],'id_course' => $post['id_coursehidden']));
        }
    }

    public function delete($id)
    {
        $id_explode = explode('-',$id);
        $id_user = $id_explode[0];
        $id_course = $id_explode[1];

        return $this->db->delete($this->tb_main, array("id_user" => $id_user,'id_course'=>$id_course));
    } 
}