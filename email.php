<?php

// dependencies
//
require( 'postmark.php' );
require( 'config.local.php' );

// error handling
//
function error( $error = FALSE, &$config )
{
    if ( $error )
    {
        if ( $error == 'blank' )
        {
            header( 'Location: '.$config[ 'SITE_URL' ].'/?e=blank#em' );
            exit;
        }
        else if ( $error == 'email' )
        {
            header( 'Location: '.$config[ 'SITE_URL' ].'/?e=email#em' );
            exit;
        }
        else if ( $error == 'post' )
        {
            header( 'Location: '.$config[ 'SITE_URL' ].'/?e=post#em' );
            exit;
        }
        else if ( $error == 'postmark' )
        {
            header( 'Location: '.$config[ 'SITE_URL' ].'/?e=api#em' );
            exit;
        }
    }
    return false;
}

// run the email
//
if ( isset( $_POST[ 'email' ] ) )
{
    // set email defaults

    $to = $config[ 'TO_EMAIL' ];
    $subject = "Hey, someone submitted the contact form!";

    // check if the post vars are empty

    if ( ! isset( $_POST[ 'name' ] )
        || ! isset( $_POST[ 'email' ] )
        || ! isset( $_POST[ 'note' ] )
        || strlen( $_POST[ 'name' ] ) == 0
        || strlen( $_POST[ 'email' ] ) == 0
        || strlen( $_POST[ 'note' ] ) == 0 )
    {
        error( 'blank', $config );
    }

    // set post vars

    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $note = $_POST[ 'note' ];

    // validate the email

    $exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if ( ! preg_match( $exp, $email ) )
    {
        error( 'email', $config );
    }

    // clean the note

    $bad = [ 'content-type', 'bcc:', 'to:', 'cc:', 'href' ];
    $note = htmlentities( str_replace( $bad, '', $note ) );

    // set the message

    $message = "Hey! Someone actually filled out the form ".
        "you set up on your homepage. Here is what they ".
        "submitted:\n\n";
    $message .= "Name: ".$name."\n";
    $message .= "Email: ".$email."\n";
    $message .= "Note: ".$note."\n\n";
    $message .= "You rock!\n\n-Anj";

    // set the headers

    $headers = "From: ".$to."\r\n".
        "Reply-To: ".$email."\r\n".
        "X-Mailer: PHP/".phpversion();

    // send the message
    $postmark = new Postmark( $config[ 'API_KEY' ], $to, $email );
    if ( $postmark->to( $to )->subject( $subject )->plain_message( $message )->send() )
    {
        header( 'Location: '.$config[ 'SITE_URL' ].'/?s=thanks' );
    }
    else
    {
        error( 'postmark', $config );
    }

}
else
{
    error( 'post', $config );

}
