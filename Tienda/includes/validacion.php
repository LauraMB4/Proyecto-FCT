<?php

    function validarFormularioPago($post)
    {
        $errores = [];

        if (empty($post['nombre'])) {
            $errores[] = "Introduce un nombre";
        }

        if (empty($post['apellidos'])) {
            $errores[] = "Introduce un apellidos";
        }

        if (empty($post['direccion'])) {
            $errores[] = "Introduce un direccion";
        }

        if (empty($post['telefono'])) {
            $errores[] = "Introduce un telefono";
        }

        if (empty($post['numero-tarjeta'])) {
            $errores[] = "Introduce un numero de tarjeta";
        }

        if (
            !empty($post['mes-caducidad'])
            && !empty($post['anyo-caducidad'])
        ) {
            if (intval($post['anyo-caducidad']) < intval(date('Y'))) {
                $errores[] = "La fecha de caducidad de la tarjeta no es válida";
            } elseif (
                intval($post['anyo-caducidad']) == intval(date('Y'))
                && intval($post['mes-caducidad']) < intval(date('m'))
            ) {
                $errores[] = "La fecha de caducidad de la tarjeta no es válida";
            }
        } else {
            $errores[] = "La fecha de caducidad de la tarjeta no es válida";
        }

        if (empty($post['cvc'])) {
            $errores[] = "El código cvc es incorrecto";
        }

        if (empty($errores)) {
            return [
                'es_valida' => true,
                'errores' => []
            ];
        } else {
            return [
                'es_valida' => false,
                'errores' => $errores
            ];
        }
    }
?>