<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
            $this->load->view('news_view');
	}
        
        public function rss(){
            $content = file_get_contents('http://news.thaipbs.or.th/rss/politic.xml');
            $x = new SimpleXMLElement($content);
            
            echo '<ul>';
            foreach ($x->channel->item as $entry) {
                echo '<li><a href='.$entry->link.' title='.$entry->title.'>'.$entry->title.'</a><br>'.$entry->description.'</li>';
            }
            echo '</ul>';
        }
        
}

/* End of file news.php */
/* Location: ./application/modules/news/controllers/news.php */