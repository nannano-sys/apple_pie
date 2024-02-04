<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function get_post() {
        $query = $this->db->select(
            '
            id,
            status,
            post_title,
            post_name,
            post_content,
            create_date,
            draft_source_article'
        )
        ->from('post AS P')
        ->where('post_status', 1)
        ->order_by('create_date', 'DESC')
        ->get();

        if($query->num_rows()){
            return $query->result_array();
        }

        return false;
    }
}
