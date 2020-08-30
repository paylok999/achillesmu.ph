<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{	
	public function info()
	{
		$url = '/achillesmu/public/api/user/allcharacter/'. Auth::user()->memb___id;
		$url3 = '/achillesmu/public/api/user/vip/'. Auth::user()->memb___id;

		$this->data['characters'] = $this->callGetApi($url, $data = array());
		$this->data['wcoins'] = $this->getCurrentWcoins(Auth::user()->memb___id);
		$this->data['vip'] = $this->callGetApi($url3, $data = array());
		$this->data['loyalty_points'] = DB::table('loyalty')->where('username', Auth::user()->memb___id)->first();
		
		return view('account.info', $this->data);
	}

	public function changePassword()
	{
		return view('account.changepw', $this->data);
	}
	
	public function goVIP()
	{	
		$this->data['wcoins'] = $this->getCurrentWcoins(Auth::user()->memb___id);
		return view('account.vip', $this->data);
	}
	
	public function postVIP(Request $request)
	{
		$url = '/achillesmu/public/api/user/enrollvip';
		$data['username'] = Auth::user()->memb___id;
		$data['days'] = $request->days;
		$data['hash'] = $this->hashkey;
		$res = $this->callApi($url, $data);
		
		if(!isset($res->callback))
		{
			dd($res);
		}
		if($res->callback == 1)
		{
			\Cache::flush();
			$msg = 'You have successfully enroll on our VIP Sytem!';
			$suc = 1;
		}else{
			$msg = $res->callback;
			$suc = 0;
		}
		
		return redirect('/account/vip')->with(['vip_msg' => $msg, 'vip_suc' => $suc]);
	}
	
	
	public function postchangePassword(Request $request)
	{
		$postback_url = '/achillesmu/public/api/user/changepassword/'. Auth::user()->memb___id;
		$data['oldpassword'] = $request->oldpassword;
		$data['newpassword'] = $request->newpassword;
		$data['rnewpassword'] = $request->rnewpassword;
		$data['hash'] = $this->hashkey;
		
		$res = $this->callApi($postback_url, $data);
		
		if($res->callback == 1)
		{
			$msg = 'Password Changed Successful!';
			$suc = 1;
		}else{
			
			$msg = $res->callback.'<br>';
			$suc = 0;

			if(isset($res->validator->oldpassword[0]))
			{
				$msg .= $res->validator->oldpassword[0].'<br>';
			}

			if(isset($res->validator->newpassword[0]))
			{
				$msg .= $res->validator->newpassword[0].'<br>';
			}

			if(isset($res->validator->rnewpassword[0]))
			{
				$msg .= $res->validator->rnewpassword[0].'<br>';
			}	
		}
		
		

		return redirect('/account/change-password')->with(['msg' => $msg, 'suc' => $suc]);
	}

	public function unstockCharacters(Request $request)
	{
		$postback_url = '/achillesmu/public/api/user/unstock';
		$data['charname'] = $request->charname;
		$data['username'] = Auth::user()->memb___id;
		$data['hash'] = $this->hashkey;
		$res = $this->callApi($postback_url, $data);
		if($res->callback == 1)
		{
			$msg = 'Unstuck Successful!';
			$suc = 1;
		}else{
			$msg = $res->callback;
			$suc = 0;
		}
		return redirect('/account/info')->with(['msg' => $msg, 'suc' => $suc]);
	}
	
	public function renameCharacter(Request $request)
	{
		
		if(!isset($request->charname))
		{
			return redirect('/account/info');
		}
		
		$this->data['current_name'] = $request->charname;
		$this->data['wcoins'] = $this->getCurrentWcoins(Auth::user()->memb___id);
        
		return view('account.rename', $this->data);
	}
	
	public function processRename(Request $request)
	{
		$url = '/achillesmu/public/api/user/rename';
		$data['new_name'] = $request->new_name;
		$data['current_name'] = $request->current_name;
		$data['username'] = Auth::user()->memb___id;
		$data['hash'] = $this->hashkey;
		
		$res = $this->callApi($url, $data);
		
		if($res->callback == 1)
		{
			$msg = 'You have successfully rename '.$data['current_name'].' to '. $data['new_name'];
			$suc = 1;
		}else{
			$msg = $res->callback;
			$suc = 0;
		}
		
		return redirect('/account/info')->with(['msg' => $msg, 'suc' => $suc]);
	}
	
	public function transferCharacter(Request $request)
	{
		return 'comming soon';
	}

	public function donate()
	{
		$this->data['pricing'] = [
			'100'  => '500',
			'200'  => '1000 (+100 bonus)',
			'300'  => '1500 (+150 bonus)',
			'400'  => '2000 (+170 bonus)',
			'500'  => '2500 (+200 bonus)',
			'1000' => '5000 (+400 bonus)',
			'1500' => '7500 (+500 bonus)',
			'2000' => '10000 (+700 bonus)',
			'2500' => '12500 (+1000 bonus)',
			'5000' => '25500 (+2500 bonus)',

		];

		return view('account.donate', $this->data);
	}
	
	public function getTranferWcoins()
	{
		$this->data['wcoins'] = $this->getCurrentWcoins(Auth::user()->memb___id);
		return view('account.transferwcoin', $this->data);
	}
	
	public function postTranferWcoins(Request $request)
	{
		$url = '/achillesmu/public/api/user/cointransfer';
		$data['receiverusername'] = $request->receiverusername;
		$data['amount'] = $request->amount;
		$data['username'] = Auth::user()->memb___id;
		$data['userpassword'] = Auth::user()->memb__pwd;
		$data['hash'] = $this->hashkey;
		
		$res = $this->callApi($url, $data);

		if($res->callback == 1)
		{
			$msg = 'You have successfully transfer wcoin(s) to '.$data['receiverusername'].'. amount: '. $data['amount'];
			$suc = 1;
		}else{
			$msg = $res->callback.'<br>';
			$suc = 0;

			if(isset($res->validator->receiverusername[0]))
			{
				$msg .= $res->validator->receiverusername[0].'<br>';
			}

			if(isset($res->validator->amount[0]))
			{
				$msg .= $res->validator->amount[0].'<br>';
			}	
		}
		
		return redirect('/account/wcoins')->with(['msg' => $msg, 'suc' => $suc]);
	}

	public function donateProcess()
	{
		return 'processing';
	}

	public function donationHistory()
	{
		return view('account.donationhistory', $this->data);
	}
	
	function resetStats(Request $request)
	{
		$url = '/achillesmu/public/api/user/statreset';
		
		$data['charname'] = $request->charname;
		$data['username'] = Auth::user()->memb___id;

		$res = $this->callApi($url, $data);

		if($res->callback == 1)
		{
			$msg['info'] = 'Stat Reset of '. $data['charname'] . ' is successful!';
			$msg['code'] = 1;
		}else{
			$msg['info'] = $res->callback;
			$msg['code'] = 0;
		}
		
		return $msg;
		
	}
}