<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?= $Lang->get('LAUNCHERTEXT__PATCH_NOTE') ?></h3>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" data-ajax="true">
                                <div class="form-group">
                                    <label for="patch-version"><?= $Lang->get('LAUNCHERTEXT__VERSION') ?></label>
                                    <input id="patch-version" type="text" name="version" class="form-control" placeholder="Version"
                                        value="<?php
                                            if (!empty($datas)) {
                                                echo $datas[0]['LauncherText']['version'];
                                            }
                                        ?>"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="patch-text"><?= $Lang->get('LAUNCHERTEXT__PATCH_TEXT') ?></label>
                                    <textarea class="form-control" name="text" id="patch-text" rows="10"><?php
                                            if (!empty($datas)) {
                                                echo $datas[0]['LauncherText']['text'];
                                            }
                                        ?></textarea>
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
        </div>
    </div>
</section>