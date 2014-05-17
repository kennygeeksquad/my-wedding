<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		$meta_for_layout = "Deana & Matt - 15th January 2015, Champoluc, Italy. The website has been styled in a parallax fashion to give information to our guests.";

		$title_for_layout = "Deana and Matt's wedding.";

		$this->set(compact('page', 'subpage', 'title_for_layout', 'meta_for_layout'));

		$this->loadModel('Message');
		$this->set('messages', $this->Message->find('all'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}

		if ($this->request->is('post')) {
			$meta_for_layout = "Deana & Matt - 15th January 2015, Champoluc, Italy. The website has been styled in a parallax fashion to give information to our guests.";
			if (array_key_exists('Message', $this->request->data)) {
				$this->loadModel('Message');
				if ($this->Message->save($this->request->data)) {
					$this->Session->setFlash('Thank you for your message.', 'default', array('class'=>'pure-u-1'));
					$this->redirect($this->referer());
				} else {
					throw new Exception("Sorry message not sent");
				}
			} else {
				$this->loadModel('Rsvp');
				if ($this->Rsvp->save($this->request->data)) {
					$this->Session->setFlash('Thank you for your message.', 'default', array('class'=>'pure-u-1'));
					$this->redirect($this->referer());
				} else {
					throw new Exception("Sorry message not sent");
				}
			}
		}
	}
}
