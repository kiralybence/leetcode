/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @param {number} val
 * @return {ListNode}
 */
var removeElements = function(head, val) {
    // If the first one should be removed
    while (head && head.val == val) {
        head = head.next
    }
    
    let node = head
    
    while (node && node.next) {
        // If next one should be removed
        if (node.next.val == val) {
            // If the next point isn't safe, delete it
            node.next = node.next.next
        } else {
            // If the next node is safe, move forward
            node = node.next
        }
    }
    
    return head
};