<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

    public function studentAdd()
    {
        $submit = $this->input->post('submit', TRUE);
        if ($submit == "Submit") {
            $data['NAME'] = $this->input->post('name', TRUE);
            $data['FNAME'] = $this->input->post('father', TRUE);
            $data['CONTACT'] = $this->input->post('phone', TRUE);
            $data['ROLL'] = $this->input->post('roll', TRUE);
            $data['ACCOUNT']=$this->input->post('acc',TRUE);
            $data['CLASS'] = $this->input->post('class', TRUE);
            $data['ADDRESS'] = $this->input->post('address', TRUE);
            $data['ACADFEE'] = "No fee submitted yet";
            $data['CONVFEE'] = "No fee submitted yet";
            $data['RECEIPT_ACAD'] = "";
            $data['RECEIPT_CONV'] = "";
            $q = $this->input->post('conv', TRUE);
            if ($q=="1"){
                $data['CONVEYANCE']="Available";
            }
            else{
                $data['CONVEYANCE']="Not Available";
            }
            $this->_insert($data);
        }

        $this->ips_admin();
    }
    public function ips_admin()
    {
        $this->load->view('navbar');
        $this->load->view('studReg.php');
    }
    public function search(){
        $this->load->view('navbar');
        $this->load->view('search');
    }

    public function home(){
        $this->load->view('webnav');
        $this->load->view('home');
        $this->load->view('webfooter');
    }
    public function services(){
        $this->load->view('webnav');
        $this->load->view('services');
        $this->load->view('webfooter');
    }
    public function events(){
        $this->load->view('webnav');
        $this->load->view('events');
        $this->load->view('webfooter');
    }
    public function gallery(){
        $this->load->view('webnav');
        $this->load->view('gallery');
        $this->load->view('webfooter');
    }
    public function mail(){
        $this->load->view('webnav');
        $this->load->view('mail');
        $this->load->view('webfooter');
    }
