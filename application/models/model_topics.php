<?
class Model_Topics extends Model
{   
    public function get_topics() {
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        $query = mysqli_query($connection, "SELECT * FROM topics");
        return mysqli_fetch_all($query);
    }
}
?>