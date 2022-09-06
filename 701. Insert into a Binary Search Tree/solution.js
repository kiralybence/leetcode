/**
 * Definition for a binary tree node.
 * function TreeNode(val, left, right) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.left = (left===undefined ? null : left)
 *     this.right = (right===undefined ? null : right)
 * }
 */
/**
 * @param {TreeNode} root
 * @param {number} val
 * @return {TreeNode}
 */
var insertIntoBST = function(root, val) {
    if (!root) {
        root = new TreeNode(val)
        return root
    }
    
    node = root
    
    while (1) {
        // should insert to right
        if (node.val < val) {
            // right is not empty
            if (node.right) {
                // move node to right
                node = node.right
                continue
            }
            // right is empty
            else {
                // create right
                node.right = new TreeNode(val)
                break
            }
        }
        // should insert to left
        else {
            // left is not empty
            if (node.left) {
                // move node to left
                node = node.left
                continue
            }
            // left is empty
            else {
                // create left
                node.left = new TreeNode(val)
                break
            }
        }
    }
    
    return root
};