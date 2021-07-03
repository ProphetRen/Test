  "use strict"
  
  let buyButton1 = document.getElementById("buy_btn_1");
  let buyButton2 = document.getElementById("buy_btn_2");
  let buyButton3 = document.getElementById("buy_btn_3");
  let buyButton4 = document.getElementById("buy_btn_4");
  let formButton = document.getElementById("form_btn");
  let formButton2 = document.getElementById("form_btn2");
  let form = document.getElementById("form")
  let modal = document.getElementById("modal");


  buyButton1.onclick = function(){
    modal.style.display = "flex";
    modal.style.left = -600+'px';
  }
  
  buyButton2.onclick = function(){
    modal.style.display = "flex";
    modal.style.left = -200+'px';
  }
  
  buyButton3.onclick = function(){
    modal.style.display = "flex";
    modal.style.left = 200+'px';
  }
  
  buyButton4.onclick = function(){
    modal.style.display = "flex";
    modal.style.left = 650+'px';
  }
  
  formButton.onclick = async function(){
    let formData = new FormData(form);
    let response = await fetch('sendmail.php',{
      method:'POST',
      body:formData,
    });
    modal.style.display = "none";
    

    if(response.ok){
      let result = await response.json();
      alert(result.message);
      form.reset();
    }else{
      console.log('Ошибка')
    }
  }
  

  formButton2.onclick = function(){
    modal.style.display="none";
  }



