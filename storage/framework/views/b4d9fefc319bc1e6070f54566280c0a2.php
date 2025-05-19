
<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="background-color: #E8F5E9; padding: 30px 20px;">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15); border-radius: 15px; background-color: #FFFFFF;">
        <div class="card-body" style="padding: 30px;">
          <center>
            <h4 class="card-title" style="color: #388E3C; font-weight: bold; font-size: 1.8em;">VIEW CATEGORY</h4>
          </center>
          <div class="table-responsive">
            <table class="table table-hover" style="border-radius: 10px; overflow: hidden;">
              <thead style="background-color: #388E3C; color: white; font-size: 1.1em;">
                <tr>
                  <th>Sl.no</th>
                  <th>Category Name</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="transition: all 0.3s ease;">
                  <td><?php echo e($index + 1); ?></td>
                  <td style="color: #388E3C; font-weight: bold; font-size: 1.1em;"><?php echo e($category->categoryname); ?></td>
                  <td><img src="/Uploads/<?php echo e($category->categoryimage); ?>" alt="Category Image" style="width: 80px; height: auto; border-radius: 8px;"></td>
                  <td>
                    <!-- Confirmation Alert for Deletion -->
                    <a href="#" onclick="confirmDelete(<?php echo e($category->categoryid); ?>)">
                      <button class="btn btn-danger" style="background-color: #E57373; border: none; padding: 8px 15px; border-radius: 10px; transition: background-color 0.3s ease;">
                        Delete
                      </button>
                    </a>
                    <a href="<?php echo e(route('editcategory', ['categoryid' => $category->categoryid])); ?>">
                      <button class="btn btn-success" style="background-color: #4CAF50; border: none; padding: 8px 15px; border-radius: 10px; transition: background-color 0.3s ease;">
                        Edit
                      </button>
                    </a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <?php if(session('success')): ?>
            <script>
              alert('<?php echo e(session('success')); ?>');
            </script>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    function confirmDelete(categoryid) {
        if (confirm("Are you sure you want to delete this category?")) {
            // If the user confirms, proceed with the delete action
            window.location.href = '/deletecategory/' + categoryid;
        }
    }
</script>
<?php $__env->stopSection(); ?>

<style>
  body {
    background-color: #E8F5E9; /* Light Green */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card {
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
  }

  .table-hover tbody tr:hover {
    background-color: #F1F8E9; /* Light Green Hover */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transform: scale(1.02);
  }

  .btn {
    padding: 8px 15px;
    font-size: 1.1em;
    border-radius: 10px;
    transition: background-color 0.3s ease;
  }

  .btn-danger {
    background-color: #E57373;
    border: none;
  }

  .btn-success {
    background-color: #4CAF50;
    border: none;
  }

</style>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/Viewcategory.blade.php ENDPATH**/ ?>