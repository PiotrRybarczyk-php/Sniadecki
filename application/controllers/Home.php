<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->db->table_exists('users')) {
			$this->base_m->create_base();
		}
	}

	public function change($lang)
	{
		$_SESSION['lang'] = $lang;
	}

	public function index()
	{
		$data = loadDefaultDataFront();
		$data['slider'] = $this->back_m->get_all('slider');
		$data['info_3'] = $this->back_m->get_one('info', 3);
		$data['info_1'] = $this->back_m->get_one('info', 1);
		$data['products_info'] = $this->back_m->get_all('products_info');
		$data['info_2'] = $this->back_m->get_one('info', 2);
		$data['opinions'] = $this->back_m->get_all('opinions');
		$data['info_4'] = $this->back_m->get_one('info', 4);
		echo loadViewsFront('index', $data);
	}
	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['contacts'] = $this->back_m->get_all('distribs');
		echo loadViewsFront('contact', $data);
	}
}
