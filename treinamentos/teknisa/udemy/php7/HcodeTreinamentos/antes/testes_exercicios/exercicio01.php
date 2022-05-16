<?php
/*
    // Letra a)
    $message;

    function setMessage() {
        $message = 'Hello World';
    }

    setMessage();
    echo $message;
    // Resposta: Undefined variable
*/

/*
    // Letra b)
    function setMessage() {
        global $message = 'Hello World';
    }

    setMessage();
    echo $message;
    // Resposta: Parse error: syntax error
*/

/*
    // Letra c)
    function setMessage() {
        $message = 'Hello World';
    }

    setMessage();
    global $message;
    echo $message;
    // Resposta: ''
*/

/*
    // Letra d)
    function setMessage() {
        $message = 'Hello World';
        return $message;
    }

    setMessage();
    echo $message;
    // Resposta: Undefined variable
*/


    function setMessage() {
        global $message;
        $message = 'Hello World';
    }

    setMessage();
    echo $message;
    // Resposta: Hello World -- Alternativa correta

?>