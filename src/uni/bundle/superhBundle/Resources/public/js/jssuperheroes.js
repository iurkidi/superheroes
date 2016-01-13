/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    
    function submitform(obj) {
        var s=document.forms["selectCats"].nombre;
        document.forms["selectCats"].nomOculto.value=s.options[s.selectedIndex].text;
        document.forms["selectCats"].submit();
    }       

