class AVL
{
    private:
        tnode * root;
    public:
        AVL() { root = NULL; }
        tnode * LL(tnode *);
        tnode * RR(tnode *);
        tnode * LR(tnode *);
        tnode * RL(tnode *);
    
        int height(tnode *);
        int MAX(int, int);
    
        void create();
        tnode * insert(tnode *, int);
        void display();
        void inorder(tnode *);
        void preorder(tnode *);
};
