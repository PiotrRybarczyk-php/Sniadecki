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
		$data['logo'] = $this->back_m->get_all('logos');
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
		$data['logo'] = $this->back_m->get_all('logos');
		$data['contacts'] = $this->back_m->get_all('distribs');
		echo loadViewsFront('contact', $data);
	}
	public function catalog()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		echo loadViewsFront('catalog', $data);
	}
	public function certificates()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		echo loadViewsFront('certificates', $data);
	}
	public function certificates_old()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['certificate'] = $this->back_m->get_all('certificates');
		$data['type'] = "archive";
		echo loadViewsFront('certificates_subpage', $data);
	}
	public function certificates_new()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['certificate'] = $this->back_m->get_all('certificates');
		$data['type'] = "current";
		echo loadViewsFront('certificates_subpage', $data);
	}
	public function offers()
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['cat'] = $this->back_m->get_all('categories');
		echo loadViewsFront('offers', $data);
	}
	public function category($id, $cat)
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['cat'] = $this->back_m->get_one('categories', $id);
		$data['subcat'] = $this->back_m->get_subcat($id);
		echo loadViewsFront('category', $data);
	}

	public function subcategory($id, $cat)
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['subcat'] = $this->back_m->get_one('subcat', $id);
		$data['cat'] = $this->back_m->get_one('categories', $data['subcat']->cat_id);
		$data['product'] = $this->back_m->get_products($id);
		echo loadViewsFront('subcategory', $data);
	}
	public function product($id, $cat)
	{
		$data = loadDefaultDataFront();
		$data['logo'] = $this->back_m->get_all('logos');
		$data['product'] = $this->back_m->get_one('products', $id);
		$data['subcat'] = $this->back_m->get_one('subcat', $data['product']->sub_id);
		$data['cat'] = $this->back_m->get_one('categories', $data['subcat']->cat_id);
		$data['picture'] = $this->back_m->get_images('gallery', 'products', $id);
		echo loadViewsFront('product', $data);
	}
}
