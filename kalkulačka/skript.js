function cislo(num)
{

    if(num == 11)
    {
        document.getElementById("display").innerHTML = "";
    }
    else
    {   
        if(num == -11)
        {
            document.getElementById("display").innerHTML = x;
        }
        else
        {
                x = document.getElementById("display").innerHTML;

        
                x = x * 10;
                x = x + num;
        
                document.getElementById("display").innerHTML = document.getElementById("display").innerHTML + num ;
        }
        
    }

}

function odeslat()
{
    let data = document.getElementById("cis").innerHTML;
    
    if(data.trim().length == 0)
        return;
    
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