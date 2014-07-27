import sys


def over(a,b):
    if(b==0 or a==b):
        return 1
    else:
        return over(a-1,b-1) + over(a-1,b)


sys.setrecursionlimit(5000);


print over(128,4)

