 function esPalindromo(frase) {
    var min = frase.toLowerCase(); 
    var res = min.split(" ").join("");
    var iner = res.split('').reverse().join('');
    if (res == iner) {
        return  document.writeln("la frase: ", frase +"<br>es palindromo");
    } else {
        return  document.writeln("la frase: ", frase +"<br> no es palindromo");
    }
   
};
