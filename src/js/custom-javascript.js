window.addEventListener("load", (event) => {
    // try to override issues with bootstrap js
    let dropdownDropdownToggles = document.querySelectorAll('.dropdown-menu .menu-item-has-children');

    if(dropdownDropdownToggles) {
        console.log(dropdownDropdownToggles);
        dropdownDropdownToggles.forEach((i) => {
            i.addEventListener('click', decideActionForDopdown);
        })
    }

    function decideActionForDopdown(e) {
        e.preventDefault();
        let target = e.target;
        let windowWidth = window.innerWidth;
        console.log(e.target, windowWidth, e.target.tagName);
        if(windowWidth >= 1025) {
            if(e.target.tagName == 'A') {
                window.location = target.getAttribute('href');
            } else {
                let link = target.querySelector('> a');
                window.location = link.getAttribute('href');
            }
        } else {
            let childDropdown = target.querySelector('.dropdown-menu');
            let parentDropdown = target.parentElement;
            let parent = target.parentElement.parentElement;
            if(e.target.tagName == 'A') {
                parent = parent.parentElement;
                parentDropdown = target.parentElement.parentElement;
                console.log(target.parentElement, target);
                childDropdown = target.parentElement.querySelector('.dropdown-menu');
                if(childDropdown === null) {
                    window.location = target.getAttribute('href');
                }
            }
            // console.log(childDropdown, parent, parentDropdown);
            if(childDropdown.classList.contains('show')) {
                setTimeout(() => {
                    childDropdown.classList.remove('show');
                    parent.classList.add('show');
                    parentDropdown.classList.add('show');
                }, 1);
            } else {
                setTimeout(() => {
                    parent.classList.add('show');
                    childDropdown.classList.add('show');
                    parentDropdown.classList.add('show');
                }, 1);
            }
        }
    }
});