function Rubah(){
            var x = document.getElementById('password');
            if (x.type === "password"){
              x.type = "text";
            }
            else{
              x.type = "password";
            }
          }

function FormShow(){
            var x = document.getElementById('FoSo');
            if (x.style.display === "none"){
              x.style.display = "block";
            }
            else{
              x.style.display = "none";
            }
          }