function cislo(num)
{
    if(num == -20)
    {
        document.getElementById("display3").innerHTML = document.getElementById("display").innerHTML;
        document.getElementById("display2").innerHTML = "+";
        document.getElementById("display").innerHTML = "";
    }
    else
    {
        if(num == -23)
        {
            document.getElementById("display3").innerHTML = document.getElementById("display").innerHTML;
            document.getElementById("display2").innerHTML = "-";
            document.getElementById("display").innerHTML = "";
        }
        else
        {
            if(num == -24)
            {
                document.getElementById("display3").innerHTML = document.getElementById("display").innerHTML;
                document.getElementById("display2").innerHTML = "*";
                document.getElementById("display").innerHTML = "";
            }
            else
            {
                if(num == -25)
                {
                    document.getElementById("display3").innerHTML = document.getElementById("display").innerHTML;
                    document.getElementById("display2").innerHTML = "/";
                    document.getElementById("display").innerHTML = "";
                }
                else
                {
                    if(num == -21)
                    {
                        document.getElementById("display").innerHTML = "";
                        document.getElementById("display2").innerHTML = "";
                        document.getElementById("display3").innerHTML = "";
                    }
                    else
                    {   
                        if(num == -26)
                        {
                           var c = document.getElementById("display").innerHTML;
                           c = c / 10;
                           c = parseInt(c)

                           document.getElementById("display").innerHTML = c;
                           
                        }
                        else
                        {
                                if(num == - 27)
                                {
                                    document.getElementById("display").innerHTML = "";
                                }
                                else
                                {
                                    if(num == -22)
                                    {
                
                                        if(document.getElementById("display2").innerHTML == "+")
                                        {
                                            var x = document.getElementById("display3").innerHTML;
                                            x = x * 1;
                                            
                                            var y = document.getElementById("display").innerHTML;
                                            y = y * 1;
                        
                                            var z = x + y;
                        
                                            document.getElementById("display").innerHTML = z;
                        
                                            document.getElementById("display3").innerHTML = "";
                                            document.getElementById("display2").innerHTML = "";
                        
                                        }
                                        else
                                        {
                
                                        }
                        
                                        if(document.getElementById("display2").innerHTML == "-")
                                        {
                                            var x = document.getElementById("display3").innerHTML;
                                            x = x * 1;
                                            
                                            var y = document.getElementById("display").innerHTML;
                                            y = y * 1;
                        
                                            var z = x - y;
                        
                                            document.getElementById("display").innerHTML = z;
                        
                                            document.getElementById("display3").innerHTML = "";
                                            document.getElementById("display2").innerHTML = "";
                        
                                        }
                        
                                        if(document.getElementById("display2").innerHTML == "*")
                                        {
                                            var x = document.getElementById("display3").innerHTML;
                                            x = x * 1;
                                            
                                            var y = document.getElementById("display").innerHTML;
                                            y = y * 1;
                        
                                            var z = x * y;
                        
                                            document.getElementById("display").innerHTML = z;
                        
                                            document.getElementById("display3").innerHTML = "";
                                            document.getElementById("display2").innerHTML = "";
                        
                                        }
                                        else
                                        {
                        
                                        }
                        
                                        if(document.getElementById("display2").innerHTML == "/")
                                        {
                                            var x = document.getElementById("display3").innerHTML;
                                            x = x * 1;
                                            
                                            var y = document.getElementById("display").innerHTML;
                                            y = y * 1;
                        
                                            var z = x / y;
                        
                                            document.getElementById("display").innerHTML = z;
                        
                                            document.getElementById("display3").innerHTML = "";
                                            document.getElementById("display2").innerHTML = "";
                        
                                        }
                                        else
                                        {
                                            
                                        }
                                    }
                                    else
                                    {
                                            x = document.getElementById("display").innerHTML;
                            
                                    
                                            x = x * 10;
                                            x = x + num;
                                    
                                            document.getElementById("display").innerHTML = x ;
                                    }
                                }
                                
                            
                            
                        }
                    }
                    
                }
            }
            
            
        }

        
    }

}

function odeslat()
{
    let data = document.getElementById("cis").innerHTML;
    
    // AJAX
    let xhr = new XMLHttpRequest();
    
    // xhr.open("GET", "ajax.php?data=" + data, true);
    xhr.open("POST", "odeslat.php", true);
    
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)
        {
            // dotaz byl serverem zpracovan
            //  a odpoved serveru je pripravena
            let odpoved = this.responseText;
            
            document.getElementById("vystup").innerHTML = odpoved;
        }
    };
    
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("data=" + data);
    
    document.getElementById("vstup").value = "";
}