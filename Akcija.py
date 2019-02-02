#! /usr/bin/python3

# import fileinput
# for line in fileinput.input():

import sys

books = []

infile = sys.stdin
next(infile)

for book in infile:
    books.append(int(book))
    
books.sort(reverse=True)        
 
book_num = 1
total = 0

for book in books:
    if book_num % 3 != 0:
        total += book
    book_num += 1
            
print(total)
        