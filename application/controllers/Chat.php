<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {	

	public $user;

	function __construct(){
		parent::__construct();
		if($this->session->userdata('stat')!= "login")
		{
			redirect(base_url('login'),'refresh');
		}
		$this->load->model('m_login');
		$this->load->model('mcombox');
		$this->load->helper('form','url');
	}
	 public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
                        $friend = $this->db->get_where('login', array('id' => $this->input->post('chatWith')), 1)->row();

            // Get Chats
                        $id = $this->session->userdata('id');
            $chats = $this->db
                ->select('chat.*, login.nama')
                ->from('chat')
                ->join('login', 'chat.send_by = login.id')
                ->where('(send_by = '. $id .' AND send_to = '. $friend->id .')')
                ->or_where('(send_to = '. $id .' AND send_by = '. $friend->id .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();

            $result = array(
                'name' => $friend->nama,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage()
    {
        $id = $this->session->userdata('id');
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $id
        ));
    }

}

/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */