// Newton Raphson (NR) Method
	    #include<stdio.h>
        #include<math.h>
#include<stdlib.h>
        
        #define f(x) (3*x-cos(x)-1)
        #define g(x) 3+sin(x)
        
        int main(){
			    float x0, x1, e, f0,g0;
			    int n, i = 1;        
					
		  printf("Enter initial guess: ");
		    scanf("%f", &x0);
		
		    printf("Enter tolerable error: ");
		    scanf("%f", &e);
		
		    printf("Enter maximum iterations: ");
		    scanf("%d", &n);
		
			do{
				f0=f(x0);
				g0=g(x0);
				if(g0==0){
					printf("mathematical error");
					exit(0);	
				}
				x1=x0-f0/g0;
				x0=x1;
				i=i+1;
				if(i>n){
					printf("not convergent");
					exit(0);
				}
			}while((fabs f(x1))>e);
			printf("root= %f", x1);
			
			return 0;
		}
		
		

		
		
