<?php

	require FOLDER_MODEL_BASE . "model.base.visita.inc.php";

	class ModeloVisita extends ModeloBaseVisita
	{
		#------------------------------------------------------------------------------------------------------#
		#----------------------------------------------Propiedades---------------------------------------------#
		#------------------------------------------------------------------------------------------------------#
		var $_nombreClase="ModeloBaseVisita";

		var $__ss=array();

		#------------------------------------------------------------------------------------------------------#
		#--------------------------------------------Inicializacion--------------------------------------------#
		#------------------------------------------------------------------------------------------------------#

		function __construct()
		{
			parent::__construct();
		}

		function __destruct()
		{
			
		}

		#------------------------------------------------------------------------------------------------------#
		#------------------------------------------------Setter------------------------------------------------#
		#------------------------------------------------------------------------------------------------------#



		#------------------------------------------------------------------------------------------------------#
		#-----------------------------------------------Unsetter-----------------------------------------------#
		#------------------------------------------------------------------------------------------------------#



		#------------------------------------------------------------------------------------------------------#
		#------------------------------------------------Getter------------------------------------------------#
		#------------------------------------------------------------------------------------------------------#



		#------------------------------------------------------------------------------------------------------#
		#------------------------------------------------Querys------------------------------------------------#
		#------------------------------------------------------------------------------------------------------#
		public function guardarDatos($parametros)
		{
			$this->setIdVisita($parametros['idVisita']);
			$this->setFecha($parametros['fecha']);
			$this->setIdServicio($parametros['idServicio']);	
			$this->setIdCliente($parametros['idCliente']);	
			
			return $this->Guardar();
		}
		
		public function getFirstEncuestaByIdCliente($idCliente)
		{
			$query = "SELECT e.idEncuesta FROM visita v INNER JOIN encuesta e ON v.idVisita = e.idVisita and e.realizada = 0 WHERE v.idCliente =".$idCliente." ORDER BY v.fecha ASC LIMIT 1";
			//return array('e'=>$query);
			$arreglo = array();
			$resultado = mysqli_query($this->dbLink, $query);
			if ($resultado && mysqli_num_rows($resultado) > 0) {
				while ($row_inf = mysqli_fetch_assoc($resultado)){
					$arreglo = $row_inf;
				}
			}
			return $arreglo;
		}
		#------------------------------------------------------------------------------------------------------#
		#------------------------------------------------Otras-------------------------------------------------#
		#------------------------------------------------------------------------------------------------------#
		
		public function validarDatos()
		{
			return true;
		}


	}

