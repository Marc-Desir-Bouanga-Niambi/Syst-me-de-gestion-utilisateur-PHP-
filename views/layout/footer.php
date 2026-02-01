</main> <footer>
        <hr>
        <p>&copy; <?php echo date('Y'); ?> - Mon Application PHP</p>
        <p>Session active pour : <strong><?= htmlspecialchars($_SESSION['email'] ?? 'Invité') ?></strong></p>
    </footer>

</body>
</html>