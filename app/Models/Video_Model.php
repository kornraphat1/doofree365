<?php
namespace App\Models;

use CodeIgniter\Model;

class Video_Model extends Model {
    
    protected $table_movie = 'mo_movie';
    protected $table_category = 'mo_category';
    protected $mo_moviecate = 'mo_moviecate';
    protected $table_vdoads = 'mo_adsvideo';
    protected $pathAdsVideo = 'movie/adsvdo';
    protected $ads = 'ads';
    protected $report_movie = 'movie_report';
    protected $live_stream = 'mo_livestream';
    protected $setting = 'setting';
    protected $content = 'content';
    protected $seo = 'seo';
    
    private $path_filelogo;
    
    public function __construct() {

        parent::__construct();
        $db = \Config\Database::connect();
        $this->path_filelogo = "logo";
        
    }

    function get_adsvideolist($backurl)
	{

		$sql = "SELECT 
					$this->table_vdoads.adsvideo_id,
					$this->table_vdoads.adsvideo_name,
					$this->table_vdoads.adsvideo_status,
					$this->table_vdoads.adsvideo_url as url,
					$this->table_vdoads.branch_id,
                    (
                        CASE
                        WHEN $this->table_vdoads.adsvideo_video IS NOT NULL THEN
                            CONCAT(
                                '$backurl',
                                '$this->pathAdsVideo',
                                '/',
                                $this->table_vdoads.adsvideo_video
                            )
                        END
                    ) AS 'file'
				FROM
					$this->table_vdoads
				WHERE $this->table_vdoads.branch_id = '1' AND $this->table_vdoads.adsvideo_status = 1";

        $query = $this->db->query($sql);
        
        return $query->getResultArray();
        
	}

    public function get_category($branch_id) // เรียก Category ตาม Branch 
    {
        $sql = "SELECT
            *
            FROM
            $this->table_category
            WHERE
            `$this->table_category`.branch_id = ?";

        $query = $this->db->query($sql, [$branch_id]);
        return $query->getResultArray();

    }
    public function get_caterow($cate_id) // เรียก Category ตาม Branch 
    {
        
        $sql = "SELECT
            *
            FROM
            $this->table_category
            WHERE
            `$this->table_category`.category_id = ?";
        $query = $this->db->query($sql, [$cate_id]);
        return $query->getRowArray();

    }
    
    public function get_list_video_search($branchid, $keyword="")
    {
        $sql_where = " ";

        if ($keyword!="") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }

        $sql = "SELECT
            *
            FROM
            $this->table_movie
            WHERE
            `$this->table_movie`.branch_id = ".$branchid.$sql_where;
    
        $query = $this->db->query($sql);

        return $query->getResultArray();

    }

    

    public function get_list_video($branchid, $keyword="", $page=1)
    {
        // die;
        $sql_where = " ";

        if ($keyword!="") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }

        $sql = "SELECT
            *
            FROM
            $this->table_movie
            WHERE
            `$this->table_movie`.branch_id = ".$branchid.$sql_where;

        //print_r()
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 24;

        // return $query->getResultArray();
        return get_pagination($sql, $page, $perpage,$total);

    }

    public function get_movie_new_recommend($branchid, $keyword="", $page=1)
    {
        // die;
        $sql_where = " ";

        if ($keyword!="") {
            $sql_where = " AND `$this->table_movie`.movie_thname LIKE '%$keyword%' ";
        }

        $sql = "SELECT
            *
            FROM
            $this->table_movie
            WHERE
            `$this->table_movie`.branch_id = ".$branchid.$sql_where;

        //print_r()
        $query = $this->db->query($sql);
        $total = count($query->getResultArray());
        $perpage = 10;

        // return $query->getResultArray();
        return get_pagination($sql, $page, $perpage,$total);

    }
    

    // Get video_movie
    public function get_id_video($id)
    {
        $sql = "SELECT
                    *
                FROM
                    `$this->table_movie`
                WHERE
                `$this->table_movie`.movie_id = ?";
        
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray();

    }
    // Get video_series
    public function get_id_series($id)
    {
        $sql = "SELECT
                    *
                FROM
                    `$this->table_scouce1`
                INNER JOIN `$this->table_movie` ON `$this->table_scouce1`.movie_id = `$this->table_movie`.movie_id
                WHERE
                `$this->table_scouce1`.movie_id = ? ";

        $query = $this->db->query($sql, [$id]);
        //echo $sql;die;
        return $query->getRowArray();
    }

    public function get_id_video_bycategory($id,$branch_id)
    {
        $sql = "SELECT
           *
        FROM
            mo_moviecate
        INNER JOIN mo_movie ON mo_moviecate.movie_id = mo_movie.movie_id 
        WHERE mo_moviecate.category_id = '$id' AND mo_moviecate.branch_id = '$branch_id' ";
        $query = $this->db->query($sql, [$id]);
        return $query->getResultArray();

    }

    
    public function get_path_imgads($branch_id)
    {
        $sql = "SELECT * FROM  `$this->ads` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        //echo $sql;die;
        return $query->getResultArray();

    }

    //Get database livestream
    public function  get_path_livesteram()
    {
        $sql = "SELECT * FROM `$this->live_stream`";
        $query = $this->db->query($sql);
        // echo $sql;die;
        return $query->getResultArray();
    }
    
    //Get video livestream
    public function  get_video_livesteram($id)
    {
        $sql = "SELECT * FROM `$this->live_stream`
        WHERE
             `$this->live_stream`.livestream_id = ?";
        $query = $this->db->query($sql,[$id]);
       // echo $sql;die;
        return $query->getRowArray();
    }

    public function save_reports($branch,$id){
        //echo "sds";die;
        $bd =  $this->db->table($this->report_movie);
        $this->db->transBegin();
            $data =  [
                       'movie_id' =>  $id,
                       'branch_id' => $branch
                   ];
        try {
            if($bd->insert($data)==true ){
                $this->db->transCommit();
                return true;
            }
         }
         catch (\Exception $e)
         {
            // throw new Exception("Error Insert user", 1);
            $this->db->transRollback();
            return $e->getMessage(); 
         }
    }
    

    //Get setting show fontend 
    public function  get_setting($branch_id)
    {
        $sql = "SELECT * FROM `$this->setting` WHERE branch_id = '$branch_id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }

    //Get Content
    public function  get_content($branch_id,$id)
    {
        $sql = "SELECT * FROM `$this->content` WHERE branch_id = '$branch_id' AND content_id  = '$id' ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }

    //Get List Content
    public function  get_listcontent($branch_id)
    {
        $sql = "SELECT * FROM `$this->content` WHERE branch_id = '$branch_id'";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
     
     //Get Seo
     public function  get_seo($branch_id)
     {
         $sql = "SELECT * FROM `$this->seo` WHERE branch_id = '$branch_id'";
         $query = $this->db->query($sql);
         return $query->getRowArray();
     }

    
      //Get Name video
      public function get_namevideo($id)
      {
          $sql = "SELECT movie_thname,movie_des FROM `$this->table_movie` WHERE movie_id = '$id'";
          $query = $this->db->query($sql);
          return $query->getRowArray();
      }

      
      //Get Name video
      public function get_title($branch)
      {
          $sql = "SELECT setting_title,setting_description FROM `$this->setting` WHERE branch_id = '$branch'";
          $query = $this->db->query($sql);
          return $query->getRowArray();
      }

      //Get Img_og
      public function get_img_og($id)
      {
          $sql = "SELECT movie_picture FROM `$this->table_movie` WHERE movie_id = '$id' ";
          $query = $this->db->query($sql);
          return $query->getRowArray();
      }
}

?>
