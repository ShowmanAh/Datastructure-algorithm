<?php
class Node
{
  private $data;
  private $next;
  public function __construct(){
      $this->data = 0;
      $this->next = null;
  } 
  public function getData(){
      return $this->data;
  }
  public function setData($data){
      $this->data = $data;
  }
  public function getNext(){
      return $this->next;
  }
  public function setNext($next){
      $this->next = $next;
  }
}
class LinkedList{
    private $head;
    public function __construct(){
        $this->head = null;
    }
    public function insertLastNode($data){
      $newNode = new Node();// create new node
      $newNode->setData($data);
      if($this->head){ // check empty list
          $currentNode = $this->head;
          while($currentNode->getNext() != null){// check last node
              $currentNode = $currentNode->getNext();// get next node to next == null
          }
          $currentNode->setNext($newNode);// if next == null insert new node in after last node
      }else{
          $this->head = $newNode;// if empty list insert new node
      }
    }
    public function insertFirstNode($data){
       $newNode = new Node();
       $newNode->setData($data);
       if($this->head){
          $newNode->setNext($this->head);
          $this->head = $newNode;
       }else{
           $this->head = $newNode;
       }
    }
    
    public function insertAfterSpecificNode($data, $target) {

		if($this->head) {
			$currentNode = $this->head;
			while ($currentNode->getData() != $target && $currentNode->getNext() != null) {
				$currentNode = $currentNode->getNext();
			}

			if($currentNode->getData() == $target) {
				$newNode = new Node();
				$newNode->setData($data);

				$currentNodeNext = $currentNode->getNext();
				$currentNode->setNext($newNode);
				$newNode->setNext($currentNodeNext);
			}
		}
    }

    public function insertBeforeSpecificNode($data, $target){

		if($this->head) {

			$currentNode = $this->head;
			$previousNode = null;

			while ($currentNode->getData() != $target && $currentNode->getNext() != null) {
				$previousNode = $currentNode;
				$currentNode = $currentNode->getNext();
			}

			if($currentNode->getData() == $target) {
				$newNode = new Node();
				$newNode->setData($data);

				if($previousNode) {
					$previousNode->setNext($newNode);
					$newNode->setNext($currentNode);
				} else {
					$previousNode = $newNode;
					$previousNode->setNext($currentNode);
					$this->head = $previousNode;
				}
			}
		}
    }
    public function deleteNode($target){
        if($this->head){
            $currentNode = $this->head;
            $previousNode = null;
            while($currentNode->getData() != $target && $currentNode->getNext() != null){
                $previousNode = $currentNode;
                $currentNode = $currentNode->getNext();
            }
            if($currentNode->getData() == $target){
               if($previousNode){
                   $previousNode->setNext($currentNode->getNext());
                   unset($currentNode);
               }else{
                   $this->head = $currentNode->getNext();
                   unset($currentNode);
               }
               return true;
            }
            return false;
        }
    }
    public function searchElement($target){
        $currentNode = $this->head;
        if($currentNode == null){
            return null;
        }
        while($currentNode->getData() != $target && $currentNode->getNext() != null){
            $currentNode = $currentNode->getNext();
        }
        if($currentNode->getData() == $target){
           // echo 'sdf';
            return $currentNode->getData();
        }else {
            return null;
        }
    }
    public function printNode(){
		$currentNode = $this->head;
		while($currentNode != null) {
			echo $currentNode->getData();
			$currentNode = $currentNode->getNext();
			echo " ";
		}
	}
}
$list = new LinkedList();
$list->insertLastNode(5);
$list->insertLastNode(6);
$list->insertFirstNode(10);
$list->insertFirstNode(5);
$list->insertFirstNode(4);
$list->insertAfterSpecificNode(3, 10);
$list->insertBeforeSpecificNode(9, 10);
$list->deleteNode(5);
echo $list->searchElement(3) . "<br>";
$list->printNode();


?>