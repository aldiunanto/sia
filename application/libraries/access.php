<?php
/*
 * Document     : access.php
 * Path		    : /application/libraries/
 * Create on    : Jul 14, 2015 13:27:13
 * Author       
 *    Name      : Hamzah Tossaro
 *    Email     : hamzah.tossaro@gmail.com
 *    Messenger : shield_zha
 *    Site      : http://tossaro.com/
 * Description  : 
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Access {
    public $user;

    function __construct() {
        $this->CI =& get_instance();           
        $this->CI->load->model('users_model');
    }
    
    function login($username, $password, $remember_me) {
        $result = $this->CI->users_model->fetch(array('user_uniq_name'=>$username))->row();
        if (!empty($result)) {
            if ($result->user_status == 2){
                if ($password == $result->user_password) {
//                    if ($result[0]->user_level == 1){
                        //save session
                        if ($remember_me==true) {
                            $this->CI->session->sess_expiration = 60*60*24*30; //30 days
                            $this->CI->session->set_userdata('remember_me', TRUE);
                        }
                        $userdata_sess = array(
                            'user_id' => $result->user_id,
                            'user_email' => $result->user_email,
                            'user_username' => $result->user_username,
                            'user_fullname' => $result->user_fullname,
                        );
                        $this->CI->session->set_userdata('userdata',$userdata_sess);
                        return TRUE;                    
                } else {
                    $this->CI->session->set_flashdata('error','Maaf, password yang anda masukan salah!');
                    return FALSE;
                }
            } else {
                $this->CI->session->set_flashdata('error','Maaf, akun anda belum aktif!');
                return FALSE;
            }
        }
    }
    
    function is_login() {
        return (($this->CI->session->userdata('userdata')) ? TRUE : FALSE);
    }
    
    function logout() {
        $this->CI->session->sess_destroy();
    }
}
