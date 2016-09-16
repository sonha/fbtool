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
                    <div class="col-md-1">
                    <label>Thời gian</label>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" name="search_time" id="search_time">
                      <option value="0">Tất cả</option>
                      <option value="1">Tùy chỉnh</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="form-group custom_time" style="display:none">
                  <div class="row">
                    <div class="col-md-1">
                      <label>Khoảng thời gian:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservation">
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-1">
                      <label for="exampleInputEmail1">Link bài viết</label>
                    </div>
                    <div class="col-md-10">
                      <input type="text" name="page_url" id="page_url" class="form-control" id="exampleInputEmail1" placeholder="Enter URL">
                      <span class="help-block" style="display:none">Link không được để trống</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-1">
                      <label>Tìm kiếm</label>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control" name="type" id="type">
                        <option value="all">Tất cả</option>
                        <option value="mobile">Số điện thoại</option>
                        <option value="email">Email</option>
                        <option value="keyword">Keyword</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-1">
                      <label for="exampleInputEmail1">Keyword</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keyword" name="keyword" id="keyword">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-1">
                      <label>Sắp xếp</label>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control" name="sort_by" id="sort_by">
                        <option value="reverse_chronological">Mới nhất</option>
                        <option value="chronological">Cũ nhất</option>
                      </select>
                  </div>
                </div>
              </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="button" onclick="getListComment(); showProcess();" class="btn btn-primary" value="Tìm kiếm">
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
                  <th>Tên khách hàng</th>
                  <th>Đi đến comment</th>
                  <th>Comment</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Time</th>
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