function balance() 
    {
        $ldepth = $this->left !== NULL
                ? $this->left->depth
                : 0;
               
        $rdepth = $this->right !== NULL
                ? $this->right->depth
                : 0;
               
               
        if( $ldepth > $rdepth + 1 ) 
        { // LR or LL rotation
            $lldepth = $this->left->left !== NULL
                     ? $this->left->left->depth
                     : 0;

            $lrdepth = $this->left->right !== NULL
                     ? $this->left->right->depth
                     : 0;

            if( $lldepth < $lrdepth ) 
            { // LR rotation
                $this->left->rotateRR(); // consist of a RR rotation of the left child ...
            } // ... plus a LL rotation of this node, which happens anyway

            $this->rotateLL();
        } 
        else if( $ldepth + 1 < $rdepth ) 
        { // RR or RL rorarion
            $rrdepth = $this->right->right !== NULL
                     ? $this->right->right->depth
                     : 0;

            $rldepth = $this->right->left !== NULL
                     ? $this->right->left->depth
                     : 0;

            if( $rldepth > $rrdepth ) 
            { // RR rotation
                $this->right->rotateLL(); // consist of a LL rotation of the right child ...
            } // ... plus a RR rotation of this node, which happens anyway

            $this->rotateRR();
        }
    }
