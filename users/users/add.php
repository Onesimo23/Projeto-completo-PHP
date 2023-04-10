<?php
include_once("../header.php");  ?>

        <div class="main-panel">
          <div class="content-wrapper">





            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Usuarios
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
           
			
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="users/addQuery.php"  class="form-sample">
                      <p class="card-description">  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                              <input type="text" name = "name" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contacto</label>
                            <div class="col-sm-9">
                              <input type="text" name = "contact"  class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">email</label>
							<input type="email" name = "email"  class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">username</label>
                            <div class="col-sm-9">
                              <input  type = "text" class="form-control" name ="username" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <input type="text" class="form-control" name ="password" />
                          </div>
                        </div>

                      </div>
					  
					  <button type="submit" class="btn btn-sm btn-primary"> Salvar</button>



                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>







		 </div>
			
           
					







		

<?php
include_once("../footer.php");  ?>