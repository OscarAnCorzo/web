<?PHP

	function estilo()
	{
		echo '<link rel="stylesheet" href="css/estilo.css">';
	}

	function encabezado(){
		if(isset($_SESSION['rol'])){
			
			if($_SESSION['rol'] == 'administrador'){
				encabezado_admin2();
			}else
				if($_SESSION['rol'] == 'empleado'){
					encabezado_empleado2();
				}else encabezado_cliente2();

		}else encabezado1();
	}
	
	function encabezado1(){

		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"> <span class="icon-home3" style="color:;"></span> Inicio </a></li>
							
						<li class="de b" ><a href="modelos.php" class="co"> <span class="icon-images"></span> Modelos </a>
							<ul>
								<li><a href="modelos.php#niña" id="subcajas" class="co"> Niña </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#dama" id="subcajas" class="co"> Dama </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#caballero" id="subcajas" class="co"> Caballero </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="catalogo.php" class="co"><span class="icon-book"></span> Catalogos </a>
							<ul>
								<li><a href="catalogo.php" id="subcajas" class="co"> Invierno-15 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-16 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Otoño-16 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Verano-17 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-18 </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="acerca.php" class="co"><span class="icon-users"></span> Acerca de nosotros </a>
							<ul>
								<li><a href="acerca.php" id="subcajas" class="co"> Visión </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="acerca.php" id="subcajas" class="co"> Misión </a></li>
							</ul>
						</li>

						<li class="iz a" ><a href="usuarios.php" id="uno" class="co"><span class="icon-enter"></span> Ingreso </a></li>

						<li class="iz a"><a href="registro_cliente-js.php" id="dos" class="co"><span class="icon-file-text"></span> Registrar </a></li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="modelos.php" id="subcajas" class="co"><span class="icon-images"></span> Modelos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="catalogo.php" id="subcajas" class="co"><span class="icon-book"></span> Catalogos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="acerca.php" id="subcajas" class="co"> <span class="icon-users"></span> Nosotros </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="registro_cliente-js.php" id="subcajas" class="co"><span class="icon-file-text"></span> Registrar </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="usuarios.php" id="subcajas" class="co"><span class="icon-enter"></span> Ingreso </a></li>
							</ul>
						</li>


					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

	function encabezado_cliente(){
		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"> <span class="icon-home3" style="color:;"></span> Inicio </a></li>
							
						<li class="de b" ><a href="modelos.php" class="co"> <span class="icon-images"></span> Modelos </a>
							<ul>
								<li><a href="modelos.php#niña" id="subcajas" class="co"> Niña </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#dama" id="subcajas" class="co"> Dama </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#caballero" id="subcajas" class="co"> Caballero </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="catalogo.php" class="co"><span class="icon-book"></span> Catalogos </a>
							<ul>
								<li><a href="catalogo.php" id="subcajas" class="co"> Invierno-15 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-16 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Otoño-16 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Verano-17 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-18 </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="acerca.php" class="co"><span class="icon-users"></span> Acerca de nosotros </a>
							<ul>
								<li><a href="acerca.php" id="subcajas" class="co"> Visión </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="acerca.php" id="subcajas" class="co"> Misión </a></li>
							</ul>
						</li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="modelos.php" id="subcajas" class="co"><span class="icon-images"></span> Modelos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="catalogo.php" id="subcajas" class="co"><span class="icon-book"></span> Catalogos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="acerca.php" id="subcajas" class="co"> <span class="icon-users"></span> Nosotros </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="salir.php" id="subcajas" class="co"><span class="icon-exit"></span> Cerrar Sesion </a></li>
							</ul>
						</li>

						<li class="iz a"><a href="salir.php" id="uno" class="co"><span class="icon-exit" style="color:;"></span> Cerrar Sesión </a></li>

					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

	function encabezado_cliente2(){
		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"> <span class="icon-home3" style="color:;"></span> Inicio </a></li>
							
						<li class="de b" ><a href="modelos.php" class="co"> <span class="icon-images"></span> Modelos </a>
							<ul>
								<li><a href="modelos.php#niña" id="subcajas" class="co"> Niña </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#dama" id="subcajas" class="co"> Dama </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#caballero" id="subcajas" class="co"> Caballero </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="catalogo.php" class="co"><span class="icon-book"></span> Catalogos </a>
							<ul>
								<li><a href="catalogo.php" id="subcajas" class="co"> Invierno-15 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-16 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Otoño-16 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Verano-17 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-18 </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="acerca.php" class="co"><span class="icon-users"></span> Acerca de nosotros </a>
							<ul>
								<li><a href="acerca.php" id="subcajas" class="co"> Visión </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="acerca.php" id="subcajas" class="co"> Misión </a></li>
							</ul>
						</li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="modelos.php" id="subcajas" class="co"><span class="icon-images"></span> Modelos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="catalogo.php" id="subcajas" class="co"><span class="icon-book"></span> Catalogos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="acerca.php" id="subcajas" class="co"> <span class="icon-users"></span> Nosotros </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="usuario_cliente.php" id="subcajas" class="co"><span class="icon-profile"></span> Cuenta </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="salir.php" id="subcajas" class="co"><span class="icon-exit"></span> Cerrar Sesión </a></li>
							</ul>
						</li>

						<li class="iz a"><a href="salir.php" id="uno" class="co"><span class="icon-exit" style="color:;"></span> Cerrar Sesión </a></li>

						<li class="iz a"><a href="usuario_cliente.php" id="dos" class="co"> <span class="icon-profile"></span> Cuenta  </a></li>

					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

	function encabezado_empleado()
	{
		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li>

						<li class="de b"><a href="usuario_empleado.php" class="co"><span class="icon-user" style="color:;"></span> Perfil </a></li>
							
						<li class="de b"><a href="consultasCliente.php" class="co"><span class="icon-clipboard" style="color:;"></span> Consultar Cliente </a></li>
							
						<li class="de b"><a href="registrarCliente.php" class="co"><span class="icon-file-text" style="color:;"></span> Registrar Cliente </a></li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="usuario_empleado.php" id="subcajas" class="co"><span class="icon-user"></span> Perfil </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="consultasCliente.php" id="subcajas" class="co"><span class="icon-clipboard"></span> Consultar Cliente </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="registrarCliente.php" id="subcajas" class="co"> <span class="icon-file-text"></span> Registrar Cliente </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="salir.php" id="subcajas" class="co"><span class="icon-exit"></span> Cerrar Sesión </a></li>
							</ul>
						</li>

						<li class="iz a"><a href="salir.php" id="uno" class="co"><span class="icon-exit" style="color:;"></span> Cerrar Sesión </a></li>

					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

	function encabezado_empleado2(){
		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"> <span class="icon-home3" style="color:;"></span> Inicio </a></li>
							
						<li class="de b" ><a href="modelos.php" class="co"> <span class="icon-images"></span> Modelos </a>
							<ul>
								<li><a href="modelos.php#niña" id="subcajas" class="co"> Niña </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#dama" id="subcajas" class="co"> Dama </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#caballero" id="subcajas" class="co"> Caballero </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="catalogo.php" class="co"><span class="icon-book"></span> Catalogos </a>
							<ul>
								<li><a href="catalogo.php" id="subcajas" class="co"> Invierno-15 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-16 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Otoño-16 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Verano-17 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-18 </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="acerca.php" class="co"><span class="icon-users"></span> Acerca de nosotros </a>
							<ul>
								<li><a href="acerca.php" id="subcajas" class="co"> Visión </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="acerca.php" id="subcajas" class="co"> Misión </a></li>
							</ul>
						</li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="modelos.php" id="subcajas" class="co"><span class="icon-images"></span> Modelos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="catalogo.php" id="subcajas" class="co"><span class="icon-book"></span> Catalogos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="acerca.php" id="subcajas" class="co"> <span class="icon-users"></span> Nosotros </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="usuario_empleado.php" id="subcajas" class="co"><span class="icon-profile"></span> Cuenta </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="salir.php" id="subcajas" class="co"><span class="icon-exit"></span> Cerrar Sesión </a></li>
							</ul>
						</li>

						<li class="iz a"><a href="salir.php" id="uno" class="co"><span class="icon-exit" style="color:;"></span> Cerrar Sesión </a></li>

						<li class="iz a"><a href="usuario_empleado.php" id="dos" class="co"><span class="icon-profile"></span> Cuenta </a></li>

					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

	function encabezado_admin()
	{
		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li>

						<li class="de b"><a href="usuario_administrador.php" class="co"><span class="icon-user" style="color:;"></span> Perfil </a></li>
							
						<li class="de b"><a href="" class="co"><span class="icon-clipboard" style="color:;"></span> Base de Datos </a>
							<ul>
								<li><a href="consultas.php" id="subcajas" class="co"> Consultar </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="crear_tabla.php" id="subcajas" class="co"> Nueva Tabla </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="mod_tabla.php" id="subcajas" class="co"> Modificar Tabla </a></li>
							</ul>
						</li>
							
						<li class="de b"><a href="registrar.php" class="co"><span class="icon-file-text" style="color:;"></span> Registrar </a></li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="usuario_administrador.php" id="subcajas" class="co"><span class="icon-user"></span> Perfil </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="consultas.php" id="subcajas" class="co"><span class="icon-clipboard"></span> Consultar </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="registrar.php" id="subcajas" class="co"> <span class="icon-file-text"></span> Registrar </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="salir.php" id="subcajas" class="co"><span class="icon-exit"></span> Cerrar Sesión </a></li>
							</ul>
						</li>
							
						<li class="iz a"><a href="salir.php" id="uno" class="co"><span class="icon-exit" style="color:;"></span> Cerrar Sesión </a></li>

					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

	function encabezado_admin2(){
		echo '<header>
		<section id="contenedor">

			<div id="encabezado">

			</div>

			<div id="imagen2">

				<image src="imagenes\i.png" title="LOGO" width=100px height=80px style="z-index:1;"/>

			</div>

			<div id="imagen"> 

				<image id="let" src="imagenes\let1.png" title="LOGO" width=136px height=82px style="z-index:1;"/>

			</div>

			<div id="barra" >
				<nav>
					<ul id="menu">

						<li class="de a"><a href="inicio.php" class="co"> <span class="icon-home3" style="color:;"></span> Inicio </a></li>
							
						<li class="de b" ><a href="modelos.php" class="co"> <span class="icon-images"></span> Modelos </a>
							<ul>
								<li><a href="modelos.php#niña" id="subcajas" class="co"> Niña </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#dama" id="subcajas" class="co"> Dama </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="modelos.php#caballero" id="subcajas" class="co"> Caballero </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="catalogo.php" class="co"><span class="icon-book"></span> Catalogos </a>
							<ul>
								<li><a href="catalogo.php" id="subcajas" class="co"> Invierno-15 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-16 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Otoño-16 </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Verano-17 </a></li><center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="catalogo.php" id="subcajas" class="co"> Primavera-18 </a></li>
							</ul>
						</li>
							
						<li class="de b" ><a href="acerca.php" class="co"><span class="icon-users"></span> Acerca de nosotros </a>
							<ul>
								<li><a href="acerca.php" id="subcajas" class="co"> Visión </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li><a href="acerca.php" id="subcajas" class="co"> Misión </a></li>
							</ul>
						</li>

						<li class="iz c"><a href="" id="dos" class="co"><span class="icon-list"></span> Menu </a>
							<ul>
								<li class="c d"><a href="inicio.php" id="subcajas" class="co"><span class="icon-home3" style="color:;"></span> Inicio </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c "><a href="modelos.php" id="subcajas" class="co"><span class="icon-images"></span> Modelos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="catalogo.php" id="subcajas" class="co"><span class="icon-book"></span> Catalogos </a></li> <center><hr class="linea" width="90%"  color="#47425d"/></center>

								<li class="c"><a href="acerca.php" id="subcajas" class="co"> <span class="icon-users"></span> Nosotros </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="usuario_administrador.php" id="subcajas" class="co"><span class="icon-profile"></span> Cuenta </a></li> <center><hr class="linea d" width="90%"  color="#47425d"/></center>

								<li class="c d"><a href="salir.php" id="subcajas" class="co"><span class="icon-exit"></span> Cerrar Sesión </a></li>
							</ul>
						</li>

						<li class="iz a"><a href="salir.php" id="uno" class="co"><span class="icon-exit" style="color:;"></span> Cerrar Sesión </a></li>

						<li class="iz a"><a href="usuario_administrador.php" id="dos" class="co"><span class="icon-profile"></span> Cuenta </a></li>

					</ul>
				</nav>
			</div>

		</section>
		
	</header>';
	}

function pie()
	{
		echo '
		<footer id="pie">
				</br>
		<div id="p1">
			
			<div id="p11">
				<span class="icon-bubbles4"></span> CONTÁCTENOS: </br></br>
				<span class="icon-phone"></span> PBX: (57)(7)6732031 | 3007385797 - 3102837455 <span class="icon-whatsapp"></span></BR></br>
				<span class="icon-mail2"></span> <a href="mailto:oscarcorzo15@hotmail.com" target=_blank>  oscarcorzo15@hotmail.com </a></br></br>
				
				CRA. 13 #30-16 <span class="icon-location"></span> </BR></br>
				BUCARAMANGA - SANTANDER - COLOMBIA</BR></br>
				
			</div>

			<div id="p12">
				<hr class="linea" width="100%" />
				</br>
				<a href="mantenimiento.php" target="_blank">PREGUNTAS FRECUENTES</a></br></br>
				<a href="mantenimiento.php" target="_blank">CONDICIONES Y RESTRIPCIONES</a></br></br>
				<a href="mantenimiento.php" target="_blank">GARANTIAS</a></BR></br>
				<a href="mantenimiento.php" target="_blank">POLITICAS DE ENVIOS</a></BR> </br>
				<hr class="linea" width="100%" align="center" />

			</div>

			<div id="p13">
				</br></br>
				Nuestras Redes Sociales:</br></br></br>          
				<a href="" ><span id="red" class="icon-facebook"> &nbsp </span></a> <a href="" ><span id="red1" class="icon-twitter"> &nbsp </span></a> <a href="" ><span id="red2" class="icon-instagram"> &nbsp </span></a> <a href="" ><span id="red3" class="icon-youtube"></span></a>

			</div>

		</div>

		<div id="p2">
			</br></br></br>
			Universidad Industrial de Santander
			</br></br></br>
			<span class="icon-copyright"></span> 2018 | Grupo H1 - Bases De Datos II | Todos los derechos reservados
			</br></br></br>
		</div>
	</br></br>

	</footer>';
	}
	
	function conectar()
	{
		if (!($conn=pg_connect("host=localhost user=postgres port=5432 dbname=maos_shoes password=123456")))
		{

			echo "Error conectando a la base de datos.";

			exit();
		}

		if (!pg_dbname())
		{
			echo "Error seleccionando la base de datos.";

			exit();
		}
		return $conn;
	}


	function espacio()
	{
		echo '$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp';
	}

	function cabecera($titulo)
	{
		echo '<meta charset="utf-8" name="keywords" content="Zapatos, sandalias, moda, belleza, zapatillas, tacones, calzado"/> 
				<title>'.$titulo.'</title>';
	}

	
	function encaEmpleado()
	{
		echo '<image src="imagenes\encabezado2.png" title="SANDALIAS LAURA ANDREA" width="100%" height="auto"/>
		
		
		<table bgcolor="#EBD99C" width="100%">
			<th colspan=10> </th>
			<tr height=30> 
				<td align="center"><a href="usuario_empleado.php"> <font color="black"  > <b>PERFIL</b> </font> </a> </td>
				
				<td align="center"><a href="consultasCliente.php"><font color="black"  > <b>CONSULTAR CLIENTE</b> </font></a> </td>
				<td align="center"> <a href="registrarCliente.php"> <font color="black" > <b><i>REGISTRAR CLIENTE</i></b> </font> </a> </td>
				<td align="center"><a href=""><font color="black"> <b>PAGINA WEB</b> </font></a> </td>
			</tr>
		</table>
			</br>

		<P align="right"><a href="salir.php"> <input type="submit" value="Cerrar Sesion"/> </a></P> </br>';
	}

	
	function tabla($o, $r, $conectar)
	{
							$a = [];						
							while ($luis=pg_fetch_array($r))

								{
									$j = 0;
									$lu = count($luis);
									for($i=0; $i<$lu; $i++){
										if( isset($luis[$i]) ){
											$a[$j] = $luis[$i];
											$j = $j + 1;
										}
									}

									echo "<tr>";
									for($i=0; $i<$o; $i++){

										if(isset($a[$i])){
											echo "<td >";
											echo $a[$i];
											echo "</td>";
										}
									}
									echo "</tr>";

								}

								pg_free_result($r);

								pg_close($conectar);
								
								

							
	}



	function genero0()
	{
		echo '</br>&nbsp Genero:&nbsp <select name="genero" id="genero">
					<option></option>
					<option value="f">femenino</option>
					<option value="m">masculino</option>
					<option value="o">otro</option></select>*';
	}
	function genero()
	{
		$result= pg_query("select * from genero" );
		echo 'Genero:&nbsp<select name="genero" id="genero" required>
						<option></option>';
			while($row = pg_fetch_array($result)) { 
				$codigo = $row["codigo"] ;
				$nombre= $row['nombre'];
				echo "<option value=".$codigo.">".$codigo." - ".$nombre."</option>"; 
			}
		echo '</select>';
	}
	
	function cargo()
	{
		echo '</br>&nbsp Cargo: &nbsp <select name="cargo" id="cargo">
						<option>  </option>
						<option value="001"> Vendedor </option>
						<option value="002"> Emplantillador </option>
						<option value="003"> Solador </option>
						<option value="004"> Armador </option></select>*';
	}
	
	function lugar()
	{
		echo '</br>&nbsp Lugar de trabajo: &nbsp <select name="lugar_trabajo" id="lugar">
						<option>  </option>
						<option value="001"> Taller 1 </option>
						<option value="002"> Taller 2 </option>
						<option value="101"> Local </option></select>*';
	}
	
	
	function eps()
	{
		echo '</br>&nbsp EPS: &nbsp <select name="eps" id="eps">
						<option >  </option>
						<option value="001"> aliansalud </option>
						<option value="002"> salud total </option>
						<option value="003"> cafesalud </option>
						<option value="004"> sanitas </option>
						<option value="005"> compensar </option></select>*';
	}
	
	
	function cedulaCliente()
	{
		echo '</br>&nbsp Cedula del cliente: &nbsp <select id="cedula" name="cedula"> 
					<option> </option>
					<option value="1000000001"> 1000000001 </option>
					<option value="1000000002"> 1000000002 </option>
					<option value="1000000003"> 1000000003 </option>
					<option value="1000000004"> 1000000004 </option>
					<option value="1000000005"> 1000000005 </option></select>*';
	}
	function cedulaRepresentante()
	{
		echo '</br>&nbsp Cedula del representante: &nbsp <select id="cedula" name="cedula"> 
					<option> </option>
					<option value="1000000010"> 1000000010 </option>
					<option value="1000000011"> 1000000011 </option>
					<option value="1000000012"> 1000000012 </option>
					<option value="1000000013"> 1000000013 </option>
					<option value="1000000014"> 1000000014 </option></select>*';
	}
	
	function nit()
	{
		echo '&nbsp Nit del proveedor: &nbsp <select id="nit" name="nit">
							<option>  </option>
							</select>*';
	}
	
	function referenciaModelo()
	{
		echo '</br>&nbsp Referencia modelo: &nbsp <select id="referencia" name="referencia"> 
					<option> </option>
					<option value="00001"> 1000000001 </option>
					<option value="00002"> 1000000002 </option>
					<option value="00003"> 1000000003 </option>
					<option value="00004"> 1000000004 </option>
					<option value="00005"> 1000000005 </option></select>*';
	}
	
	function codCapellada()
	{
		echo'</br>codigo capellada:&nbsp<select id="codigo_capellada" name="codigo_capellada">
					<option> </option>
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option></select>';		
	}
	function codZuela()
	{
		echo'</br>codigo zuela:&nbsp<select id="codigo_zuela" name="codigo_zuela">
					<option> </option>
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option></select>';		
	}
	function codAdorno()
	{
		echo'</br>codigo adorno:&nbsp<select id="codigo_adorno" name="codigo_adorno">
					<option> </option>
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option></select>';		
	}
	function codTalon()
	{
		echo'</br>codigo talon:&nbsp<select id="codigo_talon" name="codigo_talon" >
					<option> </option>
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option></select>';		
	}
	function codForro()
	{
		echo'</br>codigo forro:&nbsp<select id="codigo_forro" name="codigo_forro">
					<option> </option>
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option></select>';		
	}
	function codModelo()
	{
		echo'</br>codigo modelo:&nbsp<select id="codigo_modelo" name="codigo_modelo">
					<option> </option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option></select>';		
	}
	function modoEnvio()
	{
		echo'</br>modo de envio:&nbsp<select id="modo_envio" name="modo_envio">
					<option></option>
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option>';
	}
	
	
	
	
	
	
	

?>