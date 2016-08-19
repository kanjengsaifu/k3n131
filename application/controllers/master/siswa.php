<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends MY_Controller {

    var $modul;

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
        $this->modul = get_class($this);
    }

    public function index() {
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data_jk' => $this->listcode_model->select('*', array('head_list' => 'JK'), null, null, null)->result(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, array('field' => 'id_list_code', 'sort' => 'asc'))->result(),
            'page' => 'webadmin/master/siswa/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function search() {

        $array_where = array();

        $kelas = $this->input->post('inp_kelas');
        if ($kelas != 'ALL') {
            $array_where = array_merge($array_where, array('kelas' => $kelas));
        }

        $nama = $this->input->post('inp_nama_siswa');
        if ($nama != '*') {
            $array_where = array_merge($array_where, array('nama_siswa LIKE \'%' . $nama . '%\'' => null));
        }

        $param = array(
            'kelas' => $kelas,
            'nama' => $nama
        );

        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->siswa_model->select('*', $array_where, null, null, array('field' => 'nama_siswa', 'sort' => 'asc'))->result(),
            'list_data_jk' => $this->listcode_model->select('*', array('head_list' => 'JK'), null, null, null)->result(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, array('field' => 'id_list_code', 'sort' => 'asc'))->result(),
            'page' => 'webadmin/master/siswa/search',
            'param' => $param
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($kode_siswa) {
        $field = '*'
                . ',(select h1.tgl_pembayaran from t_pembayaran_header h1 WHERE h1.kode_pembayaran = t_pembayaran_detail.kode_pembayaran) as tgl_pembayaran';
        $array_where = array(
            'jenis_pembayaran' => 'K02',
            'kode_pembayaran in (SELECT h.kode_pembayaran FROM t_pembayaran_header h WHERE h.kode_siswa = \'' . $kode_siswa . '\')' => null
        );
        $list_hist_spp = $this->pembayaran_det_model->select($field, $array_where, null, null, array('field' => 'tgl_pembayaran', 'sort' => 'desc'))->result();

        $data = array(
            'title_page' => 'Lihat Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Lihat Data ' . $this->modul,
            'data_siswa' => $this->siswa_model->select('*', array('kode_siswa' => $kode_siswa), null, null, null)->row(),
            'list_data_jk' => $this->listcode_model->select('*', array('head_list' => 'JK'), null, null, null)->result(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'list_hist_spp' => $list_hist_spp,
            'page' => 'webadmin/master/siswa/view'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $kode = null) {
        //var
        $data['nama_siswa'] = $this->input->post('inp_nama_siswa');
        $data['jenis_kelamin'] = $this->input->post('inp_jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('inp_tempat_lahir');
        $data['tgl_lahir'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_lahir')));
        $data['anak_ke'] = $this->input->post('inp_anak_ke');
        $data['asal_sekolah'] = $this->input->post('inp_asal_sekolah');
        $data['kelas'] = $this->input->post('inp_kelas');
        $data['telp_siswa'] = $this->input->post('inp_telp_siswa');
        $data['alamat'] = $this->input->post('inp_alamat');
        $data['nama_ayah'] = $this->input->post('inp_nama_ayah');
        $data['pkj_ayah'] = $this->input->post('inp_pkj_ayah');
        $data['nama_ibu'] = $this->input->post('inp_nama_ibu');
        $data['pkj_ibu'] = $this->input->post('inp_pkj_ibu');
        $data['telp_ortu'] = $this->input->post('inp_telp_ortu');
        $data['telp_ortu_2'] = $this->input->post('inp_telp_ortu_2');
        $submit = $this->input->post('submit');

        if ($action == 'add') {
            $cnt = $this->counter->generate_id_with_zero(date('ym'), 3);
            $data['kode_siswa'] = date('ym') . $cnt;
            $res = $this->siswa_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_depan']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->siswa_model->edit($data, array('kode_siswa' => $kode));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_siswa']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }

        if ($submit == 'profil') {
            redirect('master/siswa/view/' . $kode);
        } else {
            redirect('master/siswa');
        }
    }

    public function delete($id = null) {
        $res = $this->siswa_model->delete(array('id_siswa' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('master/siswa');
    }

    public function pupolate_kelas() {
        $param_where = array(
            'kelas' => $this->input->post('kelas')
        );

        $list_siswa = $this->siswa_model->select('*', $param_where, null, null, null)->result();
        $output = '<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 10%">#</th>
                                <th>Nama Siswa</th>
                                <th style="width: 10%">Hadir</th>
                                <th style="width: 10%">Tidak</th>
                            </tr>
                        </thead>
                        <tbody>';
        $i = 0;
        foreach ($list_siswa as $siswa) {
            $no = $i + 1;
            $output .= '<tr>'
                    . '<td>' . $no . '</td>'
                    . '<td>' . $siswa->nama_siswa . '</td>'
                    . '<input type="hidden" name="kode_siswa[' . $i . ']" value="' . $siswa->kode_siswa . '" />'
                    . '<td><input type="radio" name="hadir[' . $i . ']" value="1" checked/></td>'
                    . '<td><input type="radio" name="hadir[' . $i . ']" value="0"></td>';
            $i++;
        }
        $output .= '</tbody>                                    
                    </table>';

        $arr[0] = $output;
        echo json_encode($arr);
    }

}
