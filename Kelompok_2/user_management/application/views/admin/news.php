<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content -->
    <div class="row">
        <?php foreach ($newss as $n) : ?>
        <div class="col-lg-4">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success"><?= $n['title']; ?></h6>
                </div>
                <div class="card-body">
                    <?= $n['news_content']; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->