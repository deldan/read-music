<?php
App::uses('Controller', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class BooksController extends AppController {

   /**
   * Prueba api function.
   *
   * @param null
   * @return void
   */
	public function pruebaapi (){
      $HttpSocket = new HttpSocket();
      $results = $HttpSocket->get('https://www.googleapis.com/books/v1/volumes', array('q' => 'hobbit', 'key' => 'AIzaSyA8aGL3zjUNQFdG3jD1p1uUDf3-y9Tz08s', 'maxResults' => 1));

      $results = json_decode($results['body']);
      $results2 = $HttpSocket->get('https://www.googleapis.com/books/v1/volumes/'.$results->items[0]->id, array('key' => 'AIzaSyA8aGL3zjUNQFdG3jD1p1uUDf3-y9Tz08s'));
      $results2 = json_decode($results2['body']);
      pr($results2);
	}

   /**
   * Prueba api music function.
   *
   * @param null
   * @return void
   */
   public function pruebaapimusic () {
      $HttpSocket = new HttpSocket();
      //$results = $HttpSocket->get('http://api.grooveshark.com/ws3.php', array('query' => 'rap', 'limit' => '1'));
      //$results = $HttpSocket->get('http://api.grooveshark.com/ws3.php', array('header' => array('Key' => 'bonzzay', 'Secret' => '313cef0a18b9adc93149563b0e041958')));

      $results = $HttpSocket->get('http://tinysong.com/s/rap', array('key' => '47382f6806934b0a4301f8a14f24afa0', 'limit' => '1'));

      pr($results);


   }

   public function game () {
      $HttpSocket = new HttpSocket();
      $results = $HttpSocket->post('http://csg-eng.ooyala.com/challenge/', array('co_founder_name' => 'Belsasar', 'email' => 'dan@bonzzay.com'));

      pr($results);
   }


}
