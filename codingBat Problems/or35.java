Return true if the given non-negative number is a multiple of 3 or a multiple of 5.

or35(3) → true
or35(10) → true
or35(8) → false

public boolean or35(int n) {
  boolean indicator = false;
  if ( (n % 3 == 0) || (n % 5 == 0) ) 
    indicator = true;
  return indicator;
}
