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
                        <li class="breadcrumb-item"><a href="<?= base_url().'admin/home/index';?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url().'admin/category/index';?>">Articles</a></li>
                        <li class="breadcrumb-item">Create New Article</li>
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
                    <div class="card" style="background-color:#F7FAFC;">
                        <div class="card-header mycard-header">
                            <h3 class="card-title fs-5">Create New Article</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="articleForm" name="articleForm" method="post"
                              action="<?= base_url().'admin/article/create';?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label" for="name">Category</label>
                                    <select class="form-select form-control <?= (form_error('category_id') != "") ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="category_id" id="category_id">
                                        <option value="">Select Category...</option>
                                        <?php foreach ($categories as $cat) { ?>
                                            <option value="<?= $cat['id']; ?>" <?= set_select('category_id', $cat['id']); ?> ><?= $cat['name']; ?></option>
                                        <?php  } ?>
                                    </select>
                                    <div id="categoryError" class="invalid-feedback fs-6"><?= form_error('category_id');?></div>
                                </div>
                                <div data-mdb-input-init class="form-outline ">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control <?= (form_error('title') != "") ? 'is-invalid' : ''; ?>" placeholder="Title" id="title" value="<?= set_value('title') ?>"name="title" />
                                    <div id="titleError" class="invalid-feedback fs-6"><?= form_error('title');?></div>
                                </div>
                                <div data-mdb-input-init class="form-outline mt-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea placeholder="Write Desciption here" id="description" name="description" class="textarea form-control"><?= set_value('description');?></textarea>
                                </div>
                                <label class="form-label" for="image">Image</label>
                                <div class="file-drop-area" id="fileDropArea">
                                    <label for="file-input" class="fake-btn">Choose files</label>
                                    <input id="file-input" class="file-input" name="image" type="file" multiple>
                                    <div class="item-delete"></div>
                                    <img id="preview" class="uploaded-image border p-2" style="display: none;"/>
                                </div>
                                <?= "<h6 class='text-red fs-6 mt-2'>" . (!empty($errorImageUpload) ? $errorImageUpload : '') . "</h6>"; ?>
                                <div data-mdb-input-init class="form-outline mt-4">
                                    <label class="form-label" for="author">Author</label>
                                    <input type="text" class="form-control <?= (form_error('author') != "") ? 'is-invalid' : ''; ?>" placeholder="Author" id="author" value="<?= set_value('author'); ?>" name="author" />
                                    <div id="authorError" class="invalid-feedback fs-6"><?= form_error('author');?></div>
                                </div>
                                <div class="control-group mt-3">
                                    <input type="radio" value="1" name="status" checked="checked" />
                                    <label class="control control--radio">Active</label>
                                    <input type="radio" value="0" name="status" />
                                    <label class="control control--radio">Block</label>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer mt-3">
                                    <button type="submit" class="mybtn">Submit</button>
                                    <a href="<?= base_url().'admin/article/index';?>" class="cancelbtn">Cancel</a>
                                </div>
                            </div>
                        </form>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- form validation start -->
<script>
    $(document).ready(function() {
        $('#articleForm input, #articleForm select').on('input', function() {
            const input = $(this);
            const errorDiv = input.next('.invalid-feedback');

            if (input.val().trim() !== '') {
                input.removeClass('is-invalid');
                errorDiv.text('');
            } else {
                input.addClass('is-invalid');
                errorDiv.text(input.attr('data-error'));
            }
        });
    });
</script>
<!-- form validation end -->
<!-- delete attacment and show attachment code start -->
<script>
  const $fileInput = $('#file-input');
  const $droparea = $('#fileDropArea');
  const $delete = $('.item-delete');
  const $preview = $('#preview');

  $fileInput.on('dragenter focus click', function () {
    $droparea.addClass('is-active');
  });

  $fileInput.on('dragleave blur drop', function () {
    $droparea.removeClass('is-active');
  });

  $fileInput.on('change', function () {
    let filesCount = $(this)[0].files.length;
    let $textContainer = $(this).prev();

    if (filesCount === 1) {
      let fileName = $(this).val().split('\\').pop();
      $textContainer.text(fileName);
      $delete.css('display', 'inline-block');

      // Show preview of the selected image
      const file = $(this)[0].files[0];
      const reader = new FileReader();

      reader.onload = function (e) {
        $preview.attr('src', e.target.result);
        $preview.css('display', 'block');
      };

      reader.readAsDataURL(file);
    } else if (filesCount === 0) {
      $textContainer.text('or drag & drop files here');
      $delete.css('display', 'none');
      $preview.css('display', 'none');
    } else {
      $textContainer.text(filesCount + ' files selected');
      $delete.css('display', 'inline-block');
      $preview.css('display', 'none');
    }
  });

  $delete.on('click', function () {
    $fileInput.val(null);
    $fileInput.prev().text('Choose files');
    $delete.css('display', 'none');
    $preview.css('display', 'none');
  });
</script>
 <!-- delete attacment and show attachment code end  -->

<?php $this->load->view('admin/footer') ?>