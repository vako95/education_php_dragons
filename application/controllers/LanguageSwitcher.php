<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LanguageSwitcher extends CI_Controller
{
    public function __construct() {
        parent::__construct();     
    }
 
    function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "azerbaijan";

        $folder_langs = [
            'azerbaijan',
            'english',
            'russian',
        ];
        if( in_array( $language ,$folder_langs))
        {
            $this->session->set_userdata('site_lang', $language);
        }else{
            $this->session->set_userdata('site_lang', 'azerbaijan');
        }
         redirect($_SERVER['HTTP_REFERER']);
        
    }
}