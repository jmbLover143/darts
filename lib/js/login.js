/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validate(){
    var password = document.getElementById("password").value;
    
    if(password == "" || password == null){
        alert("Please enter password.");       
        return false;
    } 
}
