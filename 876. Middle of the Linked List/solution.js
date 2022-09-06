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
var middleNode = function(head) {
    let length = 1
    let center = head
    
    while (head.next != undefined) {
        if (length % 2 == 1) center = center.next
        head = head.next
        ++length
    }
    
    return center
};