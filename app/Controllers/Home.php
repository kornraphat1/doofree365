<?php

namespace App\Controllers;

use App\Models\Video_Model;

class Home extends BaseController
{

	protected $base_backurl;
	public $img_backurl = "img_movies/";
	public $branch_id = 1;
	public $document_root = '';
	public $backURL = "https://backend.doofree365.com/public/";

	public function __construct()
	{
		$this->config = new \Config\App();
		$this->path_ads = $this->backURL . 'banner/';
		$this->path_logo = $this->backURL . 'setting/';
		$this->document_root = $this->config->docURL;

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
		$ads = $this->VideoModel->get_ads($this->branch);
		$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch, '', $page);
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$video_interest = $this->VideoModel->get_video_interest($this->branch);
		// echo "<pre>";
		//  print_r($category_id);die;


		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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



		echo view('templatesv2/header.php', $header_data);
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
		$ads = $this->VideoModel->get_ads($this->branch);
		$list_movie_recommend = $this->VideoModel->get_movie_new_recommend($this->branch, '', $page);
		$category_id = $this->VideoModel->get_category($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listyear = $this->VideoModel->get_listyear($this->branch);
		$video_interest = $this->VideoModel->get_video_interest($this->branch);
		// echo "<pre>";
		//  print_r($list_video);die;



		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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



		echo view('templatesv2/header.php', $header_data);
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
		$ads = $this->VideoModel->get_ads($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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

		echo view('templates/header', $header_data);

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

		$ads = $this->VideoModel->get_ads($this->branch);
		$category_id = $this->VideoModel->get_category($this->branch);
		$list_video = $this->VideoModel->get_id_video_bycategory($id, $this->branch_id, $page);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);

		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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

		echo view('templatesv2/header', $header_data);
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
		$ads = $this->VideoModel->get_ads($this->branch);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		//  echo "<pre>";
		//  print_R($listcontent);die;
		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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


		echo view('templates/header', $header_data);
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



	public function video($id, $name)
	{
		$keyword_string = "";
		$setting = $this->VideoModel->get_setting($this->branch);
		$video_data = $this->VideoModel->get_id_video($id);
		$videocate = $this->VideoModel->get_category_movie($id);

		if (substr($video_data['movie_picture'], 0, 4) == 'http') {
			$movie_picture = $video_data['movie_picture'];
		} else {
			$movie_picture = $this->path_thumbnail . $video_data['movie_picture'];
		}
		$setting['setting_img'] = $movie_picture;

		$seo = $this->VideoModel->get_seo($this->branch);
		if (!empty($seo)) {
			if (!empty($seo['seo_title'])) {
				$title = $seo['seo_title'];
				$name_videos = $video_data['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($seo['seo_description'])) {
				$description = $seo['seo_description'];
				$description_movie = $video_data['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}
		$ads = $this->VideoModel->get_ads($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);

		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string,
			'setting' => $setting,
			'index' => 'a',
			'vdorandom' => $vdorandom,
			'video_data' => $video_data,
			'videocate' => $videocate
		];

		echo view('templatesv2/header.php', $header_data);
		echo view('templatesv2/play.php');
		echo view('templatesv2/footer.php');
	}

	public function get_ep_series($id)
	{

		$keyword_string = "";
		$setting = $this->VideoModel->get_setting($this->branch);
		$series = $this->VideoModel->get_ep_series($id);
		$videocate = $this->VideoModel->get_category_movie($id);

		if (substr($series['movie_picture'], 0, 4) == 'http') {
			$movie_picture = $series['movie_picture'];
		} else {
			$movie_picture = $this->path_thumbnail . $series['movie_picture'];
		}
		$setting['setting_img'] = $movie_picture;

		$seo = $this->VideoModel->get_seo($this->branch);
		if (!empty($seo)) {
			if (!empty($seo['seo_title'])) {
				$title = $seo['seo_title'];
				$name_videos = $series['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($seo['seo_description'])) {
				$description = $seo['seo_description'];
				$description_movie = $series['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}
		$ads = $this->VideoModel->get_ads($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);

		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string,
			'setting' => $setting,
			'vdorandom' => $vdorandom,
			'video_data' => $series,
			'videocate' => $videocate
		];

		// echo "<pre>";
		// print_r($series);
		// die;


		echo view('templatesv2/header.php', $header_data);
		echo view('templatesv2/series.php');
		echo view('templatesv2/footer.php');
	}

	public function video_series($series_id, $series_name, $ep_id, $ep_name)
	{
		$keyword_string = "";
		$setting = $this->VideoModel->get_setting($this->branch);
		$series = $this->VideoModel->get_ep_series($series_id);
		$videocate = $this->VideoModel->get_category_movie($series_id);

		if (substr($series['movie_picture'], 0, 4) == 'http') {
			$movie_picture = $series['movie_picture'];
		} else {
			$movie_picture = $this->path_thumbnail . $series['movie_picture'];
		}
		$setting['setting_img'] = $movie_picture;

		$seo = $this->VideoModel->get_seo($this->branch);
		if (!empty($seo)) {
			if (!empty($seo['seo_title'])) {
				$title = $seo['seo_title'];
				$name_videos = $series['movie_thname'];
				$title_name = $setting['setting_title'];
				$title_web = str_replace(
					"{movie_title} - {title_web}",
					$name_videos . " - " . $title_name,
					$title
				);
				$setting['setting_title'] = $title_web;
			}

			if (!empty($seo['seo_description'])) {
				$description = $seo['seo_description'];
				$description_movie = $series['movie_des'];
				$setting['setting_description'] = str_replace("{movie_description}", $description_movie, $description);
			}
		}
		$ads = $this->VideoModel->get_ads($this->branch);
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$vdorandom = $this->VideoModel->get_id_video_random($this->branch);

		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
			'backURL' => $this->backURL,
			'branch' => $this->branch,
			'path_ads' => $this->path_ads,
			'path_logo' => $this->path_logo,
			'path_imgads' => $path_imgads,
			'keyword_string' => $keyword_string,
			'setting' => $setting,
			'vdorandom' => $vdorandom,
			'video_data' => $series,
			'videocate' => $videocate,
			'index' => $ep_id
		];

		echo view('templatesv2/header.php', $header_data);
		echo view('templatesv2/play.php');
		echo view('templatesv2/footer.php');
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
			'document_root' => $this->document_root,

			'video_data' => $video_data,
			'playerUrl'	=> $urlplay,
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
		$ads = $this->VideoModel->get_ads($this->branch);
		$path_livesteram = $this->VideoModel->get_path_livesteram();
		$path_imgads = $this->VideoModel->get_path_imgads($this->branch);
		$setting = $this->VideoModel->get_setting($this->branch);
		$listcontent = $this->VideoModel->get_listcontent($this->branch);
		$setting['setting_description'] = str_replace("{date}", $this->DateThai(gmdate('Y-m-d H:i:s')), $setting['setting_description']);

		//  echo "<pre>";
		//  print_R($listcontent);die;
		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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


		echo view('templatesv2/header', $header_data);

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

	public function list_series()
	{
		$title = 'hh';
		$page = 1;
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		$list_video = $this->VideoModel->get_list_video_series($this->branch_id, $page);
		$ads = $this->VideoModel->get_ads($this->branch);
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

		$header_data = [
			'document_root' => $this->document_root,
			'ads' => $ads,
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

		echo view('templates/header', $header_data);
		echo view('templates/search', $list_data_video);
		echo view('templates/footer');
	}

	public function contract() //ต้นแบบ หน้า cate / search
	{

		$setting = $this->VideoModel->get_setting($this->branch);
		// $setting['setting_img'] = $this->path_setting . $setting['setting_logo'];
		$ads = $this->VideoModel->get_ads($this->branch);
		$header_data = [
			'document_root' => $this->document_root,
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
}
