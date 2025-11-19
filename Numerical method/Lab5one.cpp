#include<stdio.h>
#include<math.h>
#include<stdlib.h>
#define f(x) exp(x)
int main()
{
float ll,ul, sub, step, integration;
int i;
printf("Enter the lower limit, upper limit and the sub-interval");
scanf("%f%f%f",&ll,&ul,&sub);
step=(ul-ll)/sub;
integration=f(ll)+f(ul);
for(i=1;i<=(sub-1);i++)
{
float k = ll+ (i*step);
integration = integration + 2*f(k);
}
integration = integration * step/2;
printf("The solution is %f",integration);
}