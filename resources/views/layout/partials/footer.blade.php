<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dateElement = document.getElementById('date')
        const date = new Date()

        dateElement.innerHTML = date.getFullYear()
    })
</script>

<div class="footer">
    <p><span id="date"></span> &copy; Example Blog</p>
</div>