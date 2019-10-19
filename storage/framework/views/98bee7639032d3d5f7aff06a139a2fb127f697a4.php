<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Product</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="<?php echo e(route('products.update', ['product' => $product->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <input name="id" type="hidden" value="<?php echo e($product->id); ?>">
                                <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="<?php echo e($product->title); ?>" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="des">Description</label>
                                                    <input type="text" name="des" id="des" class="form-control" value="<?php echo e($product->des); ?>" placeholder="Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="img">Image</label>
                                                    <input type="text" name="img" id="img" class="form-control" value="<?php echo e($product->img); ?>" placeholder="Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="categoryId">Category</label>
                                                    <select name="categoryId" id="categoryId" class="form-control" placeholder="Category">
                                                        <?php $__currentLoopData = $listCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($category->id == $product->categoryId): ?>
                                                                <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->title); ?></option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input type="text" name="price" id="price" class="form-control" value="<?php echo e($product->price); ?>" placeholder="Price">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="sale">Sale</label>
                                                    <input type="text" name="sale" id="sale" class="form-control" value="<?php echo e($product->sale); ?>" placeholder="Sale">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="rate">Rate</label>
                                                    <input type="text" name="rate" id="rate" class="form-control" value="<?php echo e($product->rate); ?>" placeholder="Rate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PHUC\Desktop\lienquan\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>