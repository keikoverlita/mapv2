<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Maps extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_teknisi');
        $this->load->database();
        $this->load->helper('url');
    }

    public function index(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        if($is_logged_in) {
            $data['username_logged'] = $this->session->userdata('username');
            $data['nama'] = $this->session->userdata('nama');
            $data['role'] = $this->session->userdata('role');
            $data['sto_dp'] = $this->m_teknisi->cari_sto_dp();
            $data['sto_odp'] = $this->m_teknisi->cari_sto_odp();
            $data['sto_clus'] = $this->m_teknisi->cari_sto_clus();
            $this->load->view('maps', $data);
        }
        else{
            redirect('Access');
        }
    }

    public function ajax_delete_cust($nd)
    {
        $this->m_teknisi->delete_by_nd($nd);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_cust()
    {
        $this->_validate_cust();
        $data = array(
                'ND' => $this->input->post('up_ND'),
                'ND_REF' => $this->input->post('up_ND_REF'),
                'IPTV' => $this->input->post('up_IPTV'),
                'NAMA' => $this->input->post('up_NAMA'),
                'RP_TAGIHAN' => $this->input->post('up_RP_TAGIHAN'),
                'RP_TAGIHAN_INET' => $this->input->post('up_RP_TAGIHAN_INET'),
                'ALAMAT' => $this->input->post('up_ALAMAT'),
                'STP_TARGET' => ($this->input->post('up_STP_TARGET')),
                'CPE_SN' => $this->input->post('up_CPE_SN'),
                'RP_TOTAL' => $this->input->post('up_RP_TOTAL'),
            );
        $this->m_teknisi->update_cust(array('ND' => $this->input->post('up_ND')), $data);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate_cust()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('up_ND') == '')
        {
            $data['inputerror'][] = 'up_ND';
            $data['error_string'][] = 'ND masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('up_STP_TARGET') == '')
        {
            $data['inputerror'][] = 'up_STP_TARGET';
            $data['error_string'][] = 'STP Target masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('up_CPE_SN') == '')
        {
            $data['inputerror'][] = 'up_CPE_SN';
            $data['error_string'][] = 'CPE SN masih kosong';
            $data['status'] = FALSE;
        }
        if($this->input->post('up_ND') != $this->input->post('up_ND_temp')){
            if($this->input->post('up_ND') != null)
            {
                $x = $this->m_teknisi->get_nd($this->input->post('up_ND'));
                if ($x == FALSE)
                {
                    $data['inputerror'][] = 'up_ND';
                    $data['error_string'][] = 'ND telah dipakai';
                    $data['status'] = FALSE;
                }
            }
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    public function ajax_delete_user($id_user)
    {
        $this->m_teknisi->delete_by_id_user($id_user);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_add_user()
    {
        $this->_validate_user_add();
        $data = array(
                'id_user' => null,
                'username' => $this->input->post('username'),
                'role' => $this->input->post('role'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'kontak' => $this->input->post('kontak'),
            );
        $insert = $this->m_teknisi->save_user($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_user()
    {
        $this->_validate_user();
        $data = array(
                'id_user' => $this->input->post('id_user'),
                'username' => $this->input->post('username'),
                'role' => $this->input->post('role'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'kontak' => $this->input->post('kontak'),
            );
        $this->m_teknisi->update_user(array('id_user' => $this->input->post('id_user')), $data);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate_user()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('role') == '')
        {
            $data['inputerror'][] = 'role';
            $data['error_string'][] = 'Role masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('username') == '')
        {
            $data['inputerror'][] = 'username';
            $data['error_string'][] = 'Username masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('password') == '')
        {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('nama') == '')
        {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('kontak') == '')
        {
            $data['inputerror'][] = 'kontak';
            $data['error_string'][] = 'Kontak masih kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    private function _validate_user_add()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('role') == '')
        {
            $data['inputerror'][] = 'role';
            $data['error_string'][] = 'Role masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('username') == '')
        {
            $data['inputerror'][] = 'username';
            $data['error_string'][] = 'Username masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('password') == '')
        {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('nama') == '')
        {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('kontak') == '')
        {
            $data['inputerror'][] = 'kontak';
            $data['error_string'][] = 'Kontak masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('username') != null)
        {
            $x = $this->m_teknisi->get_username($this->input->post('username'));
            if ($x == FALSE)
            {
                $data['inputerror'][] = 'username';
                $data['error_string'][] = 'Username telah dipakai';
                $data['status'] = FALSE;
            }

        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    public function ajax_edit_cust($nd)
    {
        $data = $this->m_teknisi->get_by_nd($nd);
        echo json_encode($data);
    }

    public function ajax_edit_user($id_user)
    {
        $data = $this->m_teknisi->get_by_id_user($id_user);
        echo json_encode($data);
    }

    public function ajax_list_user()
    {
        $list = $this->m_teknisi->get_datatables_user();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $user) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user->role;
            $row[] = $user->username;
            $row[] = $user->nama;
            $row[] = $user->kontak;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_user('."'".$user->id_user."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$user->id_user."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_teknisi->count_all_user(),
                        "recordsFiltered" => $this->m_teknisi->count_filtered_user(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_get_dp(){
        $data = $this->m_teknisi->get_dp();
        echo json_encode($data);
    }

    public function ajax_get_dp_stat(){
        $data = $this->m_teknisi->get_dp_stat();
        echo json_encode($data);
    }

    public function ajax_get_dp_oth(){
        $data = $this->m_teknisi->get_dp_oth();
        echo json_encode($data);
    }

    public function ajax_get_odp(){
        $data = $this->m_teknisi->get_odp();
        echo json_encode($data);
    }

    public function ajax_get_clus(){
        $data = array();
        $data['ODP'] = $this->m_teknisi->get_koor_odp_clu();
        $data['DP'] = $this->m_teknisi->get_koor_dp_clu();
        $data['MSAN'] = $this->m_teknisi->get_koor_msan_clu();
        $data['ONU'] = $this->m_teknisi->get_koor_onu_clu();
        $data['RK'] = $this->m_teknisi->get_koor_rk_clu();
        $data['ODC'] = $this->m_teknisi->get_koor_odc_clu();
        echo json_encode($data);
    }

    public function ajax_get_nd(){
        $data = array();
        $data['ODP'] = $this->m_teknisi->get_nd_odp();
        $data['DP'] = $this->m_teknisi->get_nd_dp();
        echo json_encode($data);
    }

    public function ajax_get_koor(){
        $data = array();
        $data['ODP'] = $this->m_teknisi->get_koor_odp();
        $data['DP'] = $this->m_teknisi->get_koor_dp();
        echo json_encode($data);
    }

    public function ajax_get_alpro(){
        $data = $this->m_teknisi->get_alpro();
        echo json_encode($data);
    }

    public function ajax_get_odp_aku(){
        $data = $this->m_teknisi->get_odp_aku();
        echo json_encode($data);
    }

    public function ajax_get_odp_stat(){
        $data = $this->m_teknisi->get_odp_stat();
        echo json_encode($data);
    }

    public function ajax_get_odp_oth(){
        $data = $this->m_teknisi->get_odp_oth();
        echo json_encode($data);
    }

    public function ajax_delete_dp()
    {
        $this->m_teknisi->delete_dp();
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete_odp()
    {
        $this->m_teknisi->delete_odp();
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_odp()
    {
        $this->_validate_odp();
        $data = array(
                'PIC_BENJAR' => $this->input->post('PIC_BENJAR'),
                'STATUS' => $this->input->post('STATUS'),
                'DESKRIPSI' => $this->input->post('DESKRIPSI'),
                'PELAKSANAAN' => $this->input->post('PELAKSANAAN'),
                'EST_BIAYA' => $this->input->post('EST_BIAYA'),
                'MATERIAL' => $this->input->post('MATERIAL'),
            );
        $this->m_teknisi->update_odp(array('PD_NAME' => $this->input->post('PD_NAME')), $data);
        echo json_encode(array("status" => TRUE));
    }

		public function ajax_update_odp_aku()
    {
        $this->_validate_odp_aku();
        $data = array(
                'UPDATE_DATE' => $this->input->post('UPDATE_DATE'),
                'ODP_NAME' => $this->input->post('ODP_NAME'),
                'PD_NAME' => $this->input->post('PD_NAME'),
                'QR_CODE_ODP' => $this->input->post('QR_CODE_ODP'),
                'STATUS_ODP' => $this->input->post('STATUS_ODP'),
                'IS_AVAIL' => $this->input->post('IS_AVAIL'),
								'IS_SERVICE' => $this->input->post('IS_SERVICE'),
								'IS_TOTAL' => $this->input->post('IS_TOTAL'),
								'KETERANGAN' => $this->input->post('KETERANGAN'),
								'IP_GPON' => $this->input->post('IP_GPON'),
								'PORT_GPON' => $this->input->post('PORT_GPON'),
								'TIPE_GPON' => $this->input->post('TIPE_GPON'),
            );
        $this->m_teknisi->update_odp_aku(array('PD_NAME' => $this->input->post('PD_NAME')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_dp()
    {
        $this->_validate_dp();
        $data = array(
                'STATUS' => $this->input->post('STATUS_DP'),
            );
        $this->m_teknisi->update_dp($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_refresh_dp(){
        $data = $this->m_teknisi->refresh_dp();
        echo json_encode($data);
    }

    public function ajax_refresh_odp(){
        $data = $this->m_teknisi->refresh_odp();
        echo json_encode($data);
    }

    public function ajax_add_dp()
    {
        $this->_validate_add_dp();
        $data = array(
                'STO' => $this->input->post('add_STO_DP'),
                'DP' => $this->input->post('add_DP'),
                'LATITUDE' => $this->input->post('add_LAT'),
                'LONGITUDE' => $this->input->post('add_LONG'),
                'STATUS' => $this->input->post('add_STATUS_DP'),
            );
        $this->m_teknisi->add_dp($data);
        echo json_encode(array("status" => TRUE));
    }

    public function getODC() {
        $sto = $this->input->post('sto');
        $query = $this->m_teknisi->get_odc_by_sto($sto);
        if($query)
        {
            $select_odc = '';
            $select_odc .= '<option value="">Select ODC</option>';
            foreach ($query as $object) {
                $select_odc .='<option value="'.$object->NAME.'">'.$object->NAME.'</option>';
            }
            echo json_encode($select_odc);
        }
    }

    public function getClus() {
        $odc = $this->input->post('odc');
        $sto = $this->input->post('sto');
        $query = $this->m_teknisi->get_clus_by_odc($odc,$sto);
        if($query)
        {
            $select_clu = '';
            $select_clu .= '<option value="">Select Cluster</option>';
            foreach ($query as $object) {
                $select_clu .='<option value="'.$object->ALAMAT.'">'.$object->ALAMAT.'</option>';
            }
            echo json_encode($select_clu);
        }
    }

    public function ajax_add_odp()
    {
        $this->_validate_add_odp();
        $data = array(
                'STO' => $this->input->post('add_STO'),
                'ODP_NAME' => $this->input->post('add_ODP_NAME'),
                'LATITUDE' => $this->input->post('add_LAT'),
                'LONGITUDE' => $this->input->post('add_LONG'),
                'PD_NAME' => $this->input->post('add_PD_NAME'),
                'PIC_BENJAR' => $this->input->post('add_PIC_BENJAR'),
                'STATUS' => $this->input->post('add_STATUS'),
                'DESKRIPSI' => $this->input->post('add_DESKRIPSI'),
                'PELAKSANAAN' => $this->input->post('add_PELAKSANAAN'),
                'EST_BIAYA' => $this->input->post('add_EST_BIAYA'),
                'MATERIAL' => $this->input->post('add_MATERIAL'),
            );
        $this->m_teknisi->add_odp($data);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate_dp(){
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('STATUS_DP') == '')
        {
            $data['inputerror'][] = 'STATUS_DP';
            $data['error_string'][] = 'Status masih kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    private function _validate_odp(){
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('PIC_BENJAR') == '')
        {
            $data['inputerror'][] = 'PIC_BENJAR';
            $data['error_string'][] = 'PIC Benjar masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('MATERIAL') == '')
        {
            $data['inputerror'][] = 'MATERIAL';
            $data['error_string'][] = 'Material masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('STATUS') == '')
        {
            $data['inputerror'][] = 'STATUS';
            $data['error_string'][] = 'Status masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('DESKRIPSI') == '')
        {
            $data['inputerror'][] = 'DESKRIPSI';
            $data['error_string'][] = 'Deskripsi masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('PELAKSANAAN') == '')
        {
            $data['inputerror'][] = 'PELAKSANAAN';
            $data['error_string'][] = 'Pelaksanaan masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('EST_BIAYA') == '')
        {
            $data['inputerror'][] = 'EST_BIAYA';
            $data['error_string'][] = 'Estimasi biaya masih kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

		private function _validate_odp_aku(){
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('QR_CODE_ODP') == '')
        {
            $data['inputerror'][] = 'QR_CODE_ODP';
	            $data['error_string'][] = 'QR Code masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('STATUS_ODP') == '')
        {
            $data['inputerror'][] = 'STATUS_ODP';
            $data['error_string'][] = 'Status masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('IP_GPON') == '')
        {
            $data['inputerror'][] = 'IP_GPON';
            $data['error_string'][] = 'IP GPON masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('PORT_GPON') == '')
        {
            $data['inputerror'][] = 'PORT_GPON';
            $data['error_string'][] = 'Port GPON masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('TIPE_GPON') == '')
        {
            $data['inputerror'][] = 'TIPE_GPON';
            $data['error_string'][] = 'Tipe GPON masih kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] == FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    private function _validate_add_dp(){
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('add_DP') == '')
        {
            $data['inputerror'][] = 'add_DP';
            $data['error_string'][] = 'DP masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_STO_DP') == '')
        {
            $data['inputerror'][] = 'add_STO_DP';
            $data['error_string'][] = 'STO masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_STATUS_DP') == '')
        {
            $data['inputerror'][] = 'add_STATUS_DP';
            $data['error_string'][] = 'Status masih kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    private function _validate_add_odp(){
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('add_ODP_NAME') != null)
        {
            $x = $this->m_teknisi->get_odpname($this->input->post('add_ODP_NAME'));
            if ($x == FALSE)
            {
                $data['inputerror'][] = 'add_ODP_NAME';
                $data['error_string'][] = 'add_ODP_NAME telah dipakai';
                $data['status'] = FALSE;
            }
        }
        else
        {
            $data['inputerror'][] = 'add_ODP_NAME';
            $data['error_string'][] = 'ODP Name masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_PD_NAME') != null)
        {
            $x = $this->m_teknisi->get_pdname($this->input->post('add_PD_NAME'));
            if ($x == FALSE)
            {
                $data['inputerror'][] = 'add_PD_NAME';
                $data['error_string'][] = 'add_PD_NAME telah dipakai';
                $data['status'] = FALSE;
            }
        }
        else
        {
            $data['inputerror'][] = 'add_PD_NAME';
            $data['error_string'][] = 'ODP Name masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_STO') == '')
        {
            $data['inputerror'][] = 'add_STO';
            $data['error_string'][] = 'STO masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_MATERIAL') == '')
        {
            $data['inputerror'][] = 'add_MATERIAL';
            $data['error_string'][] = 'Material masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_PIC_BENJAR') == '')
        {
            $data['inputerror'][] = 'add_PIC_BENJAR';
            $data['error_string'][] = 'PIC Benjar masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_STATUS') == '')
        {
            $data['inputerror'][] = 'add_STATUS';
            $data['error_string'][] = 'Status masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_DESKRIPSI') == '')
        {
            $data['inputerror'][] = 'add_DESKRIPSI';
            $data['error_string'][] = 'Deskripsi masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_PELAKSANAAN') == '')
        {
            $data['inputerror'][] = 'add_PELAKSANAAN';
            $data['error_string'][] = 'Pelaksanaan masih kosong';
            $data['status'] = FALSE;
        }

        if($this->input->post('add_EST_BIAYA') == '')
        {
            $data['inputerror'][] = 'add_EST_BIAYA';
            $data['error_string'][] = 'Estimasi biaya masih kosong';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    public function upload_customer()
    {
        $x = $this->m_teknisi->upload_customer_csv();
        return $x;
    }

    public function upload_sampledata()
    {
        $x = $this->m_teknisi->upload_sampledata_csv();
        return $x;
    }

		public function upload_sampledataaku()
    {
        $y = $this->m_teknisi->upload_sampledataaku_csv();
        return $y;
    }

    public function ajax_get_csv()
    {
        $data = $this->m_teknisi->get_data_csv();
        $this->m_teknisi->rubah_data_csv();
        echo json_encode($data);
    }

    public function upload_file1()
    {
        $status = "";
        $msg = "";
        $file_element_name = 'userfile2';

        if ($status != "error")
        {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $file_id = $this->m_teknisi->insert_filedp($data['file_name'], $_POST['dp'], $_POST['sto']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }

    public function upload_file()
    {
        $status = "";
        $msg = "";
        $file_element_name = 'userfile1';

        if ($status != "error")
        {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $file_id = $this->m_teknisi->insert_file($data['file_name'], $_POST['PD_NAME']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }

    public function ajax_list_mapsDP()
    {
        $list = $this->m_teknisi->get_datatables_mapsDP();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $user) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user->SERVICE_NUMBER;
            $row[] = $user->SERVICE_TYPE;
            $row[] = $user->SERVICE_ADMINSTATE;
            $row[] = $user->SERVICE_PARTY_NAME;
            $row[] = $user->ADDRESS;
            $row[] = $user->STP_TARGET;
            $row[] = $user->DP_NAME;
            $row[] = $user->PACKAGE_NAME;
            $row[] = $user->UPLOAD_SPEED;
            $row[] = $user->DOWNLOAD_SPEED;
            $row[] = $user->VOICE_SWITCH;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_teknisi->count_all_mapsDP(),
                        "recordsFiltered" => $this->m_teknisi->count_filtered_mapsDP(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

	function ExportCSVaku()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "odp_by_akupansi.csv";
				$query = "SELECT * FROM odp_aku WHERE 1";
	      $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
				if ($result) {
					echo json_encode(TRUE);
				}
				else {
					echo json_encode(FALSE);
				}
    }

    public function ajax_list_maps()
    {
        $list = $this->m_teknisi->get_datatables_maps();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $user) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user->ND;
            $row[] = $user->ND_REF;
            $row[] = $user->IPTV;
            $row[] = $user->NAMA;
            $row[] = $user->RP_TAGIHAN;
            $row[] = $user->RP_TAGIHAN_INET;
            $row[] = $user->ALAMAT;
            $row[] = $user->STP_TARGET;
            $row[] = $user->CPE_SN;
            $row[] = $user->RP_TOTAL;
            if($this->input->post('role') != 'Teknisi'){
                $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_cust('."'".$user->ND."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                      <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_cust('."'".$user->ND."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            }
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_teknisi->count_all_maps(),
                        "recordsFiltered" => $this->m_teknisi->count_filtered_maps(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
}
