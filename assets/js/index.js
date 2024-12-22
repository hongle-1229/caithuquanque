

window.addEventListener('scroll', function(){
    const element = document.getElementsByClassName('container-header');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 100){
        element.classList.add('scrolled');
    }
    else{
        element.classList.remove('scrolled');
    }
})


 // Hiệu ứng xuất hiện div khi cuộn trang
 const fadeIns = document.querySelectorAll('.fade-in');
 const options = {
     threshold: 0.2 
 };
 
 const observer = new IntersectionObserver((entries) => {
     entries.forEach(entry => {
         if (entry.isIntersecting) {
             entry.target.classList.add('visible');
             // Không gọi unobserve để cho phép tiếp tục theo dõi
         } else {
             // Nếu phần tử không còn trong tầm nhìn, xóa lớp 'visible'
             entry.target.classList.remove('visible');
         }
     });
 }, options);
 
 fadeIns.forEach(element => {
     observer.observe(element); // Theo dõi mỗi phần tử
 });
 