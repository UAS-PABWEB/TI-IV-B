<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/newsEdit/' . $news['id_news']); ?>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?= $news['title']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="news_content" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="news_content" name="news_content" value=""><?= $news['news_content']; ?>
                    <?= form_error('news_content', '<small class="text-danger pl-3">', '</small>'); ?></textarea>
                </div>
            </div>
            <div class=" form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>


            </form>


        </div>


    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->