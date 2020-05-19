<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class List_menu_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function findOne($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('list_menu');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('list_menu');
        return $result;
    }
    public function insert($data)
    {
        $insertId = $this->mongo_db->insert('list_menu', $data);
        return $insertId;
    }
}
