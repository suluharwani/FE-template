<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all dropdown triggers
        const dropdownTriggers = document.querySelectorAll('.has-children');
        const dropdowns = document.querySelectorAll('.mega-menu-dropdown');

        // Close all dropdowns except the current one
        function closeAllDropdowns(exceptThis) {
            dropdownTriggers.forEach(trigger => {
                if (trigger !== exceptThis) {
                    trigger.classList.remove('active');
                    trigger.querySelector('.menu-link').classList.remove('active');
                }
            });
        }

        // Toggle dropdown on click
        dropdownTriggers.forEach(trigger => {
            const link = trigger.querySelector('.menu-link');
            const dropdown = trigger.querySelector('.mega-menu-dropdown');

            // Click handler for dropdown trigger
            link.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                // Close all other dropdowns first
                closeAllDropdowns(trigger);

                // Toggle current dropdown
                trigger.classList.toggle('active');
                link.classList.toggle('active');
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function () {
            closeAllDropdowns(null);
        });

        // Prevent dropdown from closing when clicking inside it
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        });
    });
</script>

<!-- Floating Chat Widget -->
<div id="chat-container">
    <div id="chat-widget">
        <div id="chat-header">
            <h6>Startout AI Support</h6>
        </div>
        <div id="chat-body">
            <div id="chat-messages">
                <div class="chat-message bot-message">
                    <div class="message-content">
                        Hello! How can we help you today?
                    </div>
                    <div class="message-time">Just now</div>
                </div>
            </div>
            <div id="chat-input-area">
                <input type="text" id="chat-input" placeholder="Type your message...">
                <button id="chat-send"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <div id="chat-toggle">
        <i class="fas fa-comment-dots"></i>
    </div>
</div>
</body>
</html>