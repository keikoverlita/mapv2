<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps {
    var $name="Search Engine Alat Produksi Akses";
    var $page_header="Search Engine Alat Produksi Akses";
    var $title="SEE ACCESS";
    var $release="Version Development";
    var $ver="Version 2.4.0";
    var $modname="";
    var $moddesc="";
    var $copyright = 'SEE ACCESS &copy; 2017';
    var $statnav="development";
    
    public function __construct(){

    }
        
    public function modulname() {
        return $this->modname;
    }
    
    public function moduldesc() {
        return $this->moddesc;
    }
    
    public function titlepage($param) {
        return $param;
    }
    
    public function modulsource($param) {
        return $param;
    }
    
    public function idmenu($param) {
        return $param;
    }
    
    public function namamenu($param) {
        return $param;
    }
}