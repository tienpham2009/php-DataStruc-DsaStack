<?php

class Stack
{
    private  array $stack;
    private int $limit;

    public function __construct(int $limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }


    public function push($data)
    {
        if (count($this->stack) < $this->limit){
            array_unshift($this->stack, $data);
        }else {
            echo "Stack is full";
        }

    }

    public function pop()
    {
       if($this->isEmpty()){
           echo "Stack is empty";
       }else{
          array_shift($this->stack);
       }
    }

    public function top()
    {
        return current($this->stack);
    }


}