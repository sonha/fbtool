<section class="content">
<?php echo form_open('tool/filter'); ?>
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
                    <div class="col-md-12">
                      <label for="exampleInputEmail1">Link bài viết</label>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter ..."></textarea>
                      <span class="help-block" style="display:none">Link không được để trống</span>
                    </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="button" onclick="getListData(); showProcess();" class="btn btn-primary" value="Tìm kiếm">
                <input type="button" onclick="clearData();" class="btn btn-default" value="Clear data">
              </div>
              <span class="process" style="display: none;"><img src="<?php echo base_url() ?>assets/images/process.gif" title="process" data-pin-nopin="true"></span>
            </form>
            <p id="title_result" style="display: none;"></p>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody id="data_result">
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
        </div>
      </div>
      
      </form>
    </section>