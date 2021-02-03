<?php

namespace SpauldingRidge\SuiteTalk;


class SuiteTalkPassportGenerator {

	public function generateTokenPassport() {
        
    	$consumer_key = config('suitetalk.consumerkey');
		$consumer_secret = config('suitetalk.consumersecret');
		$token = config('suitetalk.tokenid');
		$token_secret = config('suitetalk.tokensecret');
        $nsaccount = config('suitetalk.companyid');
		
		$nonce = $this->generateRandomString();
		$timestamp = time();

		$baseString = 
            		urlencode($nsaccount) ."&". 
            		urlencode($consumer_key) ."&". 
            		urlencode($token) ."&". 
            		urlencode($nonce) ."&". 
            		urlencode($timestamp);
		
        	$secret = 
            		urlencode($consumer_secret) .'&'. 
            		urlencode($token_secret);
		
        	$method = 'sha256'; //can be sha256	
		$signature = base64_encode(hash_hmac($method, $baseString, $secret, true));
		
        $tokenSignature = new Service\TokenPassportSignature($signature, "HMAC-SHA1");        
        $tokenPassport = new Service\TokenPassport($nsaccount, $consumer_key, $token, $nonce, $timestamp, $tokenSignature);
		
		return $tokenPassport;
	}

	private function generateRandomString() {
		
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < config('suitetalk.noncelength') ; $i++) {
			$randomString .= $characters[random_int(0, $charactersLength - 1)]; 
		}
		return $randomString;
	}

}
