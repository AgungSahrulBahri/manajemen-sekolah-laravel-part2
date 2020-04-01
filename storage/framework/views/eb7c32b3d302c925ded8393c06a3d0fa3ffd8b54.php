<div class="modal fade" id="tambahModal" tabindex="-1" data-backdrop="static"   role="dialog" aria-labelledby="tambahData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="tambahData">Tambah Data</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="tambahForm" action="<?php echo e(Route('siswa.store')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Nomer Induk Siswa:</label>
                <input type="number" class="form-control" name="nis" required>
              </div>
                 <div class="form-group">
                <label for="mdate" class="col-form-label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="ttl" id="mdate" data-dtp="dtp_PJfPo" placeholder="2017-06-04">
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" name="alamat" required>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Jenis Kelamin:</label>
                  <select class="form-control" name="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">No Telfon:</label>
                  <input type="text" class="form-control" name="phone" required>
              </div>
    
                <div class="form-group">
                  <label for="country" class="col-form-label">Kelas: </label>
                  <select class="form-control" name="kelas">
                    <option value="">Pilih Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
              </div>

               <div class="form-group">
                  <label for="country" class="col-form-label">Jurusan: </label>
                  <select class="form-control" name="jurusan">
                    <option value="">Pilih Kelas</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Bahasa">Bahasa</option>
                  </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Anggota</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" tabindex="-1" data-backdrop="static"   role="dialog" aria-labelledby="editData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="editData">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editForm" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Nomer Induk Siswa:</label>
                <input type="number" class="form-control" name="nis" required>
              </div>
                 <div class="form-group">
                <label for="mdate" class="col-form-label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="ttl" id="mdate" data-dtp="dtp_PJfPo" placeholder="2017-06-04">
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" name="alamat" required>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Jenis Kelamin:</label>
                  <select class="form-control" name="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">No Telfon:</label>
                  <input type="text" class="form-control" name="phone" required>
              </div>
    
                <div class="form-group">
                  <label for="country" class="col-form-label">Kelas: </label>
                  <select class="form-control" name="kelas">
                    <option value="">Pilih Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
              </div>

               <div class="form-group">
                  <label for="country" class="col-form-label">Jurusan: </label>
                  <select class="form-control" name="jurusan">
                    <option value="">Pilih Kelas</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Bahasa">Bahasa</option>
                  </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning" data-id="">Ubah Anggota</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmHapusModal" tabindex="-1" data-backdrop="static"   role="dialog" aria-labelledby="hapusData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white" id="hapusData">Hapus Data</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
          <form id="hapusForm" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger btnHapus" data-id="">Hapus Anggota</button>
        </form>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
    $('.tambahModal').on('click', function(){
        $('#tambahForm')[0].reset();
    });
    $('.table tbody').on('click', '.editModal', function(){
        $('#editForm')[0].reset();
        var currow = $(this).closest('tr');
        var col2 = currow.find('td:eq(1)').text();
        var col3 = currow.find('td:eq(2)').text();
        var col4 = currow.find('td:eq(3)').text();
        var col5 = currow.find('td:eq(4)').text();
        var col6 = currow.find('td:eq(5)').text();
        var col7 = currow.find('td:eq(6)').text();
        var col8 = currow.find('td:eq(7)').text();
        var col9 = currow.find('td:eq(9)').text();
        var id = $(this).data('id');
        $('input[name$="nama"]').val(col2);
        $('input[name$="nis"]').val(col3);
        $('input[name$="ttl"]').val(col4);
        $('input[name$="alamat"]').val(col5);
        $('input[name$="jk"]').val(col6);        
        $('input[name$="phone"]').val(col7);
        $('input[name$="kelas"]').val(col8);
        $('input[name$="jurusan"]').val(col9);
        
        var url = '<?php echo e(route("siswa.update", ":id")); ?>';
        url = url.replace(':id', id);
        $('#editForm').attr('action' , url);
        $('#editModal').modal();
    });


     $('.table tbody').on('click', '.hapusModal', function(){
      var id = $(this).data('id');
      var url = '<?php echo e(route("siswa.destroy", ":id")); ?>';
      url = url.replace(':id', id);
      $('#hapusForm').attr('action' , url);
      $('#confirmHapusModal').modal("show");
    });
</script>


 <?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/student/modals.blade.php ENDPATH**/ ?>