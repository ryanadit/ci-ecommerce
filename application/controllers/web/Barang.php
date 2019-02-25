<?php
class Barang extends CI_Controller{
	public	function __construct(){
		parent::__construct();
		
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->helper(array('url','form'));
		//$this->load->library('barcode');
	}
	function index(){
	
		$data['data']=$this->m_barang->tampil_barang();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('web/v_barang',$data);
	
	}

	function product_material(){
		$data['data']=$this->m_barang->tampil_material();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('web/v_product_material',$data);
	  ////
  
	}
	function product_tambahan(){
		$data['data']=$this->m_barang->tampil_tambahan();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('web/v_product_tambahan',$data);
	  ////
  
	}
	function product_peralatan(){
		$data['data']=$this->m_barang->tampil_peralatan();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('web/v_product_peralatan',$data);
	  ////
  
	}

	function search(){
		$keyword = $this->input->post('keyword');
		$data['data']=$this->m_barang->get_baca_keyword($keyword);
		$this->load->view('web/v_barang',$data);
	}

}

	
	
