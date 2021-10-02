def anagram(string1,string2):
     list_string1=list(string1)
     list_string1.sort()
     list_string2=list(string2)
     list_string2.sort()
     if(list_string1==list_string2):
         print("Given strings are anagrams of eachother")
     else:
         print("Given strings are not anagrams of eachother")
string1=input("enter string1:")
string2=input("enter string2:")
anagram(string1,string2)
