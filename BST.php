<?php
namespace Tree;

class Node {
    public $value;
    public $left_child;
    public $right_child;

    public function __construct($value) {
        $this->value = $value;
        $this->left_child = null;
        $this->right_child = null;
    }
}


class BinarySearchTree {
    private $root;

    public function __construct() {
        $this->root = null;
    }

   
//2,3,4,5,1,7
    private function insertNode($node, $value) {
        if ($node == null) {
            $node = new Node($value);
            /* [|2|] 
               /   \
                  [|3|]
                  /   \
                [|2|] [|4|]
                            
                       */
        } elseif ($value < $node->value) {
            $node->left_child = $this->insertNode($node->left_child, $value);
        } elseif ($value >= $node->value) {
            $node->right_child = $this->insertNode($node->right_child, $value);
        }
        return $node;
    }
    public function insert($value) {
        $this->root = $this->insertNode($this->root, $value);
    }
    

    private function searchNode($node, $value) {
        if ($node == null) {
            echo "The tree is empty<br>";
            return;
        } elseif ($value == $node->value) {
            return $node;
        } elseif ($value < $node->value) {
            return $this->searchNode($node->left_child, $value);
        } else {
            return $this->searchNode($node->right_child, $value);
        }
    }
    public function search($value) {
        
        $val= $this->searchNode($this->root, $value);
    return $val;
    }
    
    private function findMinNode($node) {
        while ($node->left_child != null) {
            $node = $node->left_child;
        }
        return $node;
    }
    private function findMaxNode($node) {
        while ($node->right_child != null) {
            $node = $node->right_child;
        }
        return $node;
    }
    private function deleteNode($node, $value) {
        if ($node == null) {
            return null;
        } 
        elseif ($value < $node->value) {
            $node->left_child = $this->deleteNode($node->left_child, $value);
        } 
        elseif ($value > $node->value) {
            $node->right_child = $this->deleteNode($node->right_child, $value);
        } 
        else {
            if ($node->left_child == null && $node->right_child == null) {
                $node = null;
            } elseif ($node->left_child == null) {
                $node = $node->right_child;
            } elseif ($node->right_child == null) {
                $node = $node->left_child;
            } else {
                $temp = $this->findMaxNode($node->left_child);
                $node->value = $temp->value;
                $node->left_child = $this->deleteNode($temp->left_child, $node->value);
            }
        }  /* 
           
        */
        return $node;
    }
    public function delete($value) {
        $this->root = $this->deleteNode($this->root, $value);
    }


    public function display() {
        $this->printTree($this->root);
    }

    private function printTree($node/* , $level */) {
        if ($node != null) {
            echo  $node->value . "<br>";
            $this->printTree($node->left_child);
        $this->printTree($node->right_child/* , $level + 1 */);
            
            
        }
    }


}





?>