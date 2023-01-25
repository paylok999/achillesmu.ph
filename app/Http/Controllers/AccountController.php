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
			'100'  => '100',
			'200'  => '200 (10% bonus)',
			'300'  => '300 (11% bonus)',
			'400'  => '400 (12% bonus)',
			'500'  => '500 (13% bonus)',
			'1000' => '1000 (14% bonus)',
			'1500' => '1500 (15% bonus)',
			'2000' => '2000 (16% bonus)',
			'2500' => '2500 (18% bonus)',
			'5000' => '5000 (20% bonus)',

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
    
    function resetMaster(Request $request)
	{
		$url = '/achillesmu/public/api/user/msreset';
		
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
    
    public function couponCode(Request $request)
    {
		$this->data['userCoupon'] = DB::table('coupon')
        ->where('username', Auth::user()->memb___id)
        ->get();
		
		$this->data['prizes'] = $this->generateRafflePrizes();
		
        return view('account.couponcode', $this->data);
    }
    
    public function couponCodeWinner(Request $request)
    {
        $coupon =  DB::table('coupon')
        ->where('claimed', 1)
        ->where('event', $request->event)
        ->get();

        $this->data['coupon'] = [];
        $this->data['event'] = $request->event;
        if(count($coupon) >= 1){
             foreach($coupon as $k => $v){
                $url = '/achillesmu/public/api/user/allcharacter/'. $v->username;
                $characters = (array) $this->callGetApi($url, $data = array())[0];
                $this->data['coupon'][] = ['name' => $characters['name'], 'coupon' => $v->coupon, 'prize' => $v->prize];
            }
        }
        
        return view('account.coupon-winners', $this->data);
    }
    
     public function postCouponCode(Request $request)
    {
		$this->verifyGoogleRecaptcha($request);

        $data['username']  = Auth::user()->memb___id;
        $data['ip'] = $request->ip();
        
        $coupon =  DB::table('coupon')
        ->where('coupon', $request->couponcode)
        ->first();
        
        if(isset($coupon->coupon)){
            echo 'iseet';
            if($coupon->username != '') {
                echo 'claimed';
                $msg = 'Coupon ' . $request->couponcode . ' already claimed. Please try again';
                $suc = 0;
            }else{
                echo 'check';
                $checkUser = DB::table('coupon')
                ->where('username', $data['username'])
                ->orWhere('ip', $data['ip'])
                ->first();

				echo 'insert';
				$update = DB::table('coupon')
				->where('coupon', $request->couponcode)
				->update($data);
				$msg = 'You have successfully win ' .  $coupon->prize . ' using '.$request->couponcode.'! Please use the form below to claim';
				$suc = 1;
            }
        }else{
            $msg = 'Coupon ' . $request->couponcode . ' with eventID of '.$request->event.' is invalid or already claimed. Please try again';
            $suc = 0;
        }
        
        return redirect('/account/coupon-code')->with(['msg' => $msg, 'suc' => $suc]);
        
    }
	
	public function getCouponClaim(Request $request)
	{
		$this->verifyGoogleRecaptcha($request);
		
		$checkCoupon = DB::table('coupon')
        ->where('id', $request->id)
        ->where('username', Auth::user()->memb___id)
        ->where('claimed', 0)
        ->first();
		$suc = 0;
		
		
		if($checkCoupon == null) {
			$msg = 'Invalid coupon ID';
			return redirect('/account/coupon-code')->with(['msg2' => $msg, 'suc2' => $suc]);
			exit();
		}
		
		if($checkCoupon->claimed == 1) {
			$msg = 'Coupon already claimed';
			return redirect('/account/coupon-code')->with(['msg2' => $msg, 'suc2' => $suc]);
			exit();
		}
		
		//claim
		if(isset($checkCoupon->coupon)) {
			//$checkCoupon->claimed = 1;
			//$checkCoupon->save();
			
			$url = '/achillesmu/public/api/gremory';
			$data['username'] = Auth::user()->memb___id;
			$data['itemcode'] = $checkCoupon->prize;
			$data['hash'] = $this->hashkey;
			$res = $this->callApi($url, $data);
			
			if($res->callback == 1)
			{
				$update = DB::table('coupon')->where('id', $request->id)->update(array('claimed' => 1));
				if ($update == 1) {
					$msg = 'Prize sent to your gremory case. Please check';
					$suc = 1;
					return redirect('/account/coupon-code')->with(['msg2' => $msg, 'suc2' => $suc]);
				}
			} else {
				$msg = $res->callback;
				return redirect('/account/coupon-code')->with(['msg2' => $msg, 'suc2' => $suc]);
			}
			
		}
	}
    
    public function searchUser()
    {
        return view('account.search', $this->data);
    }
    
    public function postSearchUser(Request $request)
    {
       $userInfo = [];
       $suc = 0;
       $msg = 'User Not Found!!!';
       if(in_array(Auth::user()->memb___id, $this->data['merchant'])){
           
           if(isset($request->username)) {
                 $data['username']  = $request->username;
                $userInfo = $this->getUser($data['username']);
                if(isset($userInfo->memb___id)) {
                    $msg = 'User Found!';
                    $suc = 1;
                }else{
                    $msg = 'User Not Found!';
                }
            }else {
                $msg = 'User Not Found!!';
            }
       }

       return redirect('/account/search')->with(['msg' => $msg, 'suc' => $suc, 'userInfo' => $userInfo]);
    }
}