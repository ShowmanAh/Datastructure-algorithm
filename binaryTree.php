<?php
class BinaryNode{
    public $data;
    public $left;
    public $right;
    public function __consruct(string $data = null){
       $this->data = $data;// node data
       $this->left = null; // left child node
       $this->right = null;// right child node
    }
    // add children left & right (leafs)
    public function addChildren($left, $right){
        $this->left = $left;
        $this->right = $right;
    }
}
class BinaryTree{
   private $root = null; // root node for tree
    public function __construct(){
        $this->root = null; 
    }
    public function isEmpty(){
        return $this->root = null;
    }
    // function insert newNode
    public function insert($data){
        $node = new BinaryNode($data);
        if($this->isEmpty()){ // check empty tree
           $this->root = $node;
           return true;
        }else{
            return $this->insertNode($node, $this->root);
        }
    }
   public function insertNode($node, $curent){
       $added = false;
       while($added===false){ // check added node
           if($node->data < $curent->data){ // newDataNode greaterThan current node in tree
               if($curent->left === null ){
                   $curent->addChildren($node, $curent->right);
                   $added = $node;
               break;
               }else{
                   $curent = $curent->left;
                  return $this->insertNode($node, $curent); // recursion
               }
           }
           elseif ($node->data > $curent->data) {
               if($curent->right === null){
                   $curent->addChildren($curent->left, $node);
                   $added = $node;
               break;
               }else{
                   $curent = $curent->right;
                   return $this->insertNode($node, $curent); // recursion
               }
           }
           else{
           break;
           }
       }
       return $added;
   } 
   public function retrieveNode($node, $curent){
       $exists = false;
       while($exists === false){
           if($node->data < $curent->data){
               if($curent->left === null){
               break;
               }elseif ($node->data === $curent->left->data) {
                  $exists = $curent->left;
               break;
               }else{
                   $curent = $curent->left;
                   return $this->retrieveNode($node, $curent);
               }
           }
           if ($node->data > $curent->data) {
              if($curent->right === null){
              break;
              }elseif ($node->data === $curent->right->data) {
                  $exists = $curent->right;
              break;
              }else{
                  $curent = $curent->right;
                  return $this->retrieveNode($node, $curent);
              }
           }
       }
       return $exists;
   }
   public function findParent($child, $current){
       $parent = false;
       while($parent === false){
           if($child->data < $current->data){
               if($child->data === $current->left->data){
                   $parent = $current;
               break;
               }else{
                   return $this->findParent($child, $current->left);
               break;
               }
           }elseif ($child->data > $current->data) {
               if($child->data === $current->right->data){
                   $parent = $current->right;
               break;
               }else{
                   return $this->findParent($child, $current->right);
               break;
               }
           }else{
           break;
           }
          
       }
       return $parent;
   }
   public function removeElement($element){
       if ($this->isEmpty()) {
           return false;
       }
       $node = $this->retrieveNode($element);
       if (!$node) {
           return false;
       }
       if ($element->data === $this->root->data) {
           $curent = $this->root->left;
           while ($curent->right != null) {
               $curent = $this->root->right;
               continue;
           }
       $curent->left = $this->root->left;
       $curent->right = $this->root->right;
       $parent = $this->findParent($current, $this->root);
       $parent->right = $curent->left;
       $this->root = $curent->left; 
       }
       return true;
      
   }
}