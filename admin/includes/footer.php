</main>
</div>
</div>
<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    <?php
    if (isset($_SESSION['message'])) {
    ?>
        Toastify({
            text: '<?= $_SESSION['message']; ?>',
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true,
            style: {
                background: "#28A745",
            },
        }).showToast();
    <?php
        unset($_SESSION['message']);
    }
    ?>
</script>
</body>

</html>