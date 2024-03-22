<?php $this->load->view('admin/header')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Articles</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url().'admin/home/index'?>">Home</a></li>
                        <li class="breadcrumb-item">Articles</li>
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
                                    <div class="input-group">
                                        <!-- <input class="form-control mr-sm-2 rounded" value="" name="q" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="rounded searchbtn" type="submit">Search</button>
                                        </div> -->
                                        <div class="input-group-append">
                                            <h4 class="card-title fs-4">Article List</h4>
                                        </div>
                                        <div class="floating-btn">
                                            <a href="<?= base_url().'admin/article/create'?>" class="rounded-btn" data-toggle="tooltip" data-placement="top" title="Add New Article">
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
                                            <!-- <th width="50">#</th> -->
                                            <th width="50">DB id</th>
                                            <th width="100">Action</th>
                                            <th width="100">Image</th>
                                            <th>Title</th>
                                            <th width="180">Author</th>
                                            <th width="100">Created_at</th>
                                            <th width="70">Status</th>
                                            
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($articles)){ ?>
                                        <?php $i=1; foreach ($articles as $article) {?>
                                            <tr>
                                                <!-- <td><?= $i++; ?></td> -->
                                                <td><?= $article['id']; ?></td>
                                                <td class="p-5">
                                                    <a href="<?= base_url().'admin/article/edit/'.$article['id'] ?>">
                                                        <i class="fas fa-edit text-secondary" data-toggle="tooltip" data-placement="top" title="Edit Article"></i>
                                                    </a>
                                                    <a href="javascript:void(0);"  onclick="deleteArticle(<?= $article['id'];?>)">
                                                        <i class="fas fa-trash-alt text-secondary" data-toggle="tooltip" data-placement="top" title="Delete Article" ></i>
                                                    </a>
                                                </td>

                                                <td>
                                                    <?php if($article['image'] != "" && file_exists('./public/uploads/article/thumb_admin/'.$article['image'])){ ?>
                                                                <img class="uploaded-image" src="<?= base_url().'public/uploads/article/thumb_admin/'.$article['image'] ?>">
                                                                <?php }else{ ?>
                                                                <img class="default-image" src="<?= base_url().'public/admin/dist/img/no-image.jpg';?>">
                                                    <?php } ?>
                                                </td>
                                                <td><?= $article['title']; ?></td>
                                                <td><?= $article['author']; ?></td>
                                                <td><?= $article['created_at']; ?></td>
                                                <td>
                                                    <?php if($article['status'] == 1){ ?>
                                                            <span class="badge badge-success">Active</span>
                                                    <?php }else{ ?>
                                                            <span class="badge badge-danger">Block</span>
                                                    <?php } ?>
                                                </td>
                                               
                                            </tr>
                                            <?php } ?>
                                        <?php } ?>
                                <tbody>    
                            </table>
                        </div>
                    <!-- /.card-body -->
                    </div>
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

    
