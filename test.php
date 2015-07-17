<?php 
require_once __DIR__ . "/vendor/autoload.php";
 
use Jaspersoft\Client\Client;
 
$c = new Client(
				// "http://54.226.254.79/jasperserver-pro",
				// "jasperadmin",
				// "jasperadmin",
				// "organization_1"
				"http://localhost:8080/jasperserver-pro",
				"jasperadmin",
				"jasperadmin"
				
				
			);		

 //------------This returns value in html form-----------------
  //$report = $c->reportService()->runReport("/public/Samples/Reports/01._Geographic_Results_by_Segment_Report","html");
  //$report = $c->reportService()->runReport("/public/Samples/Dashboards/1._Supermart_Dashboard", "html");
 	
  // echo $report;
 // print_r($report);
 // echo str_ireplace("/jasperserver-pro/","http://localhost:8080/jasperserver-pro/",$report);
 
//$js->getJobs("/reports/samples/AllAccounts");
 $dashboard=$c->runDashboard('/public/Samples/Dashboards/1._Supermart_Dashboard');
 //echo '<iframe src="'.$dashboard.'" width="1000" height="1000"></iframe>';
 header('Location:' .$dashboard );
			?>