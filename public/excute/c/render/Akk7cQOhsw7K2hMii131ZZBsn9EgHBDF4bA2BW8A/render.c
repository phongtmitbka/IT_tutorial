#include <iostream>
using namespace std;
 
// khai bao ham
int max(int so1, int so2);
 
int main ()
{
   // Khai bao bien cuc bo:
   int a = 100;
   int b = 200;
   int ketqua;
 
   // goi ham de tim gia tri lon nhat.
   ketqua = max(a, b);
 
   cout << "Gia tri lon nhat la: " << ketqua << endl;
 
   return 0;
}
 
// ham tra ve so lon nhat cua hai so
int max(int so1, int so2) 
{
   // Khai bao bien cuc bo
   int result;
 
   if (so1 > so2)
      result = so1;
   else
      result = so2;
 
   return result; 
}