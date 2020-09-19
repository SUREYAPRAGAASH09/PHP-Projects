Given 2 int values, return true if one is negative and one is positive. Except if the parameter "negative" is true, then return true only if both are negative.

posNeg(1, -1, false) → true
posNeg(-1, 1, false) → true
posNeg(-4, -5, true) → true

public boolean posNeg(int a, int b, boolean negative) {
  int temp = 0;
    if(((a<0) && (b>0)) || ((a>0) && (b<0)) )
    {
        temp = 1;
    }
    
    if ( (b>0)   &&  (a>0)  )
    {
      negative = false;
    }

    if ( (  (temp == 0) &&  (negative) )   ||   (  (temp == 1) &&  !(negative) ) )
    {
        return true;
    }
    else
    {
      return false;
    } 
}
