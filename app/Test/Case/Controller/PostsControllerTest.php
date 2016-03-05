<?php
App::uses('PostsController', 'Controller');

/**
 * PostsController Test Case
 */
class PostsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->testAction('/posts/index');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->testAction('/posts/view/1');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAddShow() {
    $this->testAction('/posts/add', [
      'data'   => null,
      'method' => 'get'
    ]);
	}

	public function testAdd() {
	  $data = [
      'Post' => [
        'title' => '適当適当適当',
        'contents' => '適当敵つお適当適当適当'
      ]
    ];
    $this->testAction('/posts/add', [
      'data' => $data,
      'method' => 'post'
    ]);
	}


/**
 * testEdit method
 *
 * @return void
 */
	public function testEditShow() {
    $this->testAction('/posts/edit/1', [
      'data'   => null,
      'method' => 'get'
    ]);
	}

	/**
	 * testEdit method
	 *
	 * @return void
	 */
	public function testEdit() {
	  $data = [
      'Post' => [
      	'id' => 1,
        'title' => '適当',
        'contents' => 'テストテスト'
      ]
    ];
    $this->testAction('/posts/add', [
      'data' => $data,
      'method' => 'post'
    ]);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->testAction('/posts/delete/1', [
      'data' => null,
      'method' => 'post'
    ]);
	}

}
