
<?php require('Config.php'); ?>
<link rel="stylesheet" type="text/css" href="Modal_Includes/Modal_Look.css" />
<script type="text/javascript" src="Modal_Includes/Word_Count.js"></script>

<div id="add_data" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form method="post" action="Modal_Includes/Modal_Submit.php" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">
                        <img src="<?php echo Config::$logo_path; ?>" class="img-circle" alt="logo" width="100px" height="100px" />
                    </h4>
                    <h4 class="modal-title text-center">
                        <?php echo Config::$modal_title; ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="name_box">
                        <label class="control-label col-lg-4" for="add_item_name">Item Name</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="add_item_name" name="item_name" placeholder="Item Name" maxlength="<?php echo Config::$max_lg_limit; ?>" required="required">
                        </div>
                    </div>

                    <div class="form-group" id="desc_box">
                        <label class="control-label col-lg-4" for="add_item_desc">Item Description</label>
                        <div class="col-lg-8">
                            <textarea name="item_desc" id="add_item_desc" maxlength="500" rows="4" style="resize: none;" class="form-control" placeholder="Item Description"></textarea>
                            <span id="check_char_1">500</span> character(s) left.
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="item_file">Item Photo:</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="item_file" id="add_item_file" accept="image/*"  required="required"/>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" onclick="">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>