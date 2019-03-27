<?
class Model_Gallery extends Model
{
    private $data;

    function __construct(){
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
    
	public function get_data($data_name){	
		return $this->data[$data_name];
    }
    
    public function list_files($dir_path){
        $list = scandir($dir_path);
        array_splice($list, 0, 2);
        foreach($list as $k => $v)
            $list[$k] = $dir_path.'/'.$v;
        return $list;
    }
}
?>