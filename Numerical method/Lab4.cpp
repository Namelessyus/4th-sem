#include<stdio.h>
int main(){
int i,n;
float x[10],y[10],a,b;
printf("enter number of data: ");
scanf("%d",&n);
printf("enter the data of: ");
for(i=0;i<n;i++){
printf("x[%d] and y[%d]",i,i);
scanf("%f%f",&x[i],&y[i]);
}
float sumX=0,sumY=0,sumX2=0,sumXY=0;
for(i=0;i<n;i++){
sumX=sumX+x[i];
sumY=sumY+y[i];
sumX2=sumX2+x[i]*x[i];
sumXY=sumXY+x[i]*y[i];
}
b=(n*sumXY-sumX*sumY)/(n*sumX2-sumX*sumX);
a=(sumY-b*sumX)/n;
printf("a=%f b=%f",a,b);
return 0;
}