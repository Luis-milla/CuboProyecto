<?php
require_once'modal/modalActuEmple.php';
require_once'modal/modalAddEmple.php';
require_once'modal/modalEstadoEmple.php';
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                          <div>
                            <h4 class="card-title card-title-dash">Reparaciones</h4>
                           <p class="card-subtitle card-subtitle-dash">Lista de Reparaciones </p>
                          </div>
                          <div>
                            <button class="btn btn-primary btn btn-outline-dark btn-sm text-white mb-0 me-0" type="button" data-toggle="modal" data-target="#addEmple"><i class="mdi mdi-account-plus"></i>  Add Reparacion</button>
                          </div>
                        </div>
                        <div class="table-responsive  mt-1 modal-dialog-scrollable" style="height: 500px;">
                          <table class="table select-table">
                            <thead>
                              <tr>
                                <th>
                                  <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                  </div>
                                </th>
                                <th>Customer</th>
                                <th>Company</th>
                                <th>Progress</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex ">
                                    <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face1.jpg" alt="">
                                    <div>
                                      <h6>Brandon Washington</h6>
                                      <p>Head admin</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <h6>Company name 1</h6>
                                  <p>company type</p>
                                </td>
                                <td>
                                  <div>
                                    <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                      <p class="text-success">79%</p>
                                      <p>85/162</p>
                                    </div>
                                    <div class="progress progress-md">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </td>
                                <td><div class="badge badge-opacity-warning">In progress</div></td>
                                <td><button type="button" class="btn btn-info btn-sm text-white mb-0 me-0" data-toggle="modal" data-target="#actualizarEmple">Actualizar</button></td>
                                <td><button type="button" class="btn btn-danger btn-sm text-white mb-0 me-0" data-toggle="modal" data-target="#estadoEmple" >Estado</button></td>
                           
                              </tr>
                                <tr>
                                <td>
                                  <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex">
                                    <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
                                    <div>
                                      <h6>Katherine Butler</h6>
                                      <p>Head admin</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <h6>Company name 1</h6>
                                  <p>company type</p>
                                </td>
                                <td>
                                  <div>
                                    <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                      <p class="text-success">65%</p>
                                      <p>85/162</p>
                                    </div>
                                    <div class="progress progress-md">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </td>
                                <td><div class="badge badge-opacity-success">Completed</div></td>
                              </tr>
                            </tr>
                            <tr>
                            <td>
                              <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex">
                                <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
                                <div>
                                  <h6>Katherine Butler</h6>
                                  <p>Head admin</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6>Company name 1</h6>
                              <p>company type</p>
                            </td>
                            <td>
                              <div>
                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                  <p class="text-success">65%</p>
                                  <p>85/162</p>
                                </div>
                                <div class="progress progress-md">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td><div class="badge badge-opacity-success">Completed</div></td>
                          </tr>
                        </tr>
                        <tr>
                        <td>
                          <div class="form-check form-check-flat mt-0">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex">
                            <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
                            <div>
                              <h6>Katherine Butler</h6>
                              <p>Head admin</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6>Company name 1</h6>
                          <p>company type</p>
                        </td>
                        <td>
                          <div>
                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                              <p class="text-success">65%</p>
                              <p>85/162</p>
                            </div>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td><div class="badge badge-opacity-success">Completed</div></td>
                      </tr>
                    </tr>
                    <tr>
                    <td>
                      <div class="form-check form-check-flat mt-0">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex">
                        <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
                        <div>
                          <h6>Katherine Butler</h6>
                          <p>Head admin</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6>Company name 1</h6>
                      <p>company type</p>
                    </td>
                    <td>
                      <div>
                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                          <p class="text-success">65%</p>
                          <p>85/162</p>
                        </div>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                    <td><div class="badge badge-opacity-success">Completed</div></td>
                  </tr>
                </tr>
                <tr>
                <td>
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>
                  <div class="d-flex">
                    <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
                    <div>
                      <h6>Katherine Butler</h6>
                      <p>Head admin</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h6>Company name 1</h6>
                  <p>company type</p>
                </td>
                <td>
                  <div>
                    <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                      <p class="text-success">65%</p>
                      <p>85/162</p>
                    </div>
                    <div class="progress progress-md">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td><div class="badge badge-opacity-success">Completed</div></td>
              </tr>
            </tr>
            <tr>
            <td>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </td>
            <td>
              <div class="d-flex">
                <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
                <div>
                  <h6>Katherine Butler</h6>
                  <p>Head admin</p>
                </div>
              </div>
            </td>
            <td>
              <h6>Company name 1</h6>
              <p>company type</p>
            </td>
            <td>
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                  <p class="text-success">65%</p>
                  <p>85/162</p>
                </div>
                <div class="progress progress-md">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </td>
            <td><div class="badge badge-opacity-success">Completed</div></td>
          </tr>
        </tr>
        <tr>
        <td>
          <div class="form-check form-check-flat mt-0">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
          </div>
        </td>
        <td>
          <div class="d-flex">
            <img src="<?php echo SERVER_URL; ?>vistas/paginas/images/faces/face5.jpg" alt="">
            <div>
              <h6>Katherine Butler</h6>
              <p>Head admin</p>
            </div>
          </div>
        </td>
        <td>
          <h6>Company name 1</h6>
          <p>company type</p>
        </td>
        <td>
          <div>
            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
              <p class="text-success">65%</p>
              <p>85/162</p>
            </div>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </td>
        <td><div class="badge badge-opacity-success">Completed</div></td>
      </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>