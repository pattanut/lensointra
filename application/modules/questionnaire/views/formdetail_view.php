<div class="col-md-12">
    <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('questionnaire/detail'); ?>">
        <div class="form-group">
            <label for="txtName" class="col-sm-4 control-label input-lg">ชื่อ</label>
            <div class="col-sm-4">
                <input type="text" class="form-control input-lg" id="txtName" name="txtName" value="<?php echo set_value('txtName'); ?>">
            </div>
            <span class="help-block" style="color: red"><?php echo form_error('txtName'); ?></span>
        </div>
        <div class="form-group">
            <label for="optDep" class="col-sm-4 control-label"></label>
            <div class="col-sm-4">
                <select class="form-control input-lg" id="optDep" name="optDep">
                    <option value="">-- แผนก --</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <span class="help-block" style="color: red"><?php echo form_error('optDep'); ?></span>
        </div>
    </form>
</div>