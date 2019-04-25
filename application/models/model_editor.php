<?
class Model_Editor extends Model
{
	public function save_file($from, $to, $name)
	{			
    }
    public function set_topic_preview($tmp_name, $name, $path, $topic_id){
        $destination = realpath($path).'\\'.$name;
        move_uploaded_file($tmp_name, $destination);
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        mysqli_query($connection, "UPDATE topics SET preview_path='". "\.\./" . $path.$name . "' WHERE topic_id='" . $topic_id . "'");
    }
    public function set_topic_source($topic_id, $source){
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        mysqli_query($connection, "UPDATE topics SET source='". $source . "' WHERE topic_id='" . $topic_id . "'");
    }
}
?>