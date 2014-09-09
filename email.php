<?php

// require dependencies
//
require( 'postmark.php' );
require( 'config.php' );

// error handling
//
function error( $error = FALSE )
{
    if ( $error )
    {
        if ( $error == 'blank' )
        {
            echo "Something was empty";
        }
        else if ( $error == 'email' )
        {
            echo "The email was invalid";
        }
        else if ( $error == 'post' )
        {
            echo "Something was wrong with the post";
        }
        else if ( $error == 'postmark' )
        {
            echo "Error with Postmark";
        }
    }
    return false;
}

// run the email
//
if ( isset( $_POST[ 'email' ] ) )
{
    // set email defaults

    $to = "andrewgioia@gmail.com";
    $subject = "Hey, someone submitted the contact form";

    // check if the post vars are empty

    if ( ! isset( $_POST[ 'name' ] )
        || ! isset( $_POST[ 'email' ] )
        || ! isset( $_POST[ 'note' ] ) )
    {
        error( 'blank' );
    }

    // set post vars

    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $note = $_POST[ 'note' ];

    // validate the email

    $exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if ( ! preg_match( $exp, $email ) )
    {
        error( 'email' );
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

    // set the headers

    $headers = "From: ".$email."\r\n".
        "Reply-To: ".$email."\r\n".
        "X-Mailer: PHP/".phpversion();

    // send the message

    $postmark = new Postmark( 'your-api-key', $email, $email );
    if ( $postmark->to( 'andrewgioia@gmail.com' )
            ->subject( $subject )
            ->html_message( $message )
            ->send() )
    {
        echo "Message sent";
    }
    else
    {
        error( 'postmark' );
    }

}
else
{
    error( 'post' );

}
