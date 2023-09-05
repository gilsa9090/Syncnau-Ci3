<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Notifikasi untuk notifikasi
 */

class Notifikasi
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('session');

        //div notif
        $this->notifSukses = '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4><i class="icon fa fa-check"></i> Sukses !</h4>';

        $this->notifGagal = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4><i class="icon fa fa-ban"></i> Gagal !</h4>';

        $this->notifClose = '</div>';
    }

    public function suksesAdd($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Berhasi Menambahkan Data. <p>" . $param . $this->notifClose);
    }

    public function gagalAdd($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Gagal Menambahkan Data. <p>" . $param . $this->notifClose);
    }
    public function suksesCart($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Berhasi Menambahkan Tools. <p>" . $param . $this->notifClose);
    }

    public function gagalCart($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Gagal Menambahkan Tools. <p>" . $param . $this->notifClose);
    }
    public function suksesCheckout($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Berhasi Melakukan Checkout. <p>" . $param . $this->notifClose);
    }

    public function gagalCheckout($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Gagal Melakukan Checkout. <p>" . $param . $this->notifClose);
    }

    public function suksesEdit($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Berhasi Edit Data. <p>" . $param . $this->notifClose);
    }

    public function gagalEdit($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Gagal Edit Data. <p>" . $param . $this->notifClose);
    }

    public function suksesHapus($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Berhasi Hapus Data. <p>" . $param . $this->notifClose);
    }


    public function gagalHapus($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Gagal Hapus Data. <p>" . $param . $this->notifClose);
    }

    public function gagalDownload($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Berkas tidak ada. <p>" . $param . $this->notifClose);
    }

    public function comment($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Catatan untuk revisi usulan. <p>" . $param . $this->notifClose);
    }

    public function instruksi($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Yang perlu dilakukan selanjutnya. <p>" . $param . $this->notifClose);
    }

    public function valdasiError($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . $param . $this->notifClose);
    }

    public function failLogin($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Data Login Tidak Valid. <p>" . $param . $this->notifClose);
    }

    public function suksesEmail($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . "Data Berhasil Dikirim via Email ke " . $param . $this->notifClose);
    }
    public function gagalEmail($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Data Gagal Dikirim via Email ke " . $param . $this->notifClose);
    }
}

/* End of file Notifikasi.php */
/* Location: ./application/libraries/Notifikasi.php */