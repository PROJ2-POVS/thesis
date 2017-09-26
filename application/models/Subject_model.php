<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Subject_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get subject by sujectID
     */
    function get_subject($sujectID)
    {
        return $this->db->get_where('subjects',array('sujectID'=>$sujectID))->row_array();
    }
        
    /*
     * Get all subjects
     */
    function get_all_subjects()
    {
        $this->db->order_by('sujectID', 'desc');
        return $this->db->get('subjects')->result_array();
    }
        
    /*
     * function to add new subject
     */
    function add_subject($params)
    {
        $this->db->insert('subjects',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update subject
     */
    function update_subject($sujectID,$params)
    {
        $this->db->where('sujectID',$sujectID);
        return $this->db->update('subjects',$params);
    }
    
    /*
     * function to delete subject
     */
    function delete_subject($sujectID)
    {
        return $this->db->delete('subjects',array('sujectID'=>$sujectID));
    }
}
