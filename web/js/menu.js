
    const foodButton = document.getElementById('foodButton');
    const drinksButton = document.getElementById('drinksButton');
    const foodContent = document.querySelector('.food');
    const drinksContent = document.querySelector('.drinks');
    const sideFoodMenu = document.querySelector('.sidefood');
    const sideDrinkMenu = document.querySelector('.sidedrink');
    let mybutton = document.getElementById("myBtn");
    const navbar = document.querySelector('.btn');
        const boot = document.querySelector('.btn4');
       

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 10;
        document.documentElement.scrollTop = 0;
    }

    
   
    foodButton.addEventListener('click', () => {
        foodContent.classList.add('active');
        drinksContent.classList.remove('active');
        sideFoodMenu.style.display = "block";
        sideDrinkMenu.style.display = "none";
    });

    // Event listener for the drinks button
    drinksButton.addEventListener('click', () => {
        drinksContent.classList.add('active');
        foodContent.classList.remove('active');
        sideFoodMenu.style.display = "none";
        sideDrinkMenu.style.display = "block";
    });

    openNav.classList.add('active');
    function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
   


    }

    function closeNav() {
        // Check the screen width
        if (window.innerWidth < 700) {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "white";
        }
    }




    var x = window.matchMedia("(min-width: 500px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes

    function shrinkNavbar() {
            navbar.classList.add('shrunk');
            navbar.removeEventListener('click', shrinkNavbar);
            boot.classList.add('shrink1');
        }

        navbar.addEventListener('click', shrinkNavbar);
    
