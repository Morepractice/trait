require_once './Singleton.php';
class FileReader{
    use Singleton;
}

$a = FileReader::getInstance();
var_dump($a);