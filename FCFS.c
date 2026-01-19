#include <stdio.h>
int main()
{
 int n, f, i, j, k, pages[50], frame[10], found, pos, far, next;
 int fault = 0, hit = 0;
 printf("Enter number of pages: ");
 scanf("%d", &n);
 printf("Enter page reference string:\n");
 for(i = 0; i < n; i++)
 {
  scanf("%d", &pages[i]);
 }
 printf("Enter number of frames: ");
 scanf("%d", &f);
 for(i = 0; i < f; i++)
 {
  frame[i] = -1;
 }
 for(i = 0; i < n; i++)
 {
  found = 0;
  //Check for page hit
  for(j = 0; j < f; j++)
  {
   if(frame[j] == pages[i])
   {
    found = 1;
    hit++;
    break;
   }
  }
  //Page fault
  if(!found)
  {
   //If there is empty frame
   for(j = 0; j < f; j++)
   {
    if(frame[j] == -1)
    {
     frame[j] = pages[i];
     fault++;
     found = 1;
     break;
    }
   }
  }
	if(!found)
  {
   far = -1;
   pos = -1;
   for(j = 0; j < f; j++)
   {
    next = -1;
    for(k = i + 1; k < n; k++)
    {
     if(frame[j] == pages[k])
     {
      next = k;
      break;
     }
    }
    if(next == -1)
    {
     pos = j;
     break;
    }
    if(next > far)
    {
     far = next;
     pos = j;
    }
   }
   frame[pos] = pages[i];
	 fault++;
  }
 }
 printf("Total Page Hits = %d\n", hit);
 printf("Total Page Faults = %d\n", fault);
 return 0;
}
