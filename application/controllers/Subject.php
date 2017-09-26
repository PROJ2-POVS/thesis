<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Subject extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Subject_model');
    } 

    /*
     * Listing of subjects
     */
    function index()
    {
        $data['subjects'] = $this->Subject_model->get_all_subjects();
        
        $data['_view'] = 'subject/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new subject
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('subjectCode','SubjectCode','required|max_length[7]');
		$this->form_validation->set_rules('subjectName','SubjectName','required|max_length[100]');
		$this->form_validation->set_rules('subjectType','SubjectType','required|max_length[50]');
		$this->form_validation->set_rules('units','Units','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'subjectType' => $this->input->post('subjectType'),
				'subjectCode' => $this->input->post('subjectCode'),
				'subjectName' => $this->input->post('subjectName'),
				'units' => $this->input->post('units'),
            );
            
            $subject_id = $this->Subject_model->add_subject($params);
            redirect('subject/index');
        }
        else
        {            
            $data['_view'] = 'subject/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a subject
     */
    function edit($sujectID)
    {   
        // check if the subject exists before trying to edit it
        $data['subject'] = $this->Subject_model->get_subject($sujectID);
        
        if(isset($data['subject']['sujectID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('subjectCode','SubjectCode','required|max_length[7]');
			$this->form_validation->set_rules('subjectName','SubjectName','required|max_length[100]');
			$this->form_validation->set_rules('subjectType','SubjectType','required|max_length[50]');
			$this->form_validation->set_rules('units','Units','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'subjectType' => $this->input->post('subjectType'),
					'subjectCode' => $this->input->post('subjectCode'),
					'subjectName' => $this->input->post('subjectName'),
					'units' => $this->input->post('units'),
                );

                $this->Subject_model->update_subject($sujectID,$params);            
                redirect('subject/index');
            }
            else
            {
                $data['_view'] = 'subject/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The subject you are trying to edit does not exist.');
    } 

    /*
     * Deleting subject
     */
    function remove($sujectID)
    {
        $subject = $this->Subject_model->get_subject($sujectID);

        // check if the subject exists before trying to delete it
        if(isset($subject['sujectID']))
        {
            $this->Subject_model->delete_subject($sujectID);
            redirect('subject/index');
        }
        else
            show_error('The subject you are trying to delete does not exist.');
    }
    
}
