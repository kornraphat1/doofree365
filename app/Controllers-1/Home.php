<?php

namespace App\Controllers;

use App\Models\Video_Model;

class Home extends BaseController
{

	protected $base_backurl;
	public $img_backurl = "img_movies/";
	public $branch_id = 1;
	public $backURL = "http://192.168.1.36:1999/public/";

	public function __construct()
	{

		$config = new \Config\App();
		// $this->base_backurl = $config->backURL;

		$this->validation =  \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->VideoModel = new Video_Model();
		$this->branch = 1;

		helper(['url', 'pagination']);
	}

	public function testapi()
	{
		$client = \Config\Services::curlrequest();
		$response = $client->request('GET', 'https://api.vip-streaming.com/api/v1/movie/token/d5e0a8324c2cc05b9d074a98d85e8941', ['http_errors' => false]);
		$get = $response->getBody();
		foreach ($get->data as $k) {
			echo $k->id;
		}
	}

	public function index()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$keyword = "";
		$list_video = $this->VideoModel->get_list_video($this->branch, '', $page);
		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch, '', $page);
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$video_interest = $this->VideoModel->get_video_interest($this->branch);
		// echo "<pre>";
		//  print_r($category_id);die;



		$data = [
			'category_id' => $category_id,
			'list_video' => $list_video['list'],
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => array('category_name' => 'รายการหนัง'),
			'paginate' => $list_video,
			'backURL' => $this->backURL,
			'ads'  => $ads,
			'setting' => $setting,
			'new_movie_recom' => $list_movie_recommend['list'],
			'listyear' => $listyear,
			'branch' => $this->branch,
			'path_imgads' => $path_imgads,
			'video_interest' => $video_interest
		];
		// echo "<pre>";
		// print_r($category_id);die;



		echo view('templates/header.php', $data);
		echo view('templates/body2.php', $data);
		echo view('templates/footer.php');
	}
	//--------------------------------------------------------------------


	public function video_bycate($id, $name)
	{
		$title = urldecode($name);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword = "";
		$category_id = $this->VideoModel->get_category($this->branch);
		$cateRow = $this->VideoModel->get_caterow($id);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$data = [
			'category_id' => $category_id,
			'listyear' => $listyear
		];

		$category_id = $this->VideoModel->get_category($this->branch);
		$list_video = $this->VideoModel->get_id_video_bycategory($id, $this->branch_id, $page);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);

		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);


		$list_data_video = [
			'paginate' => $list_video,
			'category_id' => $category_id,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'listyear' => $listyear,
			'title' => $title
		];

		echo view('templates/header', ['backURL' => $this->backURL, 'branch' => $this->branch, 'base_backurl' => $this->base_backurl, 'listcontent' =>  $listcontent, 'keyword' => $keyword, 'cate' => $category_id, 'path_imgads' => $path_imgads, 'path_livesteram' => $path_livesteram, 'setting' => $setting]);
		echo view('templates/search', $list_data_video, ['base_backurl' => $this->base_backurl]);
		echo view('templates/footer');
	}


	public function video_byyear($id)
	{
		$title = $id;
		$keyword = "";
		$category_id = $this->VideoModel->get_category($this->branch);

		$cateRow =
			['category_name' => $id];
		$listyear = $this->VideoModel->get_listyear($this->branch);



		$data = [
			'category_id' => $category_id,
			'listyear' => $listyear
		];

		$list_video = $this->VideoModel->get_id_video_byyear($id, $this->branch_id);

		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		//  echo "<pre>";
		//  print_R($listcontent);die;

		$list_data_video = [
			'paginate' => $list_video,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'title' => $title


		];


		echo view('templates/header', ['backURL' => $this->backURL, 'branch' => $this->branch, 'listcontent' =>  $listcontent, 'keyword' => $keyword, 'cate' => $category_id, 'path_imgads' => $path_imgads, 'path_livesteram' => $path_livesteram, 'setting' => $setting]);
		// echo view('templates/slide', $data, ['banch' => $this->branch, 'base_backurl' => $this->base_backurl]);
		echo view('templates/search', $list_data_video, ['base_backurl' => $this->base_backurl]);
		echo view('templates/footer');
	}



	public function DateThai($strDate)
	{
		$strYear = date("Y", strtotime($strDate)) + 543;
		$strMonth = date("n", strtotime($strDate));
		$strDay = date("j", strtotime($strDate));
		$strHour = date("H", strtotime($strDate));
		$strMinute = date("i", strtotime($strDate));
		$strSeconds = date("s", strtotime($strDate));
		$strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
		$strMonthThai = $strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}


	public function video($id, $typeplay)
	{
		// print_r($_GET);die;
		$keyword = "";

		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);

		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$feildplay = "";
		$video_data = $this->VideoModel->get_id_video($id);
		$category_id = $this->VideoModel->get_category($this->branch);
		$this->VideoModel->movie_view($id);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$seo = $this->VideoModel->get_seo($this->branch);
		$name_video = $this->VideoModel->get_namevideo($id);
		$get_title = $this->VideoModel->get_title($this->branch);
		$get_img_og = $this->VideoModel->get_img_og($id);
		$list_video = $this->VideoModel->get_list_video($this->branch, '', $page);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		//$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch,'', $page);
		// 		 echo "<pre>";
		//  print_r($vdorandom);die;

		$feildplay = "";

		//print_R($video_data['movie_sound']);die;
		if ($video_data['movie_sound'] == "thai" || $video_data['movie_sound'] == "") {

			if ($typeplay == "main") {
				$feildplay = 'movie_thmain';
			} else if ($typeplay == "sub1") {
				$feildplay = 'movie_thsub1';
			} else if ($typeplay == "sub2") {
				$feildplay = 'movie_thsub2';
			}
		} else {

			if ($typeplay == "main") {
				$feildplay = 'movie_enmain';
			} else if ($typeplay == "sub1") {
				$feildplay = 'movie_ensub1';
			} else if ($typeplay == "sub2") {
				$feildplay = 'movie_ensub2';
			}
		}
		$data = [
			'category_id' => $category_id,
			'listyear' => $listyear,
			'vdorandom' => $vdorandom,
			'video_data' => $video_data,
			'feildplay' => $feildplay,
			'base_backurl' => $this->base_backurl,
			'list_video' => $list_video['list'],
			'ads' => $path_imgads,
			'backURL' => $this->backURL,
			'setting' => $setting,
			'branch' => $this->branch,
			'path_imgads' => $path_imgads
		];

		$name_videos = $name_video['movie_thname'];
		$title_name = $get_title['setting_title'];
		$title = $seo['seo_title'];
		$description = $seo['seo_description'];
		$description_movie = $name_video['movie_des'];
		$discription_web = str_replace("{movie_description}", $description_movie, $description);
		//print_r($discription_web);die;
		$title_web = str_replace("{movie_title} - {title_web}", $name_videos . " - " . $title_name, $title);


		echo view('templates/header.php', $data);
		echo view('templates/video.php', $data);
		echo view('templates/footer.php');
	}
	
	
	public function player($id, $filed = "")
	{
		
		$video_data = $this->VideoModel->get_id_video($id);
		$adsvideo_data = $this->VideoModel->get_adsvideolist($this->backURL);
		if ($filed == "") {
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

	public function video_search($id = '')
	{
		// print_r();die;
		$id = $_GET['keyword'];
		$title = $id;
		$keyword = "";
		$category_id = $this->VideoModel->get_category($this->branch);

		$cateRow =
			['category_name' => $id];
		$listyear = $this->VideoModel->get_listyear($this->branch);



		$data = [
			'category_id' => $category_id,
			'listyear' => $listyear
		];

		$list_video = $this->VideoModel->get_list_video_search($id, $this->branch_id);

		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		//  echo "<pre>";
		//  print_R($listcontent);die;

		$list_data_video = [
			'paginate' => $list_video,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'title' => $title

		];


		echo view('templates/header', ['path_imgads' => $path_imgads, 'branch' => $this->branch, 'base_backurl' => $this->base_backurl, 'listcontent' =>  $listcontent, 'keyword' => $keyword, 'cate' => $category_id, 'path_imgads' => $path_imgads, 'path_livesteram' => $path_livesteram, 'setting' => $setting, 'backURL' => $this->backURL]);
		// echo view('templates/slide', $data, ['banch' => $this->branch, 'base_backurl' => $this->base_backurl]);
		echo view('templates/search', $list_data_video, ['base_backurl' => $this->base_backurl]);
		echo view('templates/footer');
	}

	// แจ้งหนังเสีย
	public function save_report($branch, $id, $reason)
	{
		$reason = urldecode($reason);
		$result = $this->VideoModel->save_reports($branch, $id, $reason);
		if ($result == true && is_bool($result)) {
			echo "OK";
		} else {
			echo "Error";
		}
	}

	// ขอหนัง
	public function save_request($branch, $movie)
	{

		$movie = urldecode($movie);
		$result = $this->VideoModel->save_requests($branch, $movie);
		if ($result == true && is_bool($result)) {
			echo "OK";
		} else {
			echo "Error";
		}
	}
}
