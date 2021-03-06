<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Classlist_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get classlist by classListID
     */
    function get_classlist($classListID)
    {
        return $this->db->get_where('classlist',array('classListID'=>$classListID))->row_array();
    }
        
    /*
     * Get all classlist
     */
    function get_all_classlist()
    {
        $this->db->order_by('classListID', 'desc');
        return $this->db->get('classlist')->result_array();
    }
        
    /*
     * function to add new classlist
     */
    function add_classlist($params)
    {
        $this->db->insert('classlist',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update classlist
     */
    function update_classlist($classListID,$params)
    {
        $this->db->where('classListID',$classListID);
        return $this->db->update('classlist',$params);
    }
    
    /*
     * function to delete classlist
     */
    function delete_classlist($classListID)
    {
        return $this->db->delete('classlist',array('classListID'=>$classListID));
    }
}
