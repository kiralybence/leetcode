<?php

class Node {
    public $val = NULL;
    public $next = NULL;
}

class MyLinkedList {
    public $head;
    
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->head = new Node();
        $this->dump();
    }
  
    /**
     * Get the value of the index-th node in the linked list. If the index is invalid, return -1.
     * @param Integer $index
     * @return Integer
     */
    function get($index) {
        $node = $this->head;
        
        for ($i = 0; $i < $index; $i++) {
            if ($node->next instanceof Node) {
                $node = $node->next;
            } else {
                return -1;
            }
        }
        
        $this->dump();
        return $node->val;
    }
  
    /**
     * Add a node of value val before the first element of the linked list. After the insertion, the new node will be the first node of the linked list.
     * @param Integer $val
     * @return NULL
     */
    function addAtHead($val) {
        if ($this->head->val !== NULL) {
            $node = new Node();
            $node->val = $val;
            $node->next = $this->head;
            $this->head = $node;
        } else {
            $this->head->val = $val;
        }
        
        $this->dump();
        return NULL;
    }
  
    /**
     * Append a node of value val to the last element of the linked list.
     * @param Integer $val
     * @return NULL
     */
    function addAtTail($val) {
        $node = $this->head;
        
        while ($node->next instanceof Node) {
            $node = $node->next;
        }
        
        if ($node->val !== NULL) {
            $newNode = new Node();
            $newNode->val = $val;
            $node->next = $newNode;
        } else {
            $node->val = $val;
        }
        
        $this->dump();
        return NULL;
    }
  
    /**
     * Add a node of value val before the index-th node in the linked list. If index equals to the length of linked list, the node will be appended to the end of linked list. If index is greater than the length, the node will not be inserted.
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function addAtIndex($index, $val) {
        if ($index == 0) {
            $newNode = new Node();
            $newNode->val = $val;
            $newNode->next = $this->head;
            $this->head = $newNode;
            return NULL;
        }
        
        $node = $this->head;
        
        for ($i = 0; $i < $index - 1; $i++) {
            try {
                $node = $node->next;
            } catch (Exception $e) {
                return NULL;
            }
        }
        
        if ($node->val !== NULL) {
            $newNode = new Node();
            $newNode->val = $val;
            $newNode->next = $node->next;
            $node->next = $newNode;
        } else {
            $node->val = $val;
        }
        
        $this->dump();
        return NULL;
    }
  
    /**
     * Delete the index-th node in the linked list, if the index is valid.
     * @param Integer $index
     * @return NULL
     */
    function deleteAtIndex($index) {
        if ($index == 0) {
            $this->head = $this->head->next;
            return NULL;
        }
        
        $node = $this->head;
        
        for ($i = 0; $i < $index - 1; $i++) {
            try {
                $node = $node->next;
            } catch (Exception $e) {
                return NULL;
            }
        }
        
        if ($node->next instanceof Node) {
            $node->next = $node->next->next;
        } else {
            $node->next = NULL;
        }
        
        $this->dump();
        return NULL;
    }
    
    function dump() {
        return;
        
        $node = $this->head;
        $arr = [$node->val];
        
        while ($node = $node->next) {
            $arr[] = $node->val;
        }
        
        var_dump($arr);
    }
}

/**
 * Your MyLinkedList object will be instantiated and called as such:
 * $obj = MyLinkedList();
 * $ret_1 = $obj->get($index);
 * $obj->addAtHead($val);
 * $obj->addAtTail($val);
 * $obj->addAtIndex($index, $val);
 * $obj->deleteAtIndex($index);
 */