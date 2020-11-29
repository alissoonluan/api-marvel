<?php
namespace App\Lib;

abstract class ErrorCodes {
    const COD_ENVIADO_SUCESSO = '2010'; # 2010 - Enviado com sucesso com retorno
    const COD_PARAMETROS_NAO_ESPERADOS = '3010'; # 3010 - Parâmetros não esperados
    const COD_INFO_NAO_ENCONTRADA = '3031'; # 3031 - Informação não foi encontrada
    const COD_ERRO_NAO_IDENTIFICADO = '4040'; # 4040 - Erro não identificado
    const COD_ERRO_IDENTIFICADO = '4041'; # 4041 - Erro identificado
}