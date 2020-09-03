<?php namespace App\Controllers;
use App\Models\Video_Model;

class Home extends BaseController
{

	protected $base_backurl;
	public $img_backurl = "img_movies/";
	public $branch_id = 1;
	public $backURL = "http://backend.aegistrex.com/";

	public function __construct() {

		$config = new \Config\App();
		$this->base_backurl = $config->backURL;

		$this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
		$this->VideoModel = new Video_Model();
		
		$this->branch = 1;

		helper(['url','pagination']);

	}

	public function index()
	{	
		$page = 1;
        if(!empty($_GET)){
            $page = $_GET['page'];
        }

		$keyword = "";
		$list_video = $this->VideoModel->get_list_video($this->branch,'', $page);
		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch,'', $page);
		$category_id = $this->VideoModel->get_category($this->branch);
		//print_r($list_video);die;

		$data = [
			'category_id' => $category_id,
			'list_video' => $list_video['list'],
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => array('category_name'=>'รายการหนัง'),
			'paginate' => $list_video,
			'backURL' => $this->backURL,
			'ads'  => $ads,
			'new_movie_recom' => $list_movie_recommend['list']

		]; 
		// echo "<pre>";
		// print_r($data);die;
		


		echo view('templates/header.php',$data);
		echo view('templates/body2.php' , $data);
		//echo view('templates/body.php');
		echo view('templates/footer.php');

	}
	//--------------------------------------------------------------------

	public function video($id,$typeplay)

	{
	
		$keyword = "";
		$category_id = $this->VideoModel->get_category($this->branch);
	
		
		$page = 1;
        if(!empty($_GET)){
            $page = $_GET['page'];
        }
		
		$video_data = $this->VideoModel->get_id_video($id);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$seo = $this->VideoModel->get_seo($this->branch);
		$name_video = $this->VideoModel->get_namevideo($id);
		$get_title = $this->VideoModel->get_title($this->branch);
		$get_img_og = $this->VideoModel->get_img_og($id);
		$list_video = $this->VideoModel->get_list_video($this->branch,'', $page);
		

		$feildplay = "";

		//print_R($video_data['movie_sound']);die;
		if(($video_data['movie_sound']=="" || $video_data['movie_sound']=="thai" ) && !empty($video_data['movie_thmain'])){
			
			if($typeplay=="main"){
				$feildplay ='movie_thmain';
			}else if($typeplay=="sub1"){
				$feildplay = 'movie_thsub1';
			}else if($typeplay=="sub2"){
				$feildplay = 'movie_thsub2';
			}
		}else{
			if($typeplay=="main"){
				$feildplay = 'movie_enmain';
			}else if($typeplay=="sub1"){
				$feildplay = 'movie_ensub1';
			}else if($typeplay=="sub2"){
				$feildplay = 'movie_ensub2';
			}
		}
		$data = [
				'category_id' => $category_id,
				'video_data' => $video_data,
				'feildplay' => $feildplay,
				'base_backurl' => $this->base_backurl,
				'list_video' => $list_video['list'],
				'ads' => $path_imgads,
				'backURL' => $this->backURL,
			];
			// echo "<pre>";
			// print_R($data);die;

			
		  	$name_videos = $name_video['movie_thname'];
			$title_name = $get_title['setting_title'];
			$title = $seo['seo_title'];
			$description = $seo['seo_description'];
			$description_movie = $name_video['movie_des'];
		
			$discription_web = str_replace("{movie_description}", $description_movie, $description);

			//print_r($discription_web);die;
			$title_web = str_replace("{movie_title} - {title_web}",$name_videos." - ".$title_name,$title);
		
		
			echo view('templates/header.php', $data);
			echo view('templates/video.php' , $data);
			//echo view('templates/body.php');
			echo view('templates/footer.php');

		
	}
	public function player($id, $filed="")
	{
		$video_data = $this->VideoModel->get_id_video($id);

		$adsvideo_data = $this->VideoModel->get_adsvideolist($this->base_backurl);

		if ($filed=="") {
			$filed = 'movie_thmain';
		}

		$data = [
			'video_data' => $video_data,
			'url_play'	=> $video_data[$filed],
			'adsvideo'		=> $adsvideo_data,
			'base_backurl' => $this->base_backurl,
			'branch' => $this->branch
			];

		echo view('player', $data);

	}


}
