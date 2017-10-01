<?php
/*
 Template Name: test2
 */
?>
<?php
require_once( "GTMetrix/vendor/autoload.php" );

use Entrecore\GTMetrixClient\GTMetrixClient;
use Entrecore\GTMetrixClient\GTMetrixTest;

$client = new GTMetrixClient();
$client->setUsername( 'm0ham3dajj@gmail.com' );
$client->setAPIKey( '7715bdca19ee58e82d2f51ef5b22fb76' );

$client->getLocations();
$client->getBrowsers();
if ( isset( $_POST['url'] ) ) {
	$url = $_POST['url'];
	$test = $client->startTest( $url );
}
$test = $client->startTest( 'http://www.majour.eb2a.com/' );

//Wait for result
while ( $test->getState() != GTMetrixTest::STATE_COMPLETED &&
        $test->getState() != GTMetrixTest::STATE_ERROR ) {
	$client->getTestStatus( $test );
	sleep( 5 );
}

/*echo "<pre>";
var_dump($test);
echo "</pre>";*/

$obj = json_decode($test, true);

echo "<pre>";
var_dump($test);
echo "</pre>";
?>


<?php get_header(); ?>

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="javascript:;">Blog</a></li>
            <li class="active">GTMetrix</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Report : <?php echo $test['pageBytes']; ?></h1>
                <div class="content-page">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo $obj->{'screenshot'}; ?>" alt=""/>
                        </div>
                        <div class="col-md-9">
                            <h1>Latest Performance Report for:</h1>
                            <h3><a href="<?php echo $_POST['url']; ?>"><?php echo $_POST['url']; ?></a></h3>
                            <hr/>
                            <label>Report generated:</label>
                            <div></div>
                            <label>Test Server Region:</label>
                            <div></div>
                            <label>Using:</label>
                            <div></div>
                            <input type="submit" class="btn btn-danger" value="Download Report PDF">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Performance Scores</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>PageSpeed Score</th>
                                    <th>YSlow Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Default</td>
                                    <td>Defaultson</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3>Page Details</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Fully Loaded Time</th>
                                    <th>Total Page Size</th>
                                    <th>Requests</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Default</td>
                                    <td>Defaultson</td>
                                    <td>Defaultson</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<?php get_footer(); ?>
