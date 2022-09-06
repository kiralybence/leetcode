/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
var reverseList = function(head) {
    let previous = null
    let current = head
    let following = head
    
    // Iterate until we reach the last node
    while (current !== null) {
        following = following.next // Step the following node forward (for the upcoming iteration)
        current.next = previous // Flip the pointer, so the next node will be the previous node
        previous = current // Step the previous node forward
        current = following // Step the current node forward
    }
    
    return previous
};