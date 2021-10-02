"""
Test cases:
  Input:
  Enter string1: silent
  Enter string2: listen
  Output: Given strings are anagrams of eachother 
Because here after sorting string1 and string2 ,list_string1=['e','i','l','n','s','t'] and list_string2=['e','i','l','n','s','t']. As list_string1 = list_string2 the given 
strings are anagrams of each other.
 
 Input:
 enter string1: hello
 enter string2: world
 Output: Given strings are not anagrams of eachother.
Because here after sorting string1 and string2 ,list_string1=['e','h','l','l','o'] and list_string2=['d','l','o','r','w']. As list_string1 is not equal to list_string2 the given 
strings are  not anagrams of each other.
Time Complexity: O(nlogn) .Because time complexity for sort() function is O(nlogn) where n is the size of input that is the length of string.
Space complexity: O(length(string1+string2))
"""
