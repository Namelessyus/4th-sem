#include <stdio.h>

float f(float x, float y) {
    if (y == 0) {
        printf("Error: division by zero in f(x,y).\n");
        return 0;
    }
    return ((y*y) - (x*x))/((y*y) + (x*x));
}

int main() {
    int i = 0, n;
    float x0, y0, h, xn, yn;
    float m1, m2, m3, m4, m;

    printf("\nEnter the initial values: ");
    scanf("%f %f", &x0, &y0);

    printf("Enter the number of steps: ");
    scanf("%d", &n);

    printf("Enter the calculation point xn: ");
    scanf("%f", &xn);

    h = (xn - x0) / n;

    while (i < n) {
        m1 = f(x0, y0);

        m2 = f(x0 + h/2, y0 + m1*h/2);
        m3 = f(x0 + h/2, y0 + m2*h/2);
        m4 = f(x0 + h,   y0 + m3*h);

        m = (m1 + 2*m2 + 2*m3 + m4) / 6.0;
        yn = y0 + m*h;

        i++;
        x0 += h;
        y0 = yn;
    }

    printf("\nx = %.4f is y = %.6f\n", xn, yn);
    return 0;
}