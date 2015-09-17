

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
              
              <p>Te damos la bienvenida al panel de administración y edición de contenido <small><?php 
                      $resultado = $this->usuario_model->getUsuario($this->session->userdata('username'));
                      echo ucfirst(($resultado->first_row()->nombre));
                     ?></small></p>
              
            </div><!-- /.col -->

            <div class="col-md-4">
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
      