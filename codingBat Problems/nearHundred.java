Given an int n, return true if it is within 10 of 100 or 200. Note: Math.abs(num) computes the absolute value of a number.

nearHundred(93) → true
nearHundred(90) → true
nearHundred(89) → false


public boolean nearHundred(int n) {
  //n = Math.abs(n);
  if ( (  (10 >= Math.abs(100 - n))) || ( (10 >= Math.abs(200 - n))))
  {
    return true;
  }
  else
  {
    return false;  
  }
  
}
