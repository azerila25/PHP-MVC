<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary mt-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#forModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-primary" type="sybmit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ( $data['mhs'] as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end ml-1 " style="text-decoration: none;" onclick="return    confirm('yakin?');">Hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-end ml-1 tampilModalUbah" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end ml-1" style="text-decoration: none;">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="forModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
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
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Sistem Komputer">Sistem Komputer</option>
                <option value="Data Sains">Data Sains</option>
                </select>
            </div>
      </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
    </div>
  </div>
</div>