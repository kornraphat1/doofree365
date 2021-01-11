<?php

namespace App\Controllers;

use App\Models\Video_Model;

class Home extends BaseController
{

	protected $base_backurl;
	public $img_backurl = "img_movies/";
	public $branch_id = 1;
	public $backURL = "https://backend.doofree365.com/public/";

	public function __construct()
	{
		$this->path_ads = $this->backURL . 'banner/';
		$this->path_logo = $this->backURL . 'setting/';

		$config = new \Config\App();
		// $this->base_backurl = $config->backURL;

		$this->validation =  \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->VideoModel = new Video_Model();
		$this->branch = 1;

		helper(['url', 'pagination']);
	}

	public function index()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$keyword_string = "";
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


		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'setting' => $setting
		];


		$data = [
			'list_video' => $list_video['list'],
			'img_backurl' => $this->img_backurl,
			'cateRow' => array('category_name' => 'รายการหนัง'),
			'paginate' => $list_video,
			'ads'  => $ads,
			'new_movie_recom' => $list_movie_recommend['list'],
			'listyear' => $listyear,
			'video_interest' => $video_interest
		];
		// echo "<pre>";
		// print_r($category_id);die;



		echo view('templatesv2/header.php', $headdata);
		echo view('templatesv2/body.php', $data);
		echo view('templatesv2/footer.php');
	}
	//--------------------------------------------------------------------

	public function new_movie()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$keyword_string = "";
		$list_video_new = $this->VideoModel->get_list_video_new($this->branch, '', $page);
		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch, '', $page);
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$video_interest = $this->VideoModel->get_video_interest($this->branch);
		// echo "<pre>";
		//  print_r($list_video);die;



		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'setting' => $setting
		];



		$data = [
			'list_video_new' => $list_video_new['list'],
			// 'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'cateRow' => array('category_name' => 'รายการหนัง'),
			'paginate' => $list_video_new,
			'ads'  => $ads,
			'new_movie_recom' => $list_movie_recommend['list'],
			'listyear' => $listyear,
			'video_interest' => $video_interest,
			'title' => 'หนังใหม่'
		];
		// echo "<pre>";
		// print_r($category_id);die;



		echo view('templatesv2/header.php', $headdata);
		echo view('templatesv2/list.php', $data);
		echo view('templatesv2/footer.php');
	}
	public function zoom()
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$keyword_string = "";
		$category_id = $this->VideoModel->get_category($this->branch);
		$listzoom = $this->VideoModel->get_list_video_zoom($this->branch, $page);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);

		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'base_backurl' => $this->base_backurl,
			'keyword_string' => $keyword_string,
			'cate' => $category_id,
			'path_imgads' => $path_imgads,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'path_livesteram' => $path_livesteram,
			'setting' => $setting
		];

		echo view('templates/header', $headdata);

		$data = [
			'movie' => $listzoom,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl
		];

		echo view('zoom', $data);
		echo view('templates/footer');
	}

	public function video_bycate($id, $name)
	{
		$title = urldecode($name);
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = "";
		$category_id = $this->VideoModel->get_category($this->branch);
		$cateRow = $this->VideoModel->get_caterow($id);
		$listyear = $this->VideoModel->get_listyear($this->branch);


		$category_id = $this->VideoModel->get_category($this->branch);
		$list_video = $this->VideoModel->get_id_video_bycategory($id, $this->branch_id, $page);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);

		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'path_livesteram' => $path_livesteram,
			'listcontent' =>  $listcontent,
			'setting' => $setting
		];


		$list_data_video = [
			'paginate' => $list_video,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'listyear' => $listyear,
			'title' => $title
		];

		echo view('templatesv2/header', $headdata);
		echo view('templatesv2/list', $list_data_video);
		echo view('templatesv2/footer');
	}


	public function video_byyear($id)
	{
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$title = $id;
		$keyword_string = "";
		$category_id = $this->VideoModel->get_category($this->branch);

		$cateRow =
			['category_name' => $id];
		$listyear = $this->VideoModel->get_listyear($this->branch);



		$data = [
			'category_id' => $category_id,
			'listyear' => $listyear
		];

		$list_video = $this->VideoModel->get_id_video_byyear($id, $this->branch_id, $page);

		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		//  echo "<pre>";
		//  print_R($listcontent);die;
		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_livesteram' => $path_livesteram,
			'listcontent' =>  $listcontent,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'setting' => $setting
		];

		$list_data_video = [
			'paginate' => $list_video,
			'img_backurl' => $this->img_backurl,
			'cateRow' => $cateRow,
			'listyear' => $listyear,
			'title' => $title,


		];


		echo view('templates/header', $headdata);
		echo view('templates/search', $list_data_video);
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



	public function video($id)
	{
		// print_r($_GET);die;
		$keyword_string = "";

		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);

		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$feildplay = "";
		$video_data = $this->VideoModel->get_id_video($id);
		$category_id = $this->VideoModel->get_category($this->branch);

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

		$name_videos = $name_video['movie_thname'];
		$title_name = $get_title['setting_title'];
		$title = $seo['seo_title'];
		$description = $seo['seo_description'];
		$description_movie = $name_video['movie_des'];
		$discription_web = str_replace("{movie_description}", $description_movie, $description);
		$title_web = str_replace("{movie_title} - {title_web}", $name_videos . " - " . $title_name, $title);

		// if ($video_data['movie_sound'] == "thai" || $video_data['movie_sound'] == "") {

		// 	if ($typeplay == "main") {
		// 		$feildplay = 'movie_thmain';
		// 	} else if ($typeplay == "sub1") {
		// 		$feildplay = 'movie_thsub1';
		// 	} else if ($typeplay == "sub2") {
		// 		$feildplay = 'movie_thsub2';
		// 	}
		// } else {

		// 	if ($typeplay == "main") {
		// 		$feildplay = 'movie_enmain';
		// 	} else if ($typeplay == "sub1") {
		// 		$feildplay = 'movie_ensub1';
		// 	} else if ($typeplay == "sub2") {
		// 		$feildplay = 'movie_ensub2';
		// 	}
		// }

		if (!empty($video_data['movie_thmain'])) {
			$feildplay = 'movie_thmain';
		} else if (!empty($video_data['movie_thsub1'])) {
			$feildplay = 'movie_thsub1';
		} else if (!empty($video_data['movie_thsub2'])) {
			$feildplay = 'movie_thsub2';
		} else if (!empty($video_data['movie_enmain'])) {
			$feildplay = 'movie_enmain';
		} else if (!empty($video_data['movie_ensub1'])) {
			$feildplay = 'movie_ensub1';
		} else if (!empty($video_data['movie_ensub2'])) {
			$feildplay = 'movie_ensub2';
		}
		// print_r($video_data);
		// echo $feildplay;die;

		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_livesteram' => $path_livesteram,
			'listcontent' =>  $listcontent,
			'title_web' => $title_web,
			'title' => $title,
			'description' => $description,
			'description_movie' => $description_movie,
			'discription_web' => $discription_web,
			'get_img_og' => $get_img_og,
			'setting' => $setting,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
		];

		$data = [
			'index' => 'a',
			'listyear' => $listyear,
			'vdorandom' => $vdorandom,
			'video_data' => $video_data,
			'feildplay' => $feildplay,
			'list_video' => $list_video['list'],
			'name_videos' => $name_videos,
			'title_name' => $title_name,
		];

		// $this->VideoModel->movie_view($id);


		echo view('templates/header-video.php', $headdata);
		echo view('templates/video.php', $data);
		echo view('templates/footer.php');
	}


	public function player($id, $filed = "", $index = "")
	{
		$series = $this->VideoModel->get_ep_series($id);

		$video_data = $this->VideoModel->get_id_video($id);
		$adsvideo_data = $this->VideoModel->get_adsvideolist($this->backURL);
		if ($filed == "") {
			$filed = 'movie_thmain';
		}

		$urlplay = $video_data[$filed];

		if ($index != "a") {
			$urlplay = $series['ep_thmai'][$index];
		}

		$data = [
			'video_data' => $video_data,
			'url_play'	=> $urlplay,
			'adsvideo'		=> $adsvideo_data,
			'backURL' => $this->backURL,
			'branch' => $this->branch
		];

		echo view('player', $data);
	}

	public function video_search($keyword_string)
	{
		//echo $keyword_string;die;
		// print_r();die;
		//$id = $_GET['keyword'];

		//$keyword = "";
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$keyword_string = urldecode($keyword_string);
		$title = 'คุณกำลังค้นหา : ' . $keyword_string;
		$category_id = $this->VideoModel->get_category($this->branch);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$list_video = $this->VideoModel->get_list_video_search($keyword_string, $this->branch_id, $page);

		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		//  echo "<pre>";
		//  print_R($listcontent);die;
		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_livesteram' => $path_livesteram,
			'listcontent' =>  $listcontent,
			'setting' => $setting,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
		];


		$list_data_video = [
			'paginate' => $list_video,
			'base_backurl' => $this->base_backurl,
			'img_backurl' => $this->img_backurl,
			'category_id' => $category_id,
			'listyear' => $listyear,
			'title' => $title

		];


		echo view('templatesv2/header', $headdata);

		echo view('templatesv2/list', $list_data_video);
		echo view('templatesv2/footer');
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
	public function countView($id)
	{
		$this->VideoModel->countView($id);
	}

	// ขอหนัง


	public function save_requests()
	{
		$request_text = $_POST['request_text'];
// echo '<pre>',print_r($request_text,true),'</pre>';die;
		$this->VideoModel->save_requests($this->branch, $request_text);
	}

	public function con_ads()
	{
		$ads_con_name = $_POST['ads_con_name'];
		$ads_con_email = $_POST['ads_con_email'];
		$ads_con_line = $_POST['ads_con_line'];
		$ads_con_tel = $_POST['ads_con_tel'];

		// print_r($_POST);
		// die;
		$this->VideoModel->con_ads($this->branch, $ads_con_name, $ads_con_email, $ads_con_line, $ads_con_tel);
	}
	public function saveReport()
	{


		$movie_id =  $_POST['movie_id'];
		$movie_name = $_POST['movie_name'];
		$movie_ep_name = $_POST['movie_ep_name'];
		$datetime = date('Y-m-d H:i:s');



		$result = $this->VideoModel->save_reports($this->branch, $movie_id, $movie_name, $movie_ep_name, $datetime);
	}


	public function get_ep_series($id)
	{

		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}
		$series = $this->VideoModel->get_ep_series($id);



		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$keyword_string = "";
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$setting = $this->VideoModel->get_setting($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);
		$setting['img_og'] = $setting['setting_logo'];


		$seo = $this->VideoModel->get_seo($this->branch);

		$name_video = $this->VideoModel->get_namevideo($id);

		$get_title = $this->VideoModel->get_title($this->branch);

		$get_img_og = $this->VideoModel->get_img_og($id);

		$list_video = $this->VideoModel->get_list_video($this->branch, '', $page);

		$listyear = $this->VideoModel->get_listyear($this->branch);

		$feildplay = "";

		$name_videos = $name_video['movie_thname'];

		$title_name = $get_title['setting_title'];

		$title = $seo['seo_title'];

		$description = $seo['seo_description'];

		$description_movie = $name_video['movie_des'];

		$discription_web = str_replace("{movie_description}", $description_movie, $description);

		$title_web = str_replace("{movie_title} - {title_web}", $name_videos . " - " . $title_name, $title);




		$header_data = [

			'ads'  => $ads,
			'path_logo'  => $this->path_logo,
			'path_ads'  => $this->path_ads,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'listcontent' =>  $listcontent,
			'keyword_string' => $keyword_string,
			'path_imgads' => $path_imgads,
			'path_livesteram' => $path_livesteram,
			'setting' => $setting,
			'listyear' => $listyear,
			'feildplay' => $feildplay,
			'list_video' => $list_video['list'],
			'ads' => $path_imgads,
			'name_videos' => $name_videos,
			'title_name' => $title_name,
			'title' => $title,
			'description' => $description,
			'description_movie' => $description_movie,
			'discription_web' => $discription_web,
			'title_web' => $title_web,
			'get_img_og' => $get_img_og
		];

		$body_data = [

			'video_data' => $series,
			'category_id' => $category_id,
			'img_backurl' => $this->img_backurl,

		];
		// echo '<pre>' . print_r($series, true) . '</pre>';
		// die;


		echo view('templates/header-video', $header_data);
		echo view('templates/series', $body_data);
		echo view('templates/footer');
	}

	public function video_series($series_id, $series_name, $ep_id, $ep_name)
	{
		// print_r($_GET);die;
		$keyword_string = "";
		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);
		$page = 1;

		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}


		$feildplay = "";
		$video_data = $this->VideoModel->get_id_video($series_id);
		$category_id = $this->VideoModel->get_category($this->branch);
		// $this->VideoModel->movie_view($series_id);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$seo = $this->VideoModel->get_seo($this->branch);
		$name_video = $this->VideoModel->get_namevideo($series_id);
		$get_title = $this->VideoModel->get_title($this->branch);
		$list_video = $this->VideoModel->get_list_video($this->branch, '', $page);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$series = $this->VideoModel->get_ep_series($series_id);
		$name_videos = $name_video['movie_thname'];
		$title_name = $get_title['setting_title'];
		$title = $seo['seo_title'];
		$description = $seo['seo_description'];
		$description_movie = $name_video['movie_des'];
		$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
		$setting['setting_title'] = str_replace("{movie_title} - {title_web}", $name_videos . " - " . $title_name, $title);
		$get_img_og = $this->VideoModel->get_img_og($series_id);
		$setting['img_og'] = $get_img_og['movie_picture'];
		$discription_web = str_replace("{movie_description}", $description_movie, $description);

		$title_web = str_replace("{movie_title} - {title_web}", $name_videos . " - " . $title_name, $title);

		// echo '<pre>' . print_r($title_web, true) . '</pre>';die;

		if (!empty($video_data['movie_thmain'])) {
			$feildplay = 'movie_thmain';
		} else if (!empty($video_data['movie_thsub1'])) {
			$feildplay = 'movie_thsub1';
		} else if (!empty($video_data['movie_thsub2'])) {
			$feildplay = 'movie_thsub2';
		} else if (!empty($video_data['movie_enmain'])) {
			$feildplay = 'movie_enmain';
		} else if (!empty($video_data['movie_ensub1'])) {
			$feildplay = 'movie_ensub1';
		} else if (!empty($video_data['movie_ensub2'])) {
			$feildplay = 'movie_ensub2';
		}


		$header_data = [
			'ads'  => $ads,
			'path_imgads'  => $ads,
			'path_logo'  => $this->path_logo,
			'path_ads'  => $this->path_ads,
			'branch' => $this->branch,
			'backURL' => $this->backURL,
			'listcontent' =>  $listcontent,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_livesteram' => $path_livesteram,
			'setting' => $setting,
			'category_id' => $category_id,
			'title_name' => $title_name,
			'title' => $title,
			'description' => $description,
			'description_movie' => $description_movie,
			'discription_web' => $discription_web,
			'title_web' => $title_web,
			'get_img_og' => $get_img_og
		];



		$body_data = [

			'index' => $ep_id,
			'listyear' => $listyear,
			'vdorandom' => $vdorandom,
			'video_data' => $series,
			'feildplay' => $feildplay,
			'list_video' => $list_video['list'],
			'name_videos' => $name_videos,


		];

		echo view('templates/header-video.php', $header_data);
		echo view('templates/video.php', $body_data);
		echo view('templates/footer.php');
	}

	public function list_series()
	{
		$title = 'hh';
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$list_video = $this->VideoModel->get_list_video_series($this->branch_id, $page);

		$keyword_string = "";
		$category_id = $this->VideoModel->get_category($this->branch);
		// $cateRow = $this->VideoModel->get_caterow($id);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);

		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		$headdata = [
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'keyword_string' => $keyword_string,
			'category_id' => $category_id,
			'path_imgads' => $path_imgads,
			'path_livesteram' => $path_livesteram,
			'listcontent' =>  $listcontent,
			'setting' => $setting
		];


		$list_data_video = [
			'paginate' => $list_video,
			'img_backurl' => $this->img_backurl,
			// 'cateRow' => $cateRow,
			'listyear' => $listyear,
			'title' => $title
		];

		echo view('templates/header', $headdata);
		echo view('templates/search', $list_data_video);
		echo view('templates/footer');
	}

	public function contract() //ต้นแบบ หน้า cate / search
	{
		$setting = $this->VideoModel->get_setting($this->branch);
		// $setting['setting_img'] = $this->path_setting . $setting['setting_logo'];
		$ads = $this->VideoModel->get_path_imgads($this->branch);
		$header_data = [
			'backURL' => $this->backURL,
			// 'document_root' => $this->document_root,
			// 'path_thumbnail' => $this->path_thumbnail,
			// 'path_setting' => $this->path_setting,
			'setting' => $setting,


			'ads' => $ads,
			'path_ads' => $this->path_ads,
		];

		echo view('templatesv2/header.php', $header_data);
		echo view('templatesv2/contract.php');
		echo view('templatesv2/footer.php');
	}


	// Add movie view
	public function save_movie_view($movie_id, $branch)
	{
		$this->VideoModel->movie_view($movie_id, $branch);
	}

	public function body()
	{
		// $a = $this->VideoModel->getdata('hhikihggt');
		// print_r ($a) ;
		echo view('/templatesv2/header.php');
		echo view('/templatesv2/body');
		echo view('/templatesv2/footer.php');
	}
	public function list()
	{
		echo view('/templatesv2/header.php');
		echo view('/templatesv2/list');
		echo view('/templatesv2/footer.php');
	}
	public function play()
	{
		// $id = 73;
		// $a = $this->VideoModel->getdata($id);
		// // print_r($a);
		// $data = [
		// 	'a' => $a,

		// ];
		echo view('/templatesv2/header.php');
		echo view('/templatesv2/play',);
		echo view('/templatesv2/footer.php');
	}
	public function dcontract()
	{
		echo view('/templatesv2/header.php');
		echo view('/templatesv2/dcontract');
		echo view('/templatesv2/footer.php');
	}
	public function cate()
	{
		echo view('/templatesv2/header.php');
		echo view('/templatesv2/cate');
		echo view('/templatesv2/footer.php');
	}
}
