#include <stdio.h>
#include<math.h>
#define f(x) exp(x)
int main(){
	int i;
	float xn,x0,n,stepsize,integration,k;
	printf("enter the upper limit,lower limit and sub-interval: ");
	scanf("%f%f%f",&xn,&x0,&n);
	stepsize=(xn-x0)/n;
	integration=f(x0)+f(xn);
	for(i=1;i<=n-1;i++){
		k=x0+i*stepsize;
		if((i % 3)==0){
			integration=integration+2*f(k);	
		}else{
			integration=integration+3*f(k);
		}
	}
	integration=integration*stepsize*3/8;
	printf("integration is %f",integration);
	return 0;
}