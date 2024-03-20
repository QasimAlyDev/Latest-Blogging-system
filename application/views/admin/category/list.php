<?php $this->load->view('admin/header')?>
<style>
   
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url().'admin/home/index'?>">Home</a></li>
                        <li class="breadcrumb-item">Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header mycard-header">
                            <div class="class-title">
                                <form class="form-inline" id="searchFrm" name="searchFrm" method="get">
                                    <!-- <input class="form-control mr-sm-2 rounded" value="" name="q" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="rounded searchbtn" type="submit">Search</button>
                                        </div> -->
                                    <div class="input-group-append">
                                        <h4 class="card-title fs-4">Category List</h4>
                                    </div>
                                    <div class="input-group">
                                        <div class="floating-btn">
                                            <a href="<?= base_url().'admin/category/create'?>" class="rounded-btn" data-toggle="tooltip" data-placement="top" title="Add New Category">
                                                <i class="fas fa-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>database id</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if(!empty($categories)){ ?>
                                            <?php $i=1; foreach ($categories as $categoryRow) {?> 
                                                <tr>
                                                    <td><?= $i++?></td>
                                                    <td><?= $categoryRow['id'];?></td>
                                                    <td><?= $categoryRow['name'];?></td>   
                                                    <td>
                                                        <?php if($categoryRow['status'] == 1){ ?>
                                                            <span class="badge badge-success">Active</span>
                                                        <?php }else{ ?>
                                                            <span class="badge badge-danger">Block</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url().'admin/category/edit/'.$categoryRow['id'] ?>" class="editbtn">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" onclick="deleteCategory(<?= $categoryRow['id'];?>)" class="deletebtn">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    <?php }else{ ?> 
                                        <!-- <tr>
                                            <td colspan="6" class="text-center text-secondary">Records not found</td>
                                        </tr> this code is not need . already records not found functionality available in js datadable plugin-->
                                    <?php } ?>
                                <tbody>    
                            </table>
                        </div>
                    </div>
                    
                    <!-- /.card-body -->
                </div>
            </div><!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/footer') ?>
<script>
    function deleteCategory(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?= base_url() . 'admin/category/delete/'; ?>' + id;
            }
        });
    }
</script>
<script>
    // Initialize tooltips
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

    
