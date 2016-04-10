<?php
	// the AJAX call should return the number of likes, so that we can update the facebook timeline accordingly
	// ideally the response returned here looks like this { status: "success", likes: 9}
	// when something goes wrong (try catch it) the response could look like { status: "error", message: "Sorry, the maximum likes allowed is 10"}

include_once('../classes/Activity.class.php');
$a = new Activity();

if(!empty($_POST['dataid'])){
    $a->id = $_POST['dataid'];
    try {
        $likes = $a->like();
        $response['status'] = "success";
        $response['likes'] = $likes;
    } catch (Exception $e) {
        $response['status'] = "error";
        $response['message'] = "Sorry, the maximum likes allowed is 10";
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

?>