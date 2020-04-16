<?php

class node{
	public $id;
	public $name;
	public $next;

	public function __construct($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
		$this->next = null;
	}
}

class singleLinkList{
	public $header;

	public function __construct($id = null, $name = null)
	{
		$this->header = new node($id, $name);
	}

	//获取链表长度
	public function getLinkListLen()
	{
		$curNode = $this->header;
		$len = 0;
		while ($curNode->next != null) {
			$len = $len + 1;
			$curNode = $curNode->next;
		}

		echo $len;
	}

	//添加链表节点
	public function addNode($newNode)
	{
		$curNode = $this->header;
		while ($curNode->next != null) {
			if ($newNode->id < $curNode->next->id) {
				break;
			}
			$curNode = $curNode->next;
		}
		$newNode->next = $curNode->next;
		$curNode->next = $newNode;
		
	}

	//遍历链表
	public function getLinkList()
	{
		$curNode = $this->header;
		while ($curNode->next != null) {
			$curNode = $curNode->next;
			echo 'curNode id=' . $curNode->id . ' name=' . $curNode->name ."\n";
		}
	}

}

$a = new singleLinkList();

$a->addNode(new node(1, 'wang'));

$a->addNode(new node(3, 'li'));

$a->addNode(new node(5, 'yu'));

$a->addNode(new node(2, 'liu'));

$a->getLinkList();

$a->getLinkListLen();














