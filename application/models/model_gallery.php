<?
class Model_Gallery extends Model
{
    public function list_files($dir_path){
        $list = scandir($dir_path);
        array_splice($list, 0, 2);
        foreach($list as $k => $v)
            $list[$k] = $dir_path.'/'.$v;
        return $list;
    }
}
?>