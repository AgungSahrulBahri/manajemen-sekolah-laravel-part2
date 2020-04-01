<?php $__env->startSection('content'); ?>
    

<div class="row">

    <div class="col-12">
                <?php if(session('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
     
    </div>
    
    <div class="col-12">
        
        <div class="card">
            
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <button type="button" class="btn btn-primary float-right tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Nama</th>

                            <th>Nis</th>
                            
                            <th>TTL </th>

                            <th>Alamat</th>

                            <th>JK</th>

                            <th>Phone</th>

                            <th>Kelas</th>

                            <th>Jurusan</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>
                            <?php $i = 1 ?> 
                            <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($student->nama); ?></td>
                            <td><?php echo e($student->nis); ?></td>
                            <td><?php echo e($student->ttl); ?></td>
                            <td><?php echo e($student->alamat); ?></td>
                            <td><?php echo e($student->jk); ?></td>
                            <td><?php echo e($student->phone); ?></td>
                            <td><?php echo e($student->kelas); ?></td>
                            <td><?php echo e($student->jurusan); ?></td>


                            <td class="text-nowrap">
                                <button type="button" class="btn ml-1 mr-1 btn-danger hapusModal" data-id="<?php echo e($student['id']); ?>">Hapus</button>
                               <button type="button" class="btn ml-1 mr-1 btn-warning editModal" data-id="<?php echo e($student['id']); ?>">Edit</button>
                                <button type="button" class="btn ml-1 mr-1 btn-info text-white" onclick="location.href ='<?php echo e(url('siswa/'.$student['id'])); ?>'">Detail</button>
                                 
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="6">Tidak ada data</td>
                        <?php endif; ?>
                    </tbody>

                </table>

            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
  <?php echo $__env->make('student.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/student/index.blade.php ENDPATH**/ ?>