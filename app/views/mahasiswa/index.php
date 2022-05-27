<div class="container mx-5 mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
            </button>
            <br><br>


            <h3>Daftar Mahasiswa</h3>

                    <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']?>" class="badge bg-primary">detail</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
            
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" class="form-control" id="npm" name="npm">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan" class="form-label">State</label>
                <select id="jurusan" class="form-control" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Hukum">Hukum</option>
                <option value="Ekonomi">Ekonomi</option>
                </select>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  </div>
</div>