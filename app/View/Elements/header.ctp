			<div class="row">
			  <div class="col-md-4">
			    <h1><?php echo $this->Html->link(
						$this->Html->image('logo.png', array('alt' => "ProjectName: Sistema Web de Apoyo a las Comunicaciones para Promover la Ejecución de Proyectos de Servicio Comunitario en las Universidades.", 'border' => '0')),
						'/',
						array('escape' => false)
					);
				?></h1>
			  </div>
				<div class="col-md-8">
					<div class="user-options pull-right">
					    <form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only" for="formUsername">Correo Electr&oacute;nico</label>
								<input type="email" class="form-control" id="formUsername" placeholder="Correo Electr&oacute;nico">
							</div>
							<div class="form-group">
								<label class="sr-only" for="formPassword">Contrase&ntilde;a</label>
								<input type="password" class="form-control" id="formPassword" placeholder="Contrase&ntilde;a">
							</div>
					      	<button type="submit" class="btn btn-default">Iniciar Sesi&oacute;n</button>
					    </form>
				    </div>
				</div>
			</div>