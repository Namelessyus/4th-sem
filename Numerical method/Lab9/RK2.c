#include<stdio.h>
#define f(x,y) (2*y)/x
int main(){
int i=0,n;
float x0,y0,h,xn,yn,m1,m2,m;

printf("\n Enter the initial values:");
scanf("%f%f",&x0,&y0);

printf("\n Enter the number of step:");
scanf("%d",&n);
printf("\n Enter the calculation point:");
scanf("%f",&xn);

h=(xn-x0)/n;
while(i<n){
m1=f(x0,y0);
float x = x0+h;
float y = y0+m1*h;
m2=f(x,y);
m=(m1+m2)/2;
yn=y0+m*h;
i++;
x0=x0+h;
y0=yn;
}
printf("%f",yn);
return 0;
}
