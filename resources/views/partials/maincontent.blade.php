<section class="content">

          <!-- 
          Your Page Content Here 
          -->

          <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Crear / Editar Cuota</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <!-- form role="form" class="form-inline"-->
                {!! Form::open(['route' => 'cuota.store', 'method' => 'POST', 'class' => 'form-inline']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre</label>
                      <input type="text" class="form-control" id="txnom" name="nombre" placeholder="Micuota" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Cantidad</label>
                      <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-dollar"></i>
                      </span>
                      <input type="text" class="form-control" id="txcan" name="cantidad" placeholder="100.00" >
                  </div>
                    </div>
                    <div class="form-group">
                      <label for="sbmod">Modalidad</label>
                      <select class="form-control" name="modalidad" id="sbmod">
                        <option value="mensual">Mensual</option>
                        <option value="trimestral">Trimestral</option>
                        <option value="semestral">Semestral</option>
                        <option value="anual">Anual</option>
                      </select>
                    </div>
                    <!-- div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input id="exampleInputFile" type="file">
                      <p class="help-block">Example block-level help text here.</p>
                    </div -->
                    <br/>
                    <div align="center">
                      <label>
                        <input type="checkbox"> Penalizaciones
                      </label>
                    </div>
                    
                    <div class="box"> <!-- Penalizciones -->
                      <div class="form-group">
                        <label for="sbmod">Tipo</label>
                        <select class="form-control" name="tipo" id="sbmod">
                          <option>Interés compuesto</option>
                          <option>Interés simple</option>
                          <option>Cantidad fija</option>
                        </select>
                      </div>
                    </div>

                    <div align="center">
                      <label>
                        <input type="checkbox"> Descuentos
                      </label>
                    </div>
                    <div class="box"> <!-- Descuentos -->

                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
              </div>

        </section>