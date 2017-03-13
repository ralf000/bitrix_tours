<?php

/**
 * Выводит переменную на экран
 * @param mixed $var
 */
function g($var)
{
    echo '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/styles/default.min.css">
                <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/highlight.min.js"></script>
                <script>hljs.initHighlightingOnLoad();</script>';
    echo '<pre><code class="html" style="border: 1px solid black;">';
    if (is_array($var) || is_object($var)) {
        print_r($var);
        if (is_object($var)) {
            $class = get_class($var);
            Reflection::export(new ReflectionClass($class));
        }
    } else {
        echo htmlspecialchars($var);
    }
    echo '</code>';
    echo '</pre>';
}