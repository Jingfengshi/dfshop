<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Base_Dosend_model extends CI_Model
{
    public function insert($arr)
    {
        $CI = & get_instance();
        $CI->load->model('Base_update_model');
        return $CI->Base_update_model->insert(tab_m('dosend'),$arr);
    }

    public function delete($where)
    {
        $CI = & get_instance();
        $CI->load->model('Base_update_model');
        return $CI->Base_update_model->delete(tab_m('dosend'),$where);
    }

    public function update($data,$where)
    {
        $CI = & get_instance();
        $CI->load->model('Base_update_model');
        return $CI->Base_update_model->update(tab_m('dosend'),$data,$where);
    }

    public function get_row($where)
    {
        $CI = & get_instance();
        $CI->load->model('Base_get_model');
        return $CI->Base_get_model->get_row(tab_m('dosend'),'*',$where);
    }


}
