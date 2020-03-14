<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{	

	public function show()
	{
		return view('pages.index', $this->data);
	}
	
	public function showUpdates($id, $subject)
	{
		$this->data['update'] = $this->getLastestUpdatesById($id);
		return view('pages.updates', $this->data);
	}

	public function register()
	{
		return view('pages.register', $this->data);
	}

	public function rank()
	{
		return view('pages.rankings', $this->data);
	}
	
	public function bcrank()
	{
		return view('pages.bcrank', $this->data);
	}
	
	public function gensrank()
	{
		return view('pages.gensrank', $this->data);
	}

	public function donations()
	{
		return view('pages.donations', $this->data);
	}
	
	public function mission()
	{
		return view('pages.mission', $this->data);
	}
	
	public function vision()
	{
		return view('pages.vision', $this->data);
	}
	
	public function faq()
	{
		return view('pages.faq', $this->data);
	}
	
	public function tos()
	{
		return view('pages.tos', $this->data);
	}
	
	public function privacy()
	{
		return view('pages.privacy', $this->data);
	}
	
	public function about()
	{
		return view('pages.about', $this->data);
	}
	
	public function contact()
	{
		return view('pages.contact', $this->data);
	}
	
	public function mainLauncher()
	{
		return view('pages.main', $this->data);
	}
	
	public function newsLauncher()
	{
		return view('pages.news', $this->data);
	}
	
	public function lottery()
	{
		if(Auth::check())
			$this->data['is_lottery_join'] = DB::table('lottery_user')->where('name', Auth::user()->memb___id)->first();
		else{
			$this->data['is_lottery_join'] = null;
		}
		return view('pages.lottery', $this->data);
	}
	
	public function postLottery(Request $request)
	{
		if(Auth::check()){
			$checkuser = DB::table('lottery_user')->where('name', Auth::user()->memb___id)->first();

			if($checkuser)
			{
				$msg = 'You are already registered.';
				$suc = 0;
			}else{
				if($request->type == 3)
				{
					$postback_url = '/achillesmu/public/api/minuscoin';
					$data['username'] = Auth::user()->memb___id;
					$data['hash'] = $this->hashkey;
					$res = $this->callApi($postback_url, $data);
					if($res->callback == 1){
						$msg = 'You successfully registered ' . Auth::user()->memb___id;
						$suc = 1;
						DB::table('lottery_user')->insert(
							['type' => $request->type, 'name' => Auth::user()->memb___id, 'approve' => 1]
						);
					}else{
						$msg = $res->callback;
						$suc = 0;
					}
				}else{
					DB::table('lottery_user')->insert(
						['type' => $request->type, 'name' => Auth::user()->memb___id, 'approve' => 0]
					);
					$msg = 'You successfully registered ' . Auth::user()->memb___id . ' but is pending until we get the jewels.';
					$suc = 1;
				}
			}
		}else{
			$msg = 'You must login first';
			$suc = 0;
		}
		

		return back()->with(['msg' => $msg, 'suc' => $suc]);	
	}


	public function forgotpw()
	{
		return view('pages.forgotpw', $this->data);
	}

	public function postForgotpw()
	{
			echo 'forgot pw';
	}
	
	public function postDuelmaster(Request $request)
	{
		if (Auth::check()) {
			$url = '/achillesmu/public/api/user/characterinfo/' . $request->character;
			$check = $this->callGetApi($url, $data = array());
			$allowed_char = array(1,7);
			if(!isset($check->err))
			{
				if($check->AccountID != Auth::user()->memb___id)
				{
					$msg = 'You cant register a character that is not in your account. please try again';
					$suc = 0;
				}elseif(!in_array($check->chartype, $allowed_char)){
					$msg = $request->character . ' is not a Blade Knight. Please try again.'. $check->chartype;
					$suc = 0;
				}else{
					$checkifreg = DB::table('duelmaster')->where('name', $request->character);
	
					if($checkifreg->first())
					{
						$msg = $request->character . ' is already registered';
						$suc = 0;
					}else{
						DB::table('duelmaster')->insert(['name' => $request->character, 'class' => $check->chartype]);
						$msg = 'You successfully registered ' . $request->character;
						$suc = 1;
					}
				}
			}else{
				$msg = $request->character . ' is not found. Please try again';
				$suc = 0;
			}
		}else{
			$msg = 'You must login first before you can register';
			$suc = 0;
		}

		return back()->with(['msg' => $msg, 'suc' => $suc]);	
	}


	public function reg(Request $request)
	{
		$postback_url = '/achillesmu/public/api/register';

		$postback_data['username'] = $request->username;
		$postback_data['email'] = $request->email;
		$postback_data['password'] = $request->password;
		$postback_data['hash'] = '8415e91f9f0770f983d3e7dace5c6936';
		$postback_data['secretq'] = 1;
		$postback_data['secreta'] = '1';

		$res = $this->callApi($postback_url, $postback_data);

		if(isset($res->success))
		{
			$msg = 'Register Successful!';
			$suc = 1;

		}else{
			$msg = $res->callback.'<br>';
			$suc = 0;

			if(isset($res->validator->username[0]))
			{
				$msg .= $res->validator->username[0].'<br>';
			}

			if(isset($res->validator->password[0]))
			{
				$msg .= $res->validator->password[0].'<br>';
			}

			if(isset($res->validator->email[0]))
			{
				$msg .= $res->validator->email[0].'<br>';
			}			
		}

		return redirect('/register')->with(['msg' => $msg, 'suc' => $suc]);

	}

	public function login(Request $request)
	{
		try{
			Auth::attempt(['username' => $request->username, 'password' => $request->password]);

			var_dump(Auth::user());
			$log = ['success' => 1];
			redirect('/');

		}catch(\Exception $e){
			$log = ['success' => 0, 'err' => $e->getMessage()];
			return $log;
		}
	}

	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}