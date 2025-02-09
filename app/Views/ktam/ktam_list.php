
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/header_bar'); ?>

      <div class="content-body">
        <table class="table table-bordered" id="ktam_list">
          <thead>
              <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Pas Foto</th>
                  <th>JK</th>
                  <th>Aksi</th>
              </tr>
          </thead>
        </table>
      </div><!-- content-body -->
    </div><!-- content -->

<?= $this->include('layout/footer'); ?>

<script>
    $(document).ready(function() {
        let table = $('#ktam_list').DataTable({
            ajax: "<?= site_url('ktam/getData'); ?>",
            columns: [
                { data: 'nik' },
                { data: 'nama_lengkap' },
                { data: 'tempat_lahir' },
                { data: 'jenis_kelamin' },
                {
                    data: 'nik',
                    render: function(data) {
                        return `<button class='btn btn-danger btn-sm delete' data-id='${data}'>Hapus</button>`;
                    }
                }
            ]
        });
    });
</script>