<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $host = 'http://139.99.124.123:8080';
    public $data = [];
	public $hashkey = '8415e91f9f0770f983d3e7dace5c6936';
	public $updates = [];
	public $vip;

    public function __construct(Request $request)
    {
    	$this->data['rankings'] = $this->rankings();
    	$this->data['rankingss15'] = $this->rankingss15();
    	$this->data['bcrankings'] = $this->bcRankings();
    	$this->data['ccrankings'] = $this->ccRankings();
    	$this->data['dsrankings'] = $this->dsRankings();
    	$this->data['gensrankings'] = $this->gensRankings();
    	$this->data['online'] = $this->getonline();
    	$this->data['classrankings'] = $this->classRankings($request->classranking);
		$this->data['updates'] = $this->getLastestUpdates();
		$this->data['lottery'] = $this->getLottery();
		$this->data['lottery_users'] = $this->getLotteryUser();
		$this->data['content'] = $this->getContent();
		$this->data['vip_status'] = [0 => 'Not VIP', 1 => 'VIP', 2 => 'Silver', 3 => 'Gold', 4 => 'Platinum'];
		$this->data['merchant'] = ['pmutestbk', 'admin', 'keekyow'];
		$this->data['client_download'] = $this->data['content']->where('id', 8)->first()->content;
		
    }

    public function callApi($route, $data = array())
    {

    	$postback_url = $this->host . $route;
	
    	$postback_data = $data;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $postback_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postback_data));
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
		
		//var_dump($response);die();
		$res = json_decode($response);
		
		return $res;
    }

    public function callGetApi($route, $data = array())
    {

    	$postback_url = $this->host . $route;

    	$response = file_get_contents($postback_url);

		$res = json_decode($response);

		return $res;
    }

    public function rankings()
    {
        $value = Cache::remember('rankings', 2, function () {
            
            $postback_url =  '/achillesmu/public/api/character/rankings';
            $res = $this->callGetApi($postback_url);
            return $res;
            
        });
        
        return $value;
    }
    
    public function rankingss15()
    {
        $value = Cache::remember('rankingss15', 2, function () {
            
            $postback_url =  '/achillesmu/public/api/character/rankings/s15';
            $res = $this->callGetApi($postback_url);
            return $res;
            
        });
        
        return $value;
    }
	
	public function bcRankings()
    {
         $value = Cache::remember('rankingssbc', 10, function () {
             
            $postback_url =  '/achillesmu/public/api/character/bloodcastle';
            $res = $this->callGetApi($postback_url);
            return $res;
            
         });
        
        return $value;
    }
    
    public function dsRankings()
    {
         $value = Cache::remember('rankingssds', 10, function () {
             
            $postback_url =  '/achillesmu/public/api/character/devilsquare';
            $res = $this->callGetApi($postback_url);
            return $res;
            
         });
        
        return $value;
    }
    
    public function ccRankings()
    {
         $value = Cache::remember('rankingsscc', 10, function () {
             
            $postback_url =  '/achillesmu/public/api/character/chaoscastle';
            $res = $this->callGetApi($postback_url);
            return $res;
            
         });
        
        return $value;
    }
	
	public function gensRankings()
    {
        $value = Cache::remember('rankingsgens', 10, function () {
            
            $postback_url =  '/achillesmu/public/api/character/gens';
            $res = $this->callGetApi($postback_url);
            return $res;
            
        });
        
        return $value;
    }

    public function getonline()
    {
         $value = Cache::remember('online', 5, function () {
             
            $postback_url =  '/achillesmu/public/api/allonline';
            $res = $this->callGetApi($postback_url);
            return count($res);
            
        });
        
        return $value;
    }
	
	public function getLastestUpdates()
	{
		$value = Cache::remember('news', 60, function () {
			return DB::table('news')
			->where('live', 1)
			->orderBy('created_at', 'desc')
			->get();
		});
		
		return $value;
	}
	
	public function getLottery()
	{
		$value = Cache::remember('lottery', 60, function () {
			return DB::table('lottery')
			->first();
		});
		
		return $value;
	}
	
	public function getContent()
	{
		$value = Cache::remember('content', 60, function () {
			return DB::table('content')
			->get();
		});
		
		return $value;
	}
	
	public function getLotteryUser()
	{
		$value = Cache::remember('lottery_user', 10, function () {
			return DB::table('lottery_user')
			->get();
		});
		
		return $value;
	}
	
	public function getLastestUpdatesById($id)
	{
		$value = Cache::remember('news'.$id, 60, function () use ($id) {
			return DB::table('news')
			->where('id', $id)
			->first();
		});

		return $value;
	}
	
	public function getCurrentWcoins($username)
	{
		$url2 = '/achillesmu/public/api/user/coininfo/'. $username;
		return $this->callGetApi($url2, $data = array());
	}
    
    public function classRankings($class = 167)
    {
         if($class == null) {
                $class = 167;
            }
       
        $value = Cache::remember('classrankings-'.$class, 2, function () use ($class) {
            
            
            
            $postback_url =  '/achillesmu/public/api/character/classraking/'.$class;
            $res = $this->callGetApi($postback_url);
            return $res;
            
        });
        
        return $value;
    }
    
    public function getUser($username)
    {
        if (strpos($username, 'admin') !== false) {
            return array();
        }else{
            $postback_url =  '/achillesmu/public/api/account/byusername/'.$username;
            $res = $this->callGetApi($postback_url);
            return $res;
        }
    }
	
	public function generateRafflePrizes()
	{
		return [
			'14,13,10' => 'Jewel Of Bless x10',
			'14,13,20' => 'Jewel Of Bless x20',
			'14,13,30' => 'Jewel Of Bless x30',
			
			'14,14,10' => 'Jewel Of Soul x10',
			'14,14,20' => 'Jewel Of Soul x20',
			'14,14,30' => 'Jewel Of Soul x30',
			
			'14,16,10' => 'Jewel Of Life x10',
			'14,16,20' => 'Jewel Of Life x20',
			'14,16,30' => 'Jewel Of Life x30',
			
			'14,22,10' => 'Jewel Of Creation x10',
			'14,22,20' => 'Jewel Of Creation x20',
			'14,22,30' => 'Jewel Of Creation x30',
			
			'14,42,10' => 'Jewel Of Harmony x10',
			'14,42,20' => 'Jewel Of Harmony x20',
			'14,42,30' => 'Jewel Of Harmony x30',
		];
	}
	
	public function verifyGoogleRecaptcha($request)
	{
		// call curl to POST request
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LfbsO0iAAAAABOKD_tEg_Bru7jqFiyAKFhISGr7', 'response' => $request->token)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$arrResponse = json_decode($response, true);
	
		// verify the response
		if($arrResponse["success"] == false) {
			dd('Antiflood. Please go back. DO NO REFRESH THIS PAGE');
		}
	}
}
