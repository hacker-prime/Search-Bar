  input_box=document.getElementById("identify-text")
  output=document.getElementById("output")
  close_btn=document.getElementById("close")
  form=document.getElementById("search-form")
  form.addEventListener("submit",notsubmit)
  function notsubmit(e)
  {
  e.preventDefault();
  }
  close_btn.onclick=function()
  {
   input_box.value=''
   output.innerHTML=""
   output.style.display="none"
  }
  input_box.addEventListener("keydown",(e)=>
  {
   output.style.display="block"
  output.innerHTML=`<div class='progress'><div class='indeterminate'></div></div>`
  q=e.target.value
  const xhr=new XMLHttpRequest();
  xhr.open("GET","product-search.php?q="+q,true)
  xhr.onload=function()
  {
   if(xhr.status==200)
   {
  output.innerHTML=''
  output.innerHTML=xhr.responseText
   }
   else{
       alert("Something went wrong.")
   }
  }
  if(q.length>=2)
  {
   xhr.send();
  }
  if(q.length==0)
  {
   output.innerHTML=""
   output.style.display="none"
  }
  }
                          )
  // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  