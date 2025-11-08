//Language Interpolation Method
#include <stdio.h>
#include <stdlib.h>

int main(){
	size_t n;
	float xp;
	float yp=0;
	printf("Enter then number of data: ");
	scanf("%zu",&n);
	float *x = (float *)malloc(sizeof(float)*n);
	float *y = (float *)malloc(sizeof(float)*n);
	for(size_t i = 0; i<n ; i++){
		printf("Input %zu x: ",i+1);
		scanf("%f",&x[i]);
		printf("Input %zu y: ",i+1);
		scanf("%f",&y[i]);
	}
	printf("Input Interpolation point: ");
	scanf("%f",&xp);
	for(size_t i = 0; i < n; i++){
		float p = 1;
		for(size_t j = 0; j<n; j++){
			if(i!=j){
				p=p*(xp-x[j])/(x[i]-x[j]);
			}
		}
		yp=yp+p*y[i];
	}
	printf("Interpolation: %f",yp);
	free(x);
	free(y);
	return 0;
}
