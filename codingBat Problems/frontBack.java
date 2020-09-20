Given a string, return a new string where the first and last chars have been exchanged.

frontBack("code") → "eodc"
frontBack("a") → "a"
frontBack("ab") → "ba"

public String frontBack(String str) {
        
        int Lenght = str.length ();
        char FirstChar, LastChar, temp;
        String newString = "";
        
        if (Lenght >= 2)
        {
    	      char[] ch = str.toCharArray ();
    	      FirstChar = ch[0];
    	      LastChar = ch[Lenght - 1];
    
    	      ch[0] = LastChar;
    	      ch[Lenght - 1] = FirstChar;
    	      for (int i = 0; i <= Lenght-1; i++) { 
    	         newString = newString + ch[i];
    	      }  
      	   return newString;
        } 
        else
        {
	        return str;
        }
}
