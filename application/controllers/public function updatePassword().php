public function updatePassword()
{
    $this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required|min_length[5]|max_length[25]');
    $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[5]|max_length[25]');
    $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required|min_length[5]|max_length[25]');

    $id = $this->session->userdata('id');
    if ($this->form_validation->run() == true) {
        if (password_verify($this->input->post('passLama'), $this->session->userdata('password'))) 
        {
            if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
                $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
                redirect('auth/profile');
            } else {
                $data = ['password' => get_hash($this->input->post('passBaru'))];
                $result = $this->Auth_model->update($data, $id);
                if ($result > 0) {
                    $this->updateProfil();
                    $this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
                    redirect('auth/profile');
                } else {
                    $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
                    redirect('auth/profile');
                }
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg('Password Salah'));
            redirect('auth/profile');
        }
    } else {
        $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
        redirect('auth/profile');
    }
}


if ($akses == 1)
      {   
        $current_password = $this->inpot->post('current_password');$current_password = $this->inpot->post('current_password');
        if(!password_verify($current_password, $data['user']['password']))
        {
          if ($this->input->post('new_password1') != $this->input->post('new_password2')) 
          {
            $this->session->set_flashdata('error', "New Password Doesn't Match !");
            // $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
            redirect('User/ChangePassword');
          }
          else
          {
            $data = ['password' => MD5($this->input->post('new_password1'))];
            $this->db->query("UPDATE tbl_admin SET password=MD5('{$password}') WHERE id_admin = '{$id}'");
            if ($result > 0) 
            {
              $this->ChangePassword();
              $this->session->set_flashdata('success', 'Password Berhasil diubah');
              redirect('User/ChangePassword');
            } 
            else 
            {
              $this->session->set_flashdata('success', 'Password Gagal diubah');
              redirect('User/ChangePassword');
            }
          }
        }
      }
      else
      {
        if (password_verify($this->input->post('current_password'), $this->session->userdata('password')))
        {
          if ($this->input->post('new_password1') != $this->input->post('new_password2')) 
          {
            $this->session->set_flashdata('error', "New Password Doesn't Match !");
            // $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
            redirect('User/ChangePassword');
          }
          else
          {
            $data = ['password' => MD5($this->input->post('new_password1'))];
            $this->db->query("UPDATE tbl_user SET password=MD5('{$password}') WHERE id_admin = '{$id}'");
            if ($result > 0) 
            {
              $this->ChangePassword();
              $this->session->set_flashdata('success', 'Password Berhasil diubah');
              redirect('User/ChangePassword');
            } 
            else 
            {
              $this->session->set_flashdata('success', 'Password Gagal diubah');
              redirect('User/ChangePassword');
            }
          }
     