<section class="content">
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
                  <th>Page Name</th>
                  <th>Page ID</th>
                  <th>Object ID</th>
                  <th>Status</th>
                  <th>Active</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($scheduled as $key => $value) { ?>
                <tr>
                  <td><a href="https://www.facebook.com/<?php echo $value->object_id;?>" target="_blank"><?php echo $value->object_id;?></a></td>
                  <td><?php echo $value->content?></td>
                  <td><?php echo $value->active;?></td>
                  <td>-</td>
                  <td><span class="label <?php echo ($value->active == 1) ? 'label-success' : 'label-warning';?>"><?php echo ($value->active == 1) ? 'Posted' : 'Pending';?></span></td>
                </tr>
                <?php } ?>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Page Name</th>
                  <th>Page ID</th>
                  <th>Object ID</th>
                  <th>Status</th>
                  <th>Active</th>
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