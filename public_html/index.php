<?php

require '../lib/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
// require '../lib/Twig/Autoloader.php';
// Twig_Autoloader::register();

// require '../lib/Slim/Views/Twig.php';

$app = new \Slim\Slim(array(
    'templates.path' => '../lib/templates'
    ));

//////////////////////////////////
// ---------- ROUTES ---------- //
//////////////////////////////////

$app->get('/home',function () use ($app) {
        $data = [
            'title'=>'Home',
            'static' => 'index'
        ];
        $app->render('template.php',$data);
    });

$app->get('/about',function () use ($app) {
        $data = [
            'title'=>'About Us',
            'static' => 'about'
        ];
        $app->render('template.php',$data);
    });

$app->get('/portfolio',function () use ($app) {
        $data = [
            'title'=>'Portfolio',
            'static' => 'portfolio'
        ];
        $app->render('template.php',$data);
    });

$app->get('/services',function () use ($app) {
        $data = [
            'title'=>'Services',
            'static' => 'services'
        ];
        $app->render('template.php',$data);
    });

$app->get('/contact',function () use ($app) {
        $data = [
            'title'=>'Contact Us',
            'static' => 'contact'
        ];
        $app->render('template.php',$data);
    });

$app->get('/',function () use ($app) {
        $data = [
            'title'=>'Home',
            'static' => 'index'
        ];
        $app->render('template.php',$data);
    });

$app->post('/post-contact', function() use ($app) {

        // Enter the email where you want to receive the message
        $emailTo = 'iam@markoaleksic.com';

        $clientName = trim($_POST['name']);
        $clientEmail = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

        $array = array();

        $array['nameMessage'] = '';
        $array['emailMessage'] = '';
        $array['messageMessage'] = '';

        if($clientName == '')
        {
            $array['nameMessage'] = 'Please enter your name.';
        }

        if(!isEmail($clientEmail)) {
            $array['emailMessage'] = 'Please insert a valid email address.';
        }

        if($message == '')
        {
            $array['messageMessage'] = 'Please enter your message.';
        }

        if($clientName != '' && isEmail($clientEmail) && $message != '')
        {
            // Send email
        $headers = "From: " . $clientName . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $subject, $message, $headers);
        }

        echo json_encode($array);
    });

$app->run();


/////////////////////////////////////
// ---------- FUNCTIONS ---------- //
/////////////////////////////////////

function isEmail($email)
{
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}