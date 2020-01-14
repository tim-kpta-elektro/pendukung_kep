<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ta extends CI_Controller
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

        if ($result["setuju"] != null) {
            $result['ta'] = $this->TaModel->ta($session);
            $id_ta = $result['ta']->id_ta;
            $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
            $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
            $result['matkul'] = $this->TaModel->matkul($id_ta);

            $this->load->view('ta/pengajuan_setuju', $result);
            // redirect('backend/ta/pengajuan_setuju');
        } else if ($result["pending"] != null) {
            $result['ta'] = $this->TaModel->ta($session);
            $id_ta = $result['ta']->id_ta;
            $result['pembimbing1'] = $this->TaModel->pembimbing1($id_ta);
            $result['pembimbing2'] = $this->TaModel->pembimbing2($id_ta);
            $result['matkul'] = $this->TaModel->matkul($id_ta);

            $this->load->view('ta/pengajuan_pending', $result);

            // redirect('backend/ta/pengajuan_pending');
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
            // redirect('backend/ta/pengajuan_tolak');
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
            redirect('backend/ta');
        } else {
            redirect('backend/ta');
        }
    }

    public function pengajuan_kembali()
    {
        $validation = $this->form_validation;
        $validation->set_rules('judul', 'Judul', 'required');
        if ($validation->run() == true) {
            $this->TaModel->update_ta();
            redirect('backend/ta');
        } else {
            redirect('backend/ta');
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

}
