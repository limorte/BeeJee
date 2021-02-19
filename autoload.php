<?
function libraryOne($classname) {
    $filename = "./path/one/". $classname .".php";
    require_once($filename);
}    

function libraryTwo($classname) {
    $filename = "../../path/two/". $classname .".php";
    require_once($filename);
}    

// регистрация
spl_autoload_register('libraryOne');
spl_autoload_register('libraryTwo');

?>