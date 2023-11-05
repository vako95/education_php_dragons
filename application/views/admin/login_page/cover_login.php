<div class="inner cover">
    <h1 class="cover-heading">Login12</h1>
 
  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo form_open_multipart('admin_cover_login'); ?>
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="username" value="<?php echo set_value('username'); ?>"  placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="password"   placeholder="Password">
                    </div>
                </div>
                <div class="panel-footer">
                    <input type="submit" name="submit" value="Login" class="btn btn-success btn-block btn-lg">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>