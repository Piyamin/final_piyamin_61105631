<?php
function getMenuNameFromId($id)
{
    $CI = &get_instance();
    $CI->load->model('menu_model');
    $condition = array(
        '_id' => $CI->mongo_db->create_document_id($id)
    );
    $result = $CI->menu_model->findOne($condition);
    return $result['name'];
}
