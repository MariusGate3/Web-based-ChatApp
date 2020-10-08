public boolean love6(int a, int b) {
int sum = a + b;
if(sum == 6 || a-b == 6 || Math.abs(a-b) == 6 || a == 6 || b == 6)
  return true;
  else
  return false;

}
