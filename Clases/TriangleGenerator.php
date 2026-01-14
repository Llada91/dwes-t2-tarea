<?php

class TriangleGenerator
{

    public static function generateTriangle(int $altura): string
    {

        if ($altura < 0) {
            return "";
        }

        $resultado = "";

        for ($i = 1; $i <= $altura; $i++) {

            $resultado .= "<p>";

            // Espacios
            for ($j = 0; $j < $altura - $i; $j++) {
                $resultado .= "&nbsp;";
            }

            // Estrellas
            for ($k = 0; $k < (2 * $i - 1); $k++) {
                $resultado .= "*";
            }

            $resultado .= "</p>";
        }

        return $resultado;
    }
}
