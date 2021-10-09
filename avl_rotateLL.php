    function rotateLL() 
    { // the left side is too long => rotate from the left (_not_ leftwards)
        $data_before =& $this->data;
        $right_before =& $this->right;
       
        $this->data =& $this->left->data;
        $this->right =& $this->left;
        $this->left =& $this->left->left;
        $this->right->left =& $this->right->right;
        $this->right->right =& $right_before;
        $this->right->data =& $data_before;
        $this->right->updateInNewLocation();
        $this->updateInNewLocation();
    }
