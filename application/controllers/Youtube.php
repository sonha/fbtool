<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!file_exists(APPPATH.'/google/vendor/autoload.php')) {
  throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ .'"');
} 

require_once APPPATH.'/google/vendor/autoload.php';
class Youtube extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$user_info = array();
		if ($this->facebook->is_authenticated()) {
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture,location ,link, bio');
			$feed = $this->facebook->request('get', '/me/posts?limit=5');
			if (!isset($user['error'])) {
				$user_info = $user;
			}
		} else {
			redirect('user/login', 'refresh');
		}
		// Load library and url helper
		$this->load->library('facebook');
		$this->load->library('pinterest');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->user_info = $user_info;
	}

	/**
	* function get data to pinterst when you a scrolling page
	* @param :string keyword is text serach
	* @param :int position 
	*/
	public function index() {
		$data['user'] = $this->user_info;
		$data['title'] = "Find Content by Youtube";
		$data['view'] = 'tool/search_youtube';

		$DEVELOPER_KEY = 'AIzaSyA0_xsNsPTIW2TAZDSh5pdS2qV-dK-56lk';

  		$client = new Google_Client();
	    $client->setDeveloperKey($DEVELOPER_KEY);

	    // Define an object that will be used to make all API requests.
	    $youtube = new Google_Service_YouTube($client);

	    $htmlBody = '';
	    try {
	    // Call the search.list method to retrieve results matching the specified query term.
	    $searchResponse = $youtube->search->listSearch('id,snippet', array(
	      'q' => isset($_POST['search_name']) ? $_POST['search_name'] : 'Codeto Vietnam',
	      'maxResults' => 25,
	    ));

	    $videos = '';
	    $channels = '';
	    $playlists = '';
//	    echo '<pre>';
//	    var_dump($searchResponse['items']);die;
	    // Add each result to the appropriate list, and then display the lists of matching videos, channels, and playlists.
	    foreach ($searchResponse['items'] as $key => $searchResult) {
	    	// d($searchResult);
            //$searchResult['id'] ==
            //object(Google_Service_YouTube_ResourceId)#111 (7) { ["channelId"]=> NULL ["kind"]=> string(13) "youtube#video" ["playlistId"]=> NULL ["videoId"]=> string(11) "C7mXGMcpA0g" ["internal_gapi_mappings":protected]=> array(0) { } ["modelData":protected]=> array(0) { } ["processed":protected]=> array(0) { } }
	      switch ($searchResult['id']['kind']) {
	        case 'youtube#video':
                $videos[$key]['title'] = $searchResult['snippet']['title'];
                $videos[$key]['publishedAt'] = $searchResult['snippet']['publishedAt'];
                $videos[$key]['id'] = $searchResult['id']['videoId'];
                $videos[$key]['thumbnails'] = $searchResult['snippet']['thumbnails'];
//                echo '<pre>';
//                var_dump($searchResult['snippet']['thumbnails']['modelData']);die;
	          break;
	        case 'youtube#channel':
//	          $channels .= sprintf('<li>%s (%s)</li>',
//	              $searchResult['snippet']['title'], $searchResult['id']['channelId']);
                $channels[$key]['title'] = $searchResult['snippet']['title'];
                $channels[$key]['id'] = $searchResult['id']['videoId'];
                $channels[$key]['thumbnails'] = $searchResult['snippet']['thumbnails'];
	          break;
	        case 'youtube#playlist':
//	          $playlists .= sprintf('<li>%s (%s)</li>',
//	              $searchResult['snippet']['title'], $searchResult['id']['playlistId']);
                  $playlists[$key]['title'] = $searchResult['snippet']['title'];
                  $playlists[$key]['id'] = $searchResult['id']['videoId'];
                  $playlists[$key]['thumbnails'] = $searchResult['snippet']['thumbnails'];
	          break;
	      }
	    } 
	    } catch (Google_Service_Exception $e) {
    		$htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
      		htmlspecialchars($e->getMessage()));
  		} catch (Google_Exception $e) {
    		$htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
      		htmlspecialchars($e->getMessage()));
  		}

  		$data['videos'] = $videos;
  		// d($data['videos'] );
  		$data['channels'] = $channels;
  		$data['playlists'] = $playlists;

		$this->load->view('layouts/codeto/main', $data);
	}

	public function view($video_id) {
		// d($video_id);
		// die('fff');
		// unset($_SESSION);die;
		$data['user'] = $this->user_info;
		$data['view'] = 'tool/comment_youtube';
		$OAUTH2_CLIENT_ID = '255961942015-q6cdgpu3qoc9cdv1n1s41i752pm6otkb.apps.googleusercontent.com';
		$OAUTH2_CLIENT_SECRET = '7y1GU7IwrTFfnjzcBM4z-Wvp';
		/*  You can replace $VIDEO_ID with one of your videos' id, and text with the
		 *  comment you want to be added.
		 */
		$VIDEO_ID = $video_id;
		$TEXT = 'Bạn này hát hay thật';

		$client = new Google_Client();
		$client->setClientId($OAUTH2_CLIENT_ID);
		$client->setClientSecret($OAUTH2_CLIENT_SECRET);

		// d($client);
		/*
		 * This OAuth 2.0 access scope allows for full read/write access to the
		 * authenticated user's account and requires requests to use an SSL connection.
		 */
		$client->setScopes('https://www.googleapis.com/auth/youtube.force-ssl');
		// d( $_SERVER['HTTP_HOST']);
		// d( $_SERVER['PHP_SELF']);
		$redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],
		    FILTER_SANITIZE_URL);
		$client->setRedirectUri($redirect);

		// Define an object that will be used to make all API requests.
		$youtube = new Google_Service_YouTube($client);

		// Check if an auth token exists for the required scopes
		$tokenSessionKey = 'token-' . $client->prepareScopes();
		if (isset($_GET['code'])) {
		  if (strval($_SESSION['state']) !== strval($_GET['state'])) {
		    die('The session state did not match.');
		  }

		  $client->authenticate($_GET['code']);
		  $_SESSION[$tokenSessionKey] = $client->getAccessToken();
		  header('Location: ' . $redirect);
		}

		if (isset($_SESSION[$tokenSessionKey])) {
		  $client->setAccessToken($_SESSION[$tokenSessionKey]);
		}

		// Check to ensure that the access token was successfully acquired.
		if ($client->getAccessToken()) {
			die('vao day cmnr');
		  try {
		    # All the available methods are used in sequence just for the sake of an example.

		    // Call the YouTube Data API's commentThreads.list method to retrieve video comment threads.
		    $videoCommentThreads = $youtube->commentThreads->listCommentThreads('snippet', array(
		    'videoId' => $VIDEO_ID,
		    'textFormat' => 'plainText',
		    ));

		    d($videoCommentThreads);

		    $parentId = $videoCommentThreads[0]['id'];

		    # Create a comment snippet with text.
		    $commentSnippet = new Google_Service_YouTube_CommentSnippet();
		    $commentSnippet->setTextOriginal($TEXT);
		    $commentSnippet->setParentId($parentId);

		    # Create a comment with snippet.
		    $comment = new Google_Service_YouTube_Comment();
		    $comment->setSnippet($commentSnippet);

		    # Call the YouTube Data API's comments.insert method to reply to a comment.
		    # (If the intention is to create a new top-level comment, commentThreads.insert
		    # method should be used instead.)
		    $commentInsertResponse = $youtube->comments->insert('snippet', $comment);


		    // Call the YouTube Data API's comments.list method to retrieve existing comment replies.
		    $videoComments = $youtube->comments->listComments('snippet', array(
		        'parentId' => $parentId,
		        'textFormat' => 'plainText',
		    ));

		    // var_dump($videoComments[0]);die;

		    if (empty($videoComments)) {
		      $htmlBody .= "<h3>Can\'t get video comments.</h3>";
		    } else {
		      $videoComments[0]['snippet']['textOriginal'] = 'Bạn này hát hay thật';

		      // Call the YouTube Data API's comments.update method to update an existing comment.
		      // $videoCommentUpdateResponse = $youtube->comments->update('snippet', $videoComments[0]);

		      // Call the YouTube Data API's comments.setModerationStatus method to set moderation
		      // status of an existing comment.
		      // $youtube->comments->setModerationStatus($videoComments[0]['id'], 'published');

		      // // Call the YouTube Data API's comments.markAsSpam method to mark an existing comment as spam.
		      // $youtube->comments->markAsSpam($videoComments[0]['id']);

		      // // Call the YouTube Data API's comments.delete method to delete an existing comment.
		      // $youtube->comments->delete($videoComments[0]['id']);
		    }

		    $htmlBody .= "<h3>Video Comment Replies</h3><ul>";
		    foreach ($videoComments as $comment) {
		      $htmlBody .= sprintf('<li>%s: "%s"</li>', $comment['snippet']['authorDisplayName'],
		          $comment['snippet']['textOriginal']);
		    }
		    $htmlBody .= '</ul>';

		    $htmlBody .= "<h2>Replied to a comment for</h2><ul>";
		    $htmlBody .= sprintf('<li>%s: "%s"</li>',
		        $commentInsertResponse['snippet']['authorDisplayName'],
		        $commentInsertResponse['snippet']['textDisplay']);
		    $htmlBody .= '</ul>';

		    $htmlBody .= "<h2>Updated comment for</h2><ul>";
		    $htmlBody .= sprintf('<li>%s: "%s"</li>',
		        $videoCommentUpdateResponse['snippet']['authorDisplayName'],
		        $videoCommentUpdateResponse['snippet']['textDisplay']);
		    $htmlBody .= '</ul>';

		  } catch (Google_Service_Exception $e) {
		    $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
		        htmlspecialchars($e->getMessage()));
		  } catch (Google_Exception $e) {
		    $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
		        htmlspecialchars($e->getMessage()));
		  }

		  $_SESSION[$tokenSessionKey] = $client->getAccessToken();
		} elseif ($OAUTH2_CLIENT_ID == 'REPLACE_ME') {
			// Copy code to here  
		} else {
			// If the user hasn't authorized the app, initiate the OAuth flow
			  $state = mt_rand();
			  $client->setState($state);
			  $_SESSION['state'] = $state;

			  $authUrl = $client->createAuthUrl();
			  $htmlBody = <<<END
			    <h3>Authorization Required</h3>
			    <p>You need to <a href="$authUrl">authorize access</a> before proceeding.<p>
END;
		}

		$data['htmlBody'] = $htmlBody;

		$this->load->view('layouts/codeto/main', $data);
	}
}
