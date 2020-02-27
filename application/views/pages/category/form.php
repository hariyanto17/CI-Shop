<div role="main" class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-header">
          <span>Formulir Kategori</span>
        </div>
        <div class="card-body">
          <?= form_open($form_action, ['method' => 'POST']) ?>
          <?= isset($input->id) ?  form_hidden('id', $input->id) : '' ?>
            <div class="form-group">
              <label for=""> kategori</label>
              <?= form_input('title', $input->title, ['class' => 'form-control', 'required' => true, 'autofocus' => true, 'id' => 'title', 'onkeyup' => 'createSlug()'])?>
              <?= form_error('title')?>
            </div>
            <div class="form-group">
              <label for=""> Slug</label>
              <?= form_input('slug', $input->slug, ['class' => 'form-control', 'required' => true,  'id' => 'slug',])?>
              <?= form_error('slug')?>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          <? 
          form_close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>