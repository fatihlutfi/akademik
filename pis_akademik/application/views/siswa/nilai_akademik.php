<section class="content">
<!-- <a class="btn btn-danger" target="_blank" href="<?php echo base_url('siswa/print')?>"><i class="fa fa-print"></i>PRINT</a> -->
<a class="btn btn-danger" target="_blank" href="<?php echo base_url('siswa/pdf')?>"><i class="fa fa-print"></i>Print PDF</a>
    <div class="row">

        <!-- filter -->
        
        <br><div class="col-xs-5" >

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Filter Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>

                        <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $siswa['nama']?>" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas</label>

                        <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $siswa['nama_kelas']?>" class="form-control" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
    </div>
    <!-- /.row -->
    <div class="box-body">
    <h3 class="box-title">Data Siswa</h3>

    

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>MATA PELAJARAN</th>
                <th>NILAI</th>
                <th>KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($nilai as $key => $value) :
            ?>
            <tr>
            <td><?php echo $key + 1 ;?></td>
            <td><?php echo $value['nama_mapel'];?></td>
            <td><?php echo $value['nilai'];?></td>
            <td><?php echo ($value['nilai'] >= 75) ? 'LULUS' : 'TIDAK LULUS';?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
    </div>
</div>


</section>

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">