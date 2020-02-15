<?php
function autoload($className)
{
    $className = ltrim($className, "\\");
    $fileName = '';
    $nameSapce = '';

    if($lastNsPos = strrpos($className, "\\"))
    {
        $nameSapce = substr($className,0,$lastNsPos);
        $className = substr($className,$lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $nameSapce) . DIRECTORY_SEPARATOR;
    }

    $fileName = str_replace()
}