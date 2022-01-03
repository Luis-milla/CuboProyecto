<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
                        
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Agregar Libro</h4>
                  <form autocomplete="" id="form_add" class="form-sample">
                    <p class="card-description">
                      Informacion necesaria del libro
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nombre</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" require id="nombre" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Apellido</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="apellido" />
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Cargo</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="cargo">
                              <option value="1">Administrador</option>
                              <option value="2">Bibliotecario</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Correo</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="email" id="mail" placeholder="vaz@gmail.com"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contraseña</label>
                          <div class="col-sm-9">
                            <input type="password" id="contra" class="form-control" placeholder="contraseña..." />
                          </div>
                        </div>
                      </div>
                     </div>
                      
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">confirmar contraseña</label>
                          <div class="col-sm-9">
                            <input type="password" id="confirm" class="form-control" placeholder="confirmar..." />
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success me-2" id="save">Agregar</button>
                    <button type="submit" class="btn btn-success me-2" id="cancel">Cancelar</button>
                    
                    </div>
                    
                  </form>
                </div>
              </div>
           </div>
          </div>
        </div>
        <!--Aqui se van a filtrarlos datos -->
        <script src="<?php echo SERVER_URL;?>></script>
