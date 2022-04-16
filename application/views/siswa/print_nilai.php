<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="row">

        <!-- filter -->
        <div class="col-xs-5">
            <div class="container">
            <div class="box box-info ">
                <div class="box-header with-border">
                <h3 class="box-title">Nilai Siswa</h3>
                </div>
                <!-- /.box-header -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama :</label>      
                    <input type="text" readonly value="<?php echo $siswa['nama']?>" class="form-control" >    
                </div>

                <br><br><div class="form-group">
                    <label class="col-sm-2 control-label">Kelas :</label>
                    <input type="text" readonly value="<?php echo $siswa['nama_kelas']?>" class="form-control" >
                </div>
                    </div>
                </div>
                </div>
                <!-- /.box-body -->
            </div>
        <!-- /.box -->
        </div>  
    <br><br><br><div class="box-body"></div>
        <table  border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>MATA PELAJARAN</th>
                <th>NILAI</th>
                <th>KETERANGAN</th>
            </tr>
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
        </table>
    </div>
            <script type="text/javascript">
                window.print();
            </script>
    </body>
</html>