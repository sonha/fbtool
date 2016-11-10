    <!-- Main content -->
    <section class="content">
    <?php echo form_open('page/post'); ?>
    <div class="box box-info">
      <div class="box-body">
        <div class="row">
          <div class="col-md-6 pull-right">
            <div class="form-group">
                <label>Select Page</label>
                <select class="form-control select2" name="page_info" style="width: 100%;">
                  <?php foreach ($pages['data'] as $key => $value) { ?>
                    <option value="<?php echo $value['id'].'-'.$value['access_token'];?>"><?php echo $value['name'];?></option>
                  <?php }?>
                </select>
              </div>
          </div>
          <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Status</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Link</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Photo</a></li>
                <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Video</a></li>
                <li class="pull-right"></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <div class="form-group">
                    <label>Status</label>
                    <textarea class="form-control" name="status" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>URL</label>
                          <input type="text" name="url" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Preview Image with this link(URL)</label>
                          <input type="text" name="image_url" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Message(The main body of the post, otherwise called the status message)</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Title(Overwrites the title of the link preview)</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Description(Overwrites the description in the link preview)</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">
                          <label>Caption(Overwrites the caption under the title in the link preview)</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Image URL</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Description</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_4">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Video URL</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Title</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
          </div>
          <!-- /.col (left) -->
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- /.box -->

            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Schedule (with your timezone)</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Date:</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="date_schedule">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Time picker:</label>

                    <div class="input-group">
                      <input type="text" class="form-control timepicker" name="time_schedule">

                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-default">Back To List</button>
        <input type="submit" name="submit" class="btn btn-info pull-right" value="Sign in">
      </div>
      </div>
      </form>
    </div>
    </section>
    <!-- /.content -->
 
 