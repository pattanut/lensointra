<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';
    
    var $_table = 'section';
    
    
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

//    function insert_entry()
//    {
//        $this->title   = $_POST['title']; // please read the below note
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->insert('entries', $this);
//    }
//
//    function update_entry()
//    {
//        $this->title   = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
//    }

}

/* End of file section.php */