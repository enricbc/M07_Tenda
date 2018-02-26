<?php
return array(
/** set your paypal credential **/
'client_id' =>'AUY4IeqRKNxU5scBnFVAIDCIDL7lOudR_MuWzEZ1IFfcTW9h3lRX5V3PzlDh7yz7L-3-9_SyT6GLCYRt',
'secret' => 'EFaIUKbPAnQD-MVyT6gHiIER3lcX2cznf9pYS7hsmyh0DfEFORShTvzBtj-mwhBm7XiYBKi-TwQQMjWK',
/**
* SDK configuration
*/
'settings' => array(
	/**
	* Available option 'sandbox' or 'live'
	*/
	'mode' => 'sandbox',
	/**
	* Specify the max request time in seconds
	*/
	'http.ConnectionTimeOut' => 1000,
	/**
	* Whether want to log to a file
	*/
	'log.LogEnabled' => true,
	/**
	* Specify the file that want to write on
	*/
	'log.FileName' => storage_path() . '/logs/paypal.log',
	/**
	* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
	*
	* Logging is most verbose in the 'FINE' level and decreases as you
	* proceed towards ERROR
	*/
	'log.LogLevel' => 'FINE'
	),
);
