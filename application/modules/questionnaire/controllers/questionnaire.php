<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questionnaire extends CI_Controller {

	public function index()
	{
            //$data['view'] = 'form_view';
            $data['title'] = 'Form';
            $data['content'] = 'form_view';
            $this->load->view('questionnaire_template', $data);
	}
        
        public function detail()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('txtName', 'ชื่อ', 'trim|required');
            $this->form_validation->set_rules('optDep', 'แผนก', 'trim|required');
            
            $this->form_validation->set_message('required', 'โปรดระบุ %s');
            if ($this->form_validation->run() == FALSE)
            {
                $this->index();
            }
            else
            {
                //echo 'success';
                $this->load->view('formdetail_view');
            }
        }


        public function section()
        {
            $this->load->model('section');
            $data['rs'] = $this->section->get_all();
            $this->load->view('section_view', $data);
        }
        
}
/* End of file questionnaire.php */
/* Location: ./application/modules/questionnaire/controllers/questionnaire.php */