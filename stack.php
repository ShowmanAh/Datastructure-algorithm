<?php
class Stack
{
    protected $limit;
    protected $stack;
    public function __construct($limit, $stack){
        $this->limit = $limit;
        $this->stack = $stack;
    }
    public function push($item){
        if($this->isFull()){
            return 'stack is full';
        }
        array_unshift($this->stack, $item);
    }
    public function pop(){
       if($this->isEmpty()){
           return 'stack is empty';
       }
      return array_shift($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function isFull(){
        $full = count($this->stack) > $this->limit;
        return $full;
    }
    public function top(){
        return current($this->stack);
    }
}
$stack = new Stack(10, [5,6,7]);
$stack->push(8);
$stack->push(4);
echo $stack->pop();

?>