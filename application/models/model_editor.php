<?
class Model_Editor extends Model
{
    private $data;
    function __construct()
	{
        $this->data['media_divs'] = array(
            array(
                'subclass' => 'wedding',
                'topic_name' => 'Wedding',
                'topic_caption' => 'Brand New Look'
            ),
            array(
                'subclass' => 'food',
                'topic_name' => 'Food',
                'topic_caption' => 'Yummy Tasty Delicious'
            ),
            array(
                'subclass' => 'session',
                'topic_name' => 'Photosessions',
                'topic_caption' => 'You Are a Star'
            ),
            array(
                'subclass' => 'tourism',
                'topic_name' => 'Tourism',
                'topic_caption' => 'Explore The World'
            )
        );
    }
    
	public function save_file($from, $to, $name)
	{	
		
    }
    public function get_topics() {
        $connection = mysqli_connect("localhost", "root", "toor", "testdb");
        $query = mysqli_query($connection, "SELECT * FROM topics");
        return mysqli_fetch_all($query);
        //var_dump($topicdata);
    }
}
?>