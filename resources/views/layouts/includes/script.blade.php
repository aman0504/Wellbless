  <script>
        function setActive(e) {
            e.preventDefault();
            document.querySelectorAll('.sidebar-menu a').forEach(link => {
                link.classList.remove('active');
            });
            e.currentTarget.classList.add('active');

            const section = e.currentTarget.getAttribute('href').substring(1);
            document.querySelector('.header h1').textContent = section.charAt(0).toUpperCase() + section.slice(1);
        }

        function handleLogout() {
            if (confirm('Are you sure you want to logout?')) {
                alert('Logging out...');
            }
        }
    </script>
