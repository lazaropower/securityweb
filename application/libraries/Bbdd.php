<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bbdd
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('database');
    }

    public function getTable($table)
    {
        return $this->CI->db->get($table);
    }

    public function getRowWhereId($table, $id)
    {
        return $this->CI->db->where('id', $id)->get($table)->result();
    }
}