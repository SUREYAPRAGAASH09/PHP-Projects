Given a non-empty string and an int n, return a new string where the char at index n has been removed. The value of n will be a valid index of a char in the original string (i.e. n will be in the range 0..str.length()-1 inclusive).

missingChar("kitten", 1) → "ktten"
missingChar("kitten", 0) → "itten"
missingChar("kitten", 4) → "kittn"

public String missingChar(String str, int n) {
    int strlenght = str.length()-1;
    String newString = "";
		if ( (n>=0) && (strlenght >= n))
		{
		        char[] ch = str.toCharArray();
            ch[n] = ' ';
            for (int i = 0;i<= strlenght;i++)
            {
                if (i != n)
                    newString = newString + ch[i];
            }
		}
		return newString;
}
