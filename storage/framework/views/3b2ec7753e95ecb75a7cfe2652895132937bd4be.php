<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title d-inline">List Product</h4>

                            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success btn-fill pull-right">Create Product</a>
                            
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Sale</th>
                                    <th>Rate</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $listProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->title); ?></td>
                                        <td><?php echo e($product->des); ?></td>
                                        <td><?php echo e($product->   titleCategory); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->sale); ?></td>
                                        <td><?php echo e($product->rate); ?></td>
                                        <td><img src="<?php echo e($product->img); ?>" height="50" width="50"></td>
                                        <td>
                                        <a class="btn btn-warning" href="<?php echo e(route('products.edit', ['product' => $product->id])); ?>"><i class="fas fa-pen-square"></i></a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger deleteButton"  data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PHUC\Desktop\lienquan\resources\views/admin/product/index.blade.php ENDPATH**/ ?>