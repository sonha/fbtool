<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title"><??></h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php echo form_open('user/list_page'); ?>
                 <div class="form-group">
                  <div class="row">
                    <div class="col-md-1">
                      <label>Tìm nội dung theo từ khóa</label>
                    </div>
                    <div class="col-md-4">
                       <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-facebook-square"></i>
                          </div>
                          <input type="text" name="search_name" class="form-control" placeholder="Nhập vào từ khóa cần tìm ...">
                        </div>
                      
                    </div>
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary" name="submit" value="Tìm kiếm">
                    </div>
                </div>
                </div>
                 </form>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Page Name</th>
                  <th>Image</th>
                  <th>Page ID</th>
                  <th>Permission</th>
                  <th>Category</th>
                  <th>Token</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($pages['data'] as $key => $value) { ?>
                  <tr>
                    <td><a href="https://www.facebook.com/<?php echo $value['id'];?>" target="_blank"><?php echo $value['name'];?></a></td>
                    <td><img src="<?php echo $value['other']['picture']['data']['url'];?>"></td>
                    <td><?php echo $value['id'];?></td>
                    <td><?php echo isset($value['perms']) ? implode(' - ', $value['perms']) : '';?></td>
                    <td><?php echo isset($value['category']) ? $value['category'] : '';?></td>
                    <td><?php echo isset($value['access_token']) ? substr($value['access_token'], 15, 35) : '';?></td>
                  </tr>
                <?php } ?>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>