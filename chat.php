<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    // preguntas

    "tienen descuento los zapatos ferrari track" => "lamento informarte que el precio que tienen ahorita es de promocion Q875.000 estoy para servirte.",
    "mujer" => "tenemos: CALZADO ROPA Y ACCESORIO. que te interesa saber",
    "hombre" => "tenemos: CALZADO ROPA Y ACCESORIO. que te interesa saber",
    "niño" => "tenemos: CALZADO ROPA Y ACCESORIO. que te interesa saber",
    "calzado" => "tenemos diseño, cali ,mirage,supertec,future,lexie,supertec,x-ray",
    "cali" => "PRECIO Q995.00 CON 1O% DESCUENTO",
    "mirage" => "PRECIO Q920.00 CON 5% DESCUENTO",
    "supertec" => "PRECIO Q795.00 SIN DESCUENTO",
    "future" => "PRECIO Q890.00 CON 5% DESCUENTO",
    "lexie" => "PRECIO Q750.00 SIN DESCUENTO",
    "x-ray" => "PRECIO Q750.00 SIN DESCUENTO",
    "aceptan tarjeta" => "claro que si, cualquier tipo de tarjeta y efectivo.",
    "aceptan visacuotas" => "claro que si, teneos 3, 6 , 10 y hasta 24 cuotas precio de contado.",
    "cuanto tiempo se tarda la entrega" => "7 dias hablies fuera y dentro de la capital",
    "tallas disponibles cali" => "6, 7, 7.5, 8.5 10 us",
    "tallas disponibles mirage" => "8, 8.5, 9, 10 us",
    "tallas disponibles supertec" => "6, 6.5 8 us",
    "tallas disponibles future" => "7.5 8 us",
    "tallas disponibles lexie" => "8.5 us",
    "tallas disponibles x-ray" => "8.5 10 us",
    "pares disponibles cali" => "5 en existencia",
    "pares disponibles mirage" => "3 en existencia",
    "pares disponibles supertec" => "1 en existencia",
    "pares disponibles future" => "8 en existencia",
    "pares disponibles" => "1 en existencia ",
    "pares disponibles x-ray" => "2 en existencia",
    
    //name
    "como te llamas?" =>"Soy UMGBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy UMGBot y estoy para servirte",
    "tienes nombre?" =>"Soy UMGBot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is UMGBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas a la universidad.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
