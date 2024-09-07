// const rangeInput = document.querySelectorAll(".range-input input");
// progress = document.querySelector(".slider .progress");

// rangeInput.forEach(input =>{
//     input.addEventListener("input",() =>{
//         let minVal = parseInt(rangeInput[0].value),
//         maxVal = parseInt(rangeInput[1].value)

//         progress.style.left=(minVal/ rangeInput[0].max)*100 + "%";

//         progress.style.right=100 - (maxVal/ rangeInput[1].max)*100 + "%";
//     });
// });

// alert("the javascript is loaded");

function showSidebar() {
  const sidebar = document.querySelector(".sidebar");
  sidebar.style.display = "flex";
}

function hideSidebar() {
  const sidebar = document.querySelector(".sidebar");
  sidebar.style.display = "none";
}

function cart(){
  let cart = document.querySelector(".cart");
  cart.style.display = "flex";
};


function closeCart(){
  let cart = document.querySelector(".cart");
  cart.style.display = "none";
};

function search(){
  let cart = document.querySelector(".search");
  cart.style.display = "flex";
};

function search(){
  let cart = document.querySelector(".search");
  cart.style.display = "none";
};

let toastBox = document.getElementById('toastBox');
let successMsg = '<i class="fa-solid fa-circle-check"></i> Added to Cart';

function showToast(msg){

  let toast = document.createElement("div");
  toast.classList.add('toast');
  toast.innerHTML = msg;
  toastBox.appendChild(toast);

  setTimeout(() =>{
    toast.remove();
  },4000);
}

function openPopup(){
  let popup = document.getElementById("popup");
  popup.classList.add("open-popup");
}

function closePopup(){
  popup.classList.remove("open-popup");
}