#include<stdio.h>
#include<string.h>
void main()
{
     char s[900];
     scanf("%s",s);
     for(int i=0;s[i]!='\0';i++)
     {
        if(s[i]!='a' || s[i]!='e')
        {
            print(s[i]);
        }
     }
}