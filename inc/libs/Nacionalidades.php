<?php
 //Design by PxN
namespace PxNLibs;

class nacionalidades{

private static $datos = " Mexicana:México| Afgana:Afganistán| Albanesa:Albania| Alemana:Alemania| Alto volteña:Alto volta| Andorrana:Andorra| Angoleña:Angola| Argelina:Argelia| Argentina:Argentina| Australiana:Australia| Austriaca:Austria| Bahamesa:Bahamas| Bahreina:Bahrein| Bangladesha:Bangladesh| Barbadesa:Barbados| Belga:Belgica| Beliceña:Belice| Bermudesa:Bermudas| Birmana:Birmania| Boliviana:Bolivia| Botswanesa:Botswana| Brasileña:Brasil| Bulgara:Bulgaria| Burundesa:Burundi| Butana:Butan| Camboyana:Khemer rep(Camboya)| Camerunesa:Camerun| Canadiense:Canada| Centroafricana:Rep Centroafricana| Chadeña:Chad| Checoslovaca:Rep. Checa| Chilena:Chile| China:China| China:Taiwan| Chipriota:Chipre| Colombiana:Colombia| Congoleña:Congo| Costarricense:Costa Rica| Cubana:Cuba| Dahoneya:Dahoney| Danes:Dinamarca| Dominicana:Rep. Dominicana| Ecuatoriana:Ecuador| Egipcia:Egipto| Emirata:Emiratos arabes udo| Escosesa:Escocia| Eslovaca:Rep. Eslovaca| Española:España| Estona:Estonia| Etiope:Etiopia| Fijena:Fiji| Filipina:Filipinas| Finlandesa:Finlandia| Francesa:Francia| Gabiana:Gambia| Gabona:Gabon| Galesa:Gales| Ghanesa:Ghana| Granadeña:Granada| Griega:Grecia| Guatemalteca:Guatemala| Guinesa Ecuatoriana:Guinea Ecuatorial| Guinesa:Guinea| Guyanesa:Guyana| Haitiana:Haiti| Holandesa:Holanda| Hondureña:Honduras| Hungara:Hungria| India:India| Indonesa:Indonesia| Inglesa:Inglaterra| Iraki:Irak| Irani:Iran| Irlandesa:Irlanda| Islandesa:Islandia| Israeli:Israel| Italiana:Italia| Jamaiquina:Jamaica| Japonesa:Japon| Jordana:Jordania| Katensa:Katar| Keniana:Kenia| Kuwaiti:Kwait| Laosiana:Laos| Leonesa:Sierra leona| Lesothensa:Lesotho| Letonesa:Letonia| Libanesa:Libano| Liberiana:Liberia| Libeña:Libia| Liechtenstein:Liechtenstein| Lituana:Lituania| Luxemburgo:Luxemburgo| Madagascar:Madagascar| Malaca:Fede.de malasia| Malawi:Malawi| Maldivas:Maldivas| Mali:Mali| Maltesa:Malta| Marfilesa:Costa de Marfil| Marroqui:Marruecos| Mauricio:Mauricio| Mauritana:Mauritania| Monaco:Monaco| Mongolesa:Mongolia| Nauru:Nauru| Neozelandesa:Nueva zelandia| Nepalesa:Nepal| Nicaraguense:Nicaragua| Nigerana:Niger| Nigeriana:Nigeria| Norcoreana:Corea del Norte| Norirlandesa:Irlanda del norte| Norteamericana:Estados unidos| Noruega:Noruega| Omana:Oman| Pakistani:Pakistan| Panameña:Panama| Paraguaya:Paraguay| Peruana:Peru| Polaca:Polonia| Portoriqueña:Puerto rico| Portuguesa:Portugal| Rhodesiana:Rhodesia| Ruanda:Ruanda| Rumana:Rumania| Rusa:Russia| Salvadoreña:El Salvador| Samoa Occidental:Samoa Occidental| San marino:San Marino| Saudi:Arabia saudita| Senegalesa:Senegal| Sikkim:Sikkim| Singapur:Singapur| Siria:Siria| Somalia:Somalia| Sovietica:Union Sovietica| Sri Lanka:Sri Lanka (Ceylan)| Suazilandesa:Suazilandia| Sudafricana:Sudafrica| Sudanesa:Sudan| Sueca:Suecia| Suiza:Suiza| Surcoreana:Corea del Sur| Tailandesa:Tailandia| Tanzana:Tanzania| Tonga:Tonga| Tongo:Tongo| Trinidad y Tobago:Trinidad y Tobago| Tunecina:Tunez| Turca:Turquia| Ugandesa:Uganda| Uruguaya:Uruguay| Vaticano:Vaticano| Venezolana:Venezuela| Vietnamita:Vietnam| Yemen Rep Arabe:Yemen Rep. Arabe| Yemen Rep Dem:Yemen Rep. Dem| Yugoslava:Yugoslavia| Zaire:Zaire";
private static $resultado = array();
private static $prueba_xx;

public static function paisesynaciones(){

$parsear = \PxNLibs\nacionalidades::$datos;

$resultado = explode("|", $parsear); 
for ($i=0; $i < count($resultado); $i++) { 

	$resultado_x = explode(':', $resultado[$i]);

		$resultado_x[0] = eregi_replace("[\n|\r|\n\r]","", $resultado_x[0]);

		$array_pais = array("id"=>$i,"pais"=>ucwords($resultado_x[1]),"nacionalidad" =>substr(ucwords($resultado_x[0]),1,strlen($resultado_x[0])));

		array_push(\PxNLibs\nacionalidades::$resultado, $array_pais);

}
return \PxNLibs\nacionalidades::$resultado;
}

public static function paises(){
		\PxNLibs\nacionalidades::paisesynaciones();
			$paises = array();
			for ($i=0; $i < count(\PxNLibs\nacionalidades::$resultado); $i++) { 
						array_push($paises, \PxNLibs\nacionalidades::$resultado[$i]['pais']);

			}
			return $paises;
	}

public static function nacionalidades(){
		\PxNLibs\nacionalidades::paisesynaciones();
			$nacionalidad = array();
			for ($i=0; $i < count(\PxNLibs\nacionalidades::$resultado); $i++) { 
						array_push($nacionalidad, \PxNLibs\nacionalidades::$resultado[$i]['nacionalidad']);

			}
			return $nacionalidad;
	}

}








?>