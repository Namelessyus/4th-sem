       //Bisection method
	    #include<stdio.h>
        #include<math.h>
        
        #define f(x) x*x*x+3*x-5
        
        int main(){
        	float x0,x1,x2,f0,f1,f2,e;
        	up:
        	printf("enter initial approximation");
        	printf("\n input x1: ");
        	scanf("%f",&x1);
        	printf("\n input x2: ");
        	scanf("%f",&x2);   
			    	
			printf("\n input error tolarance: ");
        	scanf("%f",&e);
        	
        	f1=f(x1);
        	f2=f(x2);
        	
        	if(f1*f2>0)
        	{
        		printf("x1 & x2 do not bracket the root");
        		goto up;
			}
			do{
				x0=(x1+x2)/2;
				f0=f(x0);
				
				if (f1*f0<0){
					x2=x0;
					f2=f0;
				}else{
					x1=x0;
					f1=f0;
				}
			}while(fabsf(f0)>e);
			printf("the required root is: %f",x0);
			return 0;
		}
        

