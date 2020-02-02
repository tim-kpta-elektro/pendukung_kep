<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ta extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TaModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $session = $_SESSION['nim'];
        $result['data'] = $this->TaModel->mahasiswa($session);
        $result['dosens'] = $this->TaModel->dosens();
        $result["pending"] = $this->TaModel->pending($session);
        $result["setuju"] = $this->TaModel->setuju($session);
        $result["tolak"] = $this->TaModel->tolak($session);
        $result["mk"] = $this->TaModel->matakuliah();
        $result["peminatan"] = $this->TaModel->get_peminatan();

        if ($result["setuju"] != null) {
            $result['ta'] = $this->TaModel->ta($session);
            $id_ta = $result['ta']->id_ta;
            $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
            $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
            $result['matkul'] = $this->TaModel->matkul($id_ta);

            $this->load->view('ta/pengajuan_setuju', $result);
            // redirect('tugasakhir/ta/pengajuan_setuju');
        } else if ($result["pending"] != null) {
            $result['ta'] = $this->TaModel->ta($session);
            $id_ta = $result['ta']->id_ta;
            $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
            $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
            $result['matkul'] = $this->TaModel->matkul($id_ta);
            $result['peminatan'] = $this->TaModel->peminatan($id_ta);

            $this->load->view('ta/pengajuan_pending', $result);

            // redirect('tugasakhir/ta/pengajuan_pending');
        } elseif ($result["tolak"] != null) {
            $session = $_SESSION['nim'];
            $result['data'] = $this->TaModel->mahasiswa($session);
            $result['ta'] = $this->TaModel->ta($session);
            $id_ta = $result['ta']->id_ta;
            $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
            $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
            $result['matkul'] = $this->TaModel->matkul($id_ta);
            $result['dosens'] = $this->TaModel->dosens();

            $this->load->view('ta/pengajuan_tolak', $result);
            // redirect('tugasakhir/ta/pengajuan_tolak');
        } else if ($result != null) {
            $this->load->view('ta/pengajuan', $result);
        } else {
            $this->load->view('kp/error_pem');
        }
    }

    public function pengajuan()
    {
        $validation = $this->form_validation;
        $validation->set_rules('judul', 'Judul', 'required');
        if ($validation->run() == true) {
            $this->TaModel->save_ta();
            redirect('tugasakhir/ta');
        } else {
            redirect('tugasakhir/ta');
        }
    }

    public function pengajuan_kembali()
    {
        $validation = $this->form_validation;
        $validation->set_rules('judul', 'Judul', 'required');
        if ($validation->run() == true) {
            $this->TaModel->update_ta();
            redirect('tugasakhir/ta');
        } else {
            redirect('tugasakhir/ta');
        }
    }

    public function pengajuan_pending()
    {
        $session = $_SESSION['nim'];
        $result['data'] = $this->TaModel->mahasiswa($session);
        $result['ta'] = $this->TaModel->ta($session);
        $id_ta = $result['ta']->id_ta;
        $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
        $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
        $result['matkul'] = $this->TaModel->matkul($id_ta);

        $this->load->view('ta/pengajuan_pending', $result);
    }

    public function pengajuan_tolak()
    {
        $session = $_SESSION['nim'];
        $result['data'] = $this->TaModel->mahasiswa($session);
        $result['ta'] = $this->TaModel->ta($session);
        $id_ta = $result['ta']->id_ta;
        $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
        $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
        $result['matkul'] = $this->TaModel->matkul($id_ta);
        $result['dosens'] = $this->TaModel->dosens();
        $this->load->view('ta/pengajuan_tolak', $result);
    }

    public function pengajuan_setuju()
    {
        $session = $_SESSION['nim'];
        $result['data'] = $this->TaModel->mahasiswa($session);
        $result['ta'] = $this->TaModel->ta($session);
        $id_ta = $result['ta']->id_ta;
        $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
        $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
        $result['matkul'] = $this->TaModel->matkul($id_ta);

        $this->load->view('ta/pengajuan_setuju', $result);
    }

    public function cetak_pengajuan(){
        $session = $_SESSION['nim'];
        $result['data'] = $this->TaModel->mahasiswa($session);
        $result['ta'] = $this->TaModel->ta($session);
        $id_ta = $result['ta']->id_ta;
        $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
        $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
        $result['matkul'] = $this->TaModel->matkul($id_ta);
        $result['peminatan'] = $this->TaModel->peminatan($id_ta);

        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "formulir_pendaftaran_ta.pdf";
		$this->pdf->load_view('ta/cetak_pendaftaran',$result);
    }

    public function cetak_surat_tugas(){

    }

    public function fill_form()
	{           
        $mk = $_GET['mk0'];
		$result = $this->TaModel->get_matakuliah(mk);

            $data= array(
                'kode' => $result->kode,
            );
            echo json_encode($data);
        
	}

}
