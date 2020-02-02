<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('excel_import_model');
		$this->load->library('excel');
	}

	function index()
	{
		$this->load->view('excel_import');
	}
	
	function fetch()
	{
		$data = $this->excel_import_model->select();
		$output = '
		<h3 align="center">Total Data - '.$data->num_rows().'</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Perusahaan Nama</th>
				<th>Perusahaan Alamat</th>
				<th>Perusahaan Jenis</th>
				<th>PIC</th>
				<th>Tanggal Mulai KP</th>
				<th>Tanggal Selesai KP</th>
				<th>No Surat</th>
				<th>Tanggal Surat</th>
				<th>Status KP</th>
			</tr>
		';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->perusahaan_nama.'</td>
				<td>'.$row->perusahaan_almt.'</td>
				<td>'.$row->perusahaan_jenis.'</td>
				<td>'.$row->pic.'</td>
				<td>'.$row->tgl_mulai_kp.'</td>
				<td>'.$row->tgl_selesai_kp.'</td>
				<td>'.$row->no_surat.'</td>
				<td>'.$row->tanggal_surat.'</td>
				<td>'.$row->status_kp.'</td>
			</tr>
			';
		}
		$output .= '</table>';
		echo $output;
	}

	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$perusahaan_nama = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$perusahaan_almt = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$perusahaan_jenis = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$pic = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$tgl_mulai_kp = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$tgl_selesai_kp = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$no_surat = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$tanggal_surat = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$status_kp = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$data[] = array(
						'perusahaan_nama'	=>	$perusahaan_nama,
						'perusahaan_almt'	=>	$perusahaan_almt,
						'perusahaan_jenis'	=>	$perusahaan_jenis,
						'pic'				=>	$pic,
						'tgl_mulai_kp'		=>	$tgl_mulai_kp,
						'tgl_selesai_kp'	=>	$tgl_selesai_kp,
						'no_surat'			=>	$no_surat,
						'tanggal_surat'		=>	$tanggal_surat,
						'status_kp'			=>	$status_kp
					);
				}
			}
			$this->excel_import_model->insert($data);
			echo 'Data Imported successfully';
		}	
	}
}

?>