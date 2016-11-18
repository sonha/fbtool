<section class="content">
<?php echo form_open('tool/pinterest'); ?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                 <div class="form-group">
                  <div class="row">
                    <div class="col-md-1">
                      <label>Tìm nội dung theo từ khóa</label>
                    </div>
                    <div class="col-md-4">
                       <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-pinterest-p"></i>
                          </div>
                          <input type="text" name="search_name" class="form-control" placeholder="Nhập vào từ khóa cần tìm ...">
                        </div>
                      
                    </div>
                    <div class="col-md-4">
                      <input type="button" onclick="getListComment(); showProcess();" class="btn btn-primary" value="Tìm kiếm">
                      <input type="button" onclick="clearData();" class="btn btn-default" value="Clear data">
                    </div>
                </div>
                </div>
              <!-- /.box-body -->
                <span class="process" style="display: none;width: 60%;margin: 0 auto;"><img src="<?php echo base_url() ?>assets/images/process.gif" title="process" data-pin-nopin="true"></span>
              
            </form>
            <p id="title_result" style="display: none;"></p>
            <!-- /.box-body -->
          </div>
          </div>
        </div>
      </div>
      
      </form>
    </section>