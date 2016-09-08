<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title"><??></h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Page Name</th>
                  <th>Page ID</th>
                  <th>Permission</th>
                  <th>Category</th>
                  <th>Token</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($pages['data'] as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['name'];?></td>
                    <td><?php echo $value['id'];?></td>
                    <td><?php echo implode(' - ', $value['perms'])?></td>
                    <td><?php echo $value['category'];?></td>
                    <td><?php echo substr($value['access_token'], 15, 35);?></td>
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