<?php
    # Incluir conexion a la DB
     public function todas_calls() {
     
     $sess_array = array(
       'id_user' => $this->session->userdata['sess_data']['id_user'],
       'username' => $this->session->userdata['sess_data']['username']
     );
   
     $data = array();
     $data['sess_data'] = $sess_array;
   
     $date_inicio = "2018-01-01 00:00:00";
     $date_fin = "2018-01-31 23:59:59";
   
     $data['todas_calls']  = $this->reg_calls_model->todas_calls($date_inicio, $date_fin);
   
     $data['menu_higher'] = $this->load->view('elementos/menu_higher_view.php', $data, TRUE);
     $data['menu_left'] = $this->load->view('elementos/menu_left_view.php', '', TRUE);
   
     $this->load->view("todas_calls_view.php", $data);
   
   }


























?>