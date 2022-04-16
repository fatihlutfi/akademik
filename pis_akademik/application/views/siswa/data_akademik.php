

    <br><br><section class="content">
    <div class="row">

        <!-- filter -->
        <div class="col-xs-5">

          <div class="box box-info">
            <div class="box-header with-border">
            <table class="table table-striped table-bordered table-hover table-full-width dataTable">
              <h3 class="box-title">Data Akademik Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <div class="box-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">NIM</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo $siswa['nim']?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">NAMA</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo $siswa['nama']?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">KELAS</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo $siswa['nama_kelas']?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">JENIS KELAMIN</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo ($siswa['gender'] = 'L') ? 'Laki-Laki' : 'Perempuan';?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">TEMPAT LAHIR</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo $siswa['tempat_lahir']?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">TANGGAL LAHIR</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo $siswa['tanggal_lahir']?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">NAMA AGAMA</label>
                                <div class="col-sm-9">
                                <input type="text" readonly value="<?php echo $siswa['nama_agama']?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">FOTO</label>
                                <div class="col-sm-9">
                                <img src="<?php echo base_url()."/uploads/".$siswa['foto']; ?>" width="150px">
                                <!-- <input type="text" readonly value="<?php echo $siswa['foto']?>" class="form-control" > -->
                                </div>
                            </div>
                        </div>
                    </div>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
    </div>

    