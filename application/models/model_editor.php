<?
class Model_Editor extends Model
{
	public function save_file($from, $to, $name)
	{			
    }
    public function set_topic_preview($topic_id, $tmp_name, $name, $path){
        $destination = realpath($path).'/'.$name;
        echo $destination;
        echo $tmp_name;
        var_dump(move_uploaded_file($tmp_name, $destination));
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        mysqli_query($connection, "UPDATE topics SET preview_path='". "/" . $path.$name . "' WHERE topic_id='" . $topic_id . "'");
    }
    public function set_topic_data($topic_id, $name, $caption, $source){
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        mysqli_query($connection, "UPDATE topics SET name='" . $name . "',caption='".$caption."',source='".$source."' " . " WHERE topic_id='" . $topic_id . "'");
        echo mysqli_error($connection);
    }
    public function add_topic($name, $caption, $source, $preview_path){
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        mysqli_query($connection, "INSERT INTO topics (name,caption,source,preview_path) VALUES ('$name','$caption','$source','$preview_path')");
        echo mysqli_error($connection);
    }
    public function remove_topic($topic_id){
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        mysqli_query($connection, "DELETE FROM topics WHERE topic_id='".$topic_id."'");
    }
}
?>