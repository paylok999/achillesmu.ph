<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $host = 'http://139.99.124.123:8080';
    public $data = [];
	public $hashkey = '8415e91f9f0770f983d3e7dace5c6936';
	public $updates = [];
	public $vip;

    public function __construct()
    {
    	$this->data['rankings'] = $this->rankings();
    	$this->data['bcrankings'] = $this->bcRankings();
    	$this->data['gensrankings'] = $this->gensRankings();
    	$this->data['online'] = $this->getonline();
		$this->data['updates'] = $this->getLastestUpdates();
		$this->data['lottery'] = $this->getLottery();
		$this->data['lottery_users'] = $this->getLotteryUser();
		$this->data['content'] = $this->getContent();
		$this->data['vip_status'] = [0 => 'Not VIP', 1 => 'VIP', 2 => 'Silver', 3 => 'Gold', 4 => 'Platinum'];
		$this->data['merchant'] = ['rayjohn91', 'Achilles11', 'killua12', 'carinoso'];
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
    	$postback_url =  '/achillesmu/public/api/character/rankings';
    	$res = $this->callGetApi($postback_url);
    	return $res;
    }
	
	public function bcRankings()
    {
    	$postback_url =  '/achillesmu/public/api/character/bloodcastle';
    	$res = $this->callGetApi($postback_url);
    	return $res;
    }
	
	public function gensRankings()
    {
    	$postback_url =  '/achillesmu/public/api/character/gens';
    	$res = $this->callGetApi($postback_url);
    	return $res;
    }

    public function getonline()
    {
    	$postback_url =  '/achillesmu/public/api/allonline';
    	$res = $this->callGetApi($postback_url);
    	return count($res);
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
}
