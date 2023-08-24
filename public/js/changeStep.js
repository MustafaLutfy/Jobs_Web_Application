firstStep = document.querySelector('#step-one');
secondStep = document.querySelector('#step-two');
steps = document.querySelectorAll('.reg-step')
sideText = document.querySelector('#side-text');
nextBtn = document.querySelector('#next-btn');
submitBtn = document.querySelector('#submit-btn');
prevBtn = document.querySelector('#prev-btn');

nextBtn.addEventListener("click", next);
prevBtn.addEventListener("click", prev);

function next(){

    
    for (let index = 0; index < steps.length; index++) {
        if(index == 0 && steps[index].classList.contains('current')){
            prevBtn.classList.remove('hidden')
        }
         if (index == steps.length-2 && steps[index].classList.contains('current')) {
            nextBtn.classList.add('hidden')
            submitBtn.classList.remove('hidden')
            break;
        }
        
    } 

    for (let index = 0; index < steps.length; index++) {

        
         if (steps[index].classList.contains('current')) {
            steps[index].classList.add('hidden')
            steps[index].classList.remove('current')
            steps[index+1].classList.remove('hidden')  
            steps[index+1].classList.add('current')
            break;
        }
    } 

}

function prev(){

    
    for (let index = 0; index < steps.length; index++) {
        if(index == 1 && steps[index].classList.contains('current'))
        {
            prevBtn.classList.add('hidden')
        }
        if (index < steps.length && steps[index].classList.contains('current')) {
            submitBtn.classList.add('hidden')
            nextBtn.classList.remove('hidden')
        }
    
         if (steps[index].classList.contains('current')) {
            steps[index].classList.add('hidden')
            steps[index].classList.remove('current')
            steps[index-1].classList.remove('hidden')  
            steps[index-1].classList.add('current')
            break;
        }
    }

}


