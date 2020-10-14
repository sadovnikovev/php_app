<?php
class Router
{
    private function getURI()
    {
        if (!empty(trim($_SERVER['REQUEST_URI'], '/'))){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        else{
            return "/";
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        switch ($uri) {
            case (preg_match("~country/([0-9]+)~", $uri) ? true : false):
                $internalRoute = preg_replace("~country/([0-9]+)~", "$1", $uri);

                $controllerFile = ROOT.'/controllers/CountryController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                $controllerObject = new CountryController;
                $controllerObject->actionDestroy($internalRoute);
            break;

            case 'country':
                $controllerFile = ROOT.'/controllers/CountryController.php';
                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }
                $controllerObject = new CountryController;

                if (isset($_POST['name'])){
                    $controllerObject->actionCreate($_POST['name']);
                }

                $controllerObject->actionIndex();
            break;
//----------------------------------------------------------------------------------------------------------------------------
            case (preg_match("~sport/([0-9]+)~", $uri) ? true : false):
                $internalRoute = preg_replace("~sport/([0-9]+)~", "$1", $uri);

                $controllerFile = ROOT.'/controllers/SportController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                $controllerObject = new SportController;
                $controllerObject->actionDestroy($internalRoute);
            break;

            case 'sport':
                $controllerFile = ROOT.'/controllers/SportController.php';
                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }
                $controllerObject = new SportController;

                if (isset($_POST['name'])){
                    $controllerObject->actionCreate($_POST['name']);
                }

                $controllerObject->actionIndex();
            break;
//----------------------------------------------------------------------------------------------------------------------------
            case (preg_match("~sportsman/([0-9]+)~", $uri) ? true : false):
                $internalRoute = preg_replace("~sportsman/([0-9]+)~", "$1", $uri);

                $controllerFile = ROOT.'/controllers/SportsmanController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                $controllerObject = new SportsmanController;
                $controllerObject->actionDestroy($internalRoute);
            break;

            case 'sportsman':
                $controllerFile = ROOT.'/controllers/SportsmanController.php';
                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }
                $controllerObject = new SportsmanController;

                if (isset($_POST['name'])){
                    $controllerObject->actionCreate($_POST['name']);
                }

                $controllerObject->actionIndex();
            break;
//----------------------------------------------------------------------------------------------------------------------------
            case (preg_match("~medal/([0-9]+)~", $uri) ? true : false):
                $internalRoute = preg_replace("~medal/([0-9]+)~", "$1", $uri);

                $controllerFile = ROOT.'/controllers/MedalController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                $controllerObject = new MedalController;
                $controllerObject->actionDestroy($internalRoute);
            break;

            case 'medal':
                $controllerFile = ROOT.'/controllers/MedalController.php';
                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }
                $controllerObject = new MedalController;

                if (isset($_POST['sportsmans']) and isset($_POST['medal']) and isset($_POST['country']) and isset($_POST['sport'])){
                    $controllerObject->actionCreate($_POST['sportsmans'], $_POST['medal'], $_POST['country'], $_POST['sport']);
                }

                $controllerObject->actionIndex();
            break;
//----------------------------------------------------------------------------------------------------------------------------
            case (preg_match("~medals-countries/([0-9]+)~", $uri) ? true : false):
                if (preg_match("~medals-countries/([0-9]+)/([0-9]+)~", $uri)){
                    $internalRoute = preg_replace("~medals-countries/([0-9]+)/([0-9]+)~", "$1/$2", $uri);
                    $segments = explode ('/', $internalRoute);

                    $where=array('relations.id_country' => array_shift($segments), 'medals.id' => array_shift($segments));
                }
                else{
                    $internalRoute = preg_replace("~medals-countries/([0-9]+)~", "$1", $uri);
                    $where=array('relations.id_country' => $internalRoute);
                }

                $controllerFile = ROOT.'/controllers/MedalsCountryController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                $controllerObject = new MedalsCountryController;
                $controllerObject->actionIndex($where, $where['relations.id_country']);
            break;
//----------------------------------------------------------------------------------------------------------------------------
            case (preg_match("~^([1-6]){1}/([1-2]{1})~", $uri) ? true : false):
                $controllerFile = ROOT.'/controllers/MainController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                if (preg_match("~^([1-6]){1}/([1-2]{1})/(NOLIMIT){1}$~", $uri)){
                    $internalRoute = preg_replace("~^([1-6]){1}/([1-2]{1})/(NOLIMIT){1}$~", "$1/$2/$3", $uri);
                    $segments = explode ('/', $internalRoute);
                    $sort = $segments[0];
            		$key = $segments[1];
                    $limit = $segments[2];
                    $controllerObject = new MainController;
                    $controllerObject->actionIndex($sort, $key, $limit);
                }
                elseif (preg_match("~^([1-6]){1}/([1-2]{1})$~", $uri)){
                    $internalRoute = preg_replace("~^([1-6]){1}/([1-2]{1})$~", "$1/$2", $uri);
                    $segments = explode ('/', $internalRoute);
                    $sort = $segments[0];
            		$key = $segments[1];
                    $controllerObject = new MainController;
                    $controllerObject->actionIndex($sort, $key, "");
                }
            break;
//----------------------------------------------------------------------------------------------------------------------------
            case '/':
                $controllerFile = ROOT.'/controllers/MainController.php';

                if (file_exists($controllerFile)){
                    require_once $controllerFile;
                }

                $sort = 1;
                $key = 1;

                $controllerObject = new MainController;
                $controllerObject->actionIndex($sort, $key, "");
            break;
        }
    }
}
?>
