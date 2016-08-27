<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('facebook_login')) {
    function facebook_login($destroySession = FALSE){
        $CI =& get_instance();

        $CI->session->keep_flashdata('message_login');

        $_REQUEST = array_merge($_GET, $_POST, $_COOKIE);

        $CI->load->library('facebook', array(
           'appId'  => $CI->config->item('appId'),
           'secret' => $CI->config->item('secret'),
        ));

        if ($destroySession) {
            $CI->facebook->destroySession();
        }

        $user = $CI->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $CI->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $CI->facebook->destroySession();
        }

        if ($user) {
            $data['user'] = $user;
            $data['logout_url'] = base_url('login/logout'); // Logs off application
        } else {
            $data['login_url'] = $CI->facebook->getLoginUrl(array(
                'redirect_uri' => base_url('login'),
                'scope' => array("email", "public_profile" , "user_friends") // permissions here
            ));
        }
        return $data;
    }
}

if(!function_exists('facebook_logout')) {
    function facebook_logout(){
        $CI =& get_instance();
        $CI->load->library('facebook', array(
           'appId'  => $CI->config->item('appId'),
           'secret' => $CI->config->item('secret'),
        ));
        $CI->facebook->destroySession();
    }
}

if(!function_exists('facebook_post')) {
    function facebook_post($user, $redirect, $trip, $permitions){
        $CI =& get_instance();

        $params = array(
            "access_token" => $CI->facebook->getAccessToken(),
            "message" => lang('share_text'),
            "link" => config_item('share_url'),
            "picture" => config_item('share_icon'),
            "name" => config_item('share_title'),
            "caption" => config_item('share_url')
        );

        if ($permitions[CLIENT_SHARE_PREFS] == ROUTE_PREF) {
            $params["description"] =
                lang('share_text_option_full');

            $url_from = '';
            $url_to = '';

            if (!empty($trip[TRIP_FROM_LATITUDE]) ||
                !empty($trip[TRIP_FROM_LONGITUDE])) {
                $url_from = $trip[TRIP_FROM_LATITUDE] . ',' . $trip[TRIP_FROM_LONGITUDE];
            }

            if (!empty($trip[TRIP_TO_LATITUDE]) ||
                !empty($trip[TRIP_TO_LONGITUDE])) {
                $url_from = $trip[TRIP_TO_LATITUDE] . ',' . $trip[TRIP_TO_LONGITUDE];
            }

            $params["link"] = config_item('share_url_maps') . $url_from . '/' . $url_to  . '/';
        } else {
            $params["description"] = lang('share_text_option_simple');
        }

        try {
            $ret = $CI->facebook->api('/' . $user . '/feed', 'POST', $params);
            $CI->session->set_flashdata('flash_message_backend', '<p class="success">' . lang('msg_succes_share_post') . '</p>');
            redirect($redirect . '?status=' . STATUS_OK, 'refresh');
        } catch(Exception $e) {
            $msg =  $e->getMessage();

            $CI->session->set_flashdata('flash_message_backend', '<p class="error">' . $msg . '</p>');
            redirect($redirect, 'refresh');
        }
    }
}

if(!function_exists('facebook_profile_picture')) {
    function facebook_profile_picture($uid){
        $profile_picture = 'https://graph.facebook.com/' . $uid . '/picture?type=large';
        return $profile_picture;
    }
}

/* End of file gp_facebook_helper.php */
/* Location: ./application/helpers/gp_facebook_helper.php */
