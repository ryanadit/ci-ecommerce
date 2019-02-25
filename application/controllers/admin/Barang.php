<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		//$this->load->library('barcode');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->m_barang->tampil_barang();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('admin/v_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	public function search(){
		if($this->session->userdata('akses')=='1'){
		$keyword = $this->input->post('keyword');
		$data['data']=$this->m_barang->get_baca_keyword($keyword);
		$this->load->view('admin/v_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function tambah_barang(){
	if($this->session->userdata('akses')=='1'){
		//configurasi upload gambar
		$config = [
        'upload_path' => './assets/pict/',
        'allowed_types' => 'docx|pdf|gif|jpg|png|jpeg',
        'max_size' => 200000000, 'max_width' => 5000,
        'max_height' => 5000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('inputgagal', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $gambar = $file['file_name'];
		}

		$kobar=$this->m_barang->get_kobar();
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_barang->simpan_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok,$gambar);

		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function edit_barang($id){
	
	if($this->session->userdata('akses')=='1'){
		$foto = $this->m_barang->foto($id);
		if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
        'upload_path' => './assets/pict/',
        'allowed_types' => 'docx|pdf|gif|jpg|png|jpeg',
        'max_size' => 200000000, 
        'max_width' => 5000,
        'max_height' => 5000
      ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('inputgagal', $error);
        } else
        //jika berhasil upload
        {

            $file = $this->upload->data();
            $gambar = $file['file_name'];
            unlink('assets/pict/'.$foto->gambar);
        }
    }


		$kobar=$this->input->post('kobar');
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_barang->update_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok,$gambar);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_barang->hapus_barang($kode);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}