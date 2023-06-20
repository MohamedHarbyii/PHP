#include <iostream>
#include <string>

std::string countSheep(int number) {
std::string sheeps="";
  for(short i=1;i<=number;i++){
    std::string n=std::to_string(i);
    sheeps+=n+" sheep...";
 }
return sheeps;
}
int main(){std::cout<<countSheep(5);}