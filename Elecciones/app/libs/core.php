<?php
class Core
{
    //variable home
    protected $currentController = 'home';
    //variable metodo para llevar al index
    protected $currentMethod = 'index';
    //variable para parametros
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->getUrl();

        //El archivo que esta en controllers y es .php se trae y se usa como currentController
        //ucwords coloca en mayus el primer caracter de cada palabra string en el campo 0 del url
        if (isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->currentController . '.php';
        //reemplazo de currentController
        $this->currentController = new $this->currentController;

        //Si existe una url en la pocision 1 va a ser reemplazada en currentMethod
        if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        //funcion para agregar currentController y currentMethod a parameters como un array que almacena ambos
        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->parameters);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            //Separacion de urls con '/' y filtro
            //url de ['url'] es el url del htacces de public
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
    }
}