<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?= $Lang->get('LAUNCHERHELPER__ADD') ?></h3>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" data-ajax="true">
                                <div class="form-group">
                                    <input type="text" name="image" class="form-control" placeholder="Image" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary center-block">
                                        <?= $Lang->get('GLOBAL__SUBMIT'); ?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive dataTable">
                                <thead>
                                <tr>
                                    <th><?= $Lang->get('LAUNCHERHELPER__IMAGES'); ?></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($datas as $data): ?>
                                    <tr>
                                        <td><img style="max-height: 1000px; max-width: 1000px; height: auto; width: auto" src="<?= $data['LauncherImage']['image']; ?>"></td>
                                        <td><a onclick="confirmDel('/admin/launcherhelper/launcherhelper/delete/<?= $data['LauncherImage']['id']; ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>