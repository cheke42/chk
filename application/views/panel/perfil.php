

      <!-- Content Wrapper. Contains page content -->
      <div id="content" class="content-wrapper">
        

        <section class="content-header">
          <h1>
            Administración de Perfil
            <small><?php 
                      echo ($this->session->userdata('username'));
                     ?></small>
          </h1>
        </section>
        </section><!-- /.content -->

                <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          
        

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="<?php echo site_url("login/update"); ?>" method="POST">
                      <div class="form-group text-center">
                        <img src="<?php echo (base_url() . 'assets/img/usuarios/' . ($this->session->userdata('username')) .'/perfil.jpg') ?>" class="img-thumbnail img-responsive" alt="Super Mario Bros.®" width="304" height="236"> 
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" id="input-username" value="<?php echo ($this->session->userdata('username')); ?> " readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nuevo-nombre" id="nuevo-nombre" value="<?php 
                      $resultado = $this->usuario_model->getUsuario($this->session->userdata('username'));
                      echo(($resultado->first_row()->nombre));?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Apellido</label>
                        <input type="text" class="form-control" name="nuevo-apellido" id="nuevo-apellido" value="<?php 
                      $resultado = $this->usuario_model->getUsuario($this->session->userdata('username'));
                      echo(($resultado->first_row()->apellido));?>">
                      </div>
                      <div class="text-right">
                        <button type="submit" class="btn btn-info">Guardar</button>  
                      </div>
                      
                    </form>
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Inventory</span>
                  <span class="info-box-number">5,200</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Mentions</span>
                  <span class="info-box-number">92,050</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Downloads</span>
                  <span class="info-box-number">114,381</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Direct Messages</span>
                  <span class="info-box-number">163,921</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
      

