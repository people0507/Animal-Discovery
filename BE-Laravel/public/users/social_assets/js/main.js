// SIDEBAR
const menuItems = document.querySelectorAll('.menu-item');

// MESAGES
const messagesNotification = document.querySelector('#message-notification');
const messages = document.querySelector('.messages');

// THEME
const theme = document.querySelector('#theme');
const themeModal = document.querySelector('.customize-theme');
const fontSize = document.querySelectorAll('.choose-size span');
var root = document.querySelector(':root');
const colorPalette = document.querySelectorAll('.choose-color span');
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');
const Bg3 = document.querySelector('.bg-3');


// ================= SIDEBAR ==================
// remove active class from all menu items
const chageActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active')
    })
}

// menuItems.forEach(item => {
//     item.addEventListener('click', () => {
//         chageActiveItem();
//         item.classList.add('active');
//         console.log(menuItems);
//         if(item.id != 'notification') {
//             document.querySelector('.notification-popup').style.display = 'none';
//         } else {
//             document.querySelector('.notification-popup').style.display = 'block';
//             document.querySelector('#notification .notification-count').style.display = 'none';
//         }
//     })
// })


// ================= THEME/DISPLAY CUSTOMIZATION ==================

// Open Modal
const openThemeModal = () => {
    themeModal.style.display = 'grid';
}

// Close Modal
const closeThemeModal = (e) => {
    if(e.target.classList.contains('customize-theme')){
        themeModal.style.display = 'none';
    }
}

themeModal.addEventListener('click', closeThemeModal)
theme.addEventListener('click', openThemeModal)


// ================= FONTS SIZE ==================
// remove active class from spans or font size selectors
const removeSizeSelector = () => {
    fontSize.forEach(size => {
        size.classList.remove('active');
    })
}
// Change font
fontSize.forEach(size => {

    size.addEventListener('click', () => {
        let fontSize;
        removeSizeSelector();
        size.classList.toggle('active');

        if(size.classList.contains('font-size-1')) {
            fontSize = '0.8rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '5.4rem');
        } else if(size.classList.contains('font-size-2')) {
            fontSize = '1rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-7rem');
        } else if(size.classList.contains('font-size-3')) {
            fontSize = '1.15rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-17rem');
        } else if(size.classList.contains('font-size-4')) {
            fontSize = '1.25rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-25rem');
        } else if(size.classList.contains('font-size-5')) {
            fontSize = '1.35rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-33rem');
        }
        // change font size ò the root html element
        document.querySelector('html').style.fontSize = fontSize;
    })
})


// ================= COLORS PRIMARY ==================

// remove active class from colors
const changeActiveColorClass = () => {
    colorPalette.forEach(colorPicker => {
        colorPicker.classList.remove('active');
    })
}
// change primary colors
colorPalette.forEach(color => {
    color.addEventListener('click', () => {
        let primaryHue;
        changeActiveColorClass();
        color.classList.add('active');

        if(color.classList.contains('color-1')) {
            primaryHue = 252;
        } else if(color.classList.contains('color-2')) {
            primaryHue = 52;
        } else if(color.classList.contains('color-3')) {
            primaryHue = 352;
        } else if(color.classList.contains('color-4')) {
            primaryHue = 152;
        } else if(color.classList.contains('color-5')) {
            primaryHue = 202;
        }

        root.style.setProperty('--color-primary-hue', primaryHue);
    })
})

// ================= BACKGROUND COLORS ==================

// Theme BACKGROUND values
let lightColorLightness;
let whiteColorLightness;
let darkColorLightness;

// changes background color
const changeBG = () => {
    root.style.setProperty('--dark-color-lightness', darkColorLightness)
    root.style.setProperty('--light-color-lightness', lightColorLightness)
    root.style.setProperty('--white-color-lightness', whiteColorLightness)
}

Bg1.addEventListener('click', () => {
    // add active class
    Bg1.classList.add('active');
    // remove active class
    Bg2.classList.remove('active');
    Bg3.classList.remove('active');
    window.location.reload();
})
Bg2.addEventListener('click', () => {
    darkColorLightness = '95%';
    lightColorLightness = '15%';
    whiteColorLightness = '20%';

    // add active class
    Bg2.classList.add('active');
    // remove active class
    Bg1.classList.remove('active');
    Bg3.classList.remove('active');
    changeBG();
})

Bg3.addEventListener('click', () => {
    darkColorLightness = '95%';
    lightColorLightness = '0%';
    whiteColorLightness = '10%';

    // add active class
    Bg3.classList.add('active');
    // remove active class
    Bg1.classList.remove('active');
    Bg2.classList.remove('active');
    changeBG();
})

// END

// LIKE


function addLikes(){
    likesCount++
    count.innerHTML = likesCount
}


