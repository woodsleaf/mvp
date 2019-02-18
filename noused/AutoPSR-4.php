<?php
/**
* Simple autoloader, so we don't need Composer just for this.
*
*This is my autoloader for my PSR-4 clases. I prefer to use composer's autoloader, but this works for legacy projects that can't use composer.
*
*/
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            //исключение, встроенное в загрузчик.
            //throw new Exception("Невозможно загрузить $file.");
            return false;
        });
    }
}
Autoloader::register();