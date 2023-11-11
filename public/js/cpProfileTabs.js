let aboutTab = document.getElementById('aboutTab');
let aboutIcon = document.getElementById('aboutIcon');
let aboutText = document.getElementById('aboutText');
let aboutContect = document.getElementById('about-content');
let infoContect = document.getElementById('info-content');
let infoTab = document.getElementById('infoTab');
let infoIcon = document.getElementById('infoIcon');
let infoText = document.getElementById('infoText');


function openInfo(){
    if(aboutText.classList.contains('text-[#7868B6]')){
        aboutTab.classList.remove('border-b-2');
        aboutIcon.classList.remove('stroke-[#7868B6]');
        aboutText.classList.remove('text-[#7868B6]');
        infoIcon.classList.remove('stroke-gray-500');

        infoTab.classList.add('border-b-2');
        infoIcon.classList.add('stroke-[#7868B6]');
        aboutIcon.classList.add('stroke-gray-500');
        infoText.classList.add('text-[#7868B6]');

        aboutContect.classList.add('hidden');
        infoContect.classList.remove('hidden'); 

    }
}
function openAbout(){
    if(infoText.classList.contains('text-[#7868B6]')){
        infoTab.classList.remove('border-b-2');
        infoIcon.classList.remove('stroke-[#7868B6]');
        infoText.classList.remove('text-[#7868B6]');
        aboutIcon.classList.remove('stroke-gray-500');

        aboutTab.classList.add('border-b-2');
        aboutIcon.classList.add('stroke-[#7868B6]');
        infoIcon.classList.add('stroke-gray-500');
        aboutText.classList.add('text-[#7868B6]');

        aboutContect.classList.remove('hidden');
        infoContect.classList.add('hidden');
    }
}