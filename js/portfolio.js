

     ////===========opennewpage on click===========
     function newopenpage(){
        location.href="contact.php";
     }
     function newpage(){
      location.href="contact.php";
   }
   function opennewpage(){
    location.href="contact.php";
 }
 function openpage(){
  location.href="contact.php";
}
   ////==========================================

   // ------auto typing text----------------
   let texts = ["Software Engineer..","Software Developer..","Programmer..","Web Developer.."];
   let i=0;
    function updateText(){
        document.getElementById("typing").innerText = texts[i];
        i++;
        if(i>texts.length-1){
            i=0;
        }
    }
    setInterval(updateText, 2000); 

     // ------auto typing text----------------
// -----------------progrees bar--------------
     const progresses = [0,0,0,0];
const progressBars = [
    document.getElementById('inner-range1'),
    document.getElementById('inner-range2'),
    document.getElementById('inner-range3'),
    document.getElementById('inner-range4'),
];
const speeds = [50, 60, 70, 90];
function updateProgress(index) {
    if (progresses[index] <90) {
        progresses[index] += 1; 
        progressBars[index].style.width = progresses[index] + "%"; 
    }
}
speeds.forEach((speed, index) => {
    setInterval(() => updateProgress(index), speed);
});
  // -----------------progrees bar---------------



  //Extra navbar show and hide code here---------------------
  document.querySelector("#humburger_icon").addEventListener("click", () => {
    
    let navId = document.querySelector("#ex_nav");
    if(navId.style.display === 'block'){
        navId.style.display = 'none';
  }else{
    navId.style.display = 'block';
  }
  })
  //--------------------------------------------------------

  //===============onclick function of my work section==========
   document.querySelector('#calcu').addEventListener("click",()=>{
    window.open("calculater.php","target=_blank");
   });
   //------------------------------------
   document.querySelector("#todo").addEventListener('click',()=>{
    window.open("todo.php","target=_blank");
   });
   //----------------------------------------------------
   document.querySelector("#investa").addEventListener("click",()=>{
     window.open("investa.php","target=_blank");
    
   });

   //===============onclick function of my work section==========

   //===============pdf cv=====================
   document.querySelector(".cv").addEventListener("click",()=>{
    let pdfurl="http://127.0.0.1:5500/file:///C:/Users/Dell/Downloads/rajneesh%20resume%202.0.pdf";
    window.open(pdfurl,"target=_blank");
   });
   //=========================================
   //===========review slider===================
   const sliderContainer = document.querySelector('.slider-container');
   const slides = document.querySelectorAll('.slide');
   const totalSlides = slides.length;

   let currentSlide = totalSlides-1;

   function showNextSlide() {
       currentSlide = (currentSlide + 1) % totalSlides;
       sliderContainer.style.transform =`translateX(-${currentSlide * 100}%)`;
   }

   // Automatically change slides every 5 seconds
   setInterval(showNextSlide, 1000);
   //-------------------------------------------

