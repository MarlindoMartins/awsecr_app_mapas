<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
	public static function index(Request $request){

		$modulo=$request->modulo;
		$id=$request->id;

		switch (true) {
		case ($modulo == 'mapa_paises'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v3/malhas/paises/$id?formato=application%2Fvnd.geo+json";
			break;
		case ($modulo == 'mapa_estados'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v3/malhas/estados/$id?formato=application%2Fvnd.geo+json";
			break;
		case ($modulo == 'mapa_municipios'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v3/malhas/municipios/$id?formato=application%2Fvnd.geo+json";
			break;
		case ($modulo == 'mapa_distritros'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios/$id/distritos";
			break;
		case ($modulo == 'lista_paises'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v1/localidades/paises?orderBy=nome";
			break;
		case ($modulo == 'lista_estados'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome";
			break;
		case ($modulo == 'lista_municipios'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/$id/municipios";
			break;
		case ($modulo == 'lista_distritros'):
			$URL_API = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios/$id/distritos";
			//$URL_API = "http://servicodados.ibge.gov.br/api/v1/localidades/distritos?orderBy=nome";
			break;
		}

		$retorno = '<NAO LOCALIZADO>';

		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', $URL_API);
		$retorno = strip_tags($res->getBody());

		return $retorno;
	}
}
