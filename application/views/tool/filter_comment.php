<section class="content">
<?php echo form_open('tool/filter'); ?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Thời gian</label>
                  <select class="form-control" name="search_time" id="search_time">
                    <option value="0">Tất cả</option>
                    <option value="1">Tùy chỉnh</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Link bài viết</label>
                  <input type="text" name="page_url" id="page_url" class="form-control" id="exampleInputEmail1" placeholder="Enter URL">
                </div>
                <div class="form-group">
                  <label>Tìm kiếm</label>
                  <select class="form-control" name="type" id="type">
                    <option value="all">Tất cả</option>
                    <option value="mobile">Số điện thoại</option>
                    <option value="email">Email</option>
                    <option value="keyword">Keyword</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keyword</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keyword" name="keyword" id="keyword">
                </div>
                <div class="form-group">
                  <label>Sắp xếp</label>
                  <select class="form-control" name="sort_by" id="sort_by">
                    <option value="reverse_chronological">Mới nhất</option>
                    <option value="chronological">Cũ nhất</option>
                  </select>
                </div>
              </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="button" onclick="getListComment(); showProcess();" class="btn btn-primary" value="Tìm kiếm">
                <input type="button" onclick="clearData();" class="btn btn-default" value="Clear data">
              </div>
              <span class="process" style="display: none;"><img src="<?php echo base_url() ?>assets/images/process.gif" title="process" data-pin-nopin="true"></span>
            </form>
          </div>
        </div>
      </div>
      <p id="title_result" style="display: none;"></p>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">List Group</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên khách hàng</th>
                  <th>Đi đến comment</th>
                  <th>Comment</th>
                </tr>
                </thead>
                <tbody id="data_result">
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      </form>
    </section>