<?php $__env->startSection('konten'); ?>

<?php echo e(Form::open(array ('method'=>'post','route'=>'produk.store','class'=>'form-horizontal'))); ?>


<div class="form-group">

   <?php echo e(Form::label('nama_produk', 'Nama Produk',array('class'=>'col-sm-2 control-label'))); ?>


    <div class="col-sm-7">
        <?php echo e(Form::text('nama_produk',$datass->nama_produk,array('class' => 'form-control'))); ?>

    </div>
  </div>
<div class="form-group">
<?php echo e(Form::label('deskripsi', 'Deskripsi',array('class'=>'col-sm-2 control-label'))); ?>

      <div class="col-sm-9">
          <?php echo e(Form::textarea('deskripsi','',array('class' => 'form-control','placeholder'=>'textarea'))); ?>

      </div>
  </div>
    <div class="form-group">
  <div class="col-md-6 col-md-offset-5">
<?php echo Form::submit('Save',array('class' => 'btn btn-primary')); ?>

</div>
</div>
<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>