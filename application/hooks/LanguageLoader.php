<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');

        if ($siteLang == 'azerbaijan') {
            $ci->session->set_userdata('lang_code','az');
        } elseif($siteLang == 'english'){
            $ci->session->set_userdata('lang_code','en');
        }elseif($siteLang == 'russian'){
            $ci->session->set_userdata('lang_code','ru');
        }else{
            $ci->session->set_userdata('lang_code','az');
        }

        if($siteLang) {
            $ci->lang->load('message',$siteLang);
        }else{
            $ci->lang->load('message','azerbaijan');
        }
    }
}