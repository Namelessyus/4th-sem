//Language Interpolation Method
#include <stdio.h>
#include <stdlib.h>

int main(){
	int j,n,i;
	float x[20],y[20],xp,p,yp=0;
	printf("enter number of data (<20): ");
	scanf("%d",&n);
	
	
	for(i=1;i<=n;i++){
		printf("enter x[%d] and y[%d]: ",i,i);
		scanf("%f%f",&x[i],&y[i]);
	}
	printf("enter interpolating point: ");
	scanf("%f",&xp);

	for(i=1;i<=n;i++){
		p=1;
		for(j=1;j<=n;j++){
			if(i!=j){
				p=p*(xp-x[j])/(x[i]-x[j]);
			
			}
		}
			yp=yp+p*y[i];
	}
	printf("%f",yp);
	return 0;

}

