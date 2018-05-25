<?php

/* @var $this yii\web\View */

$this->title = 'Hoja de vida';
?>
<div class="site-index">
	<div class="clearfix">
		<div class="pull-right">
			<button class="btn btn-txt-white"><i class="material-icons">&#xE148;</i> Crear un nuevo empleado</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="panel bg-dark-30 hv-profile pull-right no-mrg">
				<div class="panel-body">
					<div class="box-header-profile">
						<div class="txt-profile">
							<h2>Jhon Doe</h2>
							<div class="line-label"></div>
							<span class="cc txt__light-50">C.C. 145892107</span>
						</div>
						<div class="box-btns-profile btn-group-sm">
							<button class="btn btn-blue-A700 btn-fab btn-profile"><i class="material-icons">&#xE886;</i></button>
							<button class="btn btn-danger btn-fab btn-profile"><i class="material-icons">&#xE872;</i></button>
						</div>
					</div>
					<div class="box-img-profile">
						<img src="img/avatar.png" alt="imagen perfil" class="img-profile">
					</div>
				</div>
			</div>
			<div id="tabsHv" class="tab-content">
				<div id="personal" class="tab-pane fade active in">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Personal</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group select-m">
												<label class="control-label" for="tipoDoc">
													Tipo de documento
												</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">C.C.</li>
														<li data-value="2">C.E.</li>
														<li data-value="3">T.I.</li>
														<li data-value="4">NIT</li>
													</ul>
													<input type="hidden" id="tipoDoc" name="myOptions" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="documento" class="control-label">Documento</label>
												<input type="text" id="documento" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="digVerificacion" class="control-label">Dig. verificación</label>
												<input type="text" id="digVerificacion" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ciudadExp" class="control-label">Ciudad expedición</label>
												<input type="text" id="ciudadExp" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechanacimiento" class="control-label">Fecha nacimiento</label>
												<input type="text" id="fechanacimiento" class="form-control">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group label-floating">
												<label for="ciudadnacimiento" class="control-label">Ciudad nacimiento</label>
												<input type="text" id="ciudadnacimiento" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label class="control-label" for="genero">
													Género
												</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Masculino</li>
														<li data-value="2">Femenino</li>
													</ul>
													<input type="hidden" id="genero" name="myOptions2" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label class="control-label" for="RH">
													Grupo sanguineo
												</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">A+</li>
														<li data-value="2">A-</li>
														<li data-value="3">B+</li>
														<li data-value="4">B-</li>
														<li data-value="5">AB+</li>
														<li data-value="6">AB-</li>
														<li data-value="7">O+</li>
														<li data-value="8">O-</li>
													</ul>
													<input type="hidden" id="RH" name="myOptions3" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="direccion" class="control-label">Dirección</label>
												<input type="text" id="direccion" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="direccionAlt" class="control-label">Dirección alterna</label>
												<input type="text" id="direccionAlt" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="barrio" class="control-label">Barrio</label>
												<input type="text" id="barrio" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ciudad" class="control-label">Ciudad</label>
												<input type="text" id="ciudad" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="telefono" class="control-label">Teléfono</label>
												<input type="text" id="telefono" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="telefonoAlt" class="control-label">Teléfono Alterno</label>
												<input type="text" id="telefonoAlt" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="celular" class="control-label">Celular</label>
												<input type="text" id="celular" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="email" class="control-label">E-mail</label>
												<input type="text" id="email" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label class="control-label" for="nivelEstudio">
													Nivel de estudio
												</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Bachiller</li>
														<li data-value="2">Técnico</li>
														<li data-value="3">Tecnológico</li>
														<li data-value="4">Universitario</li>
													</ul>
													<input type="hidden" id="nivelEstudio" name="myOptions4" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label class="control-label" for="estadoCivil">
													Estado Civil
												</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Soltero</li>
														<li data-value="2">Casado</li>
														<li data-value="3">Divorciado</li>
														<li data-value="4">Separado</li>
														<li data-value="5">Unión libre</li>
														<li data-value="6">Viudo</li>
													</ul>
													<input type="hidden" id="estadoCivil" name="myOptions5" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="conyugue" class="control-label">Conyugue</label>
												<input type="text" id="conyugue" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="nHijos" class="control-label">Número de hijos</label>
												<input type="text" id="nHijos" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="libretaM" class="control-label">Libreta militar</label>
												<input type="text" id="LibretaM" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="claseLM" class="control-label">Clase</label>
												<input type="text" id="claseLM" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="distritoM" class="control-label">Distrito militar</label>
												<input type="text" id="distritoM" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="licConduccion" class="control-label">Lic. conducción</label>
												<input type="text" id="licConduccion" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="venceLicCond" class="control-label">Vence en</label>
												<input type="text" id="venceLicCond" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="certJudicial" class="control-label">Certificado judicial</label>
												<input type="text" id="certJudicial" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="vencecertJud" class="control-label">Vence en</label>
												<input type="text" id="vencecertJud" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="ubicacion" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Ubicación</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="empresa" class="control-label">Empresa</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">AFQ SAS</li>
														<li data-value="2">ITTASA SAS</li>
														<li data-value="3">Talentos & Tecnología</li>
													</ul>
													<input id="empresa" type="hidden" name="ubicOptions" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="distrito" class="control-label">Distrito</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Administración central</li>
														<li data-value="2">Bogotá</li>
														<li data-value="3">Caribe</li>
													</ul>
													<input id="distrito" type="hidden" name="ubicOptions2" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="unidadOrg" class="control-label">Unidad Org.</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">General</li>
														<li data-value="2">General</li>
														<li data-value="3">General</li>
													</ul>
													<input id="unidadOrg" type="hidden" name="ubicOptions3" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="centroCosto" class="control-label">Centro de costo</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">General</li>
														<li data-value="2">General</li>
														<li data-value="3">General</li>
													</ul>
													<input id="centroCosto" type="hidden" name="ubicOptions4" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ciudadTrb" class="control-label">Ciudad de trabajo</label>
												<input type="text" id="ciudadTrb" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="sedeTrb" class="control-label">Sede de trabajo</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Sede 1</li>
														<li data-value="2">sede 2</li>
														<li data-value="3">Sede 3</li>
													</ul>
													<input id="sedeTrb" type="hidden" name="ubicOptions5" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="ocupacion" class="control-label">Ocupación</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Desarrollo</li>
														<li data-value="2">Soporte</li>
														<li data-value="3">Diseño</li>
													</ul>
													<input id="ocupacion" type="hidden" name="ubicOptions4" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="salario" class="control-label">Salario</label>
												<input type="text" id="salario" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="laboral" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Laboral</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="contrato" class="control-label">Contrato</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Practicante universitario</li>
														<li data-value="2">De aprendizaje</li>
														<li data-value="3">Prestación de servicios</li>
														<li data-value="4">Fijo</li>
														<li data-value="4">Indefinido</li>
													</ul>
													<input id="contrato" type="hidden" name="LabOptions" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="formaPago" class="control-label">Forma de pago</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Semanal</li>
														<li data-value="2">Quincenal</li>
														<li data-value="3">Mensual</li>
													</ul>
													<input id="formaPago" type="hidden" name="labOptions2" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="turno" class="control-label">Turno</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Normal</li>
														<li data-value="2">Nocturno</li>
													</ul>
													<input id="turno" type="hidden" name="labOptions3" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="estado" class="control-label">Estado</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Activo</li>
														<li data-value="2">Inactivo</li>
														<li data-value="3">Inactivo temporalmente</li>
													</ul>
													<input id="estado" type="hidden" name="labOptions4" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="fechaIngreso" class="control-label">Fecha de ingreso</label>
												<input type="text" id="fechaIngreso" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ultIngreso" class="control-label">Último ingreso</label>
												<input type="text" id="ultIngreso" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="iniContrato" class="control-label">Inicio contrato</label>
												<input type="text" id="iniContrato" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="venceContrato" class="control-label">Vence contrato</label>
												<input type="text" id="venceContrato" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ingresoL50" class="control-label">Ingreso ley 50</label>
												<input type="text" id="ingresoL50" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ultNomina" class="control-label">Última nómina</label>
												<input type="text" id="ultNomina" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="jefeInmd" class="control-label">Jefe inmediato</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Jefe 1</li>
														<li data-value="2">Jefe 2</li>
														<li data-value="3">Jefe 3</li>
														<li data-value="4">Jefe 4</li>
													</ul>
													<input id="jefeInmd" type="hidden" name="labOptions4" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="modalidad" class="control-label">Modalidad</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Modalidad 1</li>
														<li data-value="2">Modalidad 2</li>
														<li data-value="3">Modalidad 3</li>
													</ul>
													<input id="modalidad" type="hidden" name="labOptions5" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="cobertSalud" class="control-label">Cobertura salud</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Clásica</li>
														<li data-value="2">Familiar</li>
													</ul>
													<input id="cobertSalud" type="hidden" name="labOptions6" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="cajaComp" class="control-label">Caja de compensación</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">caja 1</li>
														<li data-value="2">caja 2</li>
														<li data-value="3">caja 3</li>
														<li data-value="4">caja 4</li>
														<li data-value="5">caja 5</li>
													</ul>
													<input id="cajaComp" type="hidden" name="labOptions7" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="porcRetencion" class="control-label">Porcentaje de Retención</label>
												<input type="text" id="porcRetencion" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel hv-profile pull-right">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Aprendices</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="fechaEtpLect" class="control-label">Fecha etapa lectiva</label>
												<input type="text" id="fechaEtpLect" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="fechaEtpProdct" class="control-label">Fecha etapa producto</label>
												<input type="text" id="fechaEtpProdct" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel hv-profile pull-right">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Jubilación</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="resNro" class="control-label">Resolución Nro.</label>
												<input type="text" id="resNro" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechaRes" class="control-label">Fecha resolución</label>
												<input type="text" id="fechaRes" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechaJub" class="control-label">Fecha jubilación</label>
												<input type="text" id="fechaJub" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="panel hv-profile pull-right">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Seguridad social</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="centroTrb" class="control-label">Centro de trabajo</label>
												<input type="text" id="centroTrb" class="form-control">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group label-floating">
												<label for="centroTrb2" class="control-label"></label>
												<input type="text" id="centroTrb2" class="form-control">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group label-floating">
												<label for="centroTrb3" class="control-label"></label>
												<input type="text" id="centroTrb3" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="nroISS" class="control-label">Número ISS</label>
												<input type="text" id="nroISS" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="familiares" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Familiares</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="codPariente" class="control-label">Código pariente</label>
												<input type="text" id="codPariente" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="tipoDocPariente" class="control-label">Tipo documento</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">C.C.</li>
														<li data-value="2">C.E.</li>
														<li data-value="3">T.I.</li>
														<li data-value="4">R.C.</li>
														<li data-value="5">NUIP</li>
													</ul>
													<input id="tipoDocPariente" type="hidden" name="famOptions1" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="numDocPariente" class="control-label">Número de documento</label>
												<input type="text" id="numDocPariente" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="nomPariente" class="control-label">Nombre</label>
												<input type="text" id="nomPariente" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="apePariente" class="control-label">Apellido</label>
												<input type="text" id="apePariente" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="parentesco" class="control-label">Parentesco</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Padres</li>
														<li data-value="2">Abuelos</li>
														<li data-value="3">Tíos</li>
														<li data-value="4">Hermanos</li>
														<li data-value="5">Hijos</li>
													</ul>
													<input id="parentesco" type="hidden" name="famOptions2" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="generoPariente" class="control-label">Género</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Masculino</li>
														<li data-value="2">Femenino</li>
													</ul>
													<input id="generoPariente" type="hidden" name="famOptions3" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="fechNacimPariente" class="control-label">Fecha de nacimiento</label>
												<input type="text" id="fechNacimPariente" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="lugNacimPariente" class="control-label">Lugar de nacimiento</label>
												<input type="text" id="lugNacimPariente" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="edadPariente" class="control-label">Edad</label>
												<input type="text" id="edadPariente" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label class="control-label" for="estadoCivilPariente">
													Estado Civil
												</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Soltero</li>
														<li data-value="2">Casado</li>
														<li data-value="3">Divorciado</li>
														<li data-value="4">Separado</li>
														<li data-value="5">Unión libre</li>
														<li data-value="6">Viudo</li>
													</ul>
													<input type="hidden" id="estadoCivilPariente" name="famOptions4" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="" class="control-label">Estudia Actualmente?</label>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Si
												  </label>
												</div>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													No
												  </label>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="nivelEstPariente" class="control-label">Nivel Educativo</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Bachiller</li>
														<li data-value="2">Técnico</li>
														<li data-value="3">Tecnológico</li>
														<li data-value="4">Universitario</li>
													</ul>
													<input type="hidden" id="nivelEstPariente" name="famOptions5" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="ocupPariente" class="control-label">Ocupación</label>
												<input type="text" id="ocupPariente" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="tipoVinculo" class="control-label">Tipo de vinculo</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Beneficiario</li>
														<li data-value="2">Dependiente</li>
														<li data-value="3">Ambos</li>
													</ul>
													<input type="hidden" id="tipoVinculo" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="" class="control-label">Zona UPC</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Zona 1</li>
														<li data-value="2">Zona 2</li>
														<li data-value="3">Zona 3</li>
													</ul>
													<input type="hidden" id="zonaUPC" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="" class="control-label">Beneficiario Auxilio?</label>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="options1Radios" id="options1Radios1" value="option1" checked="">
													Si
												  </label>
												</div>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="options1Radios" id="options1Radios2" value="option2">
													No
												  </label>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="nivelAuxilio" class="control-label">Nivel Auxilio</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">1</li>
														<li data-value="2">2</li>
														<li data-value="3">3</li>
													</ul>
													<input type="hidden" id="nivelAuxilio" name="famOptions6" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="" class="control-label">Discapacitado?</label>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="options2Radios" id="options2Radios1" value="option1" checked="">
													Si
												  </label>
												</div>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="options2Radios" id="options2Radios2" value="option2">
													No
												  </label>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="" class="control-label">Termina relación?</label>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="options2Radios" id="options2Radios1" value="option1" checked="">
													Si
												  </label>
												</div>
												<div class="radio radio-primary">
												  <label>
													<input type="radio" name="options2Radios" id="options2Radios2" value="option2">
													No
												  </label>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="fechaTerRelacion" class="control-label">Fecha</label>
												<input type="text" id="fechaTerRelacion" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="motivo" class="control-label">Motivo</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Motivo 1</li>
														<li data-value="2">Motivo 2</li>
														<li data-value="3">Motivo 3</li>
													</ul>
													<input type="hidden" id="motivo" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="grupos" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Grupos</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Código</th>
															<th>Nombre</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>01</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Código</th>
															<th>Nombre</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>01</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="pago" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Formas de pago</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="porcEfectivo" class="control-label">Porcentaje Efectivo</label>
												<input type="text" id="porcEfectivo" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="porcCheque" class="control-label">Porcentaje Cheque</label>
												<input type="text" id="porcCheque" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="porcConsignado" class="control-label">Porcentaje Consignado</label>
												<input type="text" id="porcConsignado" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="motivo" class="control-label">Banco</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Banco 1</li>
														<li data-value="2">Banco 2</li>
														<li data-value="3">Banco 3</li>
													</ul>
													<input type="hidden" id="banco" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="sucursalBanco" class="control-label">Sucursal</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Sucursal 1</li>
														<li data-value="2">Sucursal 2</li>
														<li data-value="3">Sucursal 3</li>
													</ul>
													<input type="hidden" id="sucursalBanco" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechApertCuenta" class="control-label">Fecha apertura cuenta</label>
												<input type="text" id="fechApertCuenta" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="nroCuenta" class="control-label">Numero de Cuenta</label>
												<input type="text" id="nroCuenta" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="tipoCuenta" class="control-label">Tipo de cuenta</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Corriente</li>
														<li data-value="2">Ahorros</li>
													</ul>
													<input type="hidden" id="tipoCuenta" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="estadoCuenta" class="control-label">Estado</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Activa</li>
														<li data-value="2">Inactiva</li>
													</ul>
													<input type="hidden" id="estadoCuenta" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="historicos" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Históricos</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Encabezado 1</th>
															<th>Encabezado 2</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>01</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="morfologico" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Datos Morfológicos</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="estatura" class="control-label">Estatura (cm)</label>
												<input type="text" id="estatura" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="peso" class="control-label">Peso (kg)</label>
												<input type="text" id="peso" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="contextura" class="control-label">Contextura</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Delgada</li>
														<li data-value="2">Normal</li>
														<li data-value="3">Robusta</li>
													</ul>
													<input type="hidden" id="contextura" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="colorPiel" class="control-label">Color de piel</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Clara</li>
														<li data-value="2">Media</li>
														<li data-value="3">Oscura</li>
													</ul>
													<input type="hidden" id="colorPiel" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="colorCabello" class="control-label">Color de cabello</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Castaño</li>
														<li data-value="2">Rubio</li>
														<li data-value="3">Oscuro</li>
													</ul>
													<input type="hidden" id="colorCabello" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group select-m">
												<label for="colorOjos" class="control-label">Color de Ojos</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Azúl</li>
														<li data-value="2">Verde</li>
														<li data-value="3">Miel</li>
														<li data-value="4">Café</li>
														<li data-value="5">Negro</li>
													</ul>
													<input type="hidden" id="colorOjos" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="entidades" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Entidades / Fondos</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="fondo" class="control-label">Fondo</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Fondo 1</li>
														<li data-value="2">Fondo 2</li>
														<li data-value="3">Fondo 3</li>
														<li data-value="4">Fondo 4</li>
														<li data-value="5">Fondo 5</li>
													</ul>
													<input type="hidden" id="fondo" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="conceptoFondo" class="control-label">Concepto</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Concepto 1</li>
														<li data-value="2">Concepto 2</li>
														<li data-value="3">Concepto 3</li>
														<li data-value="4">Concepto 4</li>
														<li data-value="5">Concepto 5</li>
													</ul>
													<input type="hidden" id="conceptoFondo" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechIngresoFondo" class="control-label">Fecha ingreso</label>
												<input type="text" id="fechIngresoFondo" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechRetiroFondo" class="control-label">Fecha retiro</label>
												<input type="text" id="fechRetiroFondo" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group label-floating">
												<label for="fechTrasladoFondo" class="control-label">Fecha Traslado</label>
												<input type="text" id="fechTrasladoFondo" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="tipoAporte" class="control-label">Tipo de aporte</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Seguridad social</li>
														<li data-value="2">Voluntario</li>
														<li data-value="3">Fuera de seguridad social</li>
													</ul>
													<input type="hidden" id="tipoAporte" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="aporteVolEmpleado" class="control-label">Aporte voluntario empleado</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Porcentaje</li>
														<li data-value="2">Valor</li>
														<li data-value="3">No aplica</li>
													</ul>
													<input type="hidden" id="aporteVolEmpleado" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="valorApteVolEmpleado" class="control-label">Valor</label>
												<input type="text" id="valorApteVolEmpleado" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="aporteVolEmpresa" class="control-label">Aporte voluntario empresa</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">Porcentaje</li>
														<li data-value="2">Valor</li>
														<li data-value="3">No aplica</li>
													</ul>
													<input type="hidden" id="aporteVolEmpresa" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group label-floating">
												<label for="valorApteVolEmpresa" class="control-label">Valor</label>
												<input type="text" id="valorApteVolEmpresa" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="line-dashed"></div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="tarifaAltoRiesgoPension" class="control-label">Tarifa alto riesgo pensión</label>
												<input type="text" id="tarifaAltoRiesgoPension" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="cuentaApteAFC" class="control-label">Cuenta aporte AFC</label>
												<input type="text" id="cuentaApteAFC" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="adicional" class="tab-pane fade">
					<div class="panel hv-profile pull-right mrg__top-40">
						<div class="panel-body">
							<div class="box-body-profile">
								<h4 class="txt-category-profile">Información adicional</h4>
								<div class="line-label"></div>
								<form action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="tallaCamisa" class="control-label">Talla camisa</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">XS</li>
														<li data-value="2">S</li>
														<li data-value="3">M</li>
														<li data-value="4">L</li>
														<li data-value="5">XL</li>
														<li data-value="6">XXL</li>
													</ul>
													<input type="hidden" id="tallaCamisa" value="1" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group select-m">
												<label for="calzado" class="control-label">Calzado</label>
												<div class="mad-select select-f-w">
													<ul>
														<li data-value="1">34</li>
														<li data-value="2">35</li>
														<li data-value="3">37</li>
														<li data-value="4">38</li>
														<li data-value="5">39</li>
														<li data-value="6">40</li>
														<li data-value="7">41</li>
														<li data-value="8">42</li>
														<li data-value="9">43</li>
													</ul>
													<input type="hidden" id="calzado" value="1" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="codJDE" class="control-label">Código JDE</label>
												<input type="text" id="codJDE" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="cod2JDE" class="control-label">Campo 2</label>
												<input type="text" id="cod2JDE" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="cod3JDE" class="control-label">Campo 3</label>
												<input type="text" id="cod3JDE" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="cod4JDE" class="control-label">Campo 4</label>
												<input type="text" id="cod4JDE" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group label-floating">
												<label for="cod5JDE" class="control-label">Campo 5</label>
												<input type="text" id="cod5JDE" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="panel panel-md-table">
				<div class="panel-heading">
					<h4>Empleados</h4>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nombre</th>
								<th>Cédula</th>
								<th>Cargo</th>
								<th>Fecha de ingreso</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs nav-hv">
		<li class="nav__item active"><a class="item__link" href="#personal" data-toggle="tab"><i class="material-icons">&#xE87C;</i>Personal</a></li>
		<li class="nav__item"><a class="item__link" href="#ubicacion" data-toggle="tab"><i class="material-icons">&#xE87A;</i>Ubicación</a></li>
		<li class="nav__item"><a class="item__link" href="#laboral" data-toggle="tab"><i class="material-icons">&#xE8F9;</i>Laboral</a></li>
		<li class="nav__item"><a class="item__link" href="#familiares" data-toggle="tab"><i class="material-icons">&#xE8D3;</i>Familiares</a></li>
		<li class="nav__item"><a class="item__link" href="#grupos" data-toggle="tab"><i class="material-icons">&#xE335;</i>Grupos</a></li>
		<li class="nav__item"><a class="item__link" href="#pago" data-toggle="tab"><i class="material-icons">&#xE227;</i>Pago</a></li>
		<li class="nav__item"><a class="item__link" href="#historicos" data-toggle="tab"><i class="material-icons">&#xE889;</i>Históricos</a></li>
		<li class="nav__item"><a class="item__link" href="#morfologico" data-toggle="tab"><i class="material-icons">&#xE84E;</i>Morfológico</a></li>
		<li class="nav__item"><a class="item__link" href="#entidades" data-toggle="tab"><i class="material-icons">&#xE0AF;</i>Entidades</a></li>
		<li class="nav__item"><a class="item__link" href="#adicional" data-toggle="tab"><i class="material-icons">&#xE87B;</i>Adicional</a></li>
	</ul>
</div>
