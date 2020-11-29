<?php
namespace App\Lib;
/**
 * Classe para retornar o ARRAY padrão das APIs.
 * 
 * A estrutura do JSON de retorno é a seguinte:
 * 
 * {
 * 
 *      success: [true/false],
 * 
 *      code: [código erro da ErrorCodes]
 * 
 *      message: [string com a mensagem desejada],
 * 
 *      data: [array com dados do GET = retorno que foi pedido],
 * 
 *      ...
 * 
 *      [/$params]: [array com informações adicionais]
 * 
 * }
 * 
 * Exemplo de uso:
 * 
 * dataPrepare::errorMessage(
 * 
 *      "Os seguintes parametros não são experados!",
 * 
 *      ErrorCodes::COD_PARAMETROS_NAO_ESPERADOS,
 * 
 *      array(
 * 
 *          "parametros" => $callback
 * 
 *      ),
 * 
 *      $data
 * )
 * 
 * Codigos de retorno: https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Status
 */
final class dataPrepare {
    private static $_forbidenNames = ['code', 'msg', 'data', 'success'];

    private static function getMessage($success, $message, $code, $params=[], $data=[]) {
        // TODO Qyon: melhorar esse lógica do array
        $retArr = array(
            "success" => $success,
            "code" => $code,
            "msg"  => $message,
        );

        if(is_array($data) && count($data) > 0){
            $retArr['data'] = $data;
        }

        if(is_array($params)){
            foreach($params as $name => $value){
                if(!in_array($name, dataPrepare::$_forbidenNames)){
                    $retArr[$name] = $value;
                }
            }
        }
        // ========================================

        return $retArr;
    }

    public static function successMessage($message, $code, $params=[], $data=[]) {
        return dataPrepare::getMessage(
            true,
            $message,
            $code,
            $params,
            $data
        );
    }

    public static function errorMessage($message, $code, $params=[], $data=[]) {
        return dataPrepare::getMessage(
            false,
            $message,
            $code,
            $params,
            $data
        );
    }
}