  //FIFO Page replacement
#include<stdio.h>
int main()
{
	int n,f,i,j,k,pages[50], frame[15];
	int fault=0, hit=0;
	printf("Enter number of pages: ");
	scanf("%d",&n);
	printf("Enter page reference string:\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&pages[i]);
	}
	printf("Enter number of frames:");
	 scanf("%d",&f);
	 
	for(i=0;i<f;i++)
	{
		frame[i]=-1;	
	}
	j=0;
	for(i=0;i<n;i++)
	{
		int found=0;
		for(k=0;k<f;k++)
		{
			if(frame[k]==pages[i])
			{
				found=1;
				hit++;
				break;
			}
		}
		if(!found)
		{
			frame[j]=pages[i];
			j=(j+1)%f;
			fault++;
		}
	}
	printf("Total Pages Hit = %d\n",hit);
	printf("Total Page Faults = %d\n",fault);

}
