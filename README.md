alphapadding_permutation
========================

Remix of the permutation ciphers' design for better security
I try to solve the issue of frequency analysis and brute force attacks by joining padding and the alphabet matching (I called it the alpha-padding)
Alpha-padding: During the permutation, the permuted letters are to their position in the alphabet which at its turn padded. At the end, each block gives a sequence of number which is substracted.
At the end, I substract a variable that I call the sub_padding parameter (cumulative sequence of the padding parameter after a finite round) from the result. 
