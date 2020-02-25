<div class="container">
<?php $this->load->view('layouts/_alert')?>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card">
            <div class="card-header">
              Form Register
            </div>
            <div class="card-body">
              <?= form_open('register', ['method' => 'POST']) ?>
                <div class="form-group">
                  <label for=""> name</label>
                  <?= 
                  form_input('name', $input->name, ['class' => 'form-control','required' => true, 'autofocus' => true]);
                   ?>
                  <? form_error('name')?>
                </div>
                <div class="form-group">
                  <label for=""> Email</label>
                  <?= 
                  form_input([ 'type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control','required' => true, 'placeholder' => 'masukkan alamat email aktif']);
                   ?>
                   <? form_error('email')?>
                </div>
                <div class="form-group">
                  <label for=""> Password</label>
                  <?=
                  form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Password minimal 8', 'required' => true])?>
                  <? form_error('password')?>         
                </div>
                <div class="form-group">
                  <label for="">Confirm Password</label>
                  <?=
                  form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Password yang sama', 'required' => true])?>
                  <? form_error('password_confirmation')?>  
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              <?form_close()?>
            </div>
          </div>
        </div>
      </div>
    </div>