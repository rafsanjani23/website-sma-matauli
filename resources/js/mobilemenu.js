   // ========== MOBILE MENU - FIXED VERSION ==========
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuBackdrop = document.getElementById('menuBackdrop');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        function openMenu() {
            mobileMenu.classList.add('active');
            menuBackdrop.classList.add('active');
            document.body.classList.add('menu-open');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }

        function closeMenuFunc() {
            mobileMenu.classList.remove('active');
            menuBackdrop.classList.remove('active');
            document.body.classList.remove('menu-open');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }

        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                if (mobileMenu.classList.contains('active')) {
                    closeMenuFunc();
                } else {
                    openMenu();
                }
            });
        }

        if (closeMenu) {
            closeMenu.addEventListener('click', closeMenuFunc);
        }

        if (menuBackdrop) {
            menuBackdrop.addEventListener('click', closeMenuFunc);
        }

        // Mobile Dropdown
        document.querySelectorAll('.mobile-dropdown-trigger').forEach(trigger => {
            trigger.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const arrow = this.querySelector('.dropdown-arrow');
                const isOpen = content.classList.contains('open');

                // Close all
                document.querySelectorAll('.mobile-dropdown-content').forEach(el => el.classList.remove(
                    'open'));
                document.querySelectorAll('.dropdown-arrow').forEach(el => el.classList.remove(
                    'rotate-180'));

                // Toggle current
                if (!isOpen) {
                    content.classList.add('open');
                    arrow.classList.add('rotate-180');
                }
            });
        });

        // Close menu on link click
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', closeMenuFunc);
        });

        // Close on resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                closeMenuFunc();
            }
        });
