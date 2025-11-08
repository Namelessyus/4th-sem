// Newton Raphson (NR) Method
	    #include<stdio.h>
        #include<math.h>
        
        #define f(x) 3x-cos(x)-1
        #define g(x) 3+sin(x)
        
        int main(){
        	float x0,x1,x2,f0,f1,f2,e,n;
        	
        	printf("enter initial guess");
        	printf("\n input x1: ");
        	scanf("%f",&x1);
        	printf("\n input x2: ");
        	scanf("%f",&x2);   
        	
        	printf("\n input tolerable error : ");
        	scanf("%f",&e);
        	
        	printf("\n input Maximum Iteration : ");
        	scanf("%f",&n);
        	
        do {
        if(g(x0)==0)
        printf("Mathematical Error");
		}
        
