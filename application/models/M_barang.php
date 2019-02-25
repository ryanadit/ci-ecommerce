<?php
class M_barang extends CI_Model{

	function hapus_barang($kode){
		$this->db->where('barang_id',$kode);
		$query = $this->db->get('tbl_barang');
		$row = $query->row();
		unlink("./assets/pict/$row->gambar");//untuk menghapus gambar pada direktori server
		$this->db->delete('tbl_barang',array('barang_id'=>$kode));
	}

	function update_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok,$gambar){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("UPDATE tbl_barang SET barang_nama='$nabar',barang_satuan='$satuan',barang_harpok='$harpok',barang_harjul='$harjul',barang_harjul_grosir='$harjul_grosir',barang_stok='$stok',barang_min_stok='$min_stok',barang_tgl_last_update=NOW(),barang_kategori_id='$kat',barang_user_id='$user_id',gambar='$gambar' WHERE barang_id='$kobar'");
		return $hsl;
	}

	function tampil_barang(){
		$hsl=$this->db->query("SELECT barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,gambar,kategori_nama FROM tbl_barang JOIN tbl_kategori ON barang_kategori_id=kategori_id");
		return $hsl;
	}

	function tampil_material(){
		$hsl=$this->db->query("SELECT barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,gambar,kategori_nama FROM tbl_barang JOIN tbl_kategori ON barang_kategori_id=kategori_id WHERE kategori_nama='material'");
		return $hsl;
	}

	function tampil_tambahan(){
		$hsl=$this->db->query("SELECT barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,gambar,kategori_nama FROM tbl_barang JOIN tbl_kategori ON barang_kategori_id=kategori_id WHERE kategori_nama='tambahan'");
		return $hsl;
	}

	function tampil_peralatan(){
		$hsl=$this->db->query("SELECT barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,gambar,kategori_nama FROM tbl_barang JOIN tbl_kategori ON barang_kategori_id=kategori_id WHERE kategori_nama='peralatan'");
		return $hsl;
	}


	function simpan_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok,$gambar){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("INSERT INTO tbl_barang (barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,barang_user_id,gambar) VALUES ('$kobar','$nabar','$satuan','$harpok','$harjul','$harjul_grosir','$stok','$min_stok','$kat','$user_id','$gambar')");
		return $hsl;
	}

	public function foto($id)
   {
     $this->db->where('barang_id', $id);
     return $this->db->get('tbl_barang')->row();
   }


	function get_barang($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_id='$kobar'");
		return $hsl;
	}

	function get_kobar(){
		$q = $this->db->query("SELECT MAX(RIGHT(barang_id,6)) AS kd_max FROM tbl_barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BR".$kd;
	}

	function get_barang_list($limit, $start){
		$this->db->select('barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,gambar,kategori_nama');
   		$this->db->from('tbl_barang');
   		$this->db->join('tbl_kategori','barang_kategori_id=kategori_id');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    public function get_baca_keyword($keyword){
			
			/*$this->db->from('tbl_barang');*/
			$this->db->select('barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,gambar,kategori_nama');
   			$this->db->from('tbl_barang');
   			$this->db->join('tbl_kategori','barang_kategori_id=kategori_id');
			$this->db->like('barang_nama',$keyword);
			$this->db->or_like('barang_harjul',$keyword);
			$this->db->or_like('barang_stok',$keyword);
			$hsl = $this->db->get();
			return $hsl;
		}


	 
 
 	 public function jumlah_data(){
		return $this->db->get('tbl_barang')->num_rows();
   }



}