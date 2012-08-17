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


	public function pruebaapi(){
      $HttpSocket = new HttpSocket();
      $results = $HttpSocket->get('https://www.googleapis.com/books/v1/volumes', array('q' => 'hobbit', 'key' => 'AIzaSyAI70Q8DL6YJPM3vfPuEE5PiEBExB0T1bQ'));

      pr($results);
	}
}
