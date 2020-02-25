
<div class="container">
  <?php $this->load->view('layouts/_alert')?>
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-header">
          <span>Kategori</span>
          <a
            href="<?=base_url('category/create')?>"
            class="btn btn-sm btn-secondary"
            >Tambah</a
          >
          <div class="float-right">
            <form action="#">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control form-control-sm text-center"
                  placeholder="Cari"
                />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary btn-sm">
                    <i class="fas fa-search"></i>
                  </button>
                  <a href="#" class="btn btn-secondary btn-sm">
                    <i class="fas fa-eraser"></i>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            <?php foreach ($content as $row): ?>
              <tr>
                <td><?=$i++?></td>
                <td><?= $row->title ?></td>
                <td> <?= $row->slug ?> </td>
                <td>
                  <form action="#">
                    <a href="#" class="">
                      <button class="btn btn-sm">
                        <i class="fas fa-edit text-info"></i>
                      </button>
                    </a>
                    <button
                      type="submit"
                      onclick="return confirm('Are You Sure?')"
                      class="btn btn-sm"
                    >
                      <i class="fas fa-trash text-danger"></i>
                    </button>
                  </form>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <nav aria-label="Page navigation example">
            <?= $pagination ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>