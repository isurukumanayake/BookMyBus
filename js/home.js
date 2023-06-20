const navbarSlide = () => {
    const dropdown = document.querySelector('.dropdown');
    const navbar = document.querySelector('.nav-bar');
    const navList = document.querySelectorAll('.nav-bar li');
    
    dropdown.addEventListener('click', () => {
        //dropdown toggle
        navbar.classList.toggle('nav-show');

        //navLinks Animation
        navList.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = '';
            }
            else{
                link.style.animation = `navbarAppear 0.5s ease forwards ${index / 6 }s`;   
            }
            
        });
        //dropdowm icon animation
        dropdown.classList.toggle('toggle');
    });
    
}
navbarSlide();

//Auto slides

var count = 1;
setInterval(function(){
    document.getElementById('radio' + count).checked = true;
    count++;
    if(count>4){
        count = 1;
    }
}, 4500);

//FAQ

var answers = document.getElementsByClassName('question-bar');
var len_answers = answers.length;
var i;
for(i = 0; i < len_answers; i++){  
    answers[i].addEventListener('click', function(){
        this.classList.toggle('active');
        var bar = this.nextElementSibling;
        if(bar.style.maxHeight){
            bar.style.maxHeight = null;
        }
        else{
            bar.style.maxHeight = bar.scrollHeight + 'px';
        }
    })
}





