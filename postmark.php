<?php

class Postmark
{
    private $api_key;
    private $data = array();

    function __construct( $apikey, $from, $reply = '' )
    {
    	$this->api_key = $apikey;
    	$this->data[ 'From' ] = $from;
    	$this->data[ 'ReplyTo' ] = $reply;
    }

    function send()
    {
        $headers = [
    		'Accept: application/json',
    		'Content-Type: application/json',
    		'X-Postmark-Server-Token: '.$this->api_key ];
    	$data = $this->data;
    	$ch = curl_init( 'http://api.postmarkapp.com/email' );
    	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
    	curl_setopt( $ch, CURLOPT_POSTFIELDS,
            html_entity_decode( json_encode( $data ) ) );
    	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
    	$return = curl_exec( $ch );
    	$curl_error = curl_error( $ch );
    	$http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
    	curl_close( $ch );

    	if ( $http_code !== 200 )
        {
    		return false;
    	}
        else
        {
    		return true;
    	}
    }

    function to( $to )
    {
    	$this->data[ 'To' ] = $to;
    	return $this;
    }

    function subject( $subject )
    {
    	$this->data[ 'Subject' ] = $subject;
    	return $this;
    }

    function html_message( $body )
    {
    	$this->data[ 'HtmlBody' ] =
            htmlentities( '<html><body>'.$body.'</body></html>' );
    	return $this;
    }

    function plain_message( $msg )
    {
    	$this->data[ 'TextBody' ] = $msg;
    	return $this;
    }

    function tag( $tag )
    {
    	$this->data[ 'Tag' ] = $tag;
    	return $this;
    }

}
