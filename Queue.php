<?php
class Queue{
    protected $limit;
    protected $queue;
    public function __construct($limit, $queue){
        $this->limit = $limit;
        $this->queue = $queue;
    }
    public function enqueue($item){
       if($this->isFull()){
          echo 'queue is empty';
       }
       array_push($this->queue, $item);  
    }
    public function dequeue(){
       if ($this->isEmpty()) {
           echo 'the queue empty';
       }
       return array_shift($this->queue); 
    }
   protected function isFull(){
       return count($this->queue) > $this->limit;
   }
   protected function isEmpty(){
       return empty($this->queue);
   } 
}
$queue = new Queue(10, []);
$queue->enqueue(5);
$queue->enqueue(10);
$queue->enqueue(10);
echo $queue->dequeue();