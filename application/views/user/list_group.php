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
                  <th>Group Name</th>
                  <th>Group ID</th>
                  <th>Privacy</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($groups['data'] as $key => $value) { ?>
                <tr>
                  <td><a href="https://www.facebook.com/groups/<?php echo $value['id'];?>" target="_blank"><?php echo $value['name'];?></a></td>
                  <td><?php echo $value['id'];?></td>
                  <td><?php echo $value['privacy'];?></td>
                  <td>-</td>
                  <td>X</td>
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