/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function vermas(id) {
    if (id == "mas") {
        document.getElementById("desplegar").style.display = "block";
        document.getElementById("mas").style.display = "none";
    } else {
        document.getElementById("desplegar").style.display = "none";
        document.getElementById("mas").style.display = "inline";
    }
}