Node insert_AVL(Node root , int key){
        if(root == null){
            return Node(key);
        }
        else if(key < root.value){
            root.left = insert_AVL(root.left, key);
        }
        else{
            root.right = insert_AVL(root.right, key);
        }

        root.height = 1 + max<int>(height(root.left), height(root.right));     
        int difference = balance(root);
        
        if(difference > 1 && key < root.left.value){
            return rightRotate(root);
        }

        if(difference > 1 && key > root.left.value){
            return leftRightRotate(root);
        }

        if(difference < -1 && key > root.right.value){
            return leftRotate(root);
        }

        if(difference < -1 && key < root.right.value){
            return rightLeftRotate(root);
        }
        
        return root;
    }
