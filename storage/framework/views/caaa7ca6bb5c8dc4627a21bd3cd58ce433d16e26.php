
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BAZA ENGINEER ONLINE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Create New Branch</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
           
            <th width="280px">Action</th>
        </tr>
        <!-- <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> -->
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td></td>
            <td></td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="">Show</a>
    
                    <a class="btn btn-primary" href="">Edit</a>
   
                    <?php echo csrf_field(); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('branch.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ntagwabira\Desktop\baza\resources\views/index.blade.php ENDPATH**/ ?>