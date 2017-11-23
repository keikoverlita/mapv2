<?php
class M_teknisi extends CI_Model
{
    //====================================================================================================
    var $table_user = 'user';
    var $column_order_user = array('role','username','password','nama','kontak',null); //set column field database for datatable orderable
    var $column_search_user = array('username','nama','kontak','role'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order_user = array('id_user' => 'asc'); // default order

    private function _get_datatables_query_user()
    {

        $this->db->from($this->table_user);

        $i = 0;

        foreach ($this->column_search_user as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search_user) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order_user[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order_user))
        {
            $order_user = $this->order_user;
            $this->db->order_by(key($order_user), $order_user[key($order_user)]);
        }
    }

    function get_datatables_user()
    {
        $this->_get_datatables_query_user();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_user()
    {
        $this->_get_datatables_query_user();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_user()
    {
        $this->db->from($this->table_user);
        return $this->db->count_all_results();
    }

    public function get_by_nd($nd)
    {
        $this->db->from("master_maps");
        $this->db->where('ND',$nd);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_by_id_user($id_user)
    {
        $this->db->from($this->table_user);
        $this->db->where('id_user',$id_user);
        $query = $this->db->get();

        return $query->row();
    }

    public function delete_by_nd($nd)
    {
        $this->db->where('ND', $nd);
        $this->db->delete("master_maps");
    }

    public function delete_by_id_user($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete($this->table_user);
    }

    function get_nd($values) {
        $this->db->select('ND');
        $this->db->where('ND',$values);
        $query = $this->db->get($this->table_maps);
        if($query->num_rows() >0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    function get_username($values) {
        $this->db->select('username');
        $this->db->where('username',$values);
        $query = $this->db->get('user');
        if($query->num_rows() >0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function save_user($data)
    {
        $this->db->insert($this->table_user, $data);
        return $this->db->insert_id();
    }

    public function update_cust($where, $data)
    {
        $this->db->update($this->table_maps, $data, $where);
        return $this->db->affected_rows();
    }

    public function update_user($where, $data)
    {
        $this->db->update($this->table_user, $data, $where);
        return $this->db->affected_rows();
    }

    function get_data_csv(){
        $return = array();
        $this->db->from("odp_stat");
        $this->db->where('CSV',$this->input->get('csv'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function get_nd_odp(){
        $return = array();
        $this->db->from("master_maps");
        $this->db->where("ND",$this->input->get('nd'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $val = $row->STP_TARGET;
                $this->db->from("odp_aku");
                $this->db->where('PD_NAME',$val);
                $this->db->or_where('ODP_NAME',$val);
                $query = $this->db->get();
                if ($query->num_rows()>0) {
                    foreach ($query->result() as $row) {
                        array_push($return, $row);
                    }
                }
            }
        }
        return $return;
    }

    public function get_nd_dp(){
        $return = array();
        $this->db->from("master");
        $this->db->where('SERVICE_NUMBER',$this->input->get('nd'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $val1 = $row->DP_NAME;
                $val2 = $row->STO;
                $this->db->from("dp");
                $this->db->where('DP',$val1);
                $this->db->where('STO',$val2);
                $query = $this->db->get();
                if ($query->num_rows()>0) {
                    foreach ($query->result() as $row) {
                        array_push($return, $row);
                    }
                }
            }
        }
        return $return;
    }

    function upload_sampledata_csv() {
        $fp = fopen($_FILES['file1']['tmp_name'],'r');
        if($fp){
            while($csv_line = fgetcsv($fp,20000,","))
                {
                    for ($i = 0, $j = count($csv_line); $i < $j; $i++)
                    {
                        $insert_csv = array();
                        $insert_csv['STO'] = $csv_line[0];
                        $insert_csv['ALPRO'] = $csv_line[1];
                        $insert_csv['STATUS'] = $csv_line[2];
                        $insert_csv['PIC_BENJAR'] = $csv_line[3];
                        $insert_csv['DESKRIPSI'] = $csv_line[4];
                        $insert_csv['MATERIAL'] = $csv_line[5];
                        $insert_csv['PELAKSANAAN'] = $csv_line[6];
                    }
                    $this->db->where('PD_NAME', $insert_csv['ALPRO']);
                    $this->db->or_where('ODP_NAME', $insert_csv['ALPRO']);
                    $x = $this->db->get('odp_stat');
                    if($x->num_rows() > 0)
                    {
                        $data = array(
                            'STO' => $insert_csv['STO'],
                            'STATUS' => $insert_csv['STATUS'],
                            'PIC_BENJAR' => $insert_csv['PIC_BENJAR'],
                            'DESKRIPSI' => $insert_csv['DESKRIPSI'],
                            'MATERIAL' => $insert_csv['MATERIAL'],
                            'PELAKSANAAN' => $insert_csv['PELAKSANAAN'],
                            'CSV' => '1'
                        );
                        $this->db->where('PD_NAME', $insert_csv['ALPRO']);
                        $this->db->or_where('ODP_NAME', $insert_csv['ALPRO']);
                        $data['crane_features']=$this->db->update('odp_stat', $data);
                        if($data['crane_features'])
                        {
                            $data['success']="success";
                        }
                        else
                        {
                            $data['success']="error";
                        }
                    }
                }
            fclose($fp) or die("can't close file");
            if($data['success'] == "success")
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    function upload_sampledataaku_csv() {
        $fp = fopen($_FILES['file3']['tmp_name'],'r');
        if($fp){
            while($csv_line = fgetcsv($fp,20000,","))
                {
                    for ($i = 0, $j = count($csv_line); $i < $j; $i++)
                    {
                        $insert_csv = array();
                        $insert_csv['STO'] = $csv_line[0];
                        $insert_csv['PD_NAME'] = $csv_line[1];
                        $insert_csv['ODP_NAME'] = $csv_line[2];
                        $insert_csv['ODP_INDEX'] = $csv_line[3];
                        $insert_csv['F_OLT'] = $csv_line[4];
                        $insert_csv['QR_CODE_ODP'] = $csv_line[5];
                        $insert_csv['STATUS_ODP'] = $csv_line[6];
                        $insert_csv['TIPE_GPON'] = $csv_line[7];
                        $insert_csv['IP_GPON'] = $csv_line[8];
                        $insert_csv['PORT_GPON'] = $csv_line[9];
                        $insert_csv['LATITUDE'] = $csv_line[10];
                        $insert_csv['LONGITUDE'] = $csv_line[11];
                        $insert_csv['IS_AVAIL'] = $csv_line[12];
                        $insert_csv['IS_SERVICE'] = $csv_line[13];
                        $insert_csv['IS_TOTAL'] = $csv_line[14];
                        $insert_csv['KETERANGAN'] = $csv_line[15];
                        $insert_csv['UPDATE_DATE'] = $csv_line[16];
                    }
                    $this->db->where('ODP_NAME', $insert_csv['ODP_NAME']);
                    $x = $this->db->get('odp_aku');
                    if($x->num_rows() > 0)
                    {
                        date_default_timezone_set('Asia/Hong_Kong');
                        $data = array(
                            'STO' => $insert_csv['STO'],
                            'PD_NAME' => $insert_csv['PD_NAME'],
                            'ODP_NAME' => $insert_csv['ODP_NAME'],
                            'ODP_INDEX' => $insert_csv['ODP_INDEX'],
                            'F_OLT' => $insert_csv['F_OLT'],
                            'QR_CODE_ODP' => $insert_csv['QR_CODE_ODP'],
                            'STATUS_ODP' => $insert_csv['STATUS_ODP'],
                            'TIPE_GPON' => $insert_csv['TIPE_GPON'],
                            'IP_GPON' => $insert_csv['IP_GPON'],
                            'PORT_GPON' => $insert_csv['PORT_GPON'],
                            'LATITUDE' => $insert_csv['LATITUDE'],
                            'LONGITUDE' => $insert_csv['LONGITUDE'],
                            'IS_AVAIL' => $insert_csv['IS_AVAIL'],
                            'IS_SERVICE' => $insert_csv['IS_SERVICE'],
                            'IS_TOTAL' => $insert_csv['IS_TOTAL'],
                            'KETERANGAN' => $insert_csv['KETERANGAN'],
                            'UPDATE_DATE' => date('m/d/Y H:i'),
                        );
                        $this->db->where('ODP_NAME', $insert_csv['ODP_NAME']);
                        $data['crane_features']=$this->db->update('odp_aku', $data);
                        if($data['crane_features'])
                        {
                            $data['success']="success";
                        }
                        else
                        {
                            $data['success']="error";
                        }
                    }
                }
            fclose($fp) or die("can't close file");
            if($data['success'] == "success")
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    function upload_customer_csv() {
        $fp = fopen($_FILES['file2']['tmp_name'],'r');
        if($fp){
            while($csv_line = fgetcsv($fp,1024,","))
                {
                    for ($i = 0, $j = count($csv_line); $i < $j; $i++)
                    {
                        $insert_csv = array();
                        $insert_csv['ND'] = $csv_line[0];
                        $insert_csv['CPE_SN'] = $csv_line[1];
                    }
                    $this->db->where('ND', $insert_csv['ND']);
                    $x = $this->db->get('master_maps');
                    if($x->num_rows() == 0)
                    {
                        $data = array(
                            'CPE_SN' => $insert_csv['CPE_SN']
                        );
                        $data['crane_features']=$this->db->update('master_maps', $data);
                    }
                    if($data['crane_features'])
                    {
                        $data['success']="success";
                    }
                    else
                    {
                        $data['success']="error";
                    }
                }
            fclose($fp) or die("can't close file");
            if($data['success'] == "success")
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    public function cari_sto_clus(){
        $this->db->distinct();
        $this->db->select('STO');
        return $this->db->get('odc')->result();
    }

    public function cari_sto_clus_polygon(){
        $this->db->distinct();
        $this->db->select('STO');
        return $this->db->get('cluster')->result();
    }

    public function cari_sto_dp(){
        $this->db->distinct();
        $this->db->select('STO');
        return $this->db->get('dp')->result();
    }

    public function cari_sto_odp(){
        $this->db->distinct();
        $this->db->select('STO');
        return $this->db->get('odp_stat')->result();
    }

    public function get_dp(){
        $return = array();
        $this->db->from("dp");
        $this->db->where('DP',$this->input->get('dp'));
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function distance($lat1, $lon1, $lat2, $lon2) {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $kilo = $dist * 60 * 1.1515 * 1.609344;
        return $kilo;
    }

    public function get_koor_odp_clu_polygon(){
        $return = array();
        $this->db->from("odp_aku");
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        $_odp= array();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              array_push($_odp,$row);
            }
        }
        return $_odp;
    }

    public function get_koor_dp_clu_polygon(){
        $return = array();
        $this->db->from("dp");
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        $_dp= array();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              array_push($_dp,$row);
            }
        }
        return $_dp;
    }

    public function get_koor_odc_clu_polygon(){
        $return = array();
        $this->db->from("odc");
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        $_odc= array();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              array_push($_odc,$row);
            }
        }
        return $_odc;
    }

    public function get_koor_msan_clu_polygon(){
        $return = array();
        $this->db->from("msan");
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        $_msan= array();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              array_push($_msan,$row);
            }
        }
        return $_msan;
    }

    public function get_koor_onu_clu_polygon(){
        $return = array();
        $this->db->from("onu");
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        $_onu= array();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              array_push($_onu,$row);
            }
        }
        return $_onu;
    }

    public function get_koor_rk_clu_polygon(){
        $return = array();
        $this->db->from("rk");
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        $_rk= array();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              array_push($_rk,$row);
            }
        }
        return $_rk;
    }

    public function get_koor_odp_clu(){
        $return = array();
        $this->db->from("odc");
        $this->db->where('STO',$this->input->get('sto'));
        $this->db->where('NAME',$this->input->get('odc'));
        $this->db->where('ALAMAT',$this->input->get('alamat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat2 = $row->LATITUDE;
                $lon2 = $row->LONGITUDE;
            }
        }
        $this->db->from("odp_aku");
        $query2 = $this->db->get();
        if ($query2->num_rows()>0) {
            foreach ($query2->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.4){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_dp_clu(){
        $return = array();
        $this->db->from("odc");
        $this->db->where("STO",$this->input->get('sto'));
        $this->db->where("NAME",$this->input->get('odc'));
        $this->db->where("ALAMAT",$this->input->get('alamat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat2 = $row->LATITUDE;
                $lon2 = $row->LONGITUDE;
            }
        }
        $this->db->from("dp");
        $query2 = $this->db->get();
        if ($query2->num_rows()>0) {
            foreach ($query2->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.4){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_msan_clu(){
        $return = array();
        $this->db->from("odc");
        $this->db->where("STO",$this->input->get('sto'));
        $this->db->where("NAME",$this->input->get('odc'));
        $this->db->where("ALAMAT",$this->input->get('alamat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat2 = $row->LATITUDE;
                $lon2 = $row->LONGITUDE;
            }
        }
        $this->db->from("msan");
        $query2 = $this->db->get();
        if ($query2->num_rows()>0) {
            foreach ($query2->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.4){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_onu_clu(){
        $return = array();
        $this->db->from("odc");
        $this->db->where("STO",$this->input->get('sto'));
        $this->db->where("NAME",$this->input->get('odc'));
        $this->db->where("ALAMAT",$this->input->get('alamat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat2 = $row->LATITUDE;
                $lon2 = $row->LONGITUDE;
            }
        }
        $this->db->from("onu");
        $query2 = $this->db->get();
        if ($query2->num_rows()>0) {
            foreach ($query2->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.4){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_rk_clu(){
        $return = array();
        $this->db->from("odc");
        $this->db->where("STO",$this->input->get('sto'));
        $this->db->where("NAME",$this->input->get('odc'));
        $this->db->where("ALAMAT",$this->input->get('alamat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat2 = $row->LATITUDE;
                $lon2 = $row->LONGITUDE;
            }
        }
        $this->db->from("rk");
        $query2 = $this->db->get();
        if ($query2->num_rows()>0) {
            foreach ($query2->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.4){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_odc_clu(){
        $return = array();
        $this->db->from("odc");
        $this->db->where("STO",$this->input->get('sto'));
        $this->db->where("NAME",$this->input->get('odc'));
        $this->db->where("ALAMAT",$this->input->get('alamat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat2 = $row->LATITUDE;
                $lon2 = $row->LONGITUDE;
            }
        }
        $this->db->from("odc");
        $query2 = $this->db->get();
        if ($query2->num_rows()>0) {
            foreach ($query2->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.4){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_odp(){
        $return = array();
        $lat2 = $this->input->get('lat');
        $lon2 = $this->input->get('lng');
        $this->db->from("odp_aku");
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.25){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_koor_dp(){
        $return = array();
        $lat2 = $this->input->get('lat');
        $lon2 = $this->input->get('lng');
        $this->db->from("dp");
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.25){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_alpro(){
        $return = array();
        $lat2 = $this->input->get('lat');
        $lon2 = $this->input->get('lng');
        $this->db->from("odp_aku");
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.25){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_alpro_dp(){
        $return = array();
        $lat2 = $this->input->get('lat');
        $lon2 = $this->input->get('lng');
        $this->db->from("dp");
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $lat1 = $row->LATITUDE;
                $lon1 = $row->LONGITUDE;
                if($this->distance($lat1, $lon1, $lat2, $lon2) < 0.25){
                    array_push($return, $row);
                }
            }
        }
        return $return;
    }

    public function get_odp(){
        $return = array();
        $a = $this->input->get('sto');
        $b = $this->input->get('odp');
        $c = 'ODP-'.$a.'-'.$b;
        $this->db->from("odp_aku");
        $this->db->where('PD_NAME',$c);
        $this->db->or_where('ODP_NAME',$c);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function refresh_dp(){
        $return = array();
        $this->db->from("dp");
        $this->db->where('STO',$this->input->get('sto'));
        $this->db->where('DP',$this->input->get('dp'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function refresh_odp_aku(){
        $return = array();
        $this->db->from("odp_aku");
        $this->db->where('PD_NAME',$this->input->get('pd'));
        $this->db->or_where('ODP_NAME',$this->input->get('pd'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function refresh_odp(){
        $return = array();
        $this->db->from("odp_stat");
        $this->db->where('PD_NAME',$this->input->get('pd'));
        $this->db->or_where('ODP_NAME',$this->input->get('pd'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function get_odp_aku(){
        $return = array();
        $this->db->from("odp_aku");
        $this->db->where('STO',$this->input->get('sto'));
        $this->db->where('KETERANGAN',$this->input->get('odp_aku'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function get_dp_stat(){
        $return = array();
        $this->db->from("dp");
        $this->db->where('STO',$this->input->get('sto'));
        $this->db->where('STATUS',$this->input->get('dp'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function get_dp_oth(){
        $return = array();
        $this->db->from("dp");
        $where = "STATUS != 'NORMAL' AND STATUS != 'PENUH' AND STATUS != 'LOSS/REDAMAN TINGGI' AND STATUS != 'CLOSED' AND STATUS != 'ON PROGRESS'";
        $this->db->where($where);
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function get_odp_stat(){
        $return = array();
        $this->db->from("odp_stat");
        $this->db->where('STO',$this->input->get('sto'));
        $this->db->where('STATUS',$this->input->get('odp_stat'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    public function get_odp_oth(){
        $return = array();
        $this->db->from("odp_stat");
        $where = "STATUS != 'NORMAL' AND STATUS != 'PENUH' AND STATUS != 'LOSS/REDAMAN TINGGI' AND STATUS != 'CLOSED' AND STATUS != 'ON PROGRESS'";
        $this->db->where($where);
        $this->db->where('STO',$this->input->get('sto'));
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }

    function get_odpname_aku($values) {
        $this->db->select('ODP_NAME');
        $this->db->where('ODP_NAME',$values);
        $query = $this->db->get('odp_aku');
        if($query->num_rows() > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    function get_odpname($values) {
        $this->db->select('ODP_NAME');
        $this->db->where('ODP_NAME',$values);
        $query = $this->db->get('odp_stat');
        if($query->num_rows() > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    function get_rp_total(){
      $stp_target = $this->input->post('stp_target');
      $where='STP_TARGET= "'.$stp_target[0].'"';
      for ($i=1; $i < sizeof($stp_target); $i++) {
        $where.=' OR STP_TARGET= "'.$stp_target[$i].'"';
      }
      $this->db->select_sum('RP_TOTAL');
      $this->db->where($where);
      $this->db->from('master_maps');
      $query = $this->db->get();
      return $query->result();
    }

    function get_pdname_aku($values) {
        $this->db->select('PD_NAME');
        $this->db->where('PD_NAME',$values);
        $query = $this->db->get('odp_aku');
        if($query->num_rows() > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    function get_pdname($values) {
        $this->db->select('PD_NAME');
        $this->db->where('PD_NAME',$values);
        $query = $this->db->get('odp_stat');
        if($query->num_rows() > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function add_dp($data)
    {
        $this->db->where('DP', $this->input->post('dp'));
        $this->db->where('STO', $this->input->post('sto'));
        $this->db->insert("dp",$data);
    }

    public function add_odp_aku($data)
    {
        $this->db->where('PD_NAME', $this->input->post('add_PD_NAME'));
        $this->db->insert("odp_aku",$data);
    }

    public function add_odp($data)
    {
        $this->db->where('PD_NAME', $this->input->post('add_PD_NAME'));
        $this->db->insert("odp_stat",$data);
    }

    public function delete_dp()
    {
        $this->db->where('STO', $this->input->post('sto'));
        $this->db->where('DP', $this->input->post('dp'));
        $this->db->delete("dp");
    }

    public function delete_odp()
    {
        $this->db->where('PD_NAME', $this->input->post('odp'));
        $this->db->delete("odp_stat");
    }

    function get_polygon(){
      $this->db->where('STO',$this->input->get('sto'));
      $this->db->where('NAME',$this->input->get('name'));
      $query = $this->db->get('cluster');
      $_polygon=array();
      if ($query->num_rows()>0) {
        foreach ($query->result() as $row) {
          array_push($_polygon,$row);
        }
      }
      return $_polygon;
    }

    function get_polygon_by_sto($values) {
            $this->db->distinct();
            $this->db->select('NAME');
            $this->db->where('STO',$values);
            $res = $this->db->get('cluster');
            return $res->result();
    }

    function get_odc_by_sto($values) {
            $this->db->distinct();
            $this->db->select('NAME');
            $this->db->where('STO',$values);
            $res = $this->db->get('odc');
            return $res->result();
    }

    function get_clus_by_odc($odc,$sto) {
            $this->db->distinct();
            $this->db->select('ALAMAT');
            $this->db->where('NAME',$odc);
            $this->db->where('STO',$sto);
            $res = $this->db->get('odc');
            return $res->result();
    }

    public function update_dp($data)
    {
        $a = $this->input->post('DP');
        $b = $this->input->post('STO_DP');
        $this->db->where('DP',$a);
        $this->db->where('STO',$b);
        $this->db->update("dp", $data);
        return $this->db->affected_rows();
    }

    public function update_odp($where, $data)
    {
        $this->db->update("odp_stat", $data, $where);
        return $this->db->affected_rows();
    }

    public function update_odp_aku($where, $data)
    {
        $this->db->update("odp_aku", $data, $where);
        return $this->db->affected_rows();
    }

    public function insert_filedp($filename, $dp, $sto)
    {
        $data = array(
            'IMAGES'        => $filename,
        );
        $this->db->where('DP', $dp);
        $this->db->where('STO', $sto);
        $a = $this->db->update('dp', $data);
        if($a){
            return true;
        }
    }

    public function insert_file($filename, $pdname)
    {
        $data = array(
            'IMAGES'        => $filename,
        );
        $this->db->where('PD_NAME', $pdname);
        $a = $this->db->update('odp_stat', $data);
        $this->db->where('PD_NAME', $pdname);
        $b = $this->db->update('odp_aku', $data);
        if(($a)&&($b)){
            return true;
        }
    }
    //============================================================================================================//
    var $table_mapsDP = 'master';
    var $column_order_mapsDP = array('SERVICE_NUMBER','SERVICE_TYPE','SERVICE_ADMINSTATE','SERVICE_PARTY_NAME','ADDRESS','STP_TARGET','DP_NAME','PACKAGE_NAME','UPLOAD_SPEED','DOWNLOAD_SPEED','VOICE_SWITCH'); //set column field database for datatable orderable
    var $column_search_mapsDP = array('SERVICE_NUMBER','SERVICE_TYPE','SERVICE_ADMINSTATE','SERVICE_PARTY_NAME','ADDRESS','STP_TARGET','DP_NAME','PACKAGE_NAME','UPLOAD_SPEED','DOWNLOAD_SPEED','VOICE_SWITCH'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order_mapsDP = array('SERVICE_NUMBER' => 'asc'); // default order

    private function _get_datatables_query_mapsDP()
    {
        $this->db->from($this->table_mapsDP);
        $a = $this->input->post('dp');
        $b = $this->input->post('sto');
        $this->db->where('DP_NAME',$a);
        $this->db->where('STO',$b);

        $i = 0;

        foreach ($this->column_search_mapsDP as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search_mapsDP) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order_mapsDP[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order_mapsDP))
        {
            $order_mapsDP = $this->order_mapsDP;
            $this->db->order_by(key($order_mapsDP), $order_mapsDP[key($order_mapsDP)]);
        }
    }

    function get_datatables_mapsDP()
    {
        $this->_get_datatables_query_mapsDP();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_all_mapsDP()
    {
        $this->db->from($this->table_mapsDP);
        return $this->db->count_all_results();
    }

    function count_filtered_mapsDP()
    {
        $this->_get_datatables_query_mapsDP();
        $query = $this->db->get();
        return $query->num_rows();
    }

    //============================================================================================================//
	var $table_maps = 'master_maps';
    var $table_odp = 'odp';
    var $column_order_maps = array('ND','ND_REF','IPTV','NAMA','RP_TAGIHAN','RP_TAGIHAN_INET','ALAMAT','STP_TARGET','CPE_SN','RP_TOTAL'); //set column field database for datatable orderable
    var $column_search_maps = array('ND','ND_REF','IPTV','NAMA','RP_TAGIHAN','RP_TAGIHAN_INET','ALAMAT','STP_TARGET','CPE_SN','RP_TOTAL'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order_maps = array('ND' => 'asc'); // default order

    private function _get_datatables_query_maps()
    {

        $this->db->from($this->table_maps);
        $a = $this->input->post('odp_name');
        $b = $this->input->post('pd_name');
        $this->db->where('STP_TARGET',$a);
        $this->db->or_where('STP_TARGET',$b);

        $i = 0;

        foreach ($this->column_search_maps as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search_maps) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order_maps[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order_maps))
        {
            $order_maps = $this->order_maps;
            $this->db->order_by(key($order_maps), $order_maps[key($order_maps)]);
        }
    }

    function get_datatables_maps()
    {
        $this->_get_datatables_query_maps();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    private function _get_datatables_query_maps_polygon()
    {
        $stp_target = $this->input->post('stp_target');
        $this->db->from('master_maps');
        $where='STP_TARGET= "'.$stp_target[0].'"';
        for ($i=1; $i < sizeof($stp_target); $i++) {
          $where.=' OR STP_TARGET= "'.$stp_target[$i].'"';
        }
        $this->db->where($where);
        $i = 0;

        foreach ($this->column_search_maps as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search_maps) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order_maps[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order_maps))
        {
            $order_maps = $this->order_maps;
            $this->db->order_by(key($order_maps), $order_maps[key($order_maps)]);
        }
    }

    function get_datatables_maps_polygon()
    {
        $this->_get_datatables_query_maps_polygon();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_all_maps_polygon()
    {
        $this->db->from($this->table_maps);
        return $this->db->count_all_results();
    }

    function count_filtered_maps_polygon()
    {
        $this->_get_datatables_query_maps_polygon();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_maps()
    {
        $this->db->from($this->table_maps);
        return $this->db->count_all_results();
    }

    function count_filtered_maps()
    {
        $this->_get_datatables_query_maps();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function rubah_data_csv()
    {
        $data = array(
            'CSV' => '0'
        );
        $this->db->where('CSV',1);
        $this->db->update('odp_stat',$data);
    }


}
?>