//    public function short_codes(){
//        $this->load->view('webnav');
//        $this->load->view('short_codes');
//        $this->load->view('webfooter');
//        }

    public function single(){
        $this->load->view('webnav');
        $this->load->view('single');
        $this->load->view('webfooter');
    }


    public function unpaidList(){
        $list=array();
        $query = "select * from students";
        $return = $this->_custom_query($query);
        foreach ($return->result() as $k){
            $tst=$k->ACADFEE;
            if($tst != NULL && $tst!="No fee submitted yet") {
                $date1 = date_create("30-" . $tst);
                $date2 = date_create("now");
                $diff = date_diff($date1, $date2);
                $result = $diff->m;
                if ($result>3){
                    array_push($list, $k->id);
                }
            }
        }
        if (sizeof($list)>0) {
            $sql = 'SELECT * FROM `students` WHERE `id` IN (' . implode(',', array_map('intval', $list)) . ')';
            $return = $this->_custom_query($sql);
        }
        else{
            $return=array((object)array('NAME'=>'','FNAME'=>'','CLASS'=>'','CONTACT'=>'','ACADFEE'=>'','CONVFEE'=>'',));
        }
        $data['return']=$return;
//      echo "<pre>";print_r($return->result());
        $this->load->view('navbar');
        $this->load->view('unpaidFee',$data);
    }



    public function unpaidListTwo(){
        $list=array();
        $query = "select * from students";
        $return = $this->_custom_query($query);
        foreach ($return->result() as $k){
            $tst=$k->ACADFEE;
            if($tst != NULL && $tst!="No fee submitted yet") {
                $date1 = date_create("30-" . $tst);
                $date2 = date_create("now");
                $diff = date_diff($date1, $date2);
                $result = $diff->m;
                if ($result>2){
                    array_push($list, $k->id);
                }
            }
        }
        if (sizeof($list)>0) {
            $sql = 'SELECT * FROM `students` WHERE `id` IN (' . implode(',', array_map('intval', $list)) . ')';
            $return = $this->_custom_query($sql);
        }
        else{
            $return=array((object)array('NAME'=>'','FNAME'=>'','CLASS'=>'','CONTACT'=>'','ACADFEE'=>'','CONVFEE'=>'',));
        }
        $data['return']=$return;
//      echo "<pre>";print_r($return->result());
        $this->load->view('navbar');
        $this->load->view('unpaidFee',$data);
    }


    public function updateConvFee(){
        $submit=$this->input->post('submit',TRUE);
        if ($submit=="Submit"){
            $mon=$this->input->post('mon');
            $year=$this->input->post('year');
            $acadDate=$mon."-".$year;
            $account=$this->input->post('acc',TRUE);
            $rec=$this->input->post('rec',TRUE);
            $data['ACCOUNT'] = $account;
            $data['CONVFEE'] = $acadDate;
            $data['RECEIPT_CONV'] = $rec;
            $query = "UPDATE students SET CONVFEE='".$acadDate."',RECEIPT_CONV='".$rec."' WHERE ACCOUNT='".$account."'";
            $this->_custom_query($query);
            $this->Passbook_model->insert($data);
            echo "<script language=\"javascript\">alert('Fee updated Successfully');</script>";
            $this->ips_admin();
        }
    }

    public function updateFee(){
        $submit=$this->input->post('submit',TRUE);
        if ($submit=="Submit"){
            $mon=$this->input->post('mon');
            $year=$this->input->post('year');
            $acadDate=$mon."-".$year;
            $account=$this->input->post('acc',TRUE);
            $rec=$this->input->post('rec',TRUE);
            $data['ACCOUNT'] = $account;
            $data['ACADFEE'] = $acadDate;
            $data['RECEIPT_ACAD'] = $rec;
            $query = "UPDATE students SET ACADFEE='".$acadDate."',RECEIPT_ACAD='".$rec."' WHERE ACCOUNT='".$account."'";
            $this->_custom_query($query);
           $this->Passbook_model->insert($data);
            echo "<script language=\"javascript\">alert('Fee updated Successfully');</script>";
            $this->ips_admin();
        }
    }

    public function findStudentClass()
    {
        $submit=$this->input->post('submit',TRUE);
        if($submit== "Search by Class")
        {
            $class=$this->input->post('class',TRUE);
            $query = "select * from students  where CLASS='".$class."'";
            $return = $this->_custom_query($query);
            $data['return']=$return;
//      echo "<pre>";print_r($return->result());
            $this->load->view('navbar');
            $this->load->view('unpaidFee',$data);
        }
    }
    public function passbook()
    {
            $account=$this->input->post('acc',TRUE);
            $query = "select * from passbook  where ACCOUNT='".$account."'";
            $return = $this->_custom_query($query);
            $data['return']=$return;
//      echo "<pre>";print_r($return->result());
            $this->load->view('navbar');
            $this->load->view('passbook',$data);
    }
        public function findStudent()
    {
        $submit=$this->input->post('submit',TRUE);
        if($submit== "Search by Account Number")
        {
            $account=$this->input->post('acc',TRUE);
            $query = "select * from students where ACCOUNT = '$account'";
            $return = $this->_custom_query($query);
            if (sizeof($return->result())>0) {
              /*  foreach ($return->result() as $row) {
                    $data['id'] = $row->id;
                    $data['NAME'] = $row->NAME;
                    $data['FNAME'] = $row->FNAME;
                    $data['CONTACT'] = $row->CONTACT;
                    $data['ROLL'] = $row->ROLL;
                    $data['ACCOUNT']=$row->ACCOUNT;
                    $data['CLASS'] = $row->CLASS;
                    $data['ADDRESS'] = $row->ADDRESS;
                    $data['ACADFEE'] = $row->ACADFEE;
                    $data['CONVFEE'] = $row->CONVFEE;
                    $data['RECEIPT_ACAD'] = $row->RECEIPT_ACAD;
                    $data['RECEIPT_CONV'] = $row->RECEIPT_CONV;
                    $data['CONVEYANCE'] = $row->CONVEYANCE;

                }*/
                $data['return']=$return;
                $this->load->view('navbar');
                $this->load->view('studentView', $data);
            }
            else{
                echo "<script language=\"javascript\">alert('No such Account Number Exist');</script>";
                $this->load->view('navbar');
                $this->load->view('search');
            }
        }
    }
    function _custom_query($mysql_query)
    {
        $this->load->model('User_model');
        $query = $this->User_model->_custom_query($mysql_query);
        return $query;
    }
    function _insert($data)
    {
        $this->load->model('User_model');
        $this->User_model->_insert($data);
    }
    function get_where($id)
    {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('User_model');
        $query = $this->User_model->get_where($id);
        return $query;
    }
}
