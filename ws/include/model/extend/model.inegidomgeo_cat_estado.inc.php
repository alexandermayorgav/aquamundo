<?php

require FOLDER_MODEL_BASE . "model.base.inegidomgeo_cat_estado.inc.php";

class ModeloInegidomgeo_cat_estado extends ModeloBaseInegidomgeo_cat_estado
{
	#------------------------------------------------------------------------------------------------------#
	#----------------------------------------------Propiedades---------------------------------------------#
	#------------------------------------------------------------------------------------------------------#
	var $_nombreClase="ModeloBaseInegidomgeo_cat_estado";

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

	#------------------------------------------------------------------------------------------------------#
	#------------------------------------------------Otras-------------------------------------------------#
	#------------------------------------------------------------------------------------------------------#
	public function obtenerEstados()
	{
		$query = "Select CVE_ENT, NOM_ENT from inegidomgeo_cat_estado ";
		$arreglo = array();
		$resultado = mysqli_query($this->dbLink, $query);
		if ($resultado && mysqli_num_rows($resultado) > 0) {
			while ($row_inf = mysqli_fetch_assoc($resultado)){
				$arreglo[$row_inf['CVE_ENT']] = $row_inf['NOM_ENT'];
			}
		}
		return $arreglo;
	}
		public function obtenerEstadoById($CVE_ENT)
	{
		$query = "Select CVE_ENT, NOM_ENT from inegidomgeo_cat_estado  where CVE_ENT=".$CVE_ENT;
		$arreglo = array();
		$resultado = mysqli_query($this->dbLink, $query);
		if ($resultado && mysqli_num_rows($resultado) > 0) {
			while ($row_inf = mysqli_fetch_assoc($resultado)){
				$arreglo = $row_inf;
			}
		}
		return $arreglo;
	}
	public function validarDatos()
	{
		return true;
	}


}